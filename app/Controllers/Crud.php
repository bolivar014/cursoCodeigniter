<?php

namespace App\Controllers;

// importamos modelo CrudModel
use App\Models\CrudModel;

// 
class Crud extends BaseController
{
    public function index() {
        // Retornamos el Modelo
        $Crud = new CrudModel();

        // Creamos una variable mensaje con la respuesta de la redirección
        $mensaje = session('mensaje');

        // datos Recibe el Objeto Crud del metodo ListarNombres
        $datos = $Crud->listarNombres();

        // Generamos array con los datos recibidos desde el modelo para así enviarlo hacía el front
        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
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

        // Recupero el LOG de si se realizo la inserción en DB.
        $respuesta = $Crud->insertar($datos);

        if($respuesta > 0) {
            // En caso que sea una redirección exitosa, retornamos al index con un mensaje 1
            return redirect()->to(base_url() . '/')->with('mensaje', '1');

        } else {
            // En caso que sea una redirección exitosa, retornamos al index con un mensaje 0
            return redirect()->to(base_url() . '/')->with('mensaje', '0');
        }

    }

    public function actualizar() {
        $datos = [
            "doc_cantante" => $_POST['doc_cantante'],
            "nombre_completo" => $_POST['nombre_completo'],
            "nombre_artistico" => $_POST['nombre_artistico'],
            "fecha_nacimiento" => $_POST['fecha_nacimiento'],
            "pais_vive" => $_POST['pais_vive'],
            "ciudad_vive" => $_POST['ciudad_vive'],
        ];

        // Obtenemos la respuesta con el ID del cliente
        $idNombre = $_POST['id_cant'];

        // Retornamos el Modelo
        $Crud = new CrudModel();

        // Llamamos al metodo actualizar
        $respuesta = $Crud->actualizar($datos, $idNombre);

        if($respuesta) {
            // En caso que sea una redirección exitosa, retornamos al index con un mensaje 1
            return redirect()->to(base_url() . '/')->with('mensaje', '2');

        } else {
            // En caso que sea una redirección exitosa, retornamos al index con un mensaje 0
            return redirect()->to(base_url() . '/')->with('mensaje', '3');
        }
    }

    public function eliminar($idNombre) {
        // Retornamos el Modelo
        $Crud = new CrudModel();
        
        // Obtenemos la respuesta desde el modelo con el dato a consultar
        $respuesta = $Crud->eliminar($idNombre);

        if($respuesta) {
            // En caso que sea una redirección exitosa, retornamos al index con un mensaje 1
            return redirect()->to(base_url() . '/')->with('mensaje', '4');

        } else {
            // En caso que sea una redirección exitosa, retornamos al index con un mensaje 0
            return redirect()->to(base_url() . '/')->with('mensaje', '5');
        }
        
    }

    public function obtenerPersona($idNombre) {
        // Enviamos array al modelo con el ID del Cliente a buscar
        $data = ["id_cant" => $idNombre];
    
        // Retornamos el Modelo
        $Crud = new CrudModel();

        // Obtenemos la respuesta desde el modelo con el dato a consultar
        $respuesta = $Crud->obtenerPersona($data);

        // Creamos array de datos con la respuesta desde el modelo
        $datos = ["datos" => $respuesta];

        // Retornamos la vista actualizar con el array de datos asociado a la persona
        return view('actualizar', $datos);
    }

    
    
}
