<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
         //membuat kolom kategori
         $this->forge->addField([
            'kategori_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'nama_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ]
            ]);
            //membuat primary key
            $this->forge->addKey('kategori_id',true);

            //membuat tabel kategori
            $this->forge->createTable('kategori',true);
    }

    public function down ()
    {
        //menghapus tabel kategori 
        $this->forge->dropTable('kategori', true);
    
        //
    }
}
