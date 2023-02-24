<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'pages' => 'pages/dashboard',
        ];
        return view('layout/wrapper', $data);
    }
}
