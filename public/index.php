<?php 
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AppController;
use Controllers\AplicacionController;
use Controllers\TareaController;
use Controllers\ProgramadorController;
use Controllers\Asignacion_programadoresControllerController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);

$router->get('/aplicaciones', [AplicacionController::class,'index'] );
$router->post('/API/aplicaciones/guardar', [AplicacionController::class,'guardarAPI'] );
$router->post('/API/aplicaciones/modificar', [AplicacionController::class,'modificarAPI'] );
$router->post('/API/aplicaciones/eliminar', [AplicacionController::class,'eliminarAPI'] );
$router->get('/API/aplicaciones/buscar', [AplicacionController::class,'buscarAPI'] );

$router->get('/tareas', [TareaController::class,'index'] );
$router->post('/API/tareas/guardar', [TareaController::class,'guardarAPI'] );
$router->post('/API/tareas/modificar', [TareaController::class,'modificarAPI'] );
$router->post('/API/tareas/eliminar', [TareaController::class,'eliminarAPI'] );
$router->get('/API/tareas/buscar', [TareaController::class,'buscarAPI'] );

$router->get('/programadores', [ProgramadorController::class,'index'] );
$router->post('/API/programadores/guardar', [ProgramadorController::class,'guardarAPI'] );
$router->post('/API/programadores/modificar', [ProgramadorController::class,'modificarAPI'] );
$router->post('/API/programadores/eliminar', [ProgramadorController::class,'eliminarAPI'] );
$router->get('/API/programadores/buscar', [ProgramadorController::class,'buscarAPI'] );


$router->get('/asignacion_programadores', [TareaController::class,'index'] );
$router->post('/API/asignacion_programadores/guardar', [TareaController::class,'guardarAPI'] );
$router->post('/API/asignacion_programadores/modificar', [TareaController::class,'modificarAPI'] );
$router->post('/API/asignacion_programadores/eliminar', [TareaController::class,'eliminarAPI'] );
$router->get('/API/asignacion_programadores/buscar', [TareaController::class,'buscarAPI'] );

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
