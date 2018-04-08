<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        <br>
        <form action="../model/login_model.php" method="post">
            <label for="pseudo">Pseudo</label>
            <input type="text" id="pseudo" name="pseudo"> <br>
            <label for="pass">Mot de passe</label>
            <input type="password" id="pass" name="password"> <br>
            <label for="connex">Connexion automatique</label>       
            <input id="connex" type="checkbox" name="connex">
            <br>
            <input type="submit" value="login">
            <br>
        </form>
        <p>Si vous n'êtes pas inscrit cliquez sur ce <a href="../view/inscription.php">lien</a></p>
    </fieldset>
</body>
</html>