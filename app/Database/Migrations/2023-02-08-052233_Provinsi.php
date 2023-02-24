<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
    public function up()
    {
        //membuat kolom provisi
        $this->forge->addField([
            'provinsi_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'kode_provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama_provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => 35,
            ]
            ]);
            //membuat primary key
            $this->forge->addKey('provinsi_id',true);

            //membuat tabel provinsi
            $this->forge->createTable('provinsi',true);
    }

    public function down()
    {
        //menghapus tabel provinsi
        $this->forge->dropTable('provinsi', true);
    
    }
}
