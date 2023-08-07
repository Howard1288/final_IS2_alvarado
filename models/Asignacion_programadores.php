<?php
namespace Model;
class Asignacion_programadores extends ActiveRecord{

    public static $tabla = 'asignacion_programadores';
    public static $columnasDB = ['asignacion_id_aplicacion','asignacion_id_programador'];
    public static $idTabla = 'asignacion_id';

    public $asignacion_id;
    public $asignacion_id_aplicacion;
    public $asignacion_id_programador;

    public function __construct($args = [])
    {
        $this->asignacion_id = $args['asignacion_id'] ?? null;
        $this->asignacion_id_aplicacion = $args['asignacion_id_aplicacion'] ?? null;
        $this->asignacion_id_programador = $args['asignacion_id_programador'] ?? null;
    }

}
