<?php

class PYME extends Cliente
{
    private $razonSocial;

    public function __construct($email, $password, $razonSocial)
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

