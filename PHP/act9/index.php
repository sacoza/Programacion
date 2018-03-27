<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'hijo1.php';
    if(!isset($_POST["nivelAnt"])) $_POST["nivelAnt"]=0;
    $objeto = new Markeset();
    $objeto->setTipo('Fuego');
    $objeto->setNombre('Markeset');
    $objeto->setNivelInicial($_POST["nivelAnt"]);
    $objeto->Evo();
    ?>

    <p>Tipo: <?= $objeto->getTipo() ?><p>
    <p>Nombre: <?= $objeto->getNombre() ?><p>
    <p>Nivel: <?= $objeto->getNivelInicial() ?><p>


    <form class="" action="index.php" method="post" onsubmit="return Evo()">
    <input type="submit" name="Subir nivel" value="Subir nivel" id="submit">
    <input type="hidden" name="nivelAnt" value='<?=$objeto->getNivelInicial()?>' id="nivelAnt">
<br><br>
    <?php
    include 'hijo2.php';
    $objeto = new Markeset();
    $objeto->setTipo('Fuego');
    $objeto->setNombre('Markeset');
    $objeto->setpoder();
    ?>

    <p>Tipo: <?= $objeto->getTipo() ?><p>
    <p>Nombre: <?= $objeto->getNombre() ?><p>
    <p>Nivel: <?= $objeto->getpoder() ?><p>


    <form class="" action="index.php" method="post" onsubmit="return Evo()">
    <input type="submit" name="Subir nivel" value="Subir nivel" id="submit">
    <input type="hidden" name="nivelAnt" value='<?=$objeto->getNivelInicial()?>' id="nivelAnt">
  </body>
</html>
