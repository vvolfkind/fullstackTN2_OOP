<?php

class ProfesorTitular extends Profesor 
{

    private $especialidad;

    public function __construct(
        string $nombre, 
        string $apellido,  
        int $codigoProfesor, 
        string $especialidad
    )
    {
        parent::__construct($nombre, $apellido, $codigoProfesor);
        $this->especialidad = $especialidad;
    }

    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }
} 