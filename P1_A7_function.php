<a href="index.php">inicio</a><br><br>

<?php
//---------------------------------------
function imprimirSalto(){
	echo "<br><strong>Impreso desde funcion</strong><br>";
}	

function salto(){
	echo "<br><hr><br>";
}

//------------------------------------------
function titulo($titulo){
	echo "<br><strong> $titulo </strong><br>";
}


//------------------------------------------

function getTitulo($titulo){
	return "<br><strong> $titulo </strong><br>";
}


//------------------------------------------

function getTituloImprimiendo($titulo){
	echo "<br><strong> $titulo </strong><br>";
	return "<br><strong>$titulo </strong><br>";
}

//------------------------------------------

function tituloDefault($titulo= "Titulo por defecto"){
	echo "<br><strong> $titulo </strong><br>";
}

tituloDefault();
salto();

//------------------------------------------
 
function SumaUno($numeroEntrada){
	$numeroEntrada++;
	echo "$numeroEntrada (Impreso desde funcion SumaUno)<br>";
}


//------------------------------------------

function SumaUnoporeferencia(&$numeroEntrada){
	$numeroEntrada++;
	echo "$numeroEntrada (Impreso desde funcion SumaUnoporeferencia)<br>";
}


?>