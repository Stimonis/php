<?php

    include '../PDO.php';

    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $myselection = "SELECT * FROM membres WHERE pseudo = '".$pseudo."'";
    $myrequest = $db->query($myselection);
    
    $donnees = $myrequest->fetch();

    $passCorrect = password_verify($password, $donnees['pass']);

    //var_dump($password, $donnees['pass'], $passCorrect);

    if (!$donnees) {
        $m =  'identifiant ou mot de passe incorrect !'; 
        include '../view/messages.php';
    } else {
        if (!$passCorrect) {
            session_start();
            $_SESSION['user'] = array (
                'id' => $donnees['id'],
                'pass' => $donnees['pass'],
                'pseudo' => $donnees['pseudo'],
                'dureeLimite' => time()
            );
           
            // echo 'Vous êtes connecté !' ;
            // var_dump($_SESSION);
            header('Location: ../index.php');
        } else {
            $m =  'Mot de passe incorrect !';
            include '../view/messages.php';
        }
    }



    // créer deux cookies pour se connecter automatiquement avec les variables pseudo et password haché
?>