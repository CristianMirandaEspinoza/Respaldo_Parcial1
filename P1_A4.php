<a href="index.php">inicio</a><br><br>

<?php
//---------------------------------------
// <strong> Letras negritas </strong>
echo"<br><strong> For </strong><br>";

for($i=0;$i< 5;$i++){
	echo "$i <br>";
}

//------------------------------------------
echo"<br><strong> For inverso</strong><br>";

for($i=5;$i > 0;$i--){
	echo "$i <br>";
}

//------------------------------------------
echo"<br><strong> While </strong><br>";

$ciclos =0;
while ( $ciclos<= 5) {
	$ciclos=$ciclos+1;
	//$ciclos=++$ciclos++;
	echo "$ciclos<br>";
}

//-----------------------------------------
echo"<br><strong> Do While </strong><br>";

$ciclos =0;

do{

	$ciclos++;
	echo "$ciclos<br>";

	} while ( $ciclos< 3);
//--------------------------------------
echo"<br><strong> Arreglo</strong><br>";
$ArrNew =[1,"a",3,3.445,true];
echo var_dump($ArrNew);
echo "<br>";

//--------------------------------------
echo"<br><strong> Arreglo al inicio </strong><br>";

array_push ($ArrNew,"Var1");
echo var_dump($ArrNew);
echo "<br>";
//--------------------------------------
echo"<br><strong> Arreglo al final </strong><br>";

array_unshift ($ArrNew,"Var2");
echo var_dump($ArrNew);
echo "<br>";

//--------------------------------------
echo"<br><strong> Eliminar elemento</strong><br>";

unset ($ArrNew[2]);
echo var_dump($ArrNew);
echo "<br>";

//--------------------------------------
echo"<br><strong> conteo de elemento</strong><br>";

$nElemento= count($ArrNew);
echo $nElemento;
echo "<br>";
 //--------------------------------------
echo"<br><strong> Merge de array</strong><br>";

$ar1=[1,2,3];
$ar2=[4,5,6];

$armerge= array_merge($ar1,$ar2);
echo var_dump($armerge) ;
echo "<br>";

 //--------------------------------------
echo"<br><strong> voltear arreglo </strong><br>";

$armerge= array_reverse($armerge);
echo var_dump($armerge);
echo "<br>";
//----------------------------------
echo"<br><strong> Merge de array diferentes </strong><br>";

$arr1=[1,2,3];
$arr2=[1,3,5,4];

$armerge= array_replace($arr1,$arr2);
echo var_dump($armerge) ;
echo "<br>";

//----------------------------------
echo"<br><strong> ordenar acendente </strong><br>";

sort($armerge);
echo var_dump($armerge) ;
echo "<br>";

//----------------------------------
echo"<br><strong> ordenar decendente </strong><br>";

rsort($armerge);
echo var_dump($armerge) ;
echo "<br>";

//----------------------------------
echo"<br><strong> Verificar si se encuentra elemento </strong><br>";

if (in_array(2,$armerge)) {

echo "se encontro <br>" ;	
}else{ echo "se encontro <br>" ;}

//-----------------------------------
echo"<br><strong> Foreach linean (datos) </strong><br>";
$num=[1,2,3,"a",array(6,7,8 ),array(9,20)];
foreach ($num as $item) {

	if (is_array($item)) {

		foreach ($item as $subitem) {
			echo "$subitem<br>";
		}

		}else {
			echo "-$item<br>";
		}
		
}
//-----------------------------------------
echo"<br><strong> Arreglo asociativo (datos) </strong><br>";
$asociativo=["primero"=>"1","segundo"=>"2"];
echo $asociativo["primero"]."<br>";

?>