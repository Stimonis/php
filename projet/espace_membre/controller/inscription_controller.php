<?php 

    include '../PDO.php';

    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];
    $email = $_POST['email'];

    if ( empty($pseudo) || empty($pass) || empty($pass2) || empty($email)) {
        $m= 'un champs n\'a pas été rempli';
        $l= '<a href="../index.php">Retour</a>';
        include '../view/messages.php';
        
    } else {      
        if ( $pass == $pass2 ) {
            $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $myselection = "INSERT INTO membres (pseudo, pass, email)
                    VALUES (:pseudo, :pass, :email)";
            $myrequest = $db->prepare($myselection);
            
            $myrequest->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $myrequest->bindParam(':pass', $pass);
            $myrequest->bindParam(':email', $email, PDO::PARAM_STR);
            
            $myrequest->execute();
            header('Location: ../view/login.php');
        } else {
            $m='vous avez fait une erreur en retapant votre mot de passe';
            $l= '<br><a href="../index.php">Retour</a>';
            include '../view/messages.php';
        }
    }



    // header('Location: ../index.php');

?>