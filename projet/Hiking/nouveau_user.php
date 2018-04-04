<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="basic.css" media="screen" title="no title" charset="utf-8">
    <title>Formulaire d'inscription</title>
  </head>
  <body>
    <header>
      <div class="gauche">
        <a class="a" href="read.php">Retour</a>
      </div>
      <div class="login">
        <a class="a" href="login.php">Login</a>
      </div>
    </header>
    <br><br>
    <form class="form" action="ajout_users.php" method="post">
    <div>
			<label for="utilisateur">Nom d'utilisateur</label>
			<input type="text" name="utilisateur">
		</div>
		<div>
			<label for="motDePasse">Mot de passe</label>
			<input type="password" name="motDePasse">
		</div>
    <input class="supp" type="submit" name="" value="ajouter">
  </form>
  </body>
</html>
