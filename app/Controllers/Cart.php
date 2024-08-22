<?php

namespace App\Controllers;


use CodeIgniter\Email\Email;

class Cart extends BaseController
{
	public function index()
	{
		// Load the helper and view within the controller
		helper('url');
		return view("landing-page/cart/cart");
	}

	public function generateCart()
	{
		$items = [
			[
				'id' => 1,
				'orderId' => '#2443',
				'count' => '1 Adult',
				'from' => 'Sanur(Denpasar)',
				'village' => 'Banjar Nyuh',
				'to' => 'Nusa Penida',
				'date' => 'December 26, 2023',
				'image' => 'https://penidago.com/assets/images/boat/605ee82623ae1.png',
				'title' => 'Semabu Hill Fast Boat',
				'start' => '07.00 AM',
				'end' => '07.45 AM',
				'category' => 'Domestic',
				"price" => "760000",
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',

				'review' => 'Shared Tour With Meeting Point Near Semabu Hill',
				'age' => '11',
				'day' => 'Tuesday',
				'rate' => '4.8',
				'countReview' => '1,313',
				'refund' => 'non-refundable',
				'Languages' => 'English',
				'reqInformation' =>	'Please provide information the genders amd nationalities of all participants in your group. Please also provide the full name of everyone in your group and the passport number of everyone in your group. ',
			],
			[
				'id' => 2,
				'orderId' => '#3444',
				'count' => '2 Adult',
				'to' => 'Sanur(Denpasar)',
				'village' => 'Banjar Nyuh',
				'from' => 'Nusa Penida',
				'day' => 'Tuesday',
				'date' => 'December 26, 2023',
				'image' => 'https://penidago.com/assets/images/boat/605ee82623ae1.png',
				'title' => 'Semabu Hill Fast Boat',
				'start' => '07.00 AM',
				'end' => '07.45 AM',
				'category' => 'Domestic',
				"price" => "760000",
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',

				'review' => 'Shared Tour With Meeting Point Near Semabu Hill',
				'age' => '11',
				'rate' => '4.8',
				'countReview' => '1,313',
				'refund' => 'non-refundable',
				'Languages' => 'English',
				'reqInformation' => 'Please provide information the genders amd nationalities of all participants in your group. Please also provide the full name of everyone in your group and the passport number of everyone in your group. '
			],
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function sendConfirmMail()
	{
		// Get POST data
		$to = $this->request->getPost('email');

		// Load the email library
        $email = \Config\Services::email();

        // Konfigurasi Email Library
		$config['protocol'] = 'smtp'; // Gunakan SMTP sebagai protokol pengiriman email
        $config['SMTPHost'] = 'mail.familytripsbali.com'; // Ganti dengan host SMTP Anda
        $config['SMTPPort'] = 465; // Port SMTP yang digunakan (587 adalah port TLS)
        $config['SMTPUser'] = 'no-reply@familytripsbali.com'; // Ganti dengan alamat email Anda
        $config['SMTPPass'] = 'Rl!_U{I6,@)j'; // Ganti dengan kata sandi email Anda
        // $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        // $config['newline'] = "\r\n";
        $config['SMTPCrypto'] = 'ssl'; // or 'ssl' if required
        $config['SMTPDebug'] = true;

        // Initialize email config
        $email->initialize($config);

        // Buat pesan email
        $email->setFrom('no-reply@familytripsbali.com', 'Reservation Confirmation');
        $email->setTo($to);
        $email->setSubject('Aktivasi Akun');

		// $message = "Selamat datang! Klik tautan berikut untuk mengaktifkan akun Anda: <a href=''></a>";
        // $email->setMessage($message);

		$template_data = [
				"id" => 1,
				"booking" => "Booking ref.",
				"bookingContent" => "VIA-35790865",
				"productBooking" => "Product booking ref.",
				"productBookingContent" => "PTF-T559073129",
				"ext" => "Ext. booking ref",
				"extContent" => "1086732567",
				"product" => "Product",
				"productContent" => "203423P1 - From Nusa Penida: 4 Spots Snorkling Tour With Manta Rays",
				"supplier" => "Supplier",
				"supplierContent" => "PT Family Trips Bali",
				"sold" => "Sold by",
				"soldContent" => "Viator.com",
				"channel" => "Booking channel",
				"channelContent" => "Viator.com",
				"customer" => "Customer",
				"customerContent" => "Raats. Jame",
				"email" => "Customer email",
				"emailContent" => "MSG-79808-33232-234234/324fs-234/travel.com",
				"phone" => "Customer phone",
				"phoneContent" => "NL + 31 0664155971",
				"date" => "Date",
				"dateContent" => "Fri, 24 Nov '23 @ 09.00",
				"rate" => "Rate",
				"rateContent" => "Snorkiling Nusa Penida",
				"pax" => "PAX",
				"paxContent" => "2 Adult",
				"extras" => "Extras",
				"extrasContent" => "",
				"created" => "Created",
				"createdContent" => "Thu, November 23 2023 @ 10:45",
				"note" => "Notes",
				"noteContent" => "Snarkling seassions at 4 spots Gapro Photo & Videos Snarkel and travel"
			];

		$message = view('landing-page/@common/mail_template', $template_data);
		// $message = view('landing-page/@common/tes_mail', ['name' => 'Recipient Name']);
		$email->setHeader('Content-Type', 'text/html');
        $email->setMessage($message);

		// Sent to email
        if ($email->send()) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Booking payment sent successfully.'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $email->printDebugger()
            ]);
        }
	}

}

?>
