<?php
  echo "<h2>exercise 1</h2>";
  $age = 15;
  if ($age < 18) {
    echo "Vous êtes mineur.";
  } else {
    echo "Vous êtes majeur.";
  };
?>

<?php
 echo "<h2>exercise 2</h2>";
 $IsEasy = true;
 if ($IsEasy === true) {
   echo "C'est facile !!!";
 } else {
   echo "C'est difficile !!!";
 }
?>

<?php
  echo "<h2>exercise 3</h2>";
  $age = 25;
  $genre = "homme";
  if ($genre === "femme") {
    if ($age < 18) {
      echo "Vous êtes une femme et vous êtes mineur";
    } else {
      echo "Vous êtes une femme et vous êtes majeur";
    }
  } else {
    if ($age < 18) {
      echo "Vous êtes un homme et vous êtes mineur";
    } else {
      echo "Vous êtes un homme et vous êtes majeur";
    }
  };
?>

<?php
  echo "<h2>exercise 4</h2>";
  $magnitude = 3;
  switch ($magnitude) {
    case 1:
      echo "Micro-séisme impossible à ressentir.";
      break;

    case 2:
      echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
      break;

    case 3:
      echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
      break;

    case 4:
      echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
      break;

    case 5:
      echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
      break;

    case 6:
      echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
      break;

    case 7:
      echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
      break;

    case 8:
      echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
      break;

    case 9:
      echo "Séisme capable de tout détruire sur une très vaste zone.";
      break;

    default :
    echo "Entre 1 et 9, connard !!!";
    break;
  }
?>

<?php
  echo "<h2>exercise 5</h2>";
  $maVariable = "femme";
  if ($maVariable === "homme") {
    echo "C'est un développeur !!!";
  } else {
    echo "C'est une développeuse !!!";
  };
?>

<?php
  echo "<h2>exercise 6</h2>";
  $monAge = 15;
  if ($monAge < 18) {
    echo "Tu n'es pas majeur";
  } else {
    echo "tu es majeur";
  }
 ?>

<?php
  echo "<h2>exercise 7</h2>";
  $maVariable = false;
  if ($maVariable === false) {
    echo 'c\'est ok !!';
  } else {
    "ce n'est pas bon";
  }
 ?>

<?php
  echo "<h2>exercise 8</h2>";
  $maVariable = false;
  if ($maVariable) {
    echo 'C\'est ok !!';
  } else {
    echo "Ce n'est pas bon";
  }
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>

  </body>
</html>
