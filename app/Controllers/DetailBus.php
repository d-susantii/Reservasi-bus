<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DetailBus extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Detail Bus',
            'pages' => 'pages/detail_bus',
        ];
        return view ('/pages/detail_bus');
    }
}
