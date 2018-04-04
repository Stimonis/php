<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  try {
    $db = new PDO('mysql:host=localhost;dbname=Mini_Chat;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mini-chat</title>
    <style media="screen">
      body {
        padding-top: 30px;
      }

      div {
        margin-top: 20px;
      }

      label {
        width : 70px;
        display: inline-block;
        text-align: left;
      }

      form {
        text-align: center;
      }

      span {
        padding-right: 10px;
      }

      .bouton {
        margin-top: 10px;
      }
    </style>
  </head>

  <body>
    <form action="ajout_chat.php" method="post">
      <label for="pseudo">Pseudo : </label>
      <input id="pseudo" type="text" name="pseudo"> <br>
      <label for="message">Message : </label>
      <input id="message" type="text" name="message"> <br>
      <input type="hidden" name="date_creation" value="<?php echo 'le ' .date("d/m/Y").' à '. date("G:i:s"); ?>">
      <input class="bouton" type="submit" value="Envoyer">
    </form>

    <div>
      <?php

        $myselection = "SELECT * FROM chat ORDER BY date_creation DESC";
        $myrequest = $db->query($myselection);
        while ($donnees = $myrequest->fetch()) {
          echo '<p><span>' .$donnees['date_creation'] .'</span> ';
          echo '  <strong>' .$donnees['pseudo'] .'</strong> : ';
          echo $donnees['message'] .'</p>';
        }

      ?>
    </div>

  </body>
</html>
