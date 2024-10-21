<?php
/* CBTIS 89
Programa que numeros del 1 al 100
Véronica Martínez Anaya
3A Programación Matutino
*/
$numeros = range(1, 100);
 for ($i = 0; $i <count($numeros); $i++){
 	if ($numeros[$i] %2 == 0) {
 		echo $numeros[$i] . "<br>";
 	}
 }
?>