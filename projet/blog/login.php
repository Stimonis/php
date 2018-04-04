<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="right">      
      <a href="index.php">retour</a>
    </div>

    <br><br><br>
    <fieldset>
      <br>
      <form class="center" action="loginSQL.php" method="post">
        <label class="width" for="user">Nom : </label>
        <input  id="user" type="text" name="user"> <br>
        <label class="width" for="password">Password : </label>
        <input id="password" type="password" name="password"><br><br>
        <input type="submit" name="" value="envoyer">
      </form>
      <br>
    </fieldset>

  </body>
</html>
