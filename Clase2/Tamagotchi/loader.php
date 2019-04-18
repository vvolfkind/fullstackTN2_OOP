<?php

require 'helpers.php';
require 'Estado.php';
require 'Feliz.php';
require 'Hambriento.php';
require 'Sediento.php';
require 'Triste.php';
require 'Tamagotchi.php';

/**
 * Esto es lo que se hizo en clase.
 */
//$estado = new Hambriento();
//$tam = new Tamagotchi($estado);

// Tendria mas sentido hacerlo asi
$tam = new Tamagotchi(new Hambriento());

dd($tam);
