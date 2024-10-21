<?php
/* CBTIS 89
P21Array3.php
Programa que almacena diversos datos en un arreglo.
Véronica Martínez Anaya
3A Programación Matutino
*/
$arraynombres = $array ("Karina","Marco","Rocio","Roberto","Fer","Juan");

//Se obtiene el nunmero de elementos 
$longitud = count($arraymombres);

//Recorre todos los elemntos 
for($=0; $i<$longitud; $i++)
	{ // se obtiene el valor de cada elemento
		echo $arraynombres[$i];
		echo "<br>";
	}
?>