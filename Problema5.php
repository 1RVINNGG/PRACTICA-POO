<?php

class Persona
{
    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
}

class Estudiante extends Persona
{
    protected string $matricula;
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(
        string $matricula,
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->matricula = $matricula;
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function getIndiceAcademico(): float
    {
        return $this->indiceAcademico;
    }

    public function getCohorte(): int
    {
        return $this->cohorte;
    }

    public function getEstadoAcademico(): int
    {
        return $this->estadoAcademico;
    }

    public function getModalidadEstudio(): int
    {
        return $this->modalidadEstudio;
    }
}//fin de la clase Estudiante

class Docente extends Persona
{
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $maximoTitulo;
    protected string $tipoContratacion;

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $maximoTitulo,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->maximoTitulo = $maximoTitulo;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente(): string
    {
        return $this->codigoDocente;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function getMaximoTitulo(): string
    {
        return $this->maximoTitulo;
    }

    public function getTipoContratacion(): string
    {
        return $this->tipoContratacion;
    }
}//fin de la clase Docente

$miEstudiante = new Estudiante(
    "8-988-123", // matrícula
    3.5, // índice académico
    2023, // cohorte
    1, // estado académico (0 = inactivo, 1 = activo, 2 = retirado, 3 = graduado)
    1, // modalidad de estudio (1 = presencial, 2 = virtual, 3 = híbrida)
    "Juan", // nombre
    "Pérez", // apellido
    "2000-05-15" // fecha de nacimiento
);

echo "El nombre del estudiante es: " . $miEstudiante->getNombre() . "<br>";
echo "El apellido del estudiante es: " . $miEstudiante->getApellido() . "<br>";
echo "La fecha de nacimiento del estudiante es: " . $miEstudiante->getFechaNacimiento() . "<br>";
echo "La matrícula del estudiante es: " . $miEstudiante->getMatricula() . "<br>";
echo "El índice académico del estudiante es: " . $miEstudiante->getIndiceAcademico() . "<br>";
echo "El cohorte del estudiante es: " . $miEstudiante->getCohorte() . "<br>";
echo "El estado académico del estudiante es: " . $miEstudiante->getEstadoAcademico() . "<br>";
echo "La modalidad de estudio del estudiante es: " . $miEstudiante->getModalidadEstudio() . "<br><br>";

$miDocente = new Docente(
    "D-0456", // código de docente
    "Sistemas", // departamento
    "Titular", // categoría
    "Magíster", // máximo título
    "Tiempo Completo", // tipo de contratación
    "María", // nombre
    "González", // apellido
    "1985-03-22" // fecha de nacimiento
);

echo "El nombre del docente es: " . $miDocente->getNombre() . "<br>";
echo "El apellido del docente es: " . $miDocente->getApellido() . "<br>";
echo "La fecha de nacimiento del docente es: " . $miDocente->getFechaNacimiento() . "<br>";
echo "El código del docente es: " . $miDocente->getCodigoDocente() . "<br>";
echo "El departamento del docente es: " . $miDocente->getDepartamento() . "<br>";
echo "La categoría del docente es: " . $miDocente->getCategoria() . "<br>";
echo "El máximo título del docente es: " . $miDocente->getMaximoTitulo() . "<br>";
echo "El tipo de contratación del docente es: " . $miDocente->getTipoContratacion() . "<br>";
?>
