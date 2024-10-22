<?php
/* CBTIS 89
Programa que es un repaso.
Véronica Martínez Anaya
3A Programación Matutino
*/

$num1 = 10; 
$num2 = 5;  


$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = ($num2 != 0) ? $num1 / $num2 : "Error: No se puede dividir por cero";


echo "<h2>Resultados de las operaciones:</h2>";
echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
?>