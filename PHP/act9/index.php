<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'hijo1.php';
    include 'hijo2.php';

    $objeto = new Markeset();
    $objeto->setTipo('Fuego');
    $objeto->setNombre('Markeset');
    $objeto->setNivelInicial('1');
    $objeto->Evo("");
    ?>

    <p>Tipo: <?= $objeto->getTipo() ?><p>
    <p>Nombre: <?= $objeto->getNombre() ?><p>
    <p>Nivel Inicial: <?= $objeto->getNivelInicial() ?><p>
    <p>Nivel Máximo: <?= $objeto->Evo() ?><p>

    <form class="" action="hijo1.php" method="post" onsubmit="return evo()">
    <input type="submit" name="Subir nivel" value="Subir nivel" id="submit">
  </body>
</html>
