<?php

require 'helpers.php';
require 'Estado.php';
require 'Feliz.php';
require 'Hambriento.php';
require 'Sediento.php';
require 'Triste.php';
require 'Tamagotchi.php';

$estado = new Hambriento();
$tam = new Tamagotchi($estado);

// var_dump($tam->comer());

var_dump($tam);
