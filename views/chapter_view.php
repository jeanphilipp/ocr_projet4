<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?include_once 'views/includes/head.php'; ?>
    <title><?= ucfirst($page) ?>Blog de Jean Forteroche !</title>
</head>

<body>

<?php include_once 'views/includes/header.php'; ?>


<div class="container">

    <?php
    foreach($allChapters as $index => $chapter) {
            if ($chapter instanceof Chapter) { ?>

    <div class="blog-post jumbotron">

             <h2 class="blog-post-title"><?= $chapter->getChaptTitle();?></h2>
             <p class="blog-post-meta"> <?php echo date_format(date_create($chapter->getChaptDateCreated()),"d/m/Y");?></p>
             <p class="lead"><?php echo $chapter->getChaptSentence();?></p>
             <p><?php echo substr($chapter->getChaptContent(),0,20);?></p>

           <!--  <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Lire la suite...</a></p>  -->
        <?php }
    } ?>

      </div>



<!-- a completer (temporaire) -->
    <div class="blog-post">
        <h2 class="blog-post-title">Test JP Sample blog post</h2>
        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. </p>
    </div><!-- /.blog-post -->

</div>

<?php include_once 'views/includes/footer.php' ?>

</body>

</html>
