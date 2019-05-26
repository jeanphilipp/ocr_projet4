<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php';?>
    <title>Créez votre compte</title>
</head>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>

    <title>Blog de Jean Forteroche !</title>
</head>
<body>
<?php include_once 'views/includes/header.php';
?>

<?php include_once 'views/includes/header.php';?>

<!-- Création du formulaire(html) -->
<div id="container">
<div class="login">
    <form method="post" action="index.php?page=createaccount-post">

        <h2 class="acces">Créez votre compte</h2>
        <p>
            <input class="champ" type="text" name="pseudo" placeholder="Pseudo" />
        </p>

        <p>
            <input class="champ" type="mail" name="mail" placeholder="Mail" />
        </p>

        <p>
            <input class="champ" type="password" name="pass" placeholder="Password" />
        </p>
        <div class="loginbottom">
            <input class="bt" type="submit" name="login" value="S'inscrire" />

            <?php
            if(isset($message)){
                echo '<p class="msg">'.$message.'</p>';
            }
            ?>
           <p><a href="index.php?page=connection">Se connecter</a></p>
        </div>

    </form>
</div> <!-- .login -->
</div> <!-- #container -->

<?php include_once 'views/includes/private';?>


</body>

</html>

