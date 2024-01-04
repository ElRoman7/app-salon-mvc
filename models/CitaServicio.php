<?php

namespace Model;

class CitaServicio extends ActiveRecord{
    protected static $tabla = 'citasServicios';
    protected static $columnasDB = ['id', 'citaId', 'servicioId'];

    public $id;
    public $citaId;
    public $servicioId;

    public function __construct($agrs = []) {
        $this->id = $agrs['id'];
        $this->citaId = $agrs['citaId'];
        $this->servicioId = $agrs['servicioId'];
    }
}