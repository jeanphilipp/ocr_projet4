<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php';?>
    <title>Login</title>
</head>

<body>
<?php include_once 'views/includes/header.php'; ?>
<div id="container">
    <div class="login">
        <form method="post" action="index.php?page=connection">
            <h2 class="acces">Se connecter</h2>
            <p><input class="champ" type="text" name="pseudo" placeholder="Pseudo" /></p>

            <p><input class="champ" type="password" name="password" placeholder="Password"/></p>
            <div class="loginbottom">
                <input type="submit" name="login" value="Se connecter" />
                <?php
                if(isset($message)){
                    echo '<p class="msg">'.$message.'</p>';
                }
                ?>
                <p><a href="index.php?page=createaccount">S'inscrire</a></p>
            </div>

        </form>
    </div> <!-- .login -->
</div> <!-- #container -->
<?php include_once 'views/includes/footer.php'?>
</body>
</html>