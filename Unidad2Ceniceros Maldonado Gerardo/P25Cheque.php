<?php
/* CBTIS 89
Programa que es es un cheque
Véronica Martínez Anaya
Ceniceros Maldonado Gerardo
3A Programación Matutino
*/
$cantidad = 1750;
echo "Hay $cantidad pesos.\n";


$cantidad -= 500;
echo "Tienes 1 billete de 500 pesos.\n";


$billetes = [200, 100, 50];


foreach ($billetes as $billete) {
    $numBilletes = floor($cantidad / $billete);
    echo "Necesitas $numBilletes billete(s) de $billete pesos.\n";
    $cantidad -= $numBilletes * $billete;
}
?>