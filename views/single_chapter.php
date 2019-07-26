<?php session_start();
$id = $_SESSION['id'];
$pseudo =  $_SESSION['pseudo'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>
    <title>Blog de Jean Forteroche !</title>
</head>
<body>
<?php include_once 'views/includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12"><?php echo $chapter->getChaptContent(); ?></div>
    </div>
    <hr>
<div class="row">

    <div class="col-12">
        <form method="POST" action="index.php?page=addcomment" role="form">
            <div class="form-group">
               <!-- <label>Pseudo :</label> -->
                <input type="hidden" class="form-control" id="pseudo" name="pseudo"
                       placeholder="<?php echo $_SESSION['pseudo'];?>"/><br>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="coms_content" id="coms_content"
                          placeholder="Ecrivez votre commentaire ici" required></textarea><br>
                <button type="submit" class="btn- btn-primary">Envoyer</button>
            </div>

            <hr>
            <input type="hidden" name="id_chapter" id="id_chapter" value="<?php echo $chapter->getIdChapter(); ?>"/>
            <input type="hidden" name="id_user" id="id_user" value="<?php echo $id; ?>"/>
        </form>

    </div>
</div>

<!-- Affichage des commentaires -->

<div class="row">
    <div class="col-12">
        <p>Commentaires :</p>
        <hr>

<?php foreach ($allComments as $comment) {
    if ($comment instanceof Comment) { ?>

        <?= $comment->getComsContent(); ?><br>
        <?php $user = new User(); ?>

        <p>Posté par : <b><?php echo $comment->getUser()->getPseudo();?></b>, publié le <?= $comment->getComsDateCreated('d-m-Y');?>

        <form action="index.php?page=signalComment" method="POST">
            <input type="hidden" name="id_comment" value="<?= $comment->getIdComment(); ?>" />
            <input type="hidden" name="id_chapter" value="<?= $chapter->getIdChapter(); ?>" />
            <input class="bt" type="submit" name="signaler" value="Signaler ce commentaire (<?= $comment->getSignalement(); ?>)"/>
        </form>
        <hr>

    <?php } ?>
<?php } ?>
        

    </div>
</div>
</div> <!-- .container -->
<?php include_once 'views/includes/footer.php' ?>


</body>
</html>