<?php
/* CBTIS 89
P39Array19.php 
Progama que almacena información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones;
Si la persona es menor de 18 años se debe colocar un 0. Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y en los otros dos colocar un 0. Si la persona tiene 50 años o más se debe colocar un 1 en el arreglo $Grupo3, y en los otros dos un 0.
Gerardo Ceniceros
3A Programación TM */

$Nombre = array("Paco", "Mari", "Lalo", "Rosi", "Paty", "Beto");
$Edad = array(17, 30, 71, 38, 12, 58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

for ($i = 0; $i < 6; $i++) {
    if ($Edad[$i] < 18) {
 $Grupo1[$i] = 0;
  $Grupo2[$i] = 0;
  $Grupo3[$i] = 0;
  }
    if ($Edad[$i] >= 18 && $Edad[$i] <= 49) {
  $Grupo1[$i] = 0;
 $Grupo2[$i] = 1;
       $Grupo3[$i] = 0;
    }
    if ($Edad[$i] >= 50) {
     $Grupo1[$i] = 0;
     $Grupo2[$i] = 0;
     $Grupo3[$i] = 1;
    }
}

echo "Nombre - Edad - Grupo1 - Grupo2 - Grupo3<br>";
for ($i = 0; $i < 6; $i++) {
    echo $Nombre[$i] . " ---- " . $Edad[$i] . " ------ " . $Grupo1[$i] . " ----- " . $Grupo2[$i] . " ----- " . $Grupo3[$i] . "<br>";
}
?>

