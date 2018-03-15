<?php
/**
 *
 */

class Triangulo
{

    Private $base=5.2;
    Private $altura=3;

    public function setBase($nuevobase){
    $this->triangulo=$nuevobase;
    }
    public function getBase(){
    return $this->base;
    }
    public function setAltura($nuevoaltura){
    $this->triangulo=$nuevoaltura;
    }
    public function getAltura(){
    return $this->altura;
    }

public function areaTri(){
  $Area=$this->base*$this->altura/2;
  return $Area;
}


public function perimetroTri(){
$Peri=($this->base*3);
return $Peri;
}
}


 ?>
