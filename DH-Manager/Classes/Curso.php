<?php

class Curso {

    private $nombreCurso;
    private $codigoCurso;
    private $profesorTitular;
    private $profesorAdjunto;
    private $cupoMaximo;
    private $alumnosInscriptos = array();

    public function __construct(
        string $nombreCurso, 
        int $codigoCurso,  
        int $cupoMaximo 
    )
    {
        $this->nombreCurso = $nombreCurso;
        $this->codigoCurso = $codigoCurso;
        $this->cupoMaximo = $cupoMaximo;
    }

    public function getNombreCurso(): string
    {
        return $this->nombre;
    }

    public function setNombreCurso(string $nombreCurso): void
    {
        $this->nombre = $nombreCurso;
    }

    public function getCodigoCurso(): int
    {
        return $this->codigoCurso;
    }

    public function setCodigoCurso(int $idCurso): void
    {
        $this->codigoCurso = $codigoCurso;
    }

    public function getProfesorTitular(): ProfesorTitular
    {
        return $this->profesorTitular;
    }

    public function setProfesorTitular(ProfesorTitular $profesorTitular): void
    {
        $this->profesorTitular = $profesorTitular;
    }

    public function getProfesorAdjunto(): ProfesorAdjunto
    {
        return $this->profesorAdjunto;
    }

    public function setProfesorAdjunto(ProfesorAdjunto $profesorAdjunto)
    {
        $this->profesorAdjunto = $profesorAdjunto;
    }

    public function getCupoMaximo(): int
    {
        return $this->cupoMaximo;
    }

    public function setCupoMaximo(int $cupoMaximo): void
    {
        $this->cupoMaximo = $cupoMaximo;
    }

    public function listarAlumnos(): string
    {
        $mensaje = "Los alumnos incriptos son ";

        foreach($this->alumnosInscriptos as $alumno){
            $mensaje .= ($alumno->getNombre()).", ";
        }
        return $mensaje;
    }

    public function listarProfesores(): string
    {
        $profesorTitular = $this->getProfesorTitular();
        $profesorAdjunto = $this->getProfesorAdjunto();

        $message = "El profesor $profesorTitular->getNombre() es el titular, 
            acompañado por $profesorAjunto->getNombre() como adjunto";

        return $message;
    }

    public function agregarUnAlumno(Alumno $unAlumno): string
    {
        $cupoCurso = $this->getCupoMaximo();

        if(count($this->alumnosInscriptos) < $cupoCurso) {
            foreach($this->getAlumnosInscriptos() as $alumno) {
                if($alumno->getCodigoAlumno() == $unAlumno->getCodigoAlumno()) {
                    flashMessage('El Alumno ya existe en este curso');
                    return false;
                }
            }
            $this->alumnosInscriptos[] = $unAlumno;
            return true;
        } else {
            return false;
        }

    }


    /**
     * Get the value of alumnosInscriptos
     */ 
    public function getAlumnosInscriptos()
    {
        return $this->alumnosInscriptos;
    }

    /**
     * Set the value of alumnosInscriptos
     *
     * @return  self
     */ 
    public function setAlumnosInscriptos($alumnosInscriptos)
    {
        $this->alumnosInscriptos = $alumnosInscriptos;

        return $this;
    }
}
