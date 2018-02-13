<?php
  echo "<h2>exercise 1</h2>";
  function true() {
    return true;
  }
  print true();
?>

<?php
  echo "<h2>exercise 2</h2>";
  function myString($string) {
    return $string;
  };
  print myString(connard);
?>

<?php
 echo "<h2>exercise 3</h2>";
 function concatenation($string1, $string2) {
  return $string1 .$string2;
 };
 echo concatenation("bonjour", "connard");
?>

<?php
  echo "<h2>exercise 4</h2>";
  function nombre($num1, $num2) {
    if ($num1>$num2) {
      echo "Le premier nombre est plus grand";
    } elseif ($num1<$num2) {
        echo "Le premier nombre est plus petit";
    } else {
      echo "Les deux nombres sont identiques";
    }
  };
  print nombre(3,3)
?>

<?php
  echo "<h2>exercise 5</h2>";
  function strinteger($string, $num) {
    return $string .$num;
  };
  echo strinteger("bien",36);
?>

<?php
  echo "<h2>exercise 6</h2>";
  function phrase ($nom, $prenom, $age) {
    return "Bonjour " .$nom ." " .$prenom .", tu as " .$age ." ans";
  }
  print phrase("Felon", "Gargamel", 54);
?>

<?php
  echo "<h2>exercise 7</h2>";
  function exo7 ($genre, $age) {
    if ($genre === "homme") {
      if ($age < 18) {
        echo "Vous êtes un homme et vous êtes mineur";
      } else {
        echo "Vous êtes un homme et vous êtes majeur";
      }
    }elseif ($genre === "femme") {
      if ($age < 18) {
        echo "Vous êtes une femme et vous êtes mineur";
      } else {
        echo "Vous êtes une femme et vous êtes majeur";
      }
    }
  }
  echo exo7("homme",45);
?>

<?php
  echo "<h2>exercise 8</h2>";
  function addition($num1 = 5, $num2 = 3, $num3 = 6) {
    return $num1 + $num2 + $num3;
  }
  echo addition(1,1,1);
?>









<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
