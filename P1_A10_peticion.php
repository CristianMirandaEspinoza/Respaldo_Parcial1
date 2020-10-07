<?php 

$metodo =$_SERVER["REQUEST_METHOD"];
//echo $metodo."<br>";

if ($metodo != "POST") {
	http_response_code(405);
	die("Method Not Allowed");

}

if(isset($_GET["nombre"])){

$nombreRecibido=$_GET["nombre"];
}

if(isset($_POST["nombre"])){

$nombreRecibido=$_POST["nombre"];
}

if(isset($_POST["sumar"])){

echo var_dump($_POST["sumar"]).
"Se seleciono Sumar";
}

if(isset($_POST["restar"])){

echo var_dump($_POST["restar"]).
"Se seleciono restar"
}


echo $nombreRecibido;
?>