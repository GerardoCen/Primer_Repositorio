<?php
/* CBTIS 89
P34Array15.php
Programa que convierte los datos de un arreglo en 
una cadena de texto, y de forma contraria es
decir convierte una cadena de texto a los elementos 
dentro de un arreglo.
Verónica Martinez Anaya 
3A Programación Matutino */

//Almacena datos en un arreglo
$arraydatos = ["Karina", "Rosales", "Orozco"];

//convierte un array en una cadena de texto
$string = implode("", $arraydatos);
echo "Cadena de texto <br>";
echo$string;
echo "<br>","<br>";

//Cadena de texto a separar
$cadena = "tercero de programación matutino";

//convierte una cadena de texto en un array 
$array = explode("", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
//Imprime los elemntos del arreglo 
for($i=0; $i<$longitud; $i++)
{ //Se obtiene el valor de cada elemento
echo $array[$1];
echo "<br>";
}
?>