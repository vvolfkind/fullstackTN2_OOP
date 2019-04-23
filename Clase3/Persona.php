<?php

class Persona extends Cliente
{
    private $nombre;
    private $apellido;
    private $documento;
    private $nacimiento;

    public function __construct($nombre, $apellido, $documento, $nacimiento, $email, $password)
    {
        parent::__construct($email, $password);
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->nacimiento = $nacimiento;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }

    public function getNacimiento()
    {
        return $this->nacimiento;
    }

}