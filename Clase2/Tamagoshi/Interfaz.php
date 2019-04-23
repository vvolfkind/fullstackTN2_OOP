<?php

$estado_inicial = 'Hambriento';
$accion = null;


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

if($_POST) {
    if($_POST['accion'] == 'Comer') {

        if($tamagoshi['estado'] == 'Hambriento') {
            $tamagoshi['estado'] = 'Feliz';
    
        } else if ($tamagoshi['estado'] == 'Triste') {
            $mensaje = 'Vomite y sigo deprimido...';
    
        } else if ($tamagoshi['estado'] == 'Feliz') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Sediento') {
            $mensaje = 'No pasa one';
    
        }
    
    } else if($_POST['accion'] == 'Beber') {
    
        if($tamagoshi['estado'] == 'Hambriento') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Triste') {
            $mensaje = 'Titilo y hago 3 beeps.....';
    
        } else if ($tamagoshi['estado'] == 'Feliz') {
            $mensaje = 'No pasa one';
    
        } else if ($tamagoshi['estado'] == 'Sediento') {
            $tamagoshi['estado'] = 'Feliz';
    
        }
    
    } else if($_POST['accion'] == 'Mimar') {
    
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








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamagoshi</title>
    <style>
        body {
            padding: 50px;
            font-family: sans-serif;
        }

        .tamagoshi {
            width: 300px;
            height: 300px;
            background-color: yellow;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url(https://ih1.redbubble.net/image.359543737.4556/flat,550x550,075,f.u5.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border: 2px solid #000;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <section class="">
        <h1>Estado: <?=$tamagoshi['estado'] ?></h1>
        <form class="tamagoshi" action="" method="POST">
            <select name="accion" id="">
                <option value="" selected disabled>Seleccionar</option>
                <option value="Beber">Dar de Beber</option>
                <option value="Comer">Dar de Comer</option>
                <option value="Mimar">Mimar</option>
            </select>
            <input class="" type="submit" value="go!">
        </form>
        <?php if($mensaje !== null):?>
        <article>
            <h4><?=$mensaje; ?></h4>
        </article>
        <?php endif;?>
    </section>

</body>
</html>