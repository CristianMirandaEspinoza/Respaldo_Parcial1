<?php

class CalculadoraController 
{
    public $entrada;
    public $accion;
    public $resultado;
    public $pantalla;

    function __construct(){
        $this->entrada= 0;
        $this->accion= "";
        $this->resultado= 0;
        $this->pantalla= "0";
    }

    public function cachaParametros(){
        if (isset($_GET["pantalla"])) {
            $this->pantalla = $_GET["pantalla"];
        }

        if (isset($_GET["resultado"])) {
            $this->resultado = $_GET["resultado"];
        }

        if (isset($_GET["entrada"])) {
            $this->entrada = $_GET["entrada"];
        }

        if (isset($_GET["accion"])) {
            $this->accion = $_GET["accion"];
        }

        if (isset($_GET["reset"])) {
            $this->accion = $_GET["reset"];
        }
    }

    public function ejecutaOperacion(){
        switch ($this->accion) {
            case "suma": $this->suma(); break;
            case "resta": $this->resta(); break;
            case "multiplica": $this->multiplica(); break;
            case "divide": $this->divide(); break;
            default: break;
        }
    }
    private function reset(){
        $this->entrada= 0;
        $this->accion= "";
        $this->resultado= 0;
        $this->pantalla= "0";
    }
    
    private function suma(){
        $this->pantalla = $this->pantalla . " + " . $this->entrada;
        $this->resultado = $this->resultado + $this->entrada;
    }

    private function resta(){
        $this->pantalla = $this->pantalla . " - " . $this->entrada;
        $this->resultado = $this->resultado - $this->entrada;
    }

    private function multiplica(){
        $this->pantalla = $this->pantalla . " * " . $this->entrada;
        $this->resultado = $this->resultado * $this->entrada;
    }

    private function divide(){
        $this->pantalla = $this->pantalla . " / " . $this->entrada;
        $this->resultado = $this->resultado / $this->entrada;
    }

    
}

?>