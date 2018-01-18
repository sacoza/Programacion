<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figuras</title>
  </head>
  <body>
    <h2>Figura 1</h2>
    <?php
$estrella="*";
$a=1;


while ($a <= 5) {

  echo $estrella;
  echo "<br>";
$a++;
}
    ?>

    <h2>Figura 2</h2>

    <?php
$estrella="*";

for ($i=0; $i < 4 ; $i++) {
  $estrella=$estrella."*";
}

  for ($i=0; $i < 5 ; $i++) {
echo $estrella, "<br>";

}
    ?>
<h2>Figura 3</h2>
<?php
$estrella="";

for ($i=0; $i < 5 ; $i++) {


for ($i=0; $i <= 5 ; $i++) {
$estrella=$estrella."*";

echo $estrella, "<br>";
  }
}
?>
<h2>Figura 4</h2>
<?php
$estrella = "*";
$estrella2 = "*" . "*" . "*";

for ($i=0; $i < 3 ; $i++) {
  echo $estrella . "<br>";
  $estrella = $estrella . "*" ."*";
}
for ($i=0; $i < 2 ; $i++) {
echo $estrella2 . "<br>";
$estrella2 = "*";
}
?>
<h2>Figura 5</h2>
<?php
  $lineas = 5;
  for ($i=1; $i <= $lineas ; $i++) {
    for ($j=1; $j <= ($lineas - $i)+2 ; $j++) {
      echo "&nbsp";
      echo "&nbsp";

    }
    for ($j=0; $j < ($i * 2)-1 ; $j++) {
      echo "*";
    }
      echo "<br>";
  }
?>
  </body>
</html>
