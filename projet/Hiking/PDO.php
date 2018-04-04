<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $bd = new PDO('mysql:host=localhost;dbname=reunion_island;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>
