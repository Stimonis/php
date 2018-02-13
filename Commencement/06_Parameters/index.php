<?php
  echo "<h2>exercise 1</h2>";
  echo $_GET["nom"];
  echo $_GET["prenom"];

  echo "<h2>exercise 2</h2>";
  $name = $_GET["nom"];
  $prenom = $_GET["prenom"];
  $age = $_GET["age"];
  if ($age === null) {
    echo "connard";
  } else {
    echo $age;
  };

  echo "<h2>exercise 3</h2>";
  echo $_GET["dateDebut"] ."<br>" .$_GET["dateFin"];

  echo "<h2>exercise 4</h2>";
  echo $_GET["langage"] ."<br>" .$_GET["serveur"];

  echo "<h2>exercise 5</h2>";
  echo $_GET["semaine"];

  echo "<h2>exercise 6</h2>";
  echo $_GET["batiment"] ."<br>" .$_GET["salle"];
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
