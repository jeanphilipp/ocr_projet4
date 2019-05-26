<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>

    <title>Blog de Jean Forteroche !</title>
</head>
<body>
<?php include_once 'views/includes/header.php';
?>
<!-- Ajout nouveau fichier -->
<div class="showChapter">
    <hr>
    <p class="blog-content">
        <?php echo $chapter->getChaptContent(); ?></p>
   <!-- <button class="btn- btn-primary">Laissez un commentaire</button>-->
</div>
<hr>

<div class="row">
    <div class="col">
        <form method="POST" action="index.php?page=addcomment" role="form">
             <div class="form-group">
                 <label>Pseudo :</label>
                 <input type="text" class="form-control"  id="pseudo" name="pseudo"  placeholder="Indiquez votre pseudo"/><br>
             </div>

            <div class="form-group">
                <textarea class="form-control" name="coms_content" id="coms_content" placeholder="Ecrivez votre commentaire ici" ></textarea><br>
                <button type="submit" class="btn- btn-primary">Envoyer</button>
            </div>
            <hr>

            <input type="text" name="id_chapter" id="id_chapter" value="<?php echo $chapter->getIdChapter();?>" />
            <input type="text" name="id_user" id="id_user" value="<?php echo 0;?>" />
        </form>
    </div>
</div>

<!-- Affichage des commentaires -->
<?php foreach ($allComments as $comment)
{
    if ($comment instanceof Comment)
    { ?>
        <div class="row">
            <div class="col-sm-9"><?php echo $comment->getComsContent(); ?></div>
        </div>
    <?php } ?>
<?php } ?>

<?php include_once 'views/includes/footer.php' ?>
</body>
</html>



