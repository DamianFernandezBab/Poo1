<?php
$arreglo = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$length = count($arreglo);
$arreglovacio = [];
for ($i = $length - 1; $i >= 0; $i--) {
    array_push($arreglovacio, $arreglo[$i]);
}
echo "el arreglo viejo es ";
print_r($arreglo);
echo "el arreglo nuevo es ";
print_r($arreglovacio);
?>
