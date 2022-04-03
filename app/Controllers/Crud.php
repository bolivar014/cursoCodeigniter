<?php

namespace App\Controllers;

// importamos modelo CrudModel
use App\Models\CrudModel;

// 
class Crud extends BaseController
{
    public function index()
    {
        // Retornamos el Modelo
        $Crud = new CrudModel();

        // datos Recibe el Objeto Crud del metodo ListarNombres
        $datos = $Crud->listarNombres();

        // Generamos array con los datos recibidos desde el modelo para así enviarlo hacía el front
        $data = [
            "datos" => $datos
        ];

        // Retornamos la vista con los datos
        return view('listado', $data);
    }

    // Metodo para crear cliente
    public function crear() {
        // print_r($_POST);
        $datos = [
            "doc_cantante" => $_POST['doc_cantante'],
            "nombre_completo" => $_POST['nombre_completo'],
            "nombre_artistico" => $_POST['nombre_artistico'],
            "fecha_nacimiento" => $_POST['fecha_nacimiento'],
            "pais_vive" => $_POST['pais_vive'],
            "ciudad_vive" => $_POST['ciudad_vive'],
        ];

        // Retornamos el Modelo
        $Crud = new CrudModel();

        // 
        echo $Crud->insertar($datos);
    }

    public function actualizar() {

    }

    public function eliminar($idNombre) {

    }

    public function obtenerPersona($idNombre) {

    }

    
    
}
