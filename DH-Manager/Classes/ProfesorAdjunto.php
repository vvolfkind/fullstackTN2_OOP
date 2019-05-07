<?php

class ProfesorAdjunto extends Profesor 
{
    private $horasConsulta;

    public function __construct(
        string $nombre, 
        string $apellido, 
        int $codigoProfesor, 
        int $horasConsulta
    )
    {
        parent::__construct($nombre, $apellido, $codigoProfesor);
        $this->horasConsulta = $horasConsulta;
    }

    public function getHorasConsulta()
    {
        return $this->horasConsulta;
    }

    public function setHorasConsulta($horasConsulta)
    {
        $this->horasConsulta = $horasConsulta;
    }
} 