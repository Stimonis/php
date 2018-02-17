<?php
  echo "<h2>Exercise 3</h2>";
  echo $_GET["nom1"] ."<br>";
  echo $_GET["prenom1"];

  echo "<h2>Exercise 4</h2>";
  echo $_POST["nom2"] ."<br>";
  echo $_POST["prenom2"];

  // echo "<h2>Exercise 6";
  // if ($_GET["nom3"] != '' && $_GET["prenom3"] != '') {   ===> passe à une autre page
  //   header("location: user.php");
  //   exit();
  // };


  echo "<h2>Exercise 7</h2>";
  echo $_GET["recherche"];

  echo "<h2>Exercise 8</h2>";

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

    <h2>Exercise 5</h2>
    <?php
      if ((!isset($_GET["send"]) && !isset($_GET["nom3"]) && !isset($_GET["prenom3"])) || empty($_GET["prenom3"]) || empty($_GET["nom3"]) || pathinfo($_GET["recherche"],PATHINFO_EXTENSION) !== "pdf") {
    ?>

        <fieldset>
          <legend>contact information</legend>
          <form class="" action="index.php" method="GET">
            état civil : <br>
            <select name="civilite">
              <option>Mr</option>
              <option>Mme</option>
            </select>
            <br>
            nom : <br>
            <input type="text" name="nom3"> <br>
            prénom : <br>
            <input type="text" name="prenom3"> <br>
            <input type="file" name="recherche"> <br>
            <input type="submit" name="send" value="send">
          </form>
        </fieldset>
      <?php
    } else {
        echo $_GET["civilite"] ."<br>";
        echo $_GET["nom3"] ."<br>";
        echo $_GET["prenom3"] ."<br>";
        echo "le fichier " .$_GET["recherche"] ." est bien un fichier pdf";
      }
   ?>
</html>
