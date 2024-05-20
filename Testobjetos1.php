<?php 

require_once "objetos1.php";

$figuras = [];
$totalfiguras = 0;

function PedirDatos(&$figuras,&$totalfiguras) {
    echo "Ingrese qué tipo de figura quiere crear: (C)írculo, Cua(D)rado, (T)riángulo" . "\n";
    $decision = trim(fgets(STDIN));

    if ($decision == "C" || $decision == "c") {
        echo "Elegiste Círculo -> Por favor, ingrese el radio de su Círculo " . "\n";
        $radio = trim(fgets(STDIN));
        $circulo = new Circulo($radio);
        $circulo->MostrarFigura();
        $figuras[] = $circulo;
        $totalfiguras ++;
       
    } else if ($decision == "D" || $decision == "d") {
        echo "Elegiste Cuadrado -> Por favor, ingrese el tamaño de uno de los lados de ese cuadrado " . "\n";
        $tamanolado = trim(fgets(STDIN));
        $cuadrado = new Cuadrado($tamanolado);
        $cuadrado->MostrarFigura();
        $figuras[] = $cuadrado;
        $totalfiguras ++;
        
    } else if ($decision == "T" || $decision == "t") {
        echo "Elegiste Triángulo -> Ingrese tamaño del lado 1 " . "\n";
        $lado1 = trim(fgets(STDIN));
        echo "Ingrese tamaño del lado 2 " . "\n";
        $lado2 = trim(fgets(STDIN));
        echo "Ingrese tamaño del lado 3 " . "\n";
        $lado3 = trim(fgets(STDIN));
        echo "Ingrese Base " . "\n";
        $base = trim(fgets(STDIN));
        echo "Ingrese Altura " . "\n";
        $altura = trim(fgets(STDIN));
        $triangulo = new Triangulo($lado1, $lado2, $lado3, $base, $altura);
        $triangulo->MostrarFigura();
        $figuras []= $triangulo;
        $totalfiguras ++;
    } else {
        echo $decision.  " No es una opcion correcta";
    }
}


$continuar = true;
$decisionarreglo = "";
$sumaarea = 0;
$desicionarea = "";


while ($continuar) {
    PedirDatos($figuras,$totalfiguras);
    echo " ¿Quiere hacer otra figura? S/N" . "\n";
    $repetir = trim(fgets(STDIN));
    if ($repetir == "S" || $repetir == "s") {
        $continuar = true;
    } else {
        echo "Ejecucion Finalizada ". "\n";
        echo "Quieres ver en un las creadas S/N ?". "\n";
        $decisionarreglo = trim(fgets(STDIN));
        $continuar = false;
    }
   
}

if ($decisionarreglo == "S" || $decisionarreglo == "s"){
    echo "Figuras creadas: ". "\n"; 
    for ($i = 0 ; $i < $totalfiguras ; $i ++){
        $figuras[$i] -> MostrarFigura();
    } }

    echo "Desea sumar el area de todas sus figuras? S/N";
    $desicionarea = trim(fgets(STDIN));

    if ($desicionarea == "s" || $desicionarea == "S"){
        for ($j = 0 ; $j < $totalfiguras ; $j ++){
            $sumaarea += $figuras [$j] -> CalcularArea();
        }
        echo "La suma de todas las areas de las figuras generadas es -> ". $sumaarea; 
    }


?>
