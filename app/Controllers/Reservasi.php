<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Reservasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Reservasi',
            'pages' => 'pages/reservasi',
        ];
        return view ('layout/wrapper', $data);
    }
}
