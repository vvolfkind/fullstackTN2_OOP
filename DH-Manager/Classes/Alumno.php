<?php

class Alumno
{

    private $nombre;
    private $apellido;
    private $codigoAlumno;

    public function __construct(
        string $nombre, 
        string $apellido, 
        int $codigoAlumno
    )
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->codigoAlumno = $codigoAlumno;
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getCodigoAlumno()
    {
        return $this->codigoAlumno;
    }
    
    public function setCodigoAlumno($codigoAlumno)
    {
        $this->codigoAlumno = $codigoAlumno;
    }
}