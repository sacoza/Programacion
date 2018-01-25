<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="../Act7/index.php">INDEX</a>
    <h2>Paises por Continente</h2>
<?php
/**
 *
 */
$conector = new mysqli("localhost", "root", "", "world");
if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_errno;

}else{


$consulta="SELECT * from country order by Continent asc";
echo "<br>";

$resultado=$conector->query($consulta);
foreach($resultado as $fila){

echo "<br>El continente buscado es: ".$fila["Continent"];
echo "<br>Pais: ".$fila["Name"];
// echo "SELECT * FROM country where Name='japan';"
}
}
?>

  </body>
</html>
