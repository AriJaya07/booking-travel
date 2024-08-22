<?php
namespace App\Controllers\paypal;

use App\Libraries\Tools;
use App\Libraries\Mail;

use App\Controllers\BaseController;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

use App\Models\transactions\TransactionsModel;
use App\Models\transactions\TransactionsDetailModel;
use App\Models\transactions\PaymentModel;

class PaypalOrder extends BaseController {

    protected $helpers = ['url'];

    public function paymentFailed() {
        return view('landing-page/cart/paypal-failed');
    }

    public function createOrder()
    {

        $jsonOrder = $this->request->getVar("order");
        $order = json_decode($jsonOrder, true);

        $M_trx = new TransactionsModel();
        $M_trxdetail = new TransactionsDetailModel();
        $M_payment = new PaymentModel();
        $tools = new Tools();
        $tmail = new Mail();
        
        $totalPrice = floatval($order['totalPrice']);
        $currencyRate = floatval($order['currencyRate']);

        $amountUSD = $totalPrice;

        if($order['currency'] == 'IDR') {
            // Calculate the amount in USD
            $amountUSD = $totalPrice / $currencyRate;
        }
        
        // Round the amount to 2 decimal places
        $amountUSD = ''.round($amountUSD, 2);
        
        $count = $M_trx->count('MONTH(trx_date) = "'.date('m').'"');
        $code = $tools->generateCode('BK', ($count+1));

        ## Data to be inserted
        $data = [
            'trx_date' => date("Y-m-d H:i:s"),
            'trx_num' => $code,
            'fullname' => $order['name'],
            'email' => $order['email'],
            'country' => $order['country'],
            'phone' => $order['phone'],
            'currency' => $order['currency'],
            'rate' => $order['currencyRate'],
            'total' => $order['totalPrice'],
            'status' => 'pending',
            "reg_date" => date("Y-m-d H:i:s"),
            "last_update" => date("Y-m-d H:i:s"),
        ];

        // Insert the data and get the last inserted ID
        $lastInsertedID = $M_trx->insertData($data);
        
        if($lastInsertedID>0) {
            $carts = $order['cart'];

            for($i=0; $i<count($carts);$i++) {
                $data2 = [
                    'trx_id' => $lastInsertedID,
                    'options_id' => $carts[$i]['productId'],
                    'options_name' => $carts[$i]['title'],
                    'img_path' => $carts[$i]['image'],
                    'pax' => $carts[$i]['count'],
                    'activity_date' => $carts[$i]['date'],
                    'timeslot_id' => $carts[$i]['timeslotId'],
                    'timeslot' => $carts[$i]['clock'],
                    'subtotal' => ($carts[$i]['price']/$carts[$i]['count']),
                    'total' => $carts[$i]['price'],
                    'note' => $carts[$i]['request'],
                ];

                $M_trxdetail->insertData($data2);
            }
        }

        ##

        $clientId = env('CLIENT_ID_PAYPAL');
        $clientSecret = env('CLIENT_SECRET_PAYPAL');

        $url = env('URL_PAYPAL')."checkout/orders";

        $payload = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "amount" => [
                    "currency_code" => "USD",
                    "value" => $amountUSD
                ]
            ]],
            "application_context" => [
                "cancel_url" => base_url('paypal/cancel'),
                "return_url" => base_url('paypal/success'),
            ]
        ];
        
        
// var_dump('after : '.$amountUSD);
        
