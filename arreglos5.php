<?php 
$arreglo =[1,3,3,4,5,6,7,8,9];
$ingreso = 2;
$insertado = false;
for ($i = 0 ; $i < count($arreglo) ; $i ++  ){
    if ($arreglo[$i] < $ingreso ){
        array_splice($arreglo, $i + 1, 0, $ingreso);
        $insertado = true;
        break
 ;
    }
}
print_r($arreglo);
?>