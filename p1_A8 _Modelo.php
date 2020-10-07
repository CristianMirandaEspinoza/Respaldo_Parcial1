<?php

class Persona
{
    public $nombre;
    public $edad;
    public static $mayoriaEdad = 18;

    public function __construct() {  }

    public function Saluda()
    {
        echo "Hola que tal, me llamo $this->nombre<br>";
    }

    public function RespondeSaludo($nombreInterlocultor)
    {
        echo "Encantado $nombreInterlocultor, me llamo $this->nombre<br>";
    }

    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edadEntrada)
    {
        $this->edad = $edadEntrada;
    }

    public static function getMayoriaEdad()
    {
        echo self::$mayoriaEdad;
    }
}