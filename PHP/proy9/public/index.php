<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\classes\Usuario;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INDEX</title>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/comprobar.js"></script>
  </head>
  <body>
    <h3>SELECCIONA UN USUARIO</h3>
    <?php

        $usuario=new Usuario();
        $resultado=$usuario->select();
        $usaurio=$_POST["usuario"];
    ?>
      echo <form name='myform' action='puntuacion.php' method='POST'>
        <select id="select" name="usuario">
          div
                <option>Selecciona un Usuario</option>
              <?php
                foreach ($resultado as $usuario)
                {
              ?>
                  <option value= <?php echo $usuario["nombre"]."-".$usuario["puntuacion"];?>><?php echo $usuario["nombre"];?></option>
             <?php
                }
              ?>
                  <option>Admin</option>
      </select>
      <br>
      <input type="submit" value="Jugar">
    </form>

    <br><br>
    <div id="buttonHidden">
      <a href="../src/security/listadoUsuario.php">
        <input type='button' value="Lista de xUsuarios">
      <a href="../src/security/actualizarUsuario.php">
      <input type='button' value="Actualizar Usuario">

      <a href="../src/security/borrarUsuario.php">
        <input type='button' value="Borrar Usuario">
  </div>
  <a href="insertarUsuario.php">
    <input type='button' value="Insertar Usuario">
  </body>
</html>
