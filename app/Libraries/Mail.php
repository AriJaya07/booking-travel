<?php namespace App\Libraries;

use CodeIgniter\Email\Email;

class Mail
{
    public function send($data)
	{
		// Get POST data
		// $to = $this->request->getPost('email');

		// Load the email library
        $email = \Config\Services::email();

        // Konfigurasi Email Library
		$config['protocol'] = env('SMTP_PROTOCOL'); // Gunakan SMTP sebagai protokol pengiriman email
        $config['SMTPHost'] = env('SMTP_HOST'); // Ganti dengan host SMTP Anda
        $config['SMTPPort'] = env('SMTP_PORT'); // Port SMTP yang digunakan (587 adalah port TLS)
        $config['SMTPUser'] = env('SMTP_USER'); // Ganti dengan alamat email Anda
        $config['SMTPPass'] = env('SMTP_PASS'); // Ganti dengan kata sandi email Anda
        // $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        // $config['newline'] = "\r\n";
        $config['SMTPCrypto'] = 'ssl'; // or 'ssl' if required
        $config['SMTPDebug'] = true;

        // Initialize email config
        $email->initialize($config);

        // Buat pesan email
        $email->setFrom(env('SMTP_USER'), $data['title']);
        $email->setTo($data['to']);
        $email->setSubject($data['subject']);

		// $message = view('landing-page/@common/mail_template', $template_data);
		$message = view($data['url_template'], $data['template_data']);
        
		$email->setHeader('Content-Type', 'text/html');
        $email->setMessage($message);

		// Sent to email
        if ($email->send()) {
            return 'Mail sent successfully.';
        } else {
            return $email->printDebugger();
        }
	}
}