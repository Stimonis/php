<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="basic.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      <div class="signin">
        <a class="a" href="nouveau_user.php">Sign In</a>
      </div>
    </header>
    <br><br>
    <?php
      if(isset($_GET['errorMessage'])) {
        echo '<div class="error">'.urldecode($_GET['errorMessage']).'</div>';
      }
        elseif (isset($_GET['successMessage'])) {
          echo '<div class="success">'.urldecode($_GET['successMessage']).'</div>';
        }
    ?>
    <div class="menu">
      <div class="">

      </div>
      <div class="">

      </div>
    </div>

    <form class="form" action="login.php" method="POST">
      <div>
        <label for="login">Identifiant</label>
        <input type="text" name="login">
      </div>
      <div>
        <label for="pswd">Mot de passe </label>
        <input type="password" name="pswd">
      </div>
      <div>
        <input class="supp" type="submit" value="Connexion">
      </div>
    </form>
  </body>
</html>
