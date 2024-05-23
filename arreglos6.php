<?php
$arreglo = [];

for ($i = 0 ; $i < 7 ; $i ++){
   $number = rand(1,9);
   array_push($arreglo, $number);
} 
print_r($arreglo);

for ($j = 0; $j < count($arreglo) - 1; $j++){
    for ($k = 0; $k < count($arreglo) - 1 - $j; $k++){
        $a = $arreglo[$k];
        $b = $arreglo[$k + 1];
        if ($a > $b){
            $arreglo[$k] = $b;
            $arreglo[$k + 1] = $a;
        }
    }
}

print_r($arreglo);
?>
