<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_errno;

}else{
$id=$_GET["id"];

$resultado=$conector->query($consulta="SELECT * FROM usuarios WHERE id=$id");
foreach($resultado as $fila){
echo "<br>ID: ".$fila['id'];
echo "<br>Nombre: ".$fila['nombre'];
echo "<br>Apellidos: ".$fila['apellidos'];
echo "<br>Edad: ".$fila['edad'];
echo "<br>Curso: ".$fila['curso'];
echo "<br>Puntuación: ".$fila['puntuacion'];
echo "<br>Correo: ".$fila['correo'];
echo "<br>";
}}
?>
    <a href="MuestraUsuario.php?id=2">Entra</a>


  </body>
</html>
