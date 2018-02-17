<?php
  echo "<h1>Exercise 1</h1>";
  echo $_SERVER['HTTP_USER_AGENT'] ."<br>";
  echo $_SERVER['REMOTE_ADDR'] ."<br>";
  echo $_SERVER["SERVER_NAME"];

  echo "<h1>Exercise 2</h1>";
  session_start();
  $_SESSION["name"] = $_POST["nom"];
  $_SESSION["firstName"] = $_POST["prenom"];
  $_SESSION["ages"] = $_POST["age"];


  echo "<h1>Exercise 3</h1>";
  $cookie_login = $_POST["login"];
  $cookie_pssw = $_POST["pass"];


  if (!empty($cookie_login) || !empty($cookie_pssw)) {
    setcookie($cookie_login, $cookie_pssw);
    echo "login " .$cookie_login ." is set <br>";
    echo "Password is " .$cookie_pssw;
  };

  // echo "<h1>Exercise 3</h1>";
  // f (!empty($cookie_login) || !empty($cookie_pssw)) {
  //   setcookie("login",$_POST["login"]);
  //   setcookie("password",$_POST["pass"]);

  echo "<h1>Exercise 4</h1>";

  $_SESSION["log"] = $cookie_login;
  $_SESSION["passw"] = $cookie_pssw;
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exercise 2</h1>
    <fieldset>
      <form class="" action="index.php" method="POST">
        Nom : <input type="text" name="nom" placeholder="Nom"> <br>
        Prénom : <input type="text" name="prenom" placeholder="Prénom"> <br>
        Âge : <input type="text" name="age" placeholder="Âge"> <br>
        <input type="submit" name="send" value="Send">
      </form>
    </fieldset>

    <h1>Exercise 3</h1>
    <fieldset>
      <form class="" action="index.php" method="POST">
        Login : <input type="text" name="login" placeholder="Nom d'utilisateur"> <br>
        Password : <input type="password" name="pass" placeholder="Mot de passe"> <br>
        <input type="submit" name="send" value="Send">
      </form>
    </fieldset>
  </body>
</html>
