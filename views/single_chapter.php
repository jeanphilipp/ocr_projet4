<?php
//include_once 'views/chapter_view.php';
var_dump($chapter);die;
?>

    <!-- Ajout nouveau fichier -->
  <div class="showChapter">
            <hr>
            <p class="blog-content">
                <?php echo $chapter->getChaptContent(); ?></p>
            <button class="add-comment">Laissez un commentaire</></button>
   </div>

     <?php if($_POST)
     {
         $pseudo = $_POST['pseudo'];
         $comment = $_POST['coms_content'];
         if(!empty($pseudo) AND !empty($comment))
            {
             // $sql = ('INSERT INTO comments') VALUES("'.$pseudo.'", "'.$comment.'")or die ("Erreur");
                echo "Votre commentaire est ajouté";
            } else
                {
                 echo "Erreur, il manque un ou plusieurs champs";
                }
         }
    ?>
        <div class="formul">
            <form method="POST" action="index.php">
                <label>Pseudo :</label>
                <input type="text" name="pseudo" /><br>
                <label>Votre commentaire :</label>
                <textarea name="commentaire"></textarea><br>
                <input type="submit" value="Envoyer">
            </form>
        </div> <!-- .formul-->

            <?php
            if(array_key_exists($chapter->getIdChapter(),$arrayComments[]))
        {  ?>


        <?php $content = $arrayComments[1]['getComsContent'];
        echo $content;
        } ?>
       <?php
       $comments = $arrayComments[$chapter->getIdChapter()];
       echo '<pre>';
            print_r($arrayComments[$chapter->getIdChapter()]);
        echo '</pre>';
       foreach ($comments as $comment){
           ?>
           <div class="blog-commentaire">
               <p class="blog-content">
                   <?php
                   echo "<em>".$comment->getComsContent()."</em>"; ?></p>
               <p class="blog-post-meta"> <?php
                   echo date_format(date_create($comment->getComsDateCreated()), "d/m/Y"); ?></p>
           </div><!-- .blog-commentaire -->

<?php };