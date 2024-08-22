<?php

namespace App\Controllers;

class Mail extends BaseController
{
	public function index()
	{
		// Load the helper and view within the controller
		helper('url');
		return view("landing-page/@common/mail_template");
	}

	public function mailPayment() {
		return view("landing-page/@common/mail_payment_template");
	}

	public function generateMail()
	{
		$items = [
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

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}
}

?>
