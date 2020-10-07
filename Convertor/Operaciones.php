<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

<center><a href="index.php">inicio</a><br><br></center>

<center>
<?php 

	if ($_POST ["N1"] !=""){
		
		// Distancia

		if ($_POST["Inicio"] == "cm" and $_POST["Final"] == "m" ) {
			
			round (($res = $_POST ["N1"] /100),2);
			echo  $res." "."M";	
		} 

		elseif ($_POST["Inicio"] == "m" and $_POST["Final"] == "cm" ) {
			
			round (($res = $_POST ["N1"] *100),2);
			echo  $res." "."CM";	
		} 

		elseif ($_POST["Inicio"] == "cm" and $_POST["Final"] == "p" ) {
			
			round (($res = $_POST ["N1"]/2.54),2);
			echo  $res." "."Pulgadas";	
		} 

		elseif ($_POST["Inicio"] == "p" and $_POST["Final"] == "cm" ) {
			
			round (($res = $_POST ["N1"] *2.54),2);
			echo  $res." "."CM";
		} 

		elseif ($_POST["Inicio"] == "cm" and $_POST["Final"] == "y" ) {
			
			round (($res = $_POST ["N1"] / 91.44),2);
			echo  $res." "."Yardas";	
		} 

		elseif ($_POST["Inicio"] == "y" and $_POST["Final"] == "cm" ) {
			
			round (($res = $_POST ["N1"] * 91.44),2);
			echo  $res." "."CM";	
		} 

		elseif ($_POST["Inicio"] == "m" and $_POST["Final"] == "p" ) {
			
			round (($res = $_POST ["N1"] * 39.37),2);
			echo  $res." "."Pulgadas";	
		}

		elseif ($_POST["Inicio"] == "p" and $_POST["Final"] == "m" ) {
			
			round (($res = $_POST ["N1"] / 39.37),2);
			echo  $res." "."M";	
		}

		elseif ($_POST["Inicio"] == "p" and $_POST["Final"] == "m" ) {
			
			round (($res = $_POST ["N1"] / 39.37),2);
			echo  $res." "."M";	
		}

		elseif ($_POST["Inicio"] == "m" and $_POST["Final"] == "y" ) {
			
			round (($res = $_POST ["N1"] *1.094),2);
			echo  $res." "."Yardas";	
		}

		elseif ($_POST["Inicio"] == "y" and $_POST["Final"] == "m" ) {
			
			round (($res = $_POST ["N1"] /1.094),2);
			echo  $res." "."M";	
		}

		elseif ($_POST["Inicio"] == "p" and $_POST["Final"] == "y" ) {
			
			round (($res = $_POST ["N1"] /36),2);
			echo  $res." "."Yardas";	
		}

		elseif ($_POST["Inicio"] == "y" and $_POST["Final"] == "p" ) {
			
			round (($res = $_POST ["N1"] *36),2);
			echo  $res." "." Pulgadas";	
		}

		// Volumen

		elseif ($_POST["Inicio"] == "l" and $_POST["Final"] == "ml" ) {
			
			round (($res = $_POST ["N1"] *1000),2);
			echo  $res." "." ML";	
		}

		elseif ($_POST["Inicio"] == "ml" and $_POST["Final"] == "l" ) {
			
			round (($res = $_POST ["N1"] /1000),2);
			echo  $res." "." L";	
		}

		elseif ($_POST["Inicio"] == "l" and $_POST["Final"] == "mc" ) {
			
			round (($res = $_POST ["N1"] /1000),2);
			echo  $res." "." Metros Cubicos";	
		}

		elseif ($_POST["Inicio"] == "mc" and $_POST["Final"] == "l" ) {
			
			round (($res = $_POST ["N1"] *1000),2);
			echo  $res." "." L";	
		}

		elseif ($_POST["Inicio"] == "ml" and $_POST["Final"] == "mc" ) {
			
			round (($res = $_POST ["N1"] /1000000),2);
			echo  $res." "." Metros Cubicos";	
		}

		elseif ($_POST["Inicio"] == "mc" and $_POST["Final"] == "ml" ) {
			
			round (($res = $_POST ["N1"] *1000000),2);
			echo  $res." "." ML";	
		}

		//Peso

		elseif ($_POST["Inicio"] == "gr" and $_POST["Final"] == "k" ) {
			
			round (($res = $_POST ["N1"] /1000),2);
			echo  $res." "." K";	
		}

		elseif ($_POST["Inicio"] == "k" and $_POST["Final"] == "gr" ) {
			
			round (($res = $_POST ["N1"] *1000),2);
			echo  $res." "." gr";	
		}

		elseif ($_POST["Inicio"] == "gr" and $_POST["Final"] == "o" ) {
			
			round (($res = $_POST ["N1"] / 28.35 ),2);
			echo  $res." "." Onzas";	
		}

		elseif ($_POST["Inicio"] == "o" and $_POST["Final"] == "gr" ) {
			
			round (($res = $_POST ["N1"] / 28.35 ),2);
			echo  $res." "." gr";	
		}

		elseif ($_POST["Inicio"] == "k" and $_POST["Final"] == "o" ) {
			
			round (($res = $_POST ["N1"] *35.274 ),2);
			echo  $res." "." Onzas";	
		}

		elseif ($_POST["Inicio"] == "o" and $_POST["Final"] == "k" ) {
			
			round (($res = $_POST ["N1"] /35.274 ),2);
			echo  $res." "." K";
		}

		//Mismo Valor

		elseif ($_POST["Inicio"] == "cm" and $_POST["Final"] == "cm" ) {
			echo  $_POST ["N1"]." "." CM";
		}

		elseif ($_POST["Inicio"] == "m" and $_POST["Final"] == "m" ) {
			echo  $_POST ["N1"]." "." M";
		}

		elseif ($_POST["Inicio"] == "p" and $_POST["Final"] == "p" ) {
			echo  $_POST ["N1"]." "." Pulgada";
		}

		elseif ($_POST["Inicio"] == "y" and $_POST["Final"] == "y" ) {
			echo  $_POST ["N1"]." "." Yardas";
		}

		elseif ($_POST["Inicio"] == "gr" and $_POST["Final"] == "gr" ) {
			echo  $_POST ["N1"]." "." gr";
		}

		elseif ($_POST["Inicio"] == "k" and $_POST["Final"] == "k" ) {
			echo  $_POST ["N1"]." "." k";
		}

		elseif ($_POST["Inicio"] == "o" and $_POST["Final"] == "o" ) {
			echo  $_POST ["N1"]." "." Onzas";
		}

		elseif ($_POST["Inicio"] == "l" and $_POST["Final"] == "l" ) {
			echo  $_POST ["N1"]." "." L";
		}

		elseif ($_POST["Inicio"] == "ml" and $_POST["Final"] == "ml" ) {
			echo  $_POST ["N1"]." "." ML";
		}

		elseif ($_POST["Inicio"] == "mc" and $_POST["Final"] == "mc" ) {
			echo  $_POST ["N1"]." "." Metros Cubicos";
		}

		//Error

		else{
			
			echo  "Error fuiste hackeado por la NASA";
		}
	} 
?>
</center>
</body>
</html>