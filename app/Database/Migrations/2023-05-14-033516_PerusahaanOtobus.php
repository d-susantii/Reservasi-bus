<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PerusahaanOtobus extends Migration
{
    public function up()
    {
        //membuat kolom po
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'po_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'nama_po' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
            'alamat_po' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
            ]
            ]);

            //membuat primary key
        $this->forge->addKey('po_id',true);

        // membuat foreign key
        $this->forge->addForeignKey('user_id', 'user', 'user_id', 'CASCADE', 'CASCADE');

        //membuat tabel po
        $this->forge->createTable('PerusahaanOtobus',true);
    }

    public function down()
    {
                //menghapus tabel po 
                $this->forge->dropTable('PerusahaanOtobus', true);
    }
}
