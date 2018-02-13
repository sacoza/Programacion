<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php">INDEX</a>
<?php
$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_errno;
}else{
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$curso=$_POST['curso'];
$puntuacion=$_POST['puntuacion'];
$correo=$_POST['correo'];

$consulta="INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion,correo) values ('$nombre','$apellidos',$edad,$curso,$puntuacion,'$correo')";
$insert=$conector->query($consulta);
$resultado=$conector->query($consulta="SELECT * FROM usuarios");
foreach($resultado as $fila){
echo "<br>ID: ".$fila['id'];
echo "<br>Nombre: ".$fila['nombre'];
echo "<br>Apellidos: ".$fila['apellidos'];
echo "<br>Edad: ".$fila['edad'];
echo "<br>Curso: ".$fila['curso'];
echo "<br>Puntuación: ".$fila['puntuacion'];
echo "<br>Puntuación: ".$fila['correo'];
echo "<br>";
  }
}
?>

  </body>
</html>
