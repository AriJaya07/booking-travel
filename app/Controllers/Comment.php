<?php

namespace App\Controllers;

class Comment extends BaseController
{

	public function index()
	{
        // Load the helper and view within the controller
        helper('url');
		return view("landing-page/@common/comment_review");
	}
}

?>
