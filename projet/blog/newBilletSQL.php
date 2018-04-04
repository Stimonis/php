<?php

  include 'PDO.php';

  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];

  if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {

  $myselection = "INSERT INTO billets (titre, contenu) VALUES (:titre, :contenu)";
  $myrequest = $db->prepare($myselection);

  $myrequest->bindParam(':titre', $titre);
  $myrequest->bindParam(':contenu', $contenu);

  $myrequest->execute();

  header('location: index.php');
} else {
  echo 'Un champs n\'a pas été rempli ! <br>';
  echo '<a href="index.php">Retour</a>';
}



 ?>
