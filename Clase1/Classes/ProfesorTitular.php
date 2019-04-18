<?php

class ProfesorTitular extends Profesor
{
    private $experiencia;

    public function __construct($nombre, $id, $email, $experiencia)
    {
        parent::__construct($nombre, $id, $email);
        
        $this->experiencia = $experiencia;
    }
}
