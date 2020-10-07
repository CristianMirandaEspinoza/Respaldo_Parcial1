<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

<a href="index.php">inicio</a><br><br>

<?php

// Calcular edad de persona
$Hday=8;
$Hmes=9;
$Han=2020;

$NDia=11;
$NMes = 7;
$NAn= 1997;

// Desarollo de codigo

//if (($NMes == $Hmes) && ($NDia >= $Hday)) {
//$Han=($Han-1); }

//if ($NMes > $Hmes) {
//$Han=($Han-1);}


//$N1=$Han-$NAn;

//echo "Tienes:<br><br>";
//echo $N1; echo"  Años";

/*
//Que desea obteber -> Edad.
//Determinar si se resta o no un año.
*/

//1.- La fecha ya paso o es el dia de hoy.
//2.- La fecha no a pasado (No cumple años).

//si mes actual es mayor-> ya paso fecha.
// Mismo mes y dia es mayor o igual-> ya paso fecha.
// si mes actual es menor -> no a pasado

$yapasofecha= false;

if($Hmes > $NMes){
	$yapasofecha=true;
}

if($Hmes == $NMes){
	if($Hday >= $NDia){
	$yapasofecha=true;
}
}

if($Hmes < $NMes){
	$yapasofecha=false;
}

if($yapasofecha){
	$edad=$Han-$NAn;
}else{
	$edad= $Han-$NAn-1;
};

echo $edad;
?>

</body>
</html>