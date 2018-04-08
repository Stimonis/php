<?php

    include '../controller/PDO.php';

    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $myselection = "SELECT * FROM membres WHERE pseudo = '".$pseudo."'";
    $myrequest = $db->query($myselection);
    
    $donnees = $myrequest->fetch();

    $passCorrect = password_verify($password, $donnees['pass']);

    //var_dump($password, $donnees['pass'], $passCorrect);

    if (!$donnees) {
        echo 'identifiant ou mot de passe incorrect !';
    } else {
        if (!$passCorrect) {
            session_start();
            $_SESSION['id'] = $donnees['id'];
            $_SESSION['pass'] = $donnees['pass'];
            $_SESSION['pseudo'] = $donnees['pseudo'];
            // dureelimite servira à déconnecter la session automatiquement après 30mins
            $_SESSION['dureelimite'] = date("G:i:s", strtotime("+30 minutes")); 
            // var_dump($_SESSION);
            // var_dump($dureelimite);
            echo 'Vous êtes connecté !' ;
            // var_dump($_SESSION);
            header('Location: ../index.php');
        } else {
            echo 'Mot de passe incorrect !';
        }
    }



    // créer deux cookies pour se connecter automatiquement avec les variables pseudo et password haché
?>