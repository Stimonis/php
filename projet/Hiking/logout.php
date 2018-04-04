<?php
  //on démarre la session_start
  session_start();

  //on détruit les variables de notre session
  session_unset();

  //on détruit notre session
  session_destroy();

  //On redirige l'utilisateur vers la page d'accueil
  header('location: read.php');
 ?>
