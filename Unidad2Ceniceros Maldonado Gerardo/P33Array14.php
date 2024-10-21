<?php
/* CBTIS 89
Programa que pone nombres de manera ascendente y descendente
Véronica Martínez Anaya
3A Programación Matutino
*/

$nombres = array("Ana", "Beto", "Carlos", "Daniel", "Elena", "Gerardo" );


sort($nombres);
echo "Datos del arreglo ordenados de forma ascendente por medio de un ciclo for<br>";
for ($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i] . "<br>";
}


array_push($nombres, "Fernando", "Gabriela", "Hugo", "Isabel");


array_splice($nombres, 1, 2); 

rsort($nombres);
echo "<br>Datos del arreglo ordenados de forma descendente por medio de un ciclo for<br>";
for ($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i] . "<br>";
}


echo "<br>El número de elementos actual en el arreglo es de: " . count($nombres);
?>