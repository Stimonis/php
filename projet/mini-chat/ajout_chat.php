<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  try {
    $db = new PDO('mysql:host=localhost;dbname=Mini_Chat;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


  $pseudo = $_POST['pseudo'];
  $message = $_POST['message'];
  $date = $_POST['date_creation'];

  if (!empty($pseudo) && !empty($message)) {

    $myselection = "INSERT INTO chat2 (pseudo, message, date_creation) VALUES (:pseudo, :message, :date_creation)";
    $myrequest = $db->prepare($myselection);

    $myrequest->bindParam(':pseudo', $pseudo);
    $myrequest->bindParam(':message', $message);
    $myrequest->bindParam(':date_creation', $date);

    $myrequest->execute();

    header('location: minichat.php');

  } else {
    echo "<br>Veuillez remplir tous les champs. <br>";
    echo "<a href='minichat.php'>Retour</a>";
  }

 ?>
