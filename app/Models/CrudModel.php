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

        // Modelo para consultar datos de persona
        public function obtenerPersona($data) {
            // Creamos conexión a la tabla
            $Nombres = $this->db->table('personas');

            // Ejecutamos consulta
            $Nombres->where($data);

            // Retornamos el array de resultados
            return $Nombres->get()->getResultArray();
        }

        // Modelo para Actualizar datos de persona
        public function actualizar($data, $idNombre) {
            // Creamos conexión a la tabla
            $Nombres = $this->db->table('personas');

            // generamos actualización de array data ordenadadesde el controlador 
            $Nombres->set($data);

            // Actualizamos los datos asociados al cliente
            $Nombres->where('id_cant', $idNombre);

            // Retornamos actualización
            return $Nombres->update();
        }
    }