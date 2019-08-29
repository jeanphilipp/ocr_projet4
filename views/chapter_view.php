<?php include_once __DIR__.'/top.php'; ?>

<?php include_once 'views/includes/header.php';?>
<div class="container">
<div class="row">
    <div class="col-12">
<?php
    foreach($allChapters as $index => $chapter)
    {
    if ($chapter instanceof Chapter)

    { ?>
<div class="blog-post">
        <h2 class="blog-post-title"><?php echo $chapter->getChaptTitle(); ?></h2>
        <p class="blog-post-meta"> <?php echo date_format(date_create($chapter->getChaptDateCreated()), "d/m/Y"); ?></p>
        <p class="lead"><?php echo $chapter->getChaptSentence(); ?></p>
       <!-- <button class="read">--><a href="index.php?page=chapter&id=<?= $chapter->getIdChapter(); ?>">Lire la suite</a>
</div>

  <?php } ?>
    <?php }?>

    </div> <!-- .col-12 -->
</div> <!-- .row -->

</div><!-- .container -->
<?php include_once 'views/includes/footer.php' ?>
</body>
</html>