<?php
    require('helpers.php');
    require('Classes/classesIndex.php');

    $alumno1 = new Alumno('bort@gmail.com', 'Bort Bort', '14', 65544544);
    $alumno2 = new Alumno('lala@gmail.com', 'Bort Bort', '14', 65544544);
    $alumno3 = new Alumno('lalo_landa@gmail.com', 'Bort Bort', '14', 65544544);
    $alumno4 = new Alumno('jon_snow@gmail.com', 'Bort Bort', '14', 65544544);
    $alumno5 = new Alumno('cosme_fulanito@gmail.com', 'Bort Bort', '14', 65544544);
    //$alumno1->id = 1;

    $fullstack = new Curso('Fullstack TN2', 'Noche', 'Presencial');

    $fullstack->altaAlumnos($alumno1);
    $fullstack->altaAlumnos($alumno2);
    $fullstack->altaAlumnos($alumno3);
    $fullstack->altaAlumnos($alumno4);

    $arrComision = $fullstack->getComision();

    // for ($i=0; $i < count($arrComision); $i++) { 
    //     dump($arrComision[$i]->email . PHP_EOL);
    // }

    $android = new Curso('Mobile TT5', 'Tarde', 'Presencial');

    dump($android);

    $android->setTurno('Mañana');
    dump($android);