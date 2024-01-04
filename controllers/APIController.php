<?php

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;
use MVC\Router;

class APIController{
    public static function index(Router $router){
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar(Router $router){
        
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id']; //Viene desde la respuesta del Active Record

        // Almacena los Servicios con el id de la cita
        $idServicios = explode(",", $_POST['servicios']);
        foreach($idServicios as $idServicio){
            $agrs = [
                'citaId' => $id,
                'servicioId' => $idServicio,
            ];
            $citaServicio = new CitaServicio($agrs);
            $citaServicio->guardar();
        }

        // echo $resultado;
        

        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $id = $_POST['id'];
            $cita = Cita::find($id);
            $cita->eliminar();
            header('Location:' .$_SERVER['HTTP_REFERER']);
        }
    }
}