<?php
/* CBTIS 89
Programa que es fruteria
Véronica Martínez Anaya
Ceniceros Maldonado Gerardo
3A Programación Matutino
*/
$fruta=array("manzana"=> "25","mango"=>"40","limon"=>"35","naranja"=>"20");
echo "**FRUTERIA DEL SUR**", "<br>","<br>";
foreach ($fruta as $costo => $frutas) 
	{echo"El kilo de " . $costo " cuesta " $frutas;
	echo "<br>", "<br>";}
?>