<?php

namespace App\Controllers;

class Terms_conditions extends BaseController
{
	public function index()
	{
        // Load the helper and view within the controller
        helper('url');

		return view('landing-page/@common/header').
				view("landing-page/conditions/terms-conditions").
				view('landing-page/@common/contact').
				view('landing-page/@common/footer');
	}
}

?>
