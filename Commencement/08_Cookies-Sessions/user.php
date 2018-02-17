<?php
  echo "<h1>Exercise2</h1>";
  session_start();
  echo $_SESSION["name"] ."<br>";
  echo $_SESSION["firstName"] ."<br>";
  echo $_SESSION["ages"] ."<br>";

  echo "<h1>Exercise 4</h1>";
  session_start();
  echo $_SESSION["log"] ."<br>";
  echo $_SESSION["passw"];

  echo "<h1>Exercise 5</h1>";
  $_COOKIE["log"] = "MySelf";
  echo $_COOKIE["log"];

?>
