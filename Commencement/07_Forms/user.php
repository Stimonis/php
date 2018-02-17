<?php
  echo "<h2>Exercise 3</h2>";
  echo $_GET["nom1"] ."<br>";
  echo $_GET["prenom1"];

  echo "<h2>Exercise 4</h2>";
  echo $_POST["nom2"] ."<br>";
  echo $_POST["prenom2"];

  // echo "<h2>Exercise 6";
  // if ($_GET["nom3"] != '' && $_GET["prenom3"] != '') {
  //   header("location: user.php");
  //   exit();
  // };
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Exercise 1</h2>
    <form class="" action="user.php" method="GET">
      nom : <br>
      <input type="text" name="nom1" placeholder="Nom">
      <br>
      prénom : <br>
      <input type="text" name="prenom1" placeholder="Prénom">
      <br>
      <input type="submit" name="" value="send">
    </form>

    <h2>Exercise 2</h2>
    <form class="" action="user.php" method="POST">
      nom : <br>
      <input type="text" name="nom2" placeholder="Nom">
      <br>
      prénom : <br>
      <input type="text" name="prenom2" placeholder="Prénom">
      <br>
      <input type="submit" name="" value="send">
    </form>
  </body>
</html>
