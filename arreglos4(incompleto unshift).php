<?php 
$arreglo = [1, 2, 3, 4, 5];
$veces = 2;

for ($j = 0; $j < $veces; $j++) {
    $ultimo = array_pop($arreglo); 
    array_unshift($arreglo, $ultimo); 
}

print_r($arreglo);
?>
