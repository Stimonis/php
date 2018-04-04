<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  try {
    $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>
