<?php
namespace App\Controllers;

class Affiliate extends BaseController
{
	public function index()
	{
        // Load the helper and view within the controller
        helper('url');
        return view("landing-page/conditions/affiliate");
	}
}

?>
