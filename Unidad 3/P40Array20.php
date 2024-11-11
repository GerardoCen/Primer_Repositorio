<?php
/* CBTIS 89
P40Array20.php
Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los números pares, en el $Arreglo2 van los números impares, en el $Arreglo3 va la suma de los números correspondientes al mismo índice.
Ceniceros Gerardo 
3A Programación TM */
echo "CBTIS 89<br><br>";
echo "Arreglo1 ------ Arreglo2 ------ Arreglo3<br>";

$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();

for ($i = 150; $i <= 200; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i;
        $Arreglo2[] = $i + 1;
    }
}

for ($j = 0; $j < count($Arreglo1); $j++) {
    $Arreglo3[] = $Arreglo1[$j] + $Arreglo2[$j];
    echo "{$Arreglo1[$j]} ------ {$Arreglo2[$j]} ------ {$Arreglo3[$j]}<br>";
}
?>