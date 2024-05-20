<?php
$arreglo = [];
for ($i = 0; $i < 10 ; $i ++ ){
    echo "ingrese 10 numeros :";
    $numeros = trim(fgets(STDIN));
    array_push($arreglo,$numeros);}
    print_r($arreglo);
?>
