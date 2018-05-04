<?php
namespace Daw\model;
use Daw\model\conectar;
class consultas extends conectar{
   function __construct(){
     parent::__construct();
   }
  public function select()
  {
    return parent::consultar("SELECT * FROM Usuarios");
  }
  public function insert($nombre, $apellidos, $edad, $curso, $puntuacion)
  {
 return parent::consultar("INSERT INTO Usuarios (nombre,apellidos,edad,curso,puntuacion)
       VALUES ('$nombre','$apellidos',$edad,$curso,$puntuacion)");
  }
  public function update($id,$nombre,$apellidos,$edad, $curso, $puntuacion)
  {
     return parent::consultar("UPDATE  Usuarios SET id ='$id', nombre='$nombre',apellidos='$apellidos',edad='$edad',curso='$curso',puntuacion='$puntuacion'
             WHERE id='$id'");
  }
  public function delete ($id)
  {
      ;
       return parent::consultar("DELETE FROM Usuarios WHERE id='$id'");
  }
}
 ?>
