<?php

namespace App\Controllers;

// importamos modelo CrudModel
use App\Models\CrudModel;


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

    public function crear() {

    }

    public function actualizar() {

    }

    public function eliminar($idNombre) {

    }

    public function obtenerPersona($idNombre) {

    }

    
    
}
