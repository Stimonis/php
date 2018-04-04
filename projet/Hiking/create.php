<?php
	include 'PDO.php';
	//On utilise alors un petit javascript lui signalant ce fait
	session_start();
	// var_dump($_SESSION);
	if (isset($_SESSION['userName']) && isset($_SESSION['password'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="basic.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<header>
		<div class="containHeader">
			<div class="gauche">
				<a class="a" href="read.php">Retour</a>
			</div>
			<div class="logout">
				<a class="a" href="logout.php">Logout</a>
			</div>
		</div>
	</header>
	<h1>Ajouter</h1>
	<div class="container">

		<form class="form" action="rajout_rando.php" method="post">
			<div>
				<label for="name">Nom</label>
				<input type="text" name="name" value="">
			</div>

			<div>
				<label for="difficulty">Difficulté</label>
				<select name="difficulty">
					<option value="très facile">Très facile</option>
					<option value="facile">Facile</option>
					<option value="moyen">Moyen</option>
					<option value="difficile">Difficile</option>
					<option value="très difficile">Très difficile</option>
				</select>
			</div>

			<div>
				<label for="distance">Distance</label>
				<input type="number" name="distance" value="">
			</div>
			<div>
				<label for="duration">Durée</label>
				<input type="duration" name="duration" value="">
			</div>
			<div>
				<label for="height_difference">Dénivelé</label>
				<input type="number" name="height_difference" value="">
			</div>
			<div>
				<label for="available">Pratiquable</label>
				<input class="radio" type="radio" name="available" value="pratiquable">oui
				<input class="radio radioNon" type="radio" name="available" value="impratiquable">non
			</div>
			<br>
			<div class="center">
				<button type="submit" name="button">Ajouter</button>
			</div>
		</form>
	</div>
</body>
</html>
<?php
} else {
	echo "Vous n'êtes plus connecté. Veuillez vous reconnecter en cliquant <a href= accueil.php>ici</a>";
}
 ?>
