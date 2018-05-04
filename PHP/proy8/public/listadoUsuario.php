<?php
require_once  __DIR__.'/../vendor/autoload.php';
use Daw\model\consultas;
  $consulta=new consultas();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>
    <a href="index.html">Indice</a>
    <br>
    <?php
        $resultado=$consulta->select();
        foreach ($resultado as $fila){
          echo"<br>Id: ".$fila["id"];
          echo"<br>Nombre: ".$fila["nombre"];
          echo"<br>Apellidos: ".$fila["apellidos"];
          echo"<br>Edad: ".$fila["edad"];
          echo"<br>Curso: ".$fila["curso"];
          echo"<br>Puntuación: ".$fila["puntuacion"];
          echo"<br>";
        }
    ?>
  </body>
</html>





  </body>
</html>
