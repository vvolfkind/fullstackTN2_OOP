<?php

abstract class Estado
{
    protected $nombre;

    public function getNombre()
    {
        return $this->nombre;
    }

    abstract public function estimulo_comer();

    abstract public function estimulo_beber();

    abstract public function estimulo_mimos();

}
