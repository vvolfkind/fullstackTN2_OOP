<?php

class DigitalHouseManager {

    private $listaAlumnos = array();
    private $listaProfesores = array();
    private $listaCursos = array();

    public function getListaAlumnos()
    {
        return $this->listaAlumnos;
    }

    public function getListaProfesores()
    {
        return $this->listaProfesores;
    }

    public function getListaCursos()
    {
        return $this->listaCursos;
    }

    public function altaCurso($nombre, $codigoCurso, $cupoMaximoDealumnos)
    {
        $this->listaCursos[] = new Curso($nombre, $codigoCurso, $cupoMaximoDealumnos);
    }

    public function altaProfesorAdjunto(string $nombre, string $apellido, int $codigoProfesor, int $horasConsulta): void
    {
        $this->listaProfesores[] = new ProfesorAdjunto($nombre, $apellido, $codigoProfesor, $horasConsulta);
    }

    public function altaProfesorTitular(string $nombre, string $apellido, int $codigoProfesor, string $especialidad): void
    {
        $this->listaProfesores[] = new ProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad);
    }

    public function altaAlumno($nombre, $apellido, $codigoAlumno)
    {
        $this->listaAlumnos[] = new Alumno($nombre, $apellido, $codigoAlumno);
    }

    public function inscribirAlumno($codigoAlumno, $codigoCurso)
    {
        $alumnoEncontrado = null;
        $cursoEncontrado = null;

        $listaDeCursos = $this->listaCursos;

        foreach($this->listaAlumnos as $alumno) {
            if($alumno->getCodigoAlumno() == $codigoAlumno) {
                $alumnoEncontrado = $alumno;
            }
        }

        foreach ($listaDeCursos as $curso) {
            if($curso->getCodigoCurso() == $codigoCurso) {
                $cursoEncontrado = $curso;
            }
        }

        if($alumnoEncontrado !== null && $cursoEncontrado !== null) {
            if($cursoEncontrado->agregarUnAlumno($alumnoEncontrado)) {
                flashMessage('todo piola');
                return true;
            }

            flashMessage(get_class($cursoEncontrado));
            return false;

        }




    }
}