<?php

class Multinacional extends Cliente
{
    private $razonSocial;
    private $paisDeOrigen;

    public function __construct($email, $password, $razonSocial, $paisDeOrigen)
    {
        parent::__construct($email, $password);
        $this->razonSocial = $razonSocial;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

    }
}

