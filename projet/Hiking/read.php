<?php
  include 'PDO.php';
	
	session_start();
  // var_dump($_SESSION);
	if (isset($_SESSION['userName']) && isset($_SESSION['password'])) {
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="basic.css" media="screen" title="no title" charset="utf-8">
    <title>Randonnées</title>
  </head>
  <body>
    <header>
      <div class="gauche">
        <a class="a" href="create.php">Ajout randonnée</a>
      </div>
      <div class="logout">
        <a class="a" href="logout.php">logout</a>
      </div>
      <div>

      </div>
    </header>
    <h1>Liste des randonnées</h1>
    <table>
      <thead>
        <tr>
          <th>Nom de la randonnée (cliquez sur l'une pour la modifier)</th>
          <th>Difficulté</th>
          <th>Durée</th>
          <th>Distance</th>
          <th>Dénivelé</th>
          <th>Pratiquable</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <?php
          $myselection = "SELECT * FROM hiking";
          $myrequest = $bdd->query($myselection);
          while ($donnees = $myrequest -> fetch()) {
            // var_dump ($donnees['available']);
            echo '<tr>';
            echo '<td class="tdSpec">';
            echo'<a href="update.php?hike='.$donnees["id"].'">'.$donnees["name"] .'</a>';
            // echo '<input type="hidden" name="name" value="' .$donnees['name'] .'">';
            // echo $donnees['name'] .'<br>';
            // echo '<button class="button" type="submit" name="button">'.$donnees['name'] .'</button>';
            // echo '<input type="submit" name="modifier" value="modifier">';
            echo '</a>';
            echo '</td>';
            echo '<form action="update.php" method="post">';
            echo '<td class="td">';
            echo $donnees['difficulty'];
            echo '<input type="hidden" name="difficulty" value="' .$donnees['difficulty'] .'">';
            echo '</td>';
            echo '<td class="td">';
            echo $donnees['duration'];
            echo '<input type="hidden" name="duration" value="' .$donnees['duration'] .'">';
            echo '</td>';
            echo '<td class="td">';
            echo $donnees['distance'];
            echo '<input type="hidden" name="distance" value="' .$donnees['distance'] .'">';
            echo '</td>';
            echo '<td class="td">';
            echo $donnees['height_difference'];
            echo '<input type="hidden" name="height_difference" value="' .$donnees['height_difference'] .'">';
            echo '</td>';
            if ($donnees['available'] == 'pratiquable') {
              echo '<td class="td"> Oui';
              echo '<input type="hidden" name="available" value="' .$donnees['available'] .'">';
              echo '</td>';
            } else {
              echo '<td class="td"> Non';
              echo '<input type="hidden" name="available" value="' .$donnees['available'] .'">';
              echo '</td>';
            }
            echo '</form>';
            echo '<td class="td">' ;
            echo '<form class="" action="delete_rando.php" method="post">';
            echo '<input type="hidden" name="id" value="' .$donnees['id'] .'">';
            echo '<input class="supp" type="submit" name="supprimer" value="supprimer">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
          }
        ?>
     </tbody>
    </table>
  </body>
</html>
<?php
} else {
?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="basic.css" media="screen" title="no title" charset="utf-8">
      <title>Randonnées</title>
    </head>
    <body>
      <header>
        <div class="login contour">
          <a class="a" href="accueil.php">Login</a>
        </div>
        <div class="signin contour">
          <a class="a" href="nouveau_user.php">Sign In</a>
        </div>
      </header>

      <h1>Liste des randonnées</h1>
      <table>
        <thead>
          <tr>
            <th>Nom de la randonnée</th>
            <th>Difficulté</th>
            <th>Durée</th>
            <th>Distance</th>
            <th>Dénivelé</th>
            <th>Pratiquable</th>
          </tr>
        </thead>
        <tbody>

          <?php
            $myselection = "SELECT * FROM hiking";
            $myrequest = $bdd->query($myselection);
            while ($donnees = $myrequest -> fetch()) {
              // var_dump ($donnees['available']);
              echo '<tr>';
              echo '<td class="tdSpec">';
              echo $donnees['name'];
              echo '</td>';
              echo '<form action="update.php" method="post">';
              echo '<td class="td">';
              echo $donnees['difficulty'];
              echo '<input type="hidden" name="difficulty" value="' .$donnees['difficulty'] .'">';
              echo '</td>';
              echo '<td class="td">';
              echo $donnees['duration'];
              echo '<input type="hidden" name="duration" value="' .$donnees['duration'] .'">';
              echo '</td>';
              echo '<td class="td">';
              echo $donnees['distance'];
              echo '<input type="hidden" name="distance" value="' .$donnees['distance'] .'">';
              echo '</td>';
              echo '<td class="td">';
              echo $donnees['height_difference'];
              echo '<input type="hidden" name="height_difference" value="' .$donnees['height_difference'] .'">';
              echo '</td>';
              if ($donnees['available'] == 'pratiquable') {
                echo '<td class="td"> Oui';
                echo '<input type="hidden" name="available" value="' .$donnees['available'] .'">';
                echo '</td>';
              } else {
                echo '<td class="td"> Non';
                echo '<input type="hidden" name="available" value="' .$donnees['available'] .'">';
                echo '</td>';
              }
              echo '</tr>';
            }
          ?>
       </tbody>
      </table>
    </body>
  </html>
<?php
}
 ?>
