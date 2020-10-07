<a href="index.php">inicio</a><br><br>

<?php
echo"<br><strong> 1º Imprecion de frecuencia mediante ciclos </strong><br>";
echo "<br>";


$a = null;
for($i=1;$i <= 6;$i++){

	for($z=$i; $z<= $i;$z++){
	
	$a .="$i";
}
	echo "$a <br>";
}
//------------------------------------------

echo"<br><strong> 2º Imprecion de frecuencia mediante ciclos </strong><br>";
echo "<br>";

$w = 7;

for($n=$w - 1; $n >= 1; $n--){
    echo str_pad('', $n, $n) . '<br />';
}

//------------------------------------------

echo"<br><strong> 3º Imprimir los dias del calendario </strong><br>";
echo "<br>";

$M=0;
$a=0;	$b=0;	$c=0;

$Ano=array('Enero'=>$M,'Febrero'=>$M,'Marzo'=>$M,'Abril'=>$M,'Mayo'=>$M,'Junio'=>$M,'Julio'=>$M,'Agosto'=>$M,'septiembre'=>$M,'Octubre'=>$M,'Noviembre'=>$M,'Diciembre'=>$M, );
	
if ($Ano="Enero"||$Ano="Marzo"||$Ano="Mayo"||$Ano="Julio"||$Ano="Agosto"||$Ano="Octubre"||$Ano="Diciembre"){
	$M=$a;
}

if ($Ano="Abril"||$Ano="Junio"||$Ano="septiembre"||$Ano="Noviembre"){
	$M=$b;
}

if ($Ano="Febrero"){
	$M=$c;
} 

		for($i=1;$i <= 31;$i++){
	$a .=","."$i";
}


		for($i=1;$i<= 30;$i++){
	$b .=","."$i";
}

		for($i=1;$i <= 28;$i++){
	$c .=","."$i";
}
	//$d=null;

	//for($i=1;$i <= $Ano.length;$i++){

	//for($z=$i; $z<= $i;$z++){
	
	//$d ="$Ano[i]";
//}
	//echo "$d" .":"."$M"."<br>";
//}
echo "Enero".": " ."$a <br>";
echo "Febrero".": " ."$c <br>";
echo "Marzo".": " ."$a <br>";
echo "Abril".": " ."$b <br>";
echo "Mayo".": " ."$a <br>";
echo "Junio".": " ."$b <br>";
echo "Julio".": " ."$a <br>";
echo "Agosto".": " ."$a <br>";
echo "Septiembre".": " ."$b <br>";
echo "Octubre".": " ."$a <br>";
echo "Novirmbre".": " ."$b <br>";
echo "Diciembre".": " ."$a <br>";
//------------------------------------------

echo"<br><strong> 4º Piramide </strong><br>";
echo "<br>";

echo"<center>";
$a = null;
for($i=1;$i <= 10;$i++){

	for($z=$i; $z<= $i;$z++){
	
	$a .="$i";
}
	echo "$a <br>";
	"<center/>";
}
//-----------------------------------------
echo"<br><strong> 5º Rombo </strong><br>";
echo "<br>";

$n = 4;
	$a = null;

	echo"<center>";
for($i=0;$i <= 5;$i++){

	for($z=$i; $z<= $i;$z++){
	
	$a .="$i";
}
	echo "$a <br>";
}
//-------------------------------
    for($i=$n-1;$i>=0;$i--) {
    for($j=0;$j<=$n-$i;$j++)
        echo(" ");

    for($j=0;$j<=$i;$j++)
        echo($j);

    for($j=$i-1;$j>=0;$j--)
        echo($j);

    echo("<br>");
}

?>