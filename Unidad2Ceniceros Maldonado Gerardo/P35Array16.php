<?php
/* CBTIS 89
Ceniceros Maldonado Gerardo
Programa que hace sumas y restas. (Examen Prueba)
P35Array16
*/
$array1 = [10, 20, 30, 40, 50];
$array2 = [3, 7, 6, 15, 18];
echo "SUMA ENTRE ARREGLOS<br>";
for ($i = 0; $i < count ($array1); $i++) {
	$num = array1[$i] + array2 [$1];  
	echo $array1[$i] . " + " . $array2[$i] . " = " . $sum . "<br>";
}
echo  "RESTA ENTRE ARREGLOS";
for ($i = 0; $i < count ($array1); $i++){
	$num = array1 [$i] - array2 [$1];
	echo $array1[$i] . " - " . $array2[$i] . " = " . $sum . "<br>";
}
echo  "MULTIPLICACIÓN ENTRE ARREGLOS";
for ($i = 0; $i < count ($array1); $i++){
	$num = array1 [$i] * array2 [$1];
	echo $array1[$i] . " * " . $array2[$i] . " = " . $sum . "<br>";
}
echo  "DIVISIÓN ENTRE ARREGLOS";
for ($i =0; $i < count ($array1); $i++) {
if ($array2[$i] != 0) {
	$div = $array1[$i] / $array2[$i];
	echo $array1[$i] . " / " $array2[$i] . " = " . $div . "<br>";
} else {
	echo $array1[$i] . " / " . $array2[$i] . " = No se puede dividir entre 0 ";
   }
}
?>
