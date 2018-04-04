<?php

  include 'PDO.php';

  $id = $_GET['billet'];

  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];

  $myselection = "UPDATE billets SET titre = :titre, contenu = :contenu WHERE id = '$id'";
  $myrequest = $db->prepare($myselection);

  $myrequest->bindParam(':titre', $titre);
  $myrequest->bindParam(':contenu', $contenu);

  $myrequest->execute();


  header('location: index.php');


 ?>
