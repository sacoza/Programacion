<?php
/**
 *
 */
 Class padre
{

    public $tipo="";
    public $nombre="";
    public $nivelinicial="";

    public function setTipo($tipo){
      $this->tipo=$tipo;
    }
    public function getTipo(){
      return $this->tipo;
    }
    public function setNombre($nombre){
      $this->nombre=$nombre;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function setNivelInicial($nivelinicial){
      $this->nivelinicial=$nivelinicial;
    }
    public function getNivelInicial(){
      return $this->nivelinicial;
    }
}
 ?>
