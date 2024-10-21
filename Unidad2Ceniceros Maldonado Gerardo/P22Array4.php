<?php
/* CBTIS 89
Programa que almacena datos en un arreglo
Véronica Martínez Anaya
Ceniceros Maldonado Gerardo
3A Programación Matutino
*/
$equipo = array("portero"=> 'Julio','defensa'=> 'Diego','medio' => 'Jair', 'delantero' => 'Rafa');

echo "** SELECCIÓN NACIONAL **", "<br>", "<br>";
foreach ($equipo as $posicion => $jugador) 
	{ echo " El jugador " . $jugador . "es el " . $posicion;
	echo "<br>", "<br>";
}
?>