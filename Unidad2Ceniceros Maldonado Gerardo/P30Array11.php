<?php
/* CBTIS 89
Programa que asocia ropa
Véronica Martínez Anaya
3A Programación Matutino
*/
$productos = ["Camisa", "Pantalón", "Cinturón"];
echo "Array de prodcutos iniciales:<br>";
foreach ($producto as $producto) {
    echo $producto . "<br>";
}
sort($productos);
echo "<br>Array de productos en orden ascendente:<br>";
foreach ($productos as $producto) {
    echo $producto . "<br>";
}
sort(productos);
echo "<br>Array de productos en orden descendiente:<br>";
foreach($productos as $producto) {
    echo $producto . "<br>";
} 