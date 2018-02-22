<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
include 'conexion.php';

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$curso=$_POST['curso'];
$puntuacion=$_POST['puntuacion'];

$consulta="INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('$nombre','$apellidos',$edad,$curso,$puntuacion)";

$insert=$conector->query($consulta);
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
