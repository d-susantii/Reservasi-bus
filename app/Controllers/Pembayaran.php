<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pembayaran extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pembayaran',
            'pages' => 'pages/pembayaran',
        ];
        return view ('layout/wrapper', $data);
    }
}
