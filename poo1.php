<?php 
class vehiculos {
  public  $velocidad = 0;
  public function accelerar($velocidad){
    $this -> velocidad += $velocidad;
  }
  public function getVelocidad(){
     return $this -> velocidad;
  }
  public function getRuedas(){

  }

}

class autos extends vehiculos {
  public function getRuedas(){
    return 4;
  }
}


class motos extends vehiculos{
    public function getRuedas(){
        return 2;
      }
}



$moto = new motos();
$moto ->accelerar(1.547825);
echo "la moto accelero : " . $moto -> getVelocidad() . " Km*Hr. En sus " . $moto ->getRuedas() . " ruedas ";
 ?>

