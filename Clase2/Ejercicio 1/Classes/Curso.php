<?php
require '../helpers.php';

class Curso
{
    private $idCurso;
    private $nombre;
    private $vacantes;

    public function __construct($idCurso, $nombre, $vacantes)
    {
        $this->idCurso = $idCurso;
        $this->nombre = $nombre;
        $this->vacantes = $vacantes;
    }

    public function getIdCurso()
    {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getVacantes()
    {
        return $this->vacantes;
    }

    public function setVacantes($vacantes)
    {
        $this->vacantes = $vacantes;
    }
}

$fullstack = new Curso(1, 'Fullstack TN2', 35);

var_dump($fullstack);
$fullstack->setIdCurso(4);

var_dump($fullstack);



