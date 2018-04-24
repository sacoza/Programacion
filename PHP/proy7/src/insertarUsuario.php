<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INSERTAR</title>
  </head>
  <body>
    <style media="screen">
a{text-decoration: none;}
.button{background-color:#00CED1;}
.button:hover{background-color:#F08080;}

    </style>
  <button class="button"><a href="listadoUsuario.php">Listado de Usuarios</a></button>
  <button class="button"><a href="index.html">Indice</a></button>
<?php
include '../modelo/consultas.php';

$consulta = new consultas();
$resultado=$consulta->insert($nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'],$puntuacion=$_POST['puntuacion']);

?>

  </body>
</html>
