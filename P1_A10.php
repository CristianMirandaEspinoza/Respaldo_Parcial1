<?php include ('Layout/Header.php'); ?>
<a href="P1_A10 _2.php">Pagina 2</a><br><br>

<?php

$imports=[
	'js'=>['js/site.js'],
	'css'=>['css/site.css']
];

?>

<!DOCTYPE html>
	<html lang="en">

	<meta charset="utf-8">
	<meta name="viewport" content:>
	<head>
		
	<body>

		<h1>Pagina1</h1>

<!--<button onclick="saludar()">Mostrar hola</button>-->


	<form action="P1_A10_peticion.php" method="POST">
		<input type="text" name="nombre" placeholder="Nombre"><br>

		<input type="number" name="edad" placeholder="Edad"><br>

		<button name="enviar">Enviar</button>
		<button name="sumar">Sumar</button>
		<button name="restar">Restar</button>

	</form> <br>




	<?php include ('Layout/Footer.php')?>

	
	</body>
	</html>





