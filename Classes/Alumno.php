<?php

class Alumno
{
    private $email;
    private $id;
    private $edad;
    private $nombreCompleto;
    private $dni;

    public function __construct($email, $nombreCompleto, $edad, $dni)
    {
        $this->email = $email;
        $this->edad = $edad;
        $this->nombreCompleto = $nombreCompleto;
        $this->dni = $dni;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

}