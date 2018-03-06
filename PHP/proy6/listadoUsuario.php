<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTADO</title>
  </head>
  <body>
    <?php
include 'conexion.php';

    $resultado=$conector->query($consulta="SELECT * FROM usuarios");
    foreach($resultado as $fila){

    echo "<br>ID: ".$fila['id'];
    echo "<br>Nombre: ".$fila['nombre'];
    echo "<br>Apellidos: ".$fila['apellidos'];
    echo "<br>Edad: ".$fila['edad'];
    echo "<br>Curso: ".$fila['curso'];
    echo "<br>Puntuación: ".$fila['puntuacion'];
    echo "<br>";
      }
    ?>
  </body>
</html>
