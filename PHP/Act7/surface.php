<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php">INDEX</a>
<?php
/**
 *
 */
$conector = new mysqli("localhost", "root", "", "world");
if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_errno;

}else{
$surface=$_POST["SurfaceArea"];


$consulta="SELECT * FROM country WHERE SurfaceArea>$surface";
echo "<br>";

$resultado=$conector->query($consulta);
foreach($resultado as $fila){

echo "<br>El continente buscado es: ".$fila["Continent"];
echo "<br>La superficie es: ".$fila["SurfaceArea"];

  }
}

?>

  </body>
</html>
