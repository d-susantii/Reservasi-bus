<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CekJadwal extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jadwal',
            'pages' => 'pages/cek_jadwal',
        ];
        return view ('layout/wrapper', $data);
    }
}
