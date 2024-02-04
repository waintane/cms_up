<?php include "login-head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h1><?php echo $title; ?></h1>
        <div>
            <p>Connexion</p>
            <p class="error"><?php echo $msg; ?></p>
        </div>
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" name="submit">Confirmer</button>
    </form>
</body>
</html>