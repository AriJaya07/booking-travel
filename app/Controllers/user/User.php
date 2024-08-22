<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    //Method __construct() merupakan sebuah konstruktor. 
    //Method ini yang akan dieksekusi pertama kali saat Controller diakses.
    public function __construct(){
		parent::__construct();
		$this->load->model('user/user_model');
        $this->load->library('appsetting');
	}	

	public function index(){
        $codeView = $this->user_model->checkView($this->session->userdata("user_cat"));
        $codePrivileges = $this->user_model->checkModul("AKUNTING", "MST_USER", $this->session->userdata("user_cat"));

        $arrData = array(
            "VIEW" => $codeView,
            "ADD" => substr($codePrivileges, 0, 1),
            "EDIT" => substr($codePrivileges, 1, 1),
            "DELETE" => substr($codePrivileges, 2, 1),
		);

        $this->load->view('user/user_view', compact('arrData'));
    }

    public function showForm(){
		$M_user=$this->user_model;
		$data=$M_user->getById($this->input->get('user_id'));
		echo json_encode($data);
    }

    public function save(){
		$data="";
		$M_user=$this->user_model;

		$id=$this->input->post("user_id");
		
		if($id!=0 && $id!=null){
			$data=$M_user->update();
		}else{
			$data=$M_user->save();
        }
        
        if($data == true){ 
            $data = "Berhasil menyimpan";
        } else {
            $data = "Gagal menyimpan";
        }

		echo json_encode($data);		
    }

    public function delete(){
        $M_user = $this->user_model;

		$id=$this->input->post("user_id");

        $data = $M_user->delete($id);

        if($data == true){ 
            $data = "Berhasil menyimpan";
        } else {
            $data = "Gagal menyimpan";
        }

        echo json_encode($data);        
    }

    public function table(){
        // POST data
        $postData = $this->input->post();

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
        $searchQuery = "";
        if($searchValue != ''){
            $searchQuery = " (username like '%".$searchValue."%'".
            " ) ";
        }

        ## Total number of records without filtering
        $totalRecords = $this->user_model->countDataTable('');

        ## Total number of record with filtering
        $totalRecordwithFilter = $this->user_model->countDataTable($searchQuery);

        ## Fetch records
        $records = $this->user_model->listDataTable($searchQuery, $columnName, $columnSortOrder, $rowperpage, $start);

        $data = array();
        $i = 1;

        foreach($records as $record ){
            $btnGroup = '<div class="text-center" style="text-align: center;"><div class="btn btn-info btn-xs contact_edit priv-edit" data-id="'. $record->user_id .'">'.
				'<i class="fa fa-edit"></i>'.
				'</div>'.
				'<div class="text-center" style="text-align: center;"><div class="btn btn-danger btn-xs contact_del priv-delete" data-id="'. $record->user_id .'">'.
				'<i class="fa fa-trash"></i>'.
				'</div>';
            
            $data[] = array( 
                $i,
                $record->username,
                $this->appsetting->titleUserCat[$record->user_cat],
                $record->last_login_date,
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
}

 /* End of file login.php */   
 /* Location: ./application/controllers/user/User.php */  