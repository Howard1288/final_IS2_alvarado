<?php

namespace Model;
class Aplicacion extends ActiveRecord{
    public $aplicacion_id;
    public $aplicacion_nombre;
    public $aplicacion_fecha_inicio;
    public $aplicacion_situacion;

    public function __construct($args = [] )
    {
        $this->aplicacion_id = $args['aplicacion_id'] ?? null;
        $this->aplicacion_nombre = $args['aplicacion_nombre'] ?? '';
        $this->aplicacion_fecha_inicio = $args['aplicacion_fecha_inicio'] ?? '';
        $this->aplicacion_situacion = $args['aplicacion_situacion'] ?? '';
    }
}
    
        
?>
