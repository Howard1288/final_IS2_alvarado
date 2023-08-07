<?php

namespace Controllers;

use Exception;
use Model\Asignacion_programadores;
use MVC\Router;

class Asignacion_programadoresController{
    public static function index(Router $router){
        $asignacion_programadores = Asignacion_programadores::all();
        
        // var_dump($aplicaciones);
        //  exit;
        $router->render('asignacion_programadores/index', [
            'asignacion_programadores' => $asignacion_programadores,
        ]);

    }

    public static function guardarAPI(){
        try {
            $asignacion_programadores = new Asignacion_programadores($_POST);
            $resultado = $asignacion_programadores->crear();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro guardado correctamente',
                    'codigo' => 1
                ]);
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function modificarAPI(){
        try {
            $asignacion_programadores = new Asignacion_programadores($_POST);
            $resultado = $asignacion_programadores->actualizar();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro modificado correctamente',
                    'codigo' => 1
                ]);
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function eliminarAPI(){
        try {
            $asignacion_id = $_POST['asignacion_id'];
            $asignacion_programadores = Asignacion_programadores::find($asignacion_id);
            $asignacion_programadores->asignacion_id_aplicacion = 0;
            $asignacion_programadores->asignacion_id_programador = 0;
            $resultado = $asignacion_programadores->actualizar();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro eliminado correctamente',
                    'codigo' => 1
                ]);
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function buscarAPI(){
      
        $asignacion_id_aplicacion = $_GET['asignacion_id_aplicacion'];
        $asignacion_id_programador = $_GET['asignacion_id_programador'];
       
       

        $sql = "SELECT * FROM asignacion_programadores ";
        if($asignacion_id_aplicacion != '') {
            $sql.= " and asignacion_id_aplicacion like '%$asignacion_id_aplicacion%' ";
        }
        if($asignacion_id_programador != '') {
            $sql.= " and asignacion_id_programador like '%$asignacion_id_programador%' ";
        }
        
        try {
            
            $asignacion_programadores = Asignacion_programadores::fetchArray($sql);
    
            echo json_encode($asignacion_programadores);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }
}