<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php';?>

    <title>test</title>
</head>

<body>

<?php include_once 'views/includes/header.php';?>

<!-- Création du formulaire(html) -->
<div id="container">
<div class="login">
    <form method="post" action="index.php?page=listChapters">
        <h2 class="acces">Accès à votre compte</h2>
        <p>
            <input class="champ" type="text" name="pseudo" placeholder="Pseudo" />
        </p>

        <p>
            <input class="champ" type="password" name="password" placeholder="Password"/>
        </p>
        <div class="loginbottom">
            <input type="submit" name="" value="Se connecter" />

            <?php
            $pseudo = $_POST['pseudo'];
            if(!empty($pseudo) &&(isset($message)))
            {
                echo '<br />';
                echo "Félicitation {$pseudo}";
                echo '<p class="msg">'.$message.'</p>';
            }
            else {
                echo '<br />';
                echo 'Pour vous connecter, veuillez créer votre compte !';
            }
            ?>
            <p><a href="index.php?page=createaccount">Créez votre compte</a></p>
        </div>

    </form>


</div> <!-- .login -->
</div> <!-- #container -->

<?php include_once 'views/includes/private';?>
</body>

</html>