<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>
    <title>Blog de Jean Forteroche !</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
      <script>tinymce.init({selector:'textarea'});</script>


</head>

<body>
<?php include_once 'views/includes/header.php'; ?>

<div class="container">
    <div class="jumbotron p-4 p-md-5 rounded">
        <div class="col text-center">
            <p class="lead">Création d'un chapitre</p>
            <hr>

            <form action="index.php?admin&page=create-chapter-post" method="POST">
                <p><input class="champ" type="text" name="chapt_title" placeholder="Titre" /></p>
                <p><input class="champ" type="text" name="chapt_sentence" placeholder="Introduction" /></p>
                <textarea class="champ" type="text" rows="10" cols="40" name="chapt_content" placeholder="Contenu" ></textarea>
                <p><input class="champ" type="date" name="chapt_datecreated" placeholder="Date" /></p>
                <p><input class="champ" type="text" name="id_user" placeholder="Id"/></p>
                <p><input class="bt" type="submit" name="add_chapter" value="Ajouter"/></p>
                <p><a href="index.php?admin&page=listChapters" class="btn btn-info"> Retour aux chapitres</a></p>
            </form>
        </div>
    </div>
</div>
<?php include_once 'views/includes/footer.php' ?>
</body>
</html>