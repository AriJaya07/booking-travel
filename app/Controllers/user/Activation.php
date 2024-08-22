<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activation extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("user/user_model");   
    }

    public function activate($activation_code) {
        // Cek kode aktivasi di database
        $user = $this->user_model->get_user_by_activation_code($activation_code);

        if ($user) {
            // Aktifkan akun pengguna
            $this->user_model->activate_user($user['user_id']);
            echo 'Akun Anda telah diaktifkan. Click <a href="'.base_url().'">here</a> to login';
        } else {
            echo 'Kode aktivasi tidak valid.';
        }
    }
}