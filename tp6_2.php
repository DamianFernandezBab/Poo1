<?php 
echo "ingrese la base: ";
$base = trim(fgets(STDIN));
echo "ingrese la altura ";
$altura = trim(fgets(STDIN));

$superficie = $base * $altura / 2 ;
echo "la base es = $base  ";
echo "la altura es = $altura ::::> ";
echo "por lo tanto la superficie es = $superficie :) "


?>