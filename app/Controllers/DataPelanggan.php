<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class DataPelanggan extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    // public function index()
    // {
    //     $data = [
    //         'title' => 'Data Pelanggan',
    //         'pages' => 'pages/dashboard'
    //     ]
    // }

    public function editData()
    {
        $data = [
            'title'=> 'Dashboard | Edit Profil',
            'pages' => 'pages/edit_profile',
            'pelanggan' => $this->ModelUser->getData(session()->user_id),
            'admin' => $this->ModelUser->getData(session()->id),
            'superadmin' => $this->ModelUser->getData(session()->id),
        ];
        return view('layout/wrapper', $data);
    }
}
