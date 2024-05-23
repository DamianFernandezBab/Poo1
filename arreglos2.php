<?php
$arreglo = [];
for ($i = 0 ; $i < 10 ; $i ++ ){
    $numeros = rand(0,9);
    array_push($arreglo,$numeros);
} 
print_r ($arreglo);
?>