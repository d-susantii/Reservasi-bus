<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tarif extends Migration
{
    public function up()
    {
         //membuat kolom tarif
         $this->forge->addField([
            'tarif_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'tujuan_awal' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
            'tujuan_akhir' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'tanggal' => [
                'type' => 'TIMESTAMP',
            ]
            ]);
            //membuat primary key
            $this->forge->addKey('tarif_id',true);

            //membuat tabel tarif
            $this->forge->createTable('tarif',true);
    }

    public function down()
    {
        //menghapus tabel tarif
        $this->forge->dropTable('tarif', true);
    
    }
}
