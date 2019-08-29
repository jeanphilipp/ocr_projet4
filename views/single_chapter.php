<?php
$id = $_GET['id'];
$pseudo = '';
if (!empty($_SESSION)){
    $pseudo =  $_SESSION['pseudo'];
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php $title = $chapter->getChaptTitle(); ?>
    <?php include_once 'views/includes/head.php'; ?>

</head>
<body>
<?php include_once 'views/includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-justify font-italic" >
            <p class="lead"><?php echo $chapter->getChaptContent();?></p>
        </div>
    </div>
    <hr>
<div class="row">

    <div class="col-12">
        <form method="POST" action="index.php?page=addcomment" role="form">
            <div class="form-group">
               <!-- <label>Pseudo :</label> -->
                <input type="hidden" class="form-control" id="pseudo" name="pseudo"
                       placeholder="<?php echo $pseudo;?>"/><br>
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
        <p><b>Commentaires :</b></p>
        <hr>

<?php foreach ($allComments as $comment) {
    if ($comment instanceof Comment) { ?>

        <p class="font-italic small"><?= $comment->getComsContent(); ?><br>
        <?php $user = new User(); ?>

       Posté par <strong><?php echo $comment->getUser()->getPseudo();?> </strong>le <?= $comment->getComsDateCreated('d-m-Y');?></p>

        <form action="index.php?page=signalComment" method="POST">
            <input type="hidden" name="id_comment" value="<?= $comment->getIdComment(); ?>" />
            <input type="hidden" name="id_chapter" value="<?= $chapter->getIdChapter(); ?>" />
            <p class="font-italic small">
                <input class="bt" type="submit" name="signaler" value="Signaler ce commentaire (<?= $comment->getSignalement(); ?>)"/>
            </p>
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