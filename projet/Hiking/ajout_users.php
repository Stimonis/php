<?php
  include 'PDO.php';

  $trouve = true;

  $userName = $_POST['utilisateur'];
  $password = $_POST['motDePasse'];

  $myselection2 = "SELECT userName FROM users WHERE userName= '$userName'";
  $myrequest2 = $bdd->prepare($myselection2);
  $myrequest2->execute();
  $result = $myrequest2->fetch();

  // var_dump( $myrequest2->fetch() );
  if ($result == false) {
    $myselection = 'INSERT INTO users (userName, password) VALUES (:userName, '.sha1.'(:password))';
    $myrequest = $bdd->prepare($myselection);
    $myrequest -> bindParam(':userName', $userName);
    $myrequest -> bindParam(':password', $password);
    $myrequest -> execute ();
    header('location:read.php?succesMessage='.urlencode('Inscription réussie.'));
    // echo '<body onLoad="alert(\'Inscription réussie\')">';
    // echo '<meta http-equiv="refresh" content="0;URL=accueil.php">';
  } else {
      echo '<body onLoad="alert(\'nom d utilisateur déjà utilisé\')">';
      echo '<meta http-equiv="refresh" content="0;URL=nouveau_user.php">';
  }
?>
