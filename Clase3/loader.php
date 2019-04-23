<?php
    function dd($param)
    {
        echo "<pre>";
        die(var_dump($param));
    }

    require 'Cliente.php';
    require 'Persona.php';
    require 'PYME.php';
    require 'Multinacional.php';

    $persona1 = new Persona('Rodo', 'Raskovsky', '31443443', '18/10/1985', 'rodo@dh.com', 'password');

    dd($persona1->getEmail());
