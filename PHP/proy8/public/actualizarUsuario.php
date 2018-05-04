<?php
  require_once  __DIR__.'/../vendor/autoload.php';
  use Daw\model\consultas;
  $consulta=new consultas();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Usuario</title>
  </head>
  <body>
    <?php
    $resultado=$consultas->update($id=$_POST['id'],$nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'],$puntuacion=$_POST['puntuacion'])
    echo "<a href='listadoUsuarios.php'>Listado de Usuarios</a>";
     ?>
  </body>
</html>
