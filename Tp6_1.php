<?php 
$aux = 0;
echo "ingrese un valor: ";
$x = trim(fgets(STDIN));
echo "ingrese otro valor: ";
$y = trim(fgets(STDIN));

echo "y es $y ; ";
echo "x es $x ------------------";

$aux = $y;
$y = $x;
$x = $aux;

echo "luego del cambio y= $y ; ";
echo "luego del cambio x= $x ; ";



?>

