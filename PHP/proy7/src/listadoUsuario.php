<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTADO</title>
  </head>
  <body>
    <style media="screen">
a{text-decoration: none;}
.button{background-color:#00CED1;}
.button:hover{background-color:#F08080;}

    </style>
  <button class="button"><a href="index.html">Indice</a></button>
  <br><br>
    <?php
include '../modelo/consultas.php';

$consulta = new consultas();
$resultado=$consulta->select();
foreach ($resultado as $fila)
{
    echo "ID: ".$fila["id"]."<br>";
  echo "Nombre: ".$fila["nombre"]."<br>";
  echo "Apellidos: ".$fila["apellidos"]."<br>";
  echo "Edad: ".$fila["edad"]."<br>";
  echo "Curso: ".$fila["curso"]."<br>";
  echo "Puntuacion: ".$fila["puntuacion"]."<br>";
}

?>





  </body>
</html>
