<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Registrasi extends Migration
{
    public function up()
    {
        //membuat kolom registrasi 
        $this->forge->addField([
            'registrasi_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nomor_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => 13,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 62,
            ],
            'level_user' => [
                'type' => 'ENUM',
                'constraint' => ['Pelanggan'],
                'default' => 'Pelanggan',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        //membuat primary key
        $this->forge->addKey('registrasi_id',true);

        //membuat tabel registrasi
        $this->forge->createTable('registrasi',true);
    }

    public function down()
    {
        //menghapus tabel registrasi
        $this->forge->dropTable('registrasi', true);
    }
}
