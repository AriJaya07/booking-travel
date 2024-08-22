<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("user/user_model");
        $this->load->library('appsetting');        
    }

    function index() {
        $data['success_message'] = $this->session->flashdata('success_message');

        $this->load->view("login", $data);
    }

    function login() {
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        // $result = $this->user_model->getUser($username, $password);
        $result = $this->user_model->getUser($email);
        
        if(isset($result)){
            // var_dump($result->user_cat);die;
            if($result->is_active == "1" || $result->user_cat=="admin") {
                if(password_verify($password, $result->password)){
                    $data_session = array(
                        'user_id' => $result->user_id,
                        // 'fullname' => $result->fullname,
                        'user_cat' => $result->user_cat,
                        'user_status' => $result->user_status
                    );
     
                    $this->session->set_userdata($data_session);
                    $this->user_model->updateLastLogin($result->user_id);
                    
                    echo json_encode($data_session);
                } else {
                    $data_session = array(
                        'user_id' => "0",
                        'status' => "error",
                        "message" => "Email or password incorrect"
                    );
                    
                    echo json_encode($data_session);
                }
            } else {
                $data_session = array(
                    'user_id' => "0",
                    "status" => "error",
                    "message" => "Please active you account"
                );
                echo json_encode($data_session);
            }
        } else {
            $data_session = array(
                'user_id' => "0",
                'status' => "error",
                "message" => "User not registered"
            );
            
            echo json_encode($data_session);
        }
	}
 
	function logout(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}

 /* End of file login.php */   
 /* Location: ./application/controllers/user/login.php */  