<?php 

class Saiyajin {
    public string  $nombre ;
    public int $nivel_pelea ;
    public string $clase = " Saiyajin ";
    
    public function __construct($nombre,$nivel_pelea ){
        $this->nombre = $nombre;
        $this->nivel_pelea = $nivel_pelea;
    }
    public function Saludar($texto = " hola soy "):string //dentro de los parametros tienen que ir variables que esten fuera de la clase
    {
         return $texto. $this -> nombre .  " ";
    }

    public function NivelDePelea(){
        return $this -> nombre." tiene un nivel de pelea de :" . $this -> nivel_pelea. " y pertenece a la clase " . $this -> clase;

    }
}

class Ssj extends Saiyajin { 
    public string $clase = " Super Saiyajin ";
}
//nueva instancia 
$goku = new Saiyajin("Goku",1000);
echo $goku ->Saludar("hola soy ") . " ";
echo "";
$vegueta = new Saiyajin("Vegueta",9850);
echo $vegueta ->Saludar(" Mi nombre es ");
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
$gohan = new SSj(" , Gohan", 3000);
echo $gohan -> NivelDePelea();


