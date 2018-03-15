<?php
   //incluimos la clase Ordenador
   echo "<p>CUADRADO</p>";
           include 'cuadrado.php';
           //Objeto
           $objeto = new Cuadrado();
           $objeto->setLadoCuadrado(4.5);
?>
           <p>/\\\ <?= $objeto->getLadoCuadrado() ?><p>
<?php
           echo "El lado del cuadrado mide: " .$objeto->getLadoCuadrado() ."<br><br>";

          echo "El area es: " .$objeto->areaCuadrado() ."<br>";
          echo "El perimetro es: " .$objeto->perimetroCuadrado() ."<br>";

?>
<?php
   echo "<p>CIRCULO</p>";

          include 'circulo.php';
          //Objeto
          $objeto2= new Circulo;
          $objeto2->setNumero(5.2);
          echo "El radio del triangulo es: " .$objeto2->getNumero() ."<br><br>";

          echo "El area es: " .$objeto2->areaCirculo();
          echo "<br>El perimetro es: " .$objeto2->perimetroCirculo() ."<br>";
?>
<?php
   echo "<p>TRIANGULO</p>";

          include 'triangulo.php';
          $objeto3= new Triangulo;
          $objeto3->setBase(5.2);
          echo "La base del triangulo mide: " .$objeto3->getBase() ."<br>";
          $objeto3->setAltura(5.2);
          echo "La altura del triangulo mide: " .$objeto3->getAltura() ."<br><br>";


          echo "El area es: " .$objeto3->areaTri() ."<br>";
          echo "El perimetro es: " .$objeto3->perimetroTri() ."<br>";
?>
