<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index(): string
    {
        return view('admin/layout/admin_layout');
    }
}