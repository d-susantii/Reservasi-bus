<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Login extends BaseController
{
    function __construct() {
        $this->ModelUser = new ModelUser();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Login',
            'pages' => 'login',
        ];
        return view('layout/wrapper_login', $data);
    }

    public function login () {
        //get method POST
        if ($this->request->getMethod() == 'post') {
             
        // data username dan password
            $username =htmlspecialchars($this->request->getVar('login-username'));
            $password =htmlspecialchars(md5($this->request->getVar('login-password')));

            

            // mengambil data user berdasarkan username
            $user = $this->ModelUser->login($username, $password);

            if (!$user) {
                session()->setFlashdata('pesan', 'Username dan Password sesuai.');
                return redirect()->to(base_url('login'));
            } else {
                if ($password != $user['password']) {
                    session()->setFlashdata('pesan', 'Username dan Password tidak sesuai.');
                    return redirect()->to(base_url('login'));
                } else {
                    $data = [
                        'user_id' => $user['user_id'],
                        'nama_lengkap' => $user['nama_lengkap'],
                        'alamat' => $user['alamat'],
                        'nomor_telepon' => $user['nomor_telepon'],
                        'username' => $user['username'],
                        'password' => $user['password'],
                        'logged_in' =>  TRUE,
                    ];
                    session()->set($data);
                    session()->setFlashdata('pesan', 'Selamat Anda Berhasil Login,' .ucfirst($user['nama_lengkap']));
                    return redirect()->to(base_url('dashboard'));
                }
            }
        } else {
            return redirect()->to(base_url('login'));
        }
    } 

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}