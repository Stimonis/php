<?php
  echo "<h2>exercise 1</h2>";
  $mois = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
  ];

  echo "<h2>exercise 2</h2>";
  echo $mois[1];

  echo "<h2>exercise 3</h2>";
  echo $mois[4];
  // print_r = for debug
  // var_dump = for debug mais en bonus type de data et longueur
  // print = echo

  //  echo '<pre>';
  // print_r($mois);
  // echo '<hr>';
  // var_dump($mois);
  // echo '</pre>';

  echo "<h2>exercise 4</h2>";
  $mois[7] = "août";
  echo $mois[7];

  echo "<h2>exercise 8</h2>";
  foreach ($mois as $value) {
    echo $value ."<br>";
  }
?>

<?php
  echo "<h2>exercise 5</h2>";
  $depart = [
    "01" => "Ain",
    "03" => "Allier",
    "07" => "Ardèche",
    "15" => "Cantal",
    "26" => "Drôme",
    "38" => "Isère",
    "42" => "Loire",
    "43" => "Haute-Loire",
    "63" => "Puy-de-Dôme",
    "69D" => "Rhône",
    "69M" => "Métropole de Lyon",
    "73" => "Savoie",
    "74" => "Haute-Savoie",
  ];

  echo "<h2>exercise 6</h2>";
  echo $depart["69M"];

  echo "<h2>exercise 7</h2>";
  $depart["53"] = "Metz";

  echo "<h2>exercise 9-10</h2>";
  foreach ($depart as $key => $value) {
    echo "Le département " .$value ." a le numéro " .$key .".<br>";
  }
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
