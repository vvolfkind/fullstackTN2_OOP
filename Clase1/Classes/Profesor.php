<?php

class Profesor
{
    private $nombre;
    private $id;
    private $email;

    public function __construct($nombre, $id, $email)
    {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->email = $email;
    }
}