//         var_dump($payload);die;
        
        $encodedPayload = json_encode($payload);
        if ($encodedPayload === false) {
            // Handle JSON encoding error
            echo "JSON encoding error: " . json_last_error_msg();
            exit;
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $encodedPayload);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Basic " . base64_encode("$clientId:$clientSecret")
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $M_trx->updateData($lastInsertedID, ['status' => 'failed']);
            
            return redirect()->back()->with('error', 'cURL Error: ' . $err);
        } else {
            $responseArray = json_decode($response, true);
                // var_dump($amountUSD);
                // var_dump($responseArray);die;
            // Redirect to PayPal for user approval
            foreach ($responseArray['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    $dataPayment = [
                        'trx_id' => $lastInsertedID,
                        'order_id' => $responseArray['id'],
                        'type' => 'payment',
                        'method' => 'paypal',
                        'currency' => 'USD',
                        'amount' => $amountUSD,
                        'status' => 'waiting payment',
                        'link' => $link['href'],
                        "reg_date" => date("Y-m-d H:i:s"),
                        "last_update" => date("Y-m-d H:i:s"),
                    ];

                    $pay = $M_payment->insertData($dataPayment);

                    $mailData = [
                        'title' => 'Order Confirmed',
                        'to' => $order['email'],
                        'subject' => 'Last step to enjoy your activity',
                        'url_template' => 'landing-page/@common/mail_payment_template',
                        'template_data' => [
                            'order_code' => $code,
                            'amount' => $amountUSD,
                            'link' => $link['href']
                        ]
                    ];
                    $tmail->send($mailData);
                    
                    $response = array('link' => $link['href']);
                    return $this->response->setJSON($response);
                }
            }
            return redirect()->back()->with('error', 'Unexpected error');
        }
    }

    public function captureOrder()
    {
        $clientId = env('CLIENT_ID_PAYPAL');
        $clientSecret = env('CLIENT_SECRET_PAYPAL');

        $orderId = $this->request->getVar('token');
        $payerID = $this->request->getVar('PayerID');
        
        $url = env('URL_PAYPAL')."checkout/orders/$orderId/capture";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Basic " . base64_encode("$clientId:$clientSecret")
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responseArray = json_decode($response, true);
            // Handle post-capture logic (e.g., update order status, notify user)
            if(isset($responseArray['purchase_units'])) {
                $paypalData = [];
                foreach ($responseArray['purchase_units'] as $units) {
                    foreach($units['payments']['captures'] as $captures) {
                        if($captures['status'] == 'COMPLETED') {
                            $paypalData = $captures;
    
                            
                            $M_trx = new TransactionsModel();
                            $M_trxdetail = new TransactionsDetailModel();
                            $M_payment = new PaymentModel();
                            $data = [
                                'captures_id' => $captures['id'],
                                'payment_amount' => $captures['amount']['value'],
                                'payment_date' => date("Y-m-d H:i:s"),
                                'last_update' => date("Y-m-d H:i:s"),
                                'status' => $captures['status'],
                                'response_detail' => json_encode($responseArray)
                            ];
    
                            $result = $M_payment->updateByOrderId($orderId, $data);

                            if($result) {
                                $payments = $M_payment->getByColumn('order_id', $orderId);
                
                                $trxData = [];
                                foreach($payments as $pay) {
                                    ## update status transction
                                    $data = [
                                        'status' => 'success'
                                    ];
                                    $M_trx->updateData($pay['trx_id'], $data);

                                    $trxData = $M_trx->find($pay['trx_id']);
                                    $trxData['detail'] = $M_trxdetail->getByColumn('trx_id', $pay['trx_id']);
                                    $trxData['payment_method'] = $pay['method'];
                                    $trxData['payment_currency'] = $pay['currency'];
                                    $trxData['amount'] = $pay['payment_amount'];
                                }
                                // $template_data = $trxData;
                
                                // return view('landing-page/@common/mail_template', compact('template_data'));
                
                                $tmail = new Mail();
                                $mailData = [
                                    'title' => 'Order is success',
                                    'to' => $trxData['email'],
                                    'subject' => 'Order collected. Enjoy your activity.',
                                    'url_template' => 'landing-page/@common/mail_template',
                                    'template_data' => $trxData
                                ];
                                $tmail->send($mailData);
                            }
                        }
                    }
                }

                $result = [
                    'data' => $responseArray,
                    'messages' => 'Your payment is success. Thank you',
                    'status' => 'success'
                ];

                return view('landing-page/cart/paypal-success', compact('result'));
            } else {
                $result = [
                    'data' => [],
                    'messages' => 'Transactions is done',
                    'status' => 'success'
                ];

                return view('landing-page/cart/paypal-success', compact('result'));
            }
            
        }
    }
}