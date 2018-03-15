<?php
/**
 *
 */
 Class Circulo
{
    public $numero=3;
    public $pi=3.14;


    public function setNumero($nuevonumero){
    $this->circulo=$nuevonumero;
    }
    public function getNumero(){
    return $this->numero;
    }
public function areaCirculo(){
$circuloArea=($this->numero*$this->numero)*$this->pi;
return $circuloArea;
}

public function perimetroCirculo(){
$circuloPeri=(($this->numero*$this->numero)*$this->pi)*(($this->numero*$this->numero)*$this->pi);
return $circuloPeri;
}
}
 ?>
