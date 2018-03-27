<?php
   //incluimos la clase Ordenador
   echo "<p>CUADRADO</p>";
           include 'cuadrado.php';
           //Objeto
           $objeto = new Cuadrado();
           $objeto->setLadoCuadrado(4.5);
?>
           <p>El lado del cuadrado mide:  <?= $objeto->getLadoCuadrado() ?><p>
           <p>El area es:  <?= $objeto->areaCuadrado()?><p>
           <p>El perimetro es:   <?= $objeto->perimetroCuadrado() ?><p>
<?php
   echo "<p>CIRCULO</p>";

          include 'circulo.php';
          //Objeto
          $objeto2= new Circulo;
          $objeto2->setNumero(5.2);
?>
<p>El radio del triangulo es:  <?= $objeto2->getNumero() ?><p>
<p>El area es:  <?= $objeto2->areaCirculo()?><p>
<p>El perimetro es:   <?= $objeto2->perimetroCirculo() ?><p>
<?php
   echo "<p>TRIANGULO</p>";

          include 'triangulo.php';
          $objeto3= new Triangulo;
          $objeto3->setBase(5.2);
?>
<p>La base del triangulo mide: <?= $objeto3->getBase() ?><p>
<p>La altura del triangulo mide: <?= $objeto3->getAltura() ?><p>
<p>El area es:  <?= $objeto3->areaTri()?><p>
<p>El perimetro es:   <?= $objeto3->perimetroTri() ?><p>
