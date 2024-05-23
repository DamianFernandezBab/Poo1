<?php


$porcentaje = 25;
echo "Ingrese un monto en pesos: ";
$pesos = trim(fgets(STDIN));
$multiplicacion = $pesos * $porcentaje;
$resultado = $multiplicacion / 100;
$precio_total = $pesos + $resultado;

echo "Usted ingresó $$pesos, el monto total con intereses es $$precio_total";


?>