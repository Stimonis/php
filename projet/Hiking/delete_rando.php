<?php
  include 'PDO.php';

  $id = $_POST['id'];

  $myselection = 'DELETE FROM hiking WHERE id = '.$id.'';

  var_dump ($id);

  $bdd->exec($myselection);

  header('Location: read.php');
?>
