<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTUALIZAR</title>
  </head>
  <body>
    <?php

    include 'conexion.php';

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $curso=$_POST['curso'];
    $puntuacion=$_POST['puntuacion'];

    $consulta="UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',edad=$edad,curso=$curso,puntuacion=$puntuacion WHERE id=$id";
    $insert=$conector->query($consulta);

      include 'listadoUsuario.php';
    ?>
  </body>
</html>
