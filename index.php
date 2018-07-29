<?php
$number1 = 1;
 ?>
 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice7</title>
   </head>
   <body>
<p>
<?php
//On avavnce de 1 à 100 avec un pas de 15
while($number1 <= 100){
  echo $number1 . ' On tient le bon bout'.'<br/>';
  $number1 += 15;
}
 ?>
</p>
   </body>
 </html>
