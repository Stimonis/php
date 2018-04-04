<?php

  include 'PDO.php';


  session_start();

  // var_dump ($_SESSION['name'], $_SESSION['password']);

  if (isset($_SESSION['name']) && isset($_SESSION['password'])) {
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
    <p>Derniers billets du blog : </p>
    <div class="">

    <?php
      echo '<a class="news" href=newBillet.php>Nouveau billet</a>';
      $myselection = "SELECT * FROM billets ORDER BY date_creation DESC LIMIT 0, 5";
      $myrequest = $db->query($myselection);
      while ($donnees = $myrequest->fetch()) {
        echo '<div class="news">';
        echo '<div class="float">';
        echo '<a class="blanc" href="supBillet.php?billet='.$donnees["id"].'">x</a>';
        echo '</div>';
        echo '<h3>' .$donnees['titre'].' le '.$donnees['date_creation'].'</h3>';
        echo '<p>' .$donnees['contenu'].'</p>';
        echo '<a class="news" href="update.php?billets='.$donnees["id"].'"><p>Modification</></a>';
        echo "<a class='news' href='commentaires.php?billets=".$donnees['id']."&page=1'><p>Commentaires</p></a>";
        echo '</form>';
        echo '</div>';
      }

       ?>

    </div>

    </form>
  </body>
</html>



<?php
}else {

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
      <a class="" href="login.php">admin</a>
    </div>
    <h1>Mon super blog !</h1>
    <p>Derniers billets du blog : </p>
    <div class="">

    <?php

      include 'PDO.php';
      $myselection = "SELECT * FROM billets ORDER BY date_creation DESC LIMIT 0, 5";
      $myrequest = $db->query($myselection);
      while ($donnees = $myrequest->fetch()) {
        echo '<div class="news">';
        echo '<h3>' .$donnees['titre'].' le '.$donnees['date_creation'].'</h3>';
        echo '<p>' .$donnees['contenu'].'</p>';
        $donnee = $donnees['id'];
        echo "<a class='news' href='commentaires.php?billets=".$donnees['id']."&page=1'><p>Commentaires</p></a>";
        echo '</form>';
        echo '</div>';
      }

       ?>

    </div>

    </form>
  </body>
</html>
<?php
  }
?>
