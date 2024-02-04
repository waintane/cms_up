<?php include "index-head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="dashboard">
    <header>
        <?php include "menu.php" ?>
    </header>
    <main>
        <h1>Tableau de bord</h1>
        <div>
            <h2>Bienvenue sur up</h2>
        </div>
        <div>
            <h3>Connecté</h3>
            <div>
                <p>Identifiant</p>
                <p>Role</p>
            </div>
            <div>
                <p><?php echo $_SESSION["name"] ?></p>
                <p><?php echo $_SESSION["role"] ?></p>
            </div>
        </div>
    </main>
</body>
</html>