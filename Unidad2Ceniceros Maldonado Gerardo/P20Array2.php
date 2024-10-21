<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo.
Véronica Martínez Anaya
3A Programación Matutino
*/
$nombre = "Anna";
$array = array(1, 2, 3, "Casa", $nombre);

//Se obtiene el numero de elementos 
$longitud = count($array);

//Recorre todos los elementos 
for($i=0; $i<$longitud; $i++)
	{ // se obtiene el valor de cada elemento 
		echo $array[$i];
		echo "<br>";
	}
	?>