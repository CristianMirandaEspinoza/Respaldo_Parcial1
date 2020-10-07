<a href="index.php">inicio</a><br><br>
<?php

//-------------------------------------
echo "<br><strong>if </strong><br>";

/* Triple igual para validar son exactamente iguales */

if( 1 == "1"){
	echo "Verdadero";
}
else{
	echo "Falso";
}

//----------------------------------------
echo "<br><strong>Valor directo</strong><br>";

// cualquier numero diferente de 0
//Cualquier string no vacio
//Valor true
// &&-> AND
//|| -> OR

$v = "a";

if($v == "a"){
	echo "Verdadero";
}
else{
	echo "Falso";
}

echo "<br><strong> switch case </strong><br>";

$var1=1;

switch ("var1") {
	
	case 1: echo "numero<br>";
		break;

		case "1": echo "string<br>";
		break;
	
	case true: echo "Booleano<br>";
		break;

	case 1.00: echo "Decimal<br>";
		break;

	default: echo "ninguno<br>"; break;
}
?>