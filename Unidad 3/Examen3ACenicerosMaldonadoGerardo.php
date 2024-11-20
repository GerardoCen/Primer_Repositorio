<?
/*
Examen3ACenicerosMaldonadoGerardo.php
TM
Cbtis 89
*/
$productos = ["Vestido, Pantalon, Cinturon, Camiseta"];
$precios = [
	[500, 600, 550],
	[800, 700, 600],
	[400, 200, 300],
	[500, 200, 500] 
];

foreach ($productos as $i => $productos) {
	$subtotal = array ($precios [$i]);
	promedio = subtotal / 3;
	echo "$productos: subtotal = $subtotal, promedio = ". "<br>";

}
?>

