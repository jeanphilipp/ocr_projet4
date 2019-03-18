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

    <?php foreach ($allChapters as $index => $chapter): ?>

      <div class="blog-post">

             <h2 class="blog-post-title"><?php echo $chapter['chapt_title']; ?></h2>
             <p class="blog-post-meta"> <?php echo date_format(date_create($chapter['chapt_datecreated']),"d/m/Y");?></p>
             <p><?php echo $chapter['chapt_sentence'];?></p>
             <p><?php $chapter['chapt_content'];?></p>
             <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Lire la suite...</a></p>

        <?php endforeach; ?>

      </div>




    <div class="blog-post">
        <h2 class="blog-post-title">Test JP Sample blog post</h2>
        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. </p>
    </div><!-- /.blog-post -->

</div>

<?php include_once 'views/includes/footer.php' ?>

</body>

</html>
