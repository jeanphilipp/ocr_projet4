
<!DOCTYPE html>
<html lang="fr">
<head>
    <?include_once 'views/includes/head.php'; ?>
    <title><?= ucfirst($page) ?> - Blog de Jean Forteroche !</title>
</head>

<body>
<?php include_once 'views/includes/header.php'; ?>



<!-- Création du formulaire(html) -->
<div id="container">
<div class="login">
    <form method="post" action="">

        <h2 class="acces">Accès à votre compte</h2>
        <p>
            <input class="champ" type="text" name="pseudo" placeholder="Pseudo" />
        </p>
        <p>
            <input class="champ" type="text" name="mail" placeholder="Mail" />
        </p>
        <p>
            <input class="champ" type="password" name="password" placeholder="Password" />
        </p>
        <div class="loginbottom">
            <input class="bt" type="submit" name="login" value="Login" />

            <?php
            if(isset($message)) {
                echo '<p class="msg">'.$message.'</p>';
            }
            ?>
            <p><a href="creer-compte.php">Créer votre compte</a></p>
        </div>

    </form>
</div> <!-- .login -->
</div> <!-- #container -->


<?php include_once 'views/includes/footer.php' ?>
</body>

</html>