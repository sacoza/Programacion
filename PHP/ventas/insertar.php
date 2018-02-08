<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php">INDEX</a>
<?php

$conector = new mysqli("localhost", "root", "", "tienda");
if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_errno;

}else{
$articulo=$_POST['articulo'];
$precioUd=$_POST['precioUd'];
$uds=$_POST['uds'];
$fecha=$_POST['fecha'];

$consulta="INSERT INTO ventas (articulo,precioUd,uds,fecha) values ('$articulo',$precioUd,$uds,'$fecha')";

$insert=$conector->query($consulta);
$resultado=$conector->query($consulta="SELECT * FROM ventas where fecha=curdate()");
foreach($resultado as $fila){

echo "<br>ID: ".$fila['id'];
echo "<br>Articulo: ".$fila['articulo'];
echo "<br>Precio: ".$fila['precioUd'];
echo "<br>Unidades: ".$fila['uds'];
echo "<br>Fecha: ".$fila['fecha'];
echo "<br>";
  }
}

?>

  </body>
</html>
