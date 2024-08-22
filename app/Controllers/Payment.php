<?php

namespace App\Controllers;

class Payment extends BaseController
{
	public function index()
	{
		// Load the helper and view within the controller
		helper('url');
		return view("landing-page/booking-payment/booking-payment");
	}

	public function generateOrder()
	{
		$items = [
			[
				'id' => 1,
				'orderId' => '#2443',
				'image' => 'https://cdn.getyourguide.com/img/tour/c12cff8f020d1472.jpeg/132.jpg',
				'title' => ' From Bali: Swim with Manta Rays in Nusa Penida ',
				'bookmark' => 'Option with Meeting Point Near Sanur Port',
				'language' => 'English',
				'tour' => 'Lambongan Water Sport',
				'day' => 'Tuesday',
				'date' => 'December 26, 2023',
				'clock' => '8:45 AM',
				'rate' => '4.5',
				'review' => '1,999',
				'passenger' => '1 Adult (Age 11 - 99) ',
				'descActivity' => 'non-refundable',
				'price' => '1200000',
				'subTotal' => '2000000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'reqInformation' => array(
					'Please provide information the genders amd nationalities of all participants in your group. Please also provide the full name of everyone in your group and the passport number of everyone in your group. ',
					'Please provide information the genders amd nationalities of all participants in your group. Please also provide the full name of everyone in your group and the passport number of everyone in your group. '
				)
			]
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function sendConfirmMailPayment($email)
	{
		// Get POST data
		$post_data = $this->input->post();

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


		$template_data = [
			[
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
			]
		];

		$message = $this->load->view('email_template', $template_data, true);
		$this->email->message($message);

		// Sent to email
		if ($this->email->send()) {
			$response = array(
				'status' => 'success',
				'message' => 'Booking payment sent successfully.'
			);
			$this->output->set_content_type('application/json')->set_output(json_encode($response));
		} else {
			$response = array(
				'status' => 'error',
				'message' => $this->email->print_debugger()
			);
			$this->output->set_content_type('application/json')->set_output(json_encode($response));
		}
	}
}

?>
