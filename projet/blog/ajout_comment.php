<?php

  include 'PDO.php';
  $idBillet = $_POST['idBillet'];
  $auteur = $_POST['auteur'];
  $commentaire = $_POST['commentaire'];

  function addComment( $idBillet,$auteur, $commentaire ){
    global $db, $auteur, $commentaire, $idBillet;
    // //$date = $_POST['date']; pas besoin de mettre la date grâce à timestamp dans myphpadmin même!!!


    $myselection = "INSERT INTO commentaires (id_billet, auteur, commentaire)
    VALUES (:id_billet, :auteur, :commentaire)";
    $myrequest = $db->prepare($myselection);

    $myrequest->bindParam(':id_billet', $idBillet);
    $myrequest->bindParam(':auteur', $auteur);
    $myrequest->bindParam(':commentaire', $commentaire);

    $myrequest->execute();
  }

  if (!empty($_POST['auteur']) && !empty($_POST['commentaire'])) {

    addComment( $idBillet, $auteur, $commentaire );

    header("Location: commentaires.php?billets=$idBillet&page=1");
    
  } else {
    echo 'Un champs n\'a pas été rempli ! <br>';
    echo '<a href="commentaires.php?billets='.$idBillet.'&page=1">retour</a>';
  }

?>
