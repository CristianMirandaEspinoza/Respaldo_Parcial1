<a href="index.php">inicio</a><br><br>

<?php
//---------------------------------------
function imprimirSalto(){
	echo "<br><strong>Impreso desde funcion</strong><br>";
}	

imprimirSalto();

function salto(){
	echo "<br><hr><br>";
}

salto ();

//------------------------------------------
function titulo($titulo){
	echo "<br><strong> $titulo </strong><br>";
}

$titulo= " Impreso pasando parametros";
titulo($titulo);
salto();

//------------------------------------------

function getTitulo($titulo){
	return "<br><strong> $titulo </strong><br>";
}

$tituloRegresado= getTitulo(" Impreso retornando un valor");
echo $tituloRegresado;
salto();

//------------------------------------------

function getTituloImprimiendo($titulo){
	echo "<br><strong> $titulo </strong><br>";
	return "<br><strong>$titulo </strong><br>";
}

$tituloRegresado= getTituloImprimiendo(" Impreso retornando un valor");
echo $tituloRegresado;
salto();

//------------------------------------------

function tituloDefault($titulo= "Titulo por defecto"){
	echo "<br><strong> $titulo </strong><br>";
}

tituloDefault();
salto();

//------------------------------------------
$numero=1; 

function SumaUno($numeroEntrada){
	$numeroEntrada++;
	echo "$numeroEntrada (Impreso desde funcion SumaUno)<br>";
}

SumaUno($numero);
echo $numero .'Impreso Externo <br>';

//------------------------------------------

function SumaUnoporeferencia(&$numeroEntrada){
	$numeroEntrada++;
	echo "$numeroEntrada (Impreso desde funcion SumaUnoporeferencia)<br>";
}

SumaUnoporeferencia($numero);
echo $numero .'Impreso Externo <br>';

//-----------------------------------------

//d6o42mx

//------------------------------------------


?>