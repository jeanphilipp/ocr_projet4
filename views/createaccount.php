<!--<!DOCTYPE html>
<html lang="fr">

<head>

    include_once 'views/includes/head.php'; ?>

</head>

<body>  -->

<?php $title ="Créer votre compte"; ?>
<?php include_once 'top.php'; ?>
<?php include_once 'views/includes/header.php'; ?>

<div id="container">
    <div class="login">
        <form method="post" action="index.php?page=createaccount-post">
            <h2 class="acces">Créez votre compte</h2>
            <p><input class="champ" type="text" name="pseudo" placeholder="Pseudo"/></p>
            <p><input class="champ" type="email" name="mail" placeholder="Mail"/></p>
            <p><input class="champ" type="password" name="password" placeholder="Password"/></p>
            <div class="loginbottom">
                <input class="bt" type="submit" name="login" value="S'inscrire"/>
                <?php
                if (isset($message)) {
                    echo '<p class="msg">' . $message . '</p>';
                }
                ?>
                <hr>
               <p class="lead"><a href="index.php?page=connection">Se connecter</a></p>
            </div>
        </form>
    </div> <!-- .login -->
</div> <!-- #container -->
<?php include_once 'views/includes/footer.php'; ?>
</body>
</html>

