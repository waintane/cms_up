<?php include "install-head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h2>Bienvenue</h2>
            <p>text blablabla de bienvenue</p>
        </div>
        <div>
            <h2>Informations necessaire</h2>
            <p>Veuillez remplir le formulaire suivant afin de pouvoir finir la configuration de votre cms</p>
            <?php echo "<p> $msg </p>";?>
            <form action="install.php" method="POST">
                <div>
                    <label for="title">Titre de votre site Web</label>
                    <input type="text" id="title" name="title">
                </div>
                <div>
                    <label for="user">Identifiant</label>
                    <input type="text" id="user" name="user">
                </div>
                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password">
                </div>
                <div>
                    <label for="passwordConfirm">Confirmer Mot de passe</label>
                    <input type="password" id="passwordConfirm" name="passwordConfirm">
                </div>

                <button type="submit" name="submit">Installer up</button>
            </form>
        </div>
    </div>
</body>
</html>