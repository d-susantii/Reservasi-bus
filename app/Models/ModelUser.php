<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
      'user_id',
      'nama_lengkap',
      'alamat',
      'nomor_telepon',
      'username',
      'password',
      'ulangi_password',
      'level_user',
      'email',
     ];

     public function login ($username, $password) 
     {
        return $this->where(['username' => $username, 'password' => $password])->first();
     }
    
}
