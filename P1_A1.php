<a href="index.php">inicio</a><br><br>
<?php

echo 1+1;
echo "<strong> Mi Titulo </strong>";

// Es un Comentario
/* Otro comentario */
//-----------------------------------

echo "<strong> Impresion en PHP</strong><br>";

$var =1+3;

$var="Hola";

$var="1.234";

echo $var. "<br>";


//--------------------------------------
echo "<br><strong> operaciones aritmeticas</strong><br>";

echo 1+1 . "<br>";
echo 3-1 . "<br>";
echo 2*3 . "<br>";
echo 10/5 . "<br>";
echo 10 % 7 . "<br>";
//---------------------------------------
echo "<br><strong> Impresion desde comillas</strong><br>";
$variable = "hola como estas";
echo " $variable <br>";

//----------------------------------------
echo "<br><strong> Validacionnulo<br>";

if(is_bool(false)){
	echo "Es Booleano <br>";
}
else{
	echo "No es Booleano<br>";


//----------------------------------------

if(is_null($variable)){
	echo "Es nulo <br>";
}
else{
	echo "No es nulo <br>";
}

// is_null, is bool, is_float, is_int,is_string, is_object,is_array
//----------------------------------------
echo "<br><strong> Verificar declaracion<br>";
if(isset($variable2)){
		echo " si esta declarada <br>";
	}
		else {

			echo " si esta declarada <br>";

		}
}

?>



