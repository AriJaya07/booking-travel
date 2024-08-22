<?php

namespace App\Controllers;

class Terms_use extends BaseController
{
	public function index()
	{
        // Load the helper and view within the controller
        helper('url');

		return view('landing-page/@common/header').
				view("landing-page/conditions/terms-use").
				view('landing-page/@common/contact').
				view('landing-page/@common/footer');
	}
}

?>
