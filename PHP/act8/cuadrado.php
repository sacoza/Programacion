<?php
     Class Cuadrado
{
Public $LadoCuadrado=4.5;
public function setLadoCuadrado($nuevoLadoCuadrado){
$this->cuadrado=$nuevoLadoCuadrado;
}
public function getLadoCuadrado(){
return $this->LadoCuadrado;
}
//AREA
public function areaCuadrado(){
$area=pow($this->LadoCuadrado,2);
return $area;
}

//PERIMETRO
public function perimetroCuadrado(){
$perimetro=$this->LadoCuadrado*4;
return $perimetro;
}
}

?>
