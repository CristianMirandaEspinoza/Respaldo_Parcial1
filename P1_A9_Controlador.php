<?php
include_once('P1_A9_Usuario.php');

$mUsuario = new Usuario();
$mUsuario->nombre ="Cris";
$mUsuario->edad=30;
$mUsuario->save();


//Buscar un ususario
//$musuarioCargado=Usuario::buscarUsuario(1);

//Elimina Usuario
//$musuarioCargado->delete();

//Actualizar usuario
//$musuarioCargado->edad=25;
//$musuarioCargado->save();

//Buscar todos los usuarios
//$mUsuarios= Usuario::all();

echo var_dump($mUsuario);




?>



