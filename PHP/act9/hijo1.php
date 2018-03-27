
<?php
/**
 *
 */
include_once 'padre.php';
class Markeset extends padre
{
     //Objeto

public function Evo(){
  $nivel=(parent::setNivelInicial(parent::getNivelInicial()+1));
  return $nivel;
}
}
?>
