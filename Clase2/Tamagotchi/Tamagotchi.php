<?php

class Tamagotchi
{
    private $estado;

    public function __construct(Estado $estado)
    {
        $this->setEstado($estado);
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado)
    {
        $this->estado = $estado;
    }

    public function comer()
    {
        $this->estado = $this->estado->estimulo_comer();
    }

    public function beber()
    {
        $this->estado = $this->estado->estimulo_beber();
    }

    public function mimos()
    {
        $this->estado->estimulo_mimos();
    }
}
