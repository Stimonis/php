<?php

  include 'PDO.php';

  $user = $_POST['user'];
  $password = $_POST['password'];

  // var_dump($user, $password);

  if ((isset($user) && $user != '') && (isset($password) && $password != '')) {
    $myselection = "SELECT * FROM user WHERE name='$user'";
    $myrequest = $db->query($myselection);

    $donnees = $myrequest -> fetch();
    $userName = $donnees['name'];
    $passwd = $donnees['password'];

    // var_dump($userName, sha1($passwd));

    if ($user == $userName && sha1($password) == $passwd) {
      session_start();

      $_SESSION['name'] = $_POST['user'];
      $_SESSION['password'] = $_POST['password'];

      header('Location:index.php');
    }

  } else {
      echo 'Données incorrectes! <br>';
      echo '<a href=login.php>retour</a>';

  }

 ?>
