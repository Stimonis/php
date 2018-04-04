<?php

include 'PDO.php';

$id = $_GET['billets'];


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

    <div class="flex">
      <a href="index.php">Retour</a>
      <a href="logout.php">logout</a>
    </div>

    <br><br>

    <?php

      $myselection = "SELECT * FROM billets WHERE id ='$id'";
      $myrequest = $db->query($myselection);
      $donnees = $myrequest->fetch();


    ?>

    <fieldset>
      <form class="" action="modifBillet.php?billet=<?php echo $id; ?>" method="post">
        <label for="titre">titre : </label> <br>
        <textarea id="titre" name="titre" rows="4" cols="20"><?php echo $donnees['titre']; ?></textarea> <br><br>
        <label for="contenu">Contenu : </label>
        <textarea id="contenu" name="contenu" rows="8" cols="80"><?php echo $donnees['contenu']; ?></textarea>
        <input type="submit" name="" value="modifier">
      </form>
    </fieldset>

  </body>
</html>
