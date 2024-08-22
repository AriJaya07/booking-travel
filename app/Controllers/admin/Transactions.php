<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use App\Models\transactions\TransactionsModel;
use App\Models\transactions\TransactionsDetailModel;
use App\Models\transactions\PaymentModel;

class Transactions extends BaseController
{
    public function index(): string
    {        
        // $M_transactions = new TransactionsModel();
        // $data['transactions_records'] = $M_transactions->findAll();
		
        return view('admin/transactions/list_content').
                view('admin/transactions/functions_content');
    }

    public function table(){
        // POST data
        $postData = $this->request->getGet();

        $M_transactions = new TransactionsModel();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = [];
        if($searchValue != ''){
            $searchQuery = 'options_name like "%'.$searchValue.'%"';
        }

        ## Total number of records without filtering
        $totalRecords = $M_transactions->countDataTable([]);

        ## Total number of record with filtering
        $totalRecordwithFilter = $M_transactions->countDataTable($searchQuery);

        ## Fetch records
        $records = $M_transactions->listDataTable($searchQuery, $columnName, $columnSortOrder, $rowperpage, $start);

        $data = array();
        $i = 1;

        foreach($records as $record ){
            $btnGroup = '<div class="text-center" style="text-align: center;"><div class="btn btn-info btn-xs btn-view priv-edit" data-id="'. $record['trx_id'] .'">'.
				'<i class="fa fa-eye"></i>'.
				'</div>';
            
            $data[] = array( 
                $i,
                date("Y-m-d", strtotime($record['trx_date'])),
                $record['trx_num'],
                date("Y-m-d", strtotime($record['activity_date'])).' '.$record['timeslot'],
                $record['options_name'],
                number_format($record['total']),
                $record['status'],
                $btnGroup
            ); 
            $i++;
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );     

        echo json_encode($response);
    }
    
    public function getDetail() {
        try {
            $id = $this->request->getGet('id');

            $M_transactions = new TransactionsModel();
            $M_transactionsdetail = new TransactionsDetailModel();
            $M_payment = new PaymentModel();

            $transaction = $M_transactions->getDataById($id);

            if(isset($transaction)) {
                $param = [
                    'trx_id' => $id,
                ];

                $transaction['detail'] = $M_transactionsdetail->getByConditions($param, 'activity_date', 'desc');
                $transaction['payment'] = $M_payment->getByConditions($param, 'last_update', 'desc');

                $data = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => $transaction,
                ];
            } else {
                $data = [
                    'status'  => 'success',
                    'message' => 'No Data',
                    'data'    => [],
                ];
            }

            return $this->response->setJSON($data);

        } catch (\Exception $e) {
            echo $e;
            
            $data = [
                'status'  => 'failed',
                'message' => $e,
                'data'    => [],
            ];
            return $this->response->setJSON($data);
            // Handle database-related exception
        }
    }
}