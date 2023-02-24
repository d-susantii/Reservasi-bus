<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //membuat kolom user
        $this->forge->addField([
            'user_id' => [
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
                'constraint' => ['Super Admin', 'Admin', 'Pelanggan'],
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        
        //membuat primary key
        $this->forge->addKey('user_id',true);

        //membuat tabel user
        $this->forge->createTable('user',true);
    }

    public function down()
    {
        //menghapus tabel user 
        $this->forge->dropTable('user', true);
    
    }
}
