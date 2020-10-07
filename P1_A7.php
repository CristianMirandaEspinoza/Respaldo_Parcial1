
<?php

include('P1_A7_function.php');
include_once('P1_A7_function.php');

//---------------------------------------


salto ();

//------------------------------------------

$titulo= " Impreso pasando parametros";
titulo($titulo);
salto();

//------------------------------------------

$tituloRegresado= getTitulo(" Impreso retornando un valor");
echo $tituloRegresado;
salto();

//------------------------------------------

$tituloRegresado= getTituloImprimiendo(" Impreso retornando un valor");
echo $tituloRegresado;
salto();

//------------------------------------------

tituloDefault();
salto();

//------------------------------------------
$numero=1; 

SumaUno($numero);
echo $numero .'Impreso Externo <br>';

//------------------------------------------

SumaUnoporeferencia($numero);
echo $numero .'Impreso Externo <br>';

?>