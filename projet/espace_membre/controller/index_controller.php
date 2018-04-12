<?php
    include '../PDO.php';

    session_start();
      
    $date = time();
        
        if (isset($_SESSION['user'])) {
            // déconnexion automatique après 30 mins
            if ( $date - $_SESSION['user']["dureeLimite"] >= 1800  ) {
            header('Location: ../controller/logout_controller.php');
            } else {
                $m = 'bonjour ' .$_SESSION['user']["pseudo"] .'<br>';
                $l = '<a href="../controller/logout_controller.php">logout</a>';
                include '../view/messages.php';
            }
        } else {
            include '../view/login.php';
        }
?>