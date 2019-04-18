<?php

class Tamagotchi
{
    /**
     * Estado.
     * Va a ser siempre un objeto del tipo Estado.
     * 
     */
    private $estado;

    public function __construct(Estado $estado)
    {
        // Para instanciar un objeto Tamagotchi, si o si necesito un Estado.
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado)
    {
        $this->estado = $estado;
    }

    /**
     * Aca vamos a tener el comportamiento propio del Tamagotchi.
     * 
     * Solamente puede comer, beber, o recibir mimos. Si dependiera
     * del Tamagotchi, usaria alguna de estas tres opciones para CAMBIAR
     * su estado.
     * 
     */
    public function comer()
    {
        // Cuando el Tamagotchi decida comer, va a hacer que su estado interno
        // cambie, pero como reacciona este estado interno va a depender
        // justamente del Estado, que es otra entidad.
        // Lo mismo aplica para las otras dos acciones.
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
