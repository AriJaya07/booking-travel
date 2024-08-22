<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("user/user_model");
        $this->load->library('appsetting');   
        $this->load->library('form_validation');     
    }

    function index() {
        // $this->load->view("user/login_view");
    }

    function register() {
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('re_password', 'Re-type Password', 'required|matches[password]');
        // var_dump(validation_errors());die;

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman registrasi dengan pesan kesalahan
            $data = array(
                'code' => 'error',
                'messages' => validation_errors(),
            );

            echo json_encode($data);
        } else {
            // Jika validasi berhasil, lanjutkan dengan proses registrasi
            // Misalnya, simpan data pengguna ke database
            
            $user_data = array(
                'user_id' => uniqid(),
                'fullname' => $this->input->post('fullname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'user_cat' => "user",
                'user_status' => "new",
                'reg_date' => date("Y-m-d H:i:s"),
                'last_update' => date("Y-m-d H:i:s"),
                'activation_code' => md5(uniqid(rand(), true)),
                'is_active' => 0
                
            );
            
            $result = $this->user_model->register_user($user_data);

            if($result) {
                $data = array(
                    'code' => 'success',
                    'messages' => 'data saved successfully',
                );

                // Kirim email aktivasi
                $this->send_activation_email($user_data['email'], $user_data['activation_code']);
    
                
                echo json_encode($data);
            }


            // // Redirect ke halaman sukses atau halaman login
            // redirect('registration_success');
        }
    }

    private function send_activation_email($email, $activation_code) {
        // Konfigurasi Email Library
        $config['protocol'] = 'smtp'; // Gunakan SMTP sebagai protokol pengiriman email
        $config['smtp_host'] = 'mail.ikaf.tech'; // Ganti dengan host SMTP Anda
        $config['smtp_port'] = 465; // Port SMTP yang digunakan (587 adalah port TLS)
        $config['smtp_user'] = 'no-reply@ikaf.tech'; // Ganti dengan alamat email Anda
        $config['smtp_pass'] = '@2023Supp0rt'; // Ganti dengan kata sandi email Anda
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['newline'] = "\r\n";
        $config['smtp_crypto'] = 'ssl'; // or 'ssl' if required
        $config['smtp_debug'] = true;


        $this->email->initialize($config);

        // Buat pesan email
        $this->email->from('no-reply@ikaf.tech', 'Support Rental');
        $this->email->to($email);
        $this->email->subject('Aktivasi Akun');
        $activation_link = base_url() . 'activation/activate/' . $activation_code;
        $message = "Selamat datang! Klik tautan berikut untuk mengaktifkan akun Anda: <a href='$activation_link'>$activation_link</a>";
        $this->email->message($message);

        // Kirim email
        if ($this->email->send()) {
            $message = "Please check your email for activation link.";

            $this->session->set_flashdata('success_message', $message);
        } else {
            show_error($this->email->print_debugger());
        }
    }
}

 /* End of file login.php */   
 /* Location: ./application/controllers/user/register.php */  