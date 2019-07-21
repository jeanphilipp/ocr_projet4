<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>
    <title>Blog de Jean Forteroche !</title>
</head>

<body>
<?php include_once 'views/includes/header.php'; ?>

<div class="container">
    <div class="jumbotron p-4 p-md-5 rounded">
        <div class="col text-center">
            <p class="lead">Modification d'un chapitre</p>
            <?php
                    /**
                     * @var Chapter $chapter
                     */
?>
            <form method="POST" action="index.php?admin&page=update-chapter-post">

                <p><input id="idchapter" class="champ" type="text" name="id_chapter" value="<?= $chapter->getIdChapter();?>"/></p>
                <p><input class="champ" type="text" name="chapt_title" value="<?= $chapter->getChaptTitle();?>"/></p>
                <p><input class="champ" type="text" name="chapt_sentence" value="<?= $chapter->getChaptSentence();?>" /></p>
                <textarea class="champ" type="text" rows="10" cols="40" name="chapt_content"><?= $chapter->getChaptContent();?></textarea>
                <p><input class="champ" type="date" name="chapt_datecreated" value="<?= $chapter->getChaptDateCreated();?>" /></p>
                <p><input class="bt" type="submit" name="modification" value="Modifier"/></p>
                <p><a href="index.php?admin&page=listChapters" class="btn btn-info">Retour aux chapitres</a></p>
            </form>
        </div>
    </div>
</div>
<?php include_once 'views/includes/footer.php' ?>

<script src="assets/js/test1.js"></script>
</body>
</html>