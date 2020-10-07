 <a href="index.php">inicio</a><br><br>
<?php
        include('p1_A8 _Modelo.php');
        include('p1_A8 _function.php');

        titulo("Creación de objetos persona");

        $mPersona         = new Persona();
        $mPersona->nombre = "Cris";
        $mPersona->edad   = 23;

        echo var_dump($mPersona) . "<br>";

        $mPersona2         = new Persona();
        $mPersona2->nombre = "Gwineth";
        $mPersona2->edad   = 22;

        echo var_dump($mPersona2) . "<br>";

        titulo("Imprimir valores");
        echo  "$mPersona->nombre tiene $mPersona->edad  años<br>";
        echo "$mPersona2->nombre tiene $mPersona2->edad años<br>";

        titulo("Imprimir desde función");
        $mPersona->Saluda();
        $mPersona2->RespondeSaludo($mPersona->nombre);

        titulo("Imprimir pasando parámetros");

        titulo("Retornar valores");
        $edadPersona1 = $mPersona->getEdad();
        echo "$edadPersona1 años<br>";

        titulo("Asignar un valor");
        $mPersona->setEdad(21);
        $edadPersona1 = $mPersona->getEdad();
        echo "$edadPersona1 años<br>";

        titulo("Variable estática");
        echo Persona::$mayoriaEdad . "<br>";

        titulo("Función estática");
        echo Persona::getMayoriaEdad() . "<br>";

        ?>
    