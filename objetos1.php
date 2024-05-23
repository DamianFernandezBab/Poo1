<?php 
class Figuras {
    }
   
class Circulo extends Figuras{

    private $radio;
    private $perimetro;
    private $area;
    
    
    public function __construct($radio){
        $this -> nombre = "Circulo";
       $this -> radio = $radio;
       $this -> perimetro = $this -> CalcularPerimetro();
       $this -> area = $this -> CalcularArea();
    }


    private function CalcularPerimetro(){
       return  2 * pi() * $this -> radio;
    }



    public function CalcularArea(){
        return  pi() * pow($this->radio, 2);
    }

    

    public function MostrarFigura(){
        echo "Circulo ". "\n";
        echo "Perimetro: ". $this->perimetro. "\n";
        echo "Area: ". $this->area. "\n";
        echo "Radio: ". $this->radio. "\n";
    }
    
}

class Cuadrado extends Figuras{
    private $lado;
    private $area;
    private $perimetro;
    function __construct($lado){
        $this -> nombre = "Cuadrado";
        $this -> lado = $lado;
        $this -> perimetro = $this->CalcularPerimetro($lado);
        $this -> area = $this -> CalcularArea ($lado);
    }

    public function CalcularPerimetro($lado){
        return $lado * 4 ;
   }

   public function CalcularArea($lado){
      return $this -> lado * $this -> lado;
   }


    public function MostrarFigura(){
        echo "Cuadrado " . "\n";
        echo "4 Lados de = ". $this ->lado. "cm." . "\n";
        echo "Area = " .$this -> area . "\n";
        echo "Perimetro = ". $this -> perimetro. "\n";
    }
}

class Triangulo extends Figuras {
    private $base;
    private $altura;
    private $lado1;
    private $lado2;
    private $lado3;
    private $perimetro;
    private $area;
    public function __construct($lado1,$lado2,$lado3,$base,$altura){
        $this -> nombre = "Triangulo";
        $this -> lado1 = $lado1;
        $this -> lado2 = $lado2;
        $this -> lado3 = $lado3;
        $this -> base = $base;
        $this -> altura = $altura;
        $this -> perimetro = $this -> CalcularPerimetro();
        $this -> area = $this -> CalcularArea();

    }

   public function CalcularPerimetro(){
     return $this ->lado1 + $this -> lado2 + $this -> lado3 ;
   }

   public function CalcularArea(){
    return ($this -> base * $this -> altura) / 2;
   }


 
   public function MostrarFigura(){
    echo "Triangulo = " . "\n";
    echo "Lado 1 = " . $this -> lado1 . "\n";
    echo "Lado 2 = " . $this -> lado2 . "\n";
    echo "Lado 3 = " . $this -> lado3 . "\n";
    echo "Base = " . $this -> base . "\n";
    echo "Altura = " . $this -> altura . "\n";
    echo "Perimetro = " . $this -> perimetro . "\n";
    echo "Area = " . $this -> area . "\n";
   }
}


