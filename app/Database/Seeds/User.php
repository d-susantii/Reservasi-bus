<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        // memasukkan data 
        $data = [
            'nama_lengkap' => 'Admin',
            'alamat' => 'Magetan',
            'nomor_telepon' => '089768546765',
            'jenis_kelamin' => 'Perempuan',
            'username' => 'admin',
            'password' => md5('12345'),
            'level_user' => 'Pelanggan'
        ];
        $builder = $this->db->table('user');

        foreach ($data as $row) {
            $builder->insert($row);
        }
    }
}
