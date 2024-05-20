<?php
echo "ingrese A: ";
$a = trim(fgets(STDIN));
echo "ingrese B: ";
$b = trim(fgets(STDIN));
echo "ingrese C: ";
$c = trim(fgets(STDIN));
$potencia = 0;
$potencia= $b ** 2;
$restaymulti = $potencia - 4 * $a * $c ;
$suma= -$b + $restaymulti;
$resta = -$b - $restaymulti;
$divisionsuma = $suma / 2 * $a;
$divisionresta = $suma / 2 * $a;

echo "x1 = $divisionsuma ; ";
echo "x2 = $divisionresta ;" ;
?>