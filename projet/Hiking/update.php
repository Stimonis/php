<?php
	include 'PDO.php';

	// On démarre ma session
	session_start();
  // var_dump($_SESSION);
	if (isset($_SESSION['userName']) && isset($_SESSION['password'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier une randonnée</title>
	<link rel="stylesheet" href="basic.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<header>
		<div class="gauche">
			<a href="read.php" class="a">Retour</a> <br>
		</div>
		<!-- <div class="milieu">
			<a class="a" href="create.php">Rajout randonnée</a>
		</div> -->
		<div class="logout">
			<a class="a" href="logout.php">Logout</a>
		</div>
	</header>
	<?php
		$id = $_GET['hike'];
		$myselection = "SELECT * FROM hiking WHERE id = '".$id."'";
		$myrequest = $bdd->query($myselection);
		$donnees = $myrequest->fetch(PDO::FETCH_ASSOC);
	?>
	<h1>Modifier</h1>
	<form class="form" action="modifier_rando.php" method="post">
		<div>
			<input type="hidden" name="hike" value="<?php echo $donnees['id'] ?>">
			<label for="name">Nom</label>
			<input type="text" name="name" value="<?php echo $donnees['name'] ?>">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				// <!-- opérateur ternaire -->
				<option value="très facile" <?php echo ($donnees['difficulty'] == "très facile") ? 'selected' : ""; ?>>Très facile</option>
				<option value="facile" <?php echo ($donnees['difficulty'] == 'facile') ? 'selected' : ""; ?>>Facile</option>
				<option value="moyen" <?php echo ($donnees['difficulty'] == 'moyen') ? 'selected' : ""; ?>>Moyen</option>
				<option value="difficile" <?php echo ($donnees['difficulty'] == 'difficile') ? 'selected' : ""; ?>>Difficile</option>
				<option value="très difficile" <?php echo ($donnees['difficulty'] == 'très difficile') ? 'selected' : ""; ?>>Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="number" name="distance" value="<?php echo $donnees['distance'] ?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?php echo $donnees['duration'] ?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="number" name="height_difference" value="<?php echo $donnees['height_difference']?>">
		</div>
		<div>
			<label for="available">Pratiquable</label>
			<?php
				if ($donnees['available'] == 'pratiquable') {
					echo '<input class="radio" type="radio" checked name="available" value="pratiquable">oui';
					echo '<input class="radio" type="radio" name="available" value="impratiquable">non';
				} else {
						echo '<input class="radio" type="radio" name="available" value="pratiquable">oui';
						echo '<input class="radio" type="radio" checked name="available" value="impratiquable">non';
				}
			?>
		</div>
		<button type="submit" name="button">Modifier</button>
	</form>
</body>
</html>
<?php
} else {
		echo "Vous n'êtes plus connecté. Veuillez vous reconnecter en cliquant <a href= accueil.php>ici</a>";
}
 ?>
