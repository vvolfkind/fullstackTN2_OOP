<?php

$estados = [
    'Triste',
    'Hambriento',
    'Sediento',
    'Feliz'
];

$tamagoshi = [
    'estado' => $estado_inicial
];

$mensaje = null;

if($accion !== null) {
    if($accion == 'Comer') {

        if($tamagoshi['estado'] == 'Hambriento') {
            $tamagoshi['estado'] = 'Feliz';
    
        } else if ($tamagoshi['estado'] == 'Triste') {
            $mensaje = 'Vomite y sigo deprimido...';
    
        } else if ($tamagoshi['estado'] == 'Feliz') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Sediento') {
            $mensaje = 'No pasa one';
    
        }
    
    } else if($accion == 'Beber') {
    
        if($tamagoshi['estado'] == 'Hambriento') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Triste') {
            $mensaje = 'Titilo y hago 3 beeps.....';
    
        } else if ($tamagoshi['estado'] == 'Feliz') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Sediento') {
            $tamagoshi['estado'] = 'Feliz';
    
        }
    
    } else if($accion == 'Mimar') {
    
        if($tamagoshi['estado'] == 'Hambriento') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Triste') {
            $tamagoshi['estado'] = 'Feliz';
    
        } else if ($tamagoshi['estado'] == 'Feliz') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Sediento') {
            $mensaje = 'No pasa one';
        }
    }
}







