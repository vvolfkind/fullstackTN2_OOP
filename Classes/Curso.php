<?php

class Curso
{
    private $nombre;
    private $turno;
    private $modalidad;
    private $comision = array();

    public function __construct($nombre, $turno, $modalidad)
    {
        $this->nombre = $nombre;
        $this->turno = $turno;
        $this->modalidad = $modalidad;
    }

    public function altaAlumnos($alumno)
    {
        $this->comision[] = $alumno;
    }
}
