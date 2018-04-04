<?php
  include 'PDO.php';

  $login = $_POST['login'];
  $password = $_POST['pswd'];

  // var_dump($login .'  ' . $password);

  // on teste si nos variables sont définies
  if ((isset($login) && $login !='') && (isset($password) && $password !='')) {
    // on vérifie les infos du formulaires
    $myselection = "SELECT * FROM users
                    WHERE userName = '$login'";
    $myrequest = $bdd->prepare($myselection);
    // $myrequest->bindParam(':login', $_POST['login']);
    // $myrequest->bindParam(':password', $_POST['password']);
    $myrequest -> execute();

    $donnees = $myrequest->fetch();

    $motPasse = $donnees["password"];
    $utilisateur = $donnees["userName"];

    // on vérifie si le login et le password corresponde bien
    if ($login == $utilisateur && sha1($password) == $motPasse) {
      //si tout est ok on peut démarrer notre session
      session_start();

      // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
      $_SESSION['userName'] = $_POST['login'];
      $_SESSION['password'] = $_POST['pswd'];

      // on rediriga alors l'utilisateur vers une page de notre section membre

      header('location:read.php');
    } else {
      // le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait

      // puis on redirge vers la page d'acceuil en mettant un message par méthode $_GET

      header('location:accueil.php?errorMessage='.urlencode('Mot de passe ou Identifiant incorrect.'));
    }
  } else {
    header('location:accueil.php?errorMessage='.urlencode('Les variables du formulaire ne sont pas déclarées.'));
  }
 ?>
