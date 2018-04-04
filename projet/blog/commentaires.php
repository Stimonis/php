<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  include 'PDO.php';

  session_start();

  $page = $_GET['page'];
  $id = $_GET['billets'];

  if (isset($_SESSION['name']) && isset($_SESSION['password'])) {

  // var_dump($id,$page);

  //récupération du billet
  $myselection1 = "SELECT * FROM billets WHERE id= '$id'";
  $myrequest1 = $db->query($myselection1);
  $donnees = $myrequest1->fetch();



  if (!empty($donnees)) {

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>blog test</title>
  </head>
  <body>

    <div class="right">
      <a href="logout.php">logout</a>
    </div>
    <h1>Mon super blog !</h1>
    <a href="index.php">Retour à la liste des billets</a>
    <div class="">

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
        global $db, $pageEncodee, $id;
        $fin = ($_GET['page'] - 1)*5;
        // var_dump($fin);
        echo '<div id="nextPage">';
        $myselection2 = "SELECT * FROM commentaires WHERE id_billet= '$id' ORDER BY date_commentaire DESC LIMIT 5 OFFSET $fin ";
        $myrequest2 = $db->query($myselection2);
        // var_dump($fin);
        echo '<fieldset>';
        while ($donnees2 = $myrequest2->fetch()) {

          echo '<strong>' .$donnees2['auteur'] .'</strong>' .' le ' .$donnees2['date_commentaire'] .'<br>';
          echo '<div class="float">';
          echo '<a href="supComm.php?billets='.$donnees2["id_billet"].'&commentaire='.$donnees2["id"].'">x</a>';
          echo '</div>';
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

       <h2 id="newComment">Rajouter un commentaire</h2>
       <form class="" action="ajout_comment.php" method="post">
         <fieldset>
           <input type="hidden" name="idBillet" value="<?php echo $id ?>">
           <label for="auteur">Nom : </label>
           <input id="auteur" type="text" name="auteur"> <br><br>
           <label for="commentaire">Commentaire : </label>
           <textarea id="commentaire" name="commentaire" rows="8" cols="80"></textarea><br>
           <input type="submit" name="" value="envoyer"> <br>
           <!-- <input type="datetime-local" name="date" value="<?php // echo date('Y-m-d H:i:s'); ?>"> <br> -->
         </fieldset>
       </form>

    </div>

  </body>
</html>

  <?php

  } else {
    echo "<h1>Il n'y a aucun billet ici!!!</h1>";
    echo '<a href="index.php">Retour à la liste des billets</a>';
  }
} else {
  $myselection1 = "SELECT * FROM billets WHERE id= '$id'";
  $myrequest1 = $db->query($myselection1);
  $donnees = $myrequest1->fetch();



  if (!empty($donnees)) {

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>blog test</title>
  </head>
  <body>

    <h1>Mon super blog !</h1>
    <a href="index.php">Retour à la liste des billets</a>
    <div class="">

      <?php

        include 'recup_donnees.php';

       ?>

       <h2 id="newComment">Rajouter un commentaire</h2>
       <form class="" action="ajout_comment.php" method="post">
         <fieldset>
           <input type="hidden" name="idBillet" value="<?php echo $id ?>">
           <label for="auteur">Nom : </label>
           <input id="auteur" type="text" name="auteur"> <br><br>
           <label for="commentaire">Commentaire : </label>
           <textarea id="commentaire" name="commentaire" rows="8" cols="80"></textarea><br>
           <input type="submit" name="" value="envoyer"> <br>
           <!-- <input type="datetime-local" name="date" value="<?php // echo date('Y-m-d H:i:s'); ?>"> <br> -->
         </fieldset>
       </form>

    </div>

  </body>
</html>

  <?php

  } else {
    echo "<h1>Il n'y a aucun billet ici!!!</h1>";
    echo '<a href="index.php">Retour à la liste des billets</a>';
  }
}


  ?>
