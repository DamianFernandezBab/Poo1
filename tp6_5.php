<?php 
$pi = M_PI;
echo "Diametro: ";
$diametro = trim(fgets(STDIN));
echo "Altura:  ";
$altura = trim(fgets(STDIN));

$radio = $diametro / 2;
$operacion1 = $pi * $altura * ($radio **2);
echo "el volumen es: $operacion1 " 
?>