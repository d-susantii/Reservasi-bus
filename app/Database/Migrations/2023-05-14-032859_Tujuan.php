<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tujuan extends Migration
{
    public function up()
    {
        //membuat kolom tujuan
        $this->forge->addField([
            'tujuan_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'bus_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'kota_tujuan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tarif_weekend' => [
                'type' => 'INT',
                'constraint' =>15,
            ],
            'tarif_weekdays' => [
                'type' => 'INT',
                'constraint' =>15,
            ]
        ]);
        //membuat primary key
        $this->forge->addKey('tujuan_id',true);

        // membuat foreign key
        $this->forge->addForeignKey('bus_id', 'bus', 'bus_id', 'CASCADE', 'CASCADE');

        //membuat tabel po
        $this->forge->createTable('tujuan',true);
    }

    public function down()
    {
        //menghapus tabel tujuan 
        $this->forge->dropTable('tujuan', true);
    }
}
