<?php

class Curso
{
    private $nombre;
    private $turno;
    private $modalidad;
    private $comision;

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

    public function getComision()
    {
        return $this->comision;
    }

    public function setTurno($turno)
    {
        $this->turno = $turno;
    }
}
