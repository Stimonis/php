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
        <legend>Inscription</legend>
        <br>
        <form action="../controller/inscription_controller.php" method="post">
            <label for="pseudo">Pseudo </label>
            <input type="text" name="pseudo" id="pseudo"> <br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password"> <br>
            <label for="password2">Retapez votre mot de passe </label>
            <input type="password" name="password2" id="password2"> <br>
            <label for="email">Adresse email </label>
            <input type="email" name="email" id="email">
            <br><br>
            <input class="bouton" type="submit" value="s'inscrire">
            <br><br>
        </form>
    
    
    </fieldset>
</body>
</html>