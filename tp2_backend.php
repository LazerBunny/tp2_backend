<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title></title>
    </head>
    <body>
        <?php
         $michis=4;
         if ($michis > 0){
            echo "Hay un número positivo de michis";
         } else {
            echo "Hay faltante de michis";
         }
         ?>
         <br>
         <?php
          $perros=8;
          if ($perros > 1 & $perros < 10){
            echo "Hay la cantidad justa de perritos";
          } else {
            echo "Demasiados perritos";
          }
         ?>
         <br>
         <?php
          $dinos=12;
          if ($dinos > 10 || $dinos < 2){
            echo "La cantidad perfecta de dinosaurios";
          } else {
            echo "No me siento bien con esta cantidad de dinosaurios";
          }
         ?>
         <br>
         <?php
          $numero1=8;
          $numero2=16;
          if ($numero1 > $numero2){
            echo $numero1 + $numero2;
            echo $numero1 - $numero2;
          } elseif ($numero1 < $numero2) {
            echo $numero1 * $numero2;
            echo $numero1 / $numero2;
            echo $numero1 % $numero2;
          } else {
            echo "Los números ingresados son iguales";
          }
         ?>
    </body>
</html>