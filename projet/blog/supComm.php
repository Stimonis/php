<?php

  include 'PDO.php';

  $id = $_GET['commentaire'];
  $idBillet = $_GET['billets'];

  $myselection = "DELETE FROM commentaires WHERE id='$id'";

  $myrequest = $db->query($myselection);

  // var_dump($idBillet);


  header("Location: commentaires.php?billets=$idBillet&page=1");

 ?>
