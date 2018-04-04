<?php

  include 'PDO.php';

  $id = $_GET['billet'];

  $myselection = "DELETE FROM billets WHERE id=$id";

  $myrequest = $db->query($myselection);

  header('location:index.php');


?>
