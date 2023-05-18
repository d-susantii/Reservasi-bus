<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class JenisBus extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jenis Bus',
            'pages' => 'pages/jenis_bus',
        ];
        return view ('layout/wrapper', $data);
    }
}
