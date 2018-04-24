<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTUALIZAR</title>
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
   $consultas = new consultas();
   $resultado=$consultas->update($id=$_POST['id'],$nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'],$puntuacion=$_POST['puntuacion'])
    ?>
  </body>
</html>
