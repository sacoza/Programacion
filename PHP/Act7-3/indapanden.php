<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <a href="../Act7/index.php">INDEX</a>
  <h2>Paises Independizados</h2>

<?php
/**
 *
 */
$conector = new mysqli("localhost", "root", "", "world");
if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_errno;

}else{


$consulta="SELECT * From country";

$resultado=$conector->query($consulta);
foreach($resultado as $fila){

echo "<br>".$fila["Name"];
echo ": ".$fila["IndepYear"];
// echo "SELECT * FROM country where Name='japan';"
if ($fila["IndepYear"]==NULL) {
echo "NO INDEPENDIZADO";
}
}
}

?>

  </body>
</html>
