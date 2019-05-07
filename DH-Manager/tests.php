<?php
ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');

require 'loader.php';
$dhmanager = new DigitalHouseManager();

$profesorTitular = new ProfesorTitular("Daniel", "Fuentes", 0, 3, "PHP");

$profesorAdjunto = new ProfesorAdjunto("Nicolas", "Rodrigues", 0, 6, 36);

$alumno_a = new Alumno("Nelson", "Nunez", 3);
$alumno_b = new Alumno("Jorge", "Nunez", 4);
$alumno_c = new Alumno("Martin", "Perez", 5);
$alumno_d = new Alumno("Diego", "Lopez", 6);

$dhmanager->altaCurso("Bombaypedal", 1, 3);
$dhmanager->altaCurso("Synthwave Avanzado", 2, 3);

$dhmanager->altaProfesorAdjunto('Rodo', 'Rodo', 1, 1000);$dhmanager->altaProfesorTitular('Rodo', 'Rodo', 1, "Gomero Avanzado");
$dhmanager->altaAlumno("Nelson", "Nunez", 3);
$dhmanager->altaAlumno("Sonia", "Nunez", 4);
$dhmanager->altaAlumno("Pao", "Nunez", 65);
$dhmanager->altaAlumno("Dante", "Nunez", 11);

$dhmanager->inscribirAlumno(11, 2);
$dhmanager->inscribirAlumno(11, 2);
$dhmanager->inscribirAlumno(11, 2);
$dhmanager->inscribirAlumno(11, 2);











dd($dhmanager);
