<?php
include ('Layout/Header.php'); ?>
<a href="P1_A10.php">Regresar a Pagina 1</a><br><br>	

<!DOCTYPE html>
	<html lang="en">

	<meta charset="utf-8">
	<meta name="viewport" content:>
	<head>
		<title>Document</title>
		</head>
	<body>

		<h1>Pagina2</h1>

		<?php
		if (isset($_POST["miVariable"])) {
		 	$miVariableenPHP=$_POST["miVariable"];
		 	$miVariableenPHP=$miVariableenPHP +5;
		 } else{
		 	$miVariableenPHP=0;
		 }

		?>

	<?php	include ('Layout/Footer.php'); ?>
	
	<form method="POST">
	
		<input type="number" name="miVariable" placeholder="Numero" value="<?php echo $miVariableenPHP;?>"><br>

		<button name="enviar">Enviar</button>
		
	</form> <br>
	
	</body>
	</html>




