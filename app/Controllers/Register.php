<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;


class Register extends BaseController{

    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }
    public function index()
    {
        $data = [
            'title' => 'Register',
            'pages' => 'register',
        ];
        return view('layout/wrapper_login', $data);
    }

    public function register(){
        //get method POST
        if ($this->request->getMethod() == 'post') {
            // password 8 karakter 
        // $validation = [
        //     'password'=>'required|password_strength[8]'
        // ];
        
            // data username and password
        $nama = htmlspecialchars ($this->request->getPost('register_nama'));
        $username = htmlspecialchars ($this->request->getPost('register_username'));
        $email = htmlspecialchars ($this->request->getPost('register_email'));
        $password = htmlspecialchars (md5($this->request->getPost('register_password')));
        $ulangi_password = htmlspecialchars (md5($this->request->getPost('register_ulangipassword')));
        $alamat = htmlspecialchars ($this->request->getPost('register_alamat'));
        $nomor_telepon = htmlspecialchars ($this->request->getPost('register_nomor_telepon'));

        // menginputkan data register kedalam database user
        $this->ModelUser->insert([
            'nama_lengkap' => $nama,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'ulangi_password' => $ulangi_password,
            'level_user' => 'Pelanggan',
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon
        ]);

        session()->setFlashdata('pesan', 'Selamat Anda Berhasil Registrasi');
        return redirect()->to(base_url('login'));

        }
       }
    }    

