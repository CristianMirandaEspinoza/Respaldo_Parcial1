<!DOCTYPE html>
<html>
	<head>
		<title>P1_A11</title>
	</head>
	<body>
		<center><h1>Convertor</h1></center>
		
			
			<center><form action="Operaciones.php" method="post">
				<a> Cual es la medida inicial:</a>
				<select name="Inicio">

				<option value="cm">Centimetros</option>
				<option value="m">Metros</option>
				<option value="p">Pulgada</option>
				<option value="y">Yarda </option>

				<option value="gr">Gramo</option>
				<option value="k">Kilogramo</option>
				<option value="o">Onza</option>

				<option value="l">Litro</option>
				<option value="ml">Mililitro</option>
				<option value="mc">Metro cubico</option>

			</select></center><br />

			<center><form action="Operaciones.php" method="post">
				<a> A Que medida quieres convertir:</a>
				<select name="Final">

				<option value="cm">Centimetros</option>
				<option value="m">Metros</option>
				<option value="p">Pulgada</option>
				<option value="y">Yarda </option>

				<option value="gr">Gramo</option>
				<option value="k">Kilogramo</option>
				<option value="o">Onza</option>

				<option value="l">Litro</option>
				<option value="ml">Mililitro</option>
				<option value="mc">Metro cubico</option>

			</select></center><br />

			<center>Dame un numero :</center><br />
			<center><input type="text" name="N1"></center><br />
			<center><input type="submit" value="Calcular"></center>

		</form>
	</body>
</html>