<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bus extends Migration
{
    public function up()
    {
        //membuat kolom bus
        $this->forge->addField([
            'bus_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'plat_nomor' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
            ],
            'nama_bus'=> [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'jumlah_kursi' => [
                'type' => 'INT',
                'constraint' => 2,
            ]
            ]);

            //membuat primary key
            $this->forge->addKey('bus_id',true);

            //membuat tabel bus
            $this->forge->createTable('bus',true);
    }

    public function down()
    {
        //menghapus tabel bus
        $this->forge->dropTable('bus', true);
    
    }
}
