<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kota extends Migration
{
    public function up()
    {
        //membuat kolom kabupaten
        $this->forge->addField([
            'kabupaten_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'kode_kabupaten' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'nama_kabupaten' => [
                'type' => 'VARCHAR',
                'constraint' => 35
            ]
            ]);

            //membuat primary key
            $this->forge->addKey('kabupaten_id',true);

            //membuat tabel kota
            $this->forge->createTable('kabupaten',true);
    }

    public function down()
    {
        //menghapus tabel kabupaten
        $this->forge->dropTable('kabupaten', true);
    
    }
}
