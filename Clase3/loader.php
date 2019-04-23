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
    require 'Cuenta.php';
    require 'Platinum.php';
    require 'Classic.php';

    $persona1 = new Persona('Rodo', 'Raskovsky', '31443443', '18/10/1985', 'rodo@dh.com', 'password');

    $platinum = new Platinum('pepeguapo');

    $platinum->acreditar(5500);
    
    $classic = new Classic('bort');
    var_dump($platinum);
   // var_dump($classic->debitar(5000, 'Link'));
    
