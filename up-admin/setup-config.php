<?php include "setup-config-head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/setup-up-config.css">
    <script src="js/setup-config.js" defer></script>
    <title>Document</title>
</head>
<body>

    <!-- information -->

    <div class="container-setup-1">
        <p>bienvenue sur Up. avant de pouvoir continuer, vous aurez besoin de configurer votre base de données avec les éléments suivant</p>
        <ol>
            <li>Nom de la base de données</li>
            <li>Nom d'utilisateur MySQL</li>
            <li>Mot de passe de l'utilisateur</li>
        </ol>
        <button onclick="">Commencer</button>
    </div>

    <!-- form login database -->

    <form action="setup-config.php" method="POST">
        <div>
            <label for="database"> Nom de la base de données </label>
            <input type="text" name="database" id="database" placeholder="Up">
            <p>Le nom de la base de données avec laquelle vous souhaitez utiliser wordpress</p>
        </div>
        <div>
            <label for="user">Identifiant</label>
            <input type="text" name="user" id="user" placeholder="utilisateur">
            <p>Nom d'utilisateur</p>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="mot de passe">
            <p>Votre mot de passe de base de données</p>
        </div>
        <div>
            <label for="address">Adresse de la base de données</label>
            <input type="text" name="address" id="address" value="localhost">
            <p>L'adresse utilisée pour construire votre base de données</p>
        </div>

        <button type="submit" name="submit"> Envoyer </button>
    </form>
</body>
</html>