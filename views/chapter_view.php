<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>

    <title>Blog de Jean Forteroche !</title>
</head>

<body>
<?php include_once 'views/includes/header.php';
    //$allChapters = listChapters();
   //$allChapters = array();
    foreach($allChapters as $index => $chapter)
    {
    if ($chapter instanceof Chapter)

    { ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $chapter->getChaptTitle(); ?></h2>
        <p class="blog-post-meta"> <?php echo date_format(date_create($chapter->getChaptDateCreated()), "d/m/Y"); ?></p>
        <p class="lead"><?php echo $chapter->getChaptSentence(); ?></p>


        <button class="read"><a href="index.php?page=chapter&id=<?= $chapter->getIdChapter(); ?>"> Lire la suite </a></button>
    </div>
  <?php } ?>

<!--<script type="text/javascript">$('.read').click(function(){$(this).next().toggle();})</script>
<script type="text/javascript">$('.add-comment').click(function(){$(this).next().toggle();})</script>  -->

</body>
</html>
<?php }?>

<?php include_once 'views/includes/footer.php' ?>