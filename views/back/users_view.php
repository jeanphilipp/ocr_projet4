<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <?php include_once 'views/includes/head.php'; ?>
    <title>Blog de Jean Forteroche !</title>

    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
     <script>tinymce.init({selector:'textarea'});</script>-->

</head>

<body>
<?php include_once 'views/includes/header.php'; ?>

<div class="container">
    <div class="jumbotron p-4 p-md-5 rounded">
        <div class="col text-center">
            <p class="lead">Membres</p>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Pseudo</th>
                </tr>

                <?php foreach ($allUsers as $user) { ?>
                    <tr>
                        <td>
                            <?= $user->getIdUser(); ?>
                        </td>
                        <td>
                            <?= $user->getPseudo(); ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <hr>
            <p class="lead">Commentaires</p>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Commentaire</th>
                </tr>

                <?php foreach ($allComments as $comment) { ?>
                    <tr>
                        <td>
                            <?= $comment->getIdComment(); ?>
                        </td>
                        <td>
                            <?= $comment->getComsContent(); ?>
                        </td>

                        <td><a href="index.php?admin&page=delete-comment&id=<?= $comment->getIdComment();?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </table>

            <div class="admin_edit_chapter">
                <p><a href="index.php?admin&page=create-chapter" class="btn btn-info">Créer un chapitre</a>
                <a href="index.php?admin&page=listChapters" class="btn btn-info">Voir les chapitres</a></p>
            </div>
        </div>
    </div>
<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

