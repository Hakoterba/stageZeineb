<?php
    require('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $head ?>
    <title>Connexion</title>
</head>
<body>
    <?= $header ?>
    <div class="connexion">
        <form action="" method="post">
            <div class="input_connexion">
                <label for="email">Entrez votre email :</label>
                <input type="email" name="email" id="">
            </div>
            <div class="input_connexion">
                <label for="mdp">Entrez votre mot de passe :</label>
                <input type="password" name="mdp" id="">
            </div>
        </form>
    </div>
</body>
</html>