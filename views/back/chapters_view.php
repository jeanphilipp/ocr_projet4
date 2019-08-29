<!--<!DOCTYPE html>
<html lang="fr">
<head>
    php include_once 'views/includes/head.php'; ?>

</head>

<body> -->

<?php include_once __DIR__.'/../top.php'; ?>

<?php include_once 'views/includes/header.php'; ?>

<div class="container">
    <div class="jumbotron p-4 p-md-5 rounded">
        <div class="col text-center">
            <p class="lead">Liste des chapitres </p>
            <hr>
            <a href="index.php?admin&page=create-chapter" class="btn btn-info">Créer un Chapitre</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                </tr>

                <?php
                /**
                 * @var Chapter[] $chapters
                 */
                foreach ($chapters as $chapter) { ?>
                    <tr>
                        <td>
                            <?= $chapter->getIdChapter(); ?>
                        </td>
                        <td>
                            <?= $chapter->getChaptTitle(); ?>
                        </td>
                        <td>
                            <a href="index.php?admin&page=update-chapter&id=<?= $chapter->getIdChapter(); ?>">Modifier</a>
                        </td>
                        <td>
                            <a href="index.php?admin&page=delete-chapter&id=<?= $chapter->getIdChapter(); ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a href="index.php?admin&page=users" class="btn btn-info">Retour à la page d'administration</a>

        </div>
    </div>
</div>
<?php include_once 'views/includes/footer.php' ?>
</body>
</html>