<?php
/* CBTIS 89
Programa que asocia ropa
Véronica Martínez Anaya
3A Programación Matutino
*/
$nombres = array("Carlos", "Mariana", "Juan", "Ana", "Paola", "Nahomi", "Gerardo");

$Snombre = "Ana";

foreach ($nombres as $nombre) {
	if ($nombre == $Snombre) {
		echo "Este nombre esta en el array: " . $Snombre . "<br>";
	}
}
?>