<?php 
    // Importamos modelo
    namespace App\Models;

    // Importamos uso del modelo
    use CodeIgniter\Model;

    // 
    class CrudModel extends Model {
        // Metodo para listar los nombres
        public function listarNombres() {
            // Consultamos todos los registros en la tabla personas
            $Nombres = $this->db->query("SELECT * FROM personas");

            return $Nombres->getResult();
        }

        // Modelo para inserción de datos
        public function insertar($datos) {
            $Nombres = $this->db->table('personas');

            // Inserción asociativo
            $Nombres->insert($datos);
        
            // Retornamos ID de la ultima inserción
            return $this->db->insertID();
        }
    }