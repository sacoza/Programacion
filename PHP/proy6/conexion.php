<?php
$server="localhost";
$user="root";
$pass="";
$db="juegos";



$conector = new mysqli($server, $user, $pass, $db);
if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_errno;
  }
 ?>
