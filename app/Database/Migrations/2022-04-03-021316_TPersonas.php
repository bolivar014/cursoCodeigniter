<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPersonas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cant'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'doc_cantante'          => [
                'type'           => 'INT',
                'constraint'     => 10,
            ],
            'nombre_completo'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nombre_artistico'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'fecha_nacimiento'       => [
                'type'       => 'date',
            ],
            'pais_vive'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'ciudad_vive'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id_cant', true);
        $this->forge->createTable('personas');
    }

    public function down()
    {
        $this->forge->dropTable('personas');
    }
}
