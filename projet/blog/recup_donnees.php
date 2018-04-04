<?php

  echo '<div class="news">';
  echo '<h3>' .$donnees['titre'].' le '.$donnees['date_creation'].'</h3>';
  echo '<p>' .$donnees['contenu'].'</p>';
  echo '</div>';

  echo '<h2>Commentaires : </h2>';
  echo '<a href="#newComment">Ajouter un commentaire</a> <br><br>';

  // récupération des commentaires
  function getNumPages($id) {
    global $db;
    $myselection = "SELECT * FROM commentaires WHERE id_billet= '$id'";
    $myrequest = $db->query($myselection);
    $nbrBillets = $myrequest->fetchAll();
    $nbrepage = ceil(count($nbrBillets)/5);
    return $nbrepage;
  }

  function getId($id) {
    global $db;
    $myselection = "SELECT id_billet FROM commentaires WHERE id_billet= '$id'";
    $myrequest = $db->query($myselection);
    $nbrBillets = $myrequest->fetch();
    return $nbrBillets['id_billet'];
  }



  function getComment( $id ) {
    global $db, $pageEncodee;
    $fin = ($_GET['page'] - 1)*5;
    // var_dump($fin);
    echo '<div id="nextPage">';
    $myselection2 = "SELECT * FROM commentaires WHERE id_billet= '$id' ORDER BY date_commentaire DESC LIMIT 5 OFFSET $fin ";
    $myrequest2 = $db->query($myselection2);
    // var_dump($fin);
    echo '<fieldset>';
    while ($donnees2 = $myrequest2->fetch()) {

      echo '<strong>' .$donnees2['auteur'] .'</strong>' .' le ' .$donnees2['date_commentaire'] .'<br>';
      echo $donnees2['commentaire'];
      echo '<br> <br>';
    }
    $pages = getNumPages($id);
    echo '<div> Page : ';
    for ($counter = 1; $counter<=$pages; $counter++ ) {
      echo '<div class="inline">';
      $donnee = getId($id);
      // var_dump($donnees["id_billet"]);
      $fin = $fin + 5;
      echo '<a class="square" href="commentaires.php?billets='.$donnee.'&page='.$counter.'">'.$counter.'</a>';
      echo '</div>';
      // var_dump($fin);
    }
    echo '</div>';
    echo '</fieldset>';
    echo '</div>';

  }


  getComment($id);

 ?>
