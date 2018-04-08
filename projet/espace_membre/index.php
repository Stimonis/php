<?php
    include 'controller/PDO.php';

    session_start();

    $date = date("G:i:s");

    // var_dump($_SESSION);      
        
        if (isset($_SESSION['id']) && isset($_SESSION['pass']) && isset($_SESSION['pseudo'])) {
            // déconnexion automatique après 30 mins
            if ( $date >= $_SESSION['dureelimite'] ) {
            header('Location: ../model/logout_model.php');
            } else {
                echo 'bonjour ' .$_SESSION['pseudo'] .'<br>';
                echo '<a href="model/logout_model.php">logout</a>';
            }
        } else {
            include 'view/login.php';
        }
?>