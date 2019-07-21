<?php

class CommentsManager
{
    static function getAllComments()
    {
        global $db;
        //ajouter faire inner join
        $reqComment = $db->prepare("SELECT * FROM comments WHERE `signalement` >= 2");
        $reqComment->execute([]);
        $comments = array();
        while ($donnees = $reqComment->fetch()) {
            $comment = new Comment();
            $comment->setIdComment($donnees['id_comment']);
            $comment->setComsContent($donnees['coms_content']);
            $comment->setComsDateCreated($donnees['coms_datecreated']);
            $comment->setIdChapter($donnees['id_chapter']);
            $comment->setIdUser($donnees['id_user']);
            $comments[] = $comment;
        }
        return $comments;
    }

    //CREER function getAllCommentbySignal

    function getComment($id_comment)
    {
        global $db;
        // Ajouter faire inner join
       // Ne fonctionne PAS : $id_comment = str_secur($id_comment);
        $reqComment = $db->prepare('SELECT * FROM comments WHERE id_comment = ?');
        $reqComment->execute([$id_comment]);
        $data = $reqComment->fetch();
        $comment = new Comment();
        $comment->setIdComment($data['id_comment']);
        $comment->setComsContent($data['coms_content']);
        $comment->setComsDateCreated($data['coms_datecreated']);
        $comment->setIdChapter($data['id_chapter']);
        $comment->setIdUser($data['id_user']);
        return $comment;
    }

    static function getCommentsByChapter($id_chapter)
    {
        global $db;
        $reqComment = $db->prepare("SELECT *, DATE_FORMAT(coms_datecreated, '%d-%m-%Y') 
     AS coms_datecreated FROM comments as c INNER JOIN users as u ON u.id_user= c.id_user
     WHERE id_chapter = ? ORDER BY id_comment DESC");

        $reqComment->execute([$id_chapter]);
        $comments = array();

       // echo '<pre>';
        while ($donnees = $reqComment->fetch()) {
            $user = new User();
            $user->setPseudo($donnees['pseudo']);
            //setter toutes donnees de l utilisateur

            $comment = new Comment();

            $comment->setIdComment($donnees['id_comment']);
            $comment->setComsContent($donnees['coms_content']);
            $comment->setComsDateCreated($donnees['coms_datecreated']);
            $comment->setIdChapter($donnees['id_chapter']);
            $comment->setIdUser($donnees['id_user']);

            $comment->setSignalement($donnees['signalement']);

            $comment->setUser($user);
            $comments[] = $comment;
            //var_dump($donnees);
        }

       // var_dump($comments);die;
        return $comments;
    }

    static function addComment()
    {
        global $db;
        $req = $db->prepare("INSERT INTO `comments` (coms_content, id_chapter,id_user, coms_datecreated) 
        VALUES (?,?,?,now())");
        $req->execute(array($_POST['coms_content'],$_POST['id_chapter'],$_POST['id_user']));

    }
/* Methode pour ajouter un signalement dans la BDD, maximum 5  JP */
   public static function signalComment(int $id_comment)
    {
        global $db;

            $req = $db->prepare("UPDATE `comments` SET `signalement`= signalement + 1 WHERE id_comment=:id_comment");

        //$req->bindValue(':signalement', $comment->getSignalement(),PDO::PARAM_INT);
        $req->bindValue(':id_comment', $id_comment,PDO::PARAM_INT);

        $req->execute();


    }

    public function deleteComment($id)
     {
         global $db;
         if (isset($id)) {
             $reqComment = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
             $reqComment->execute([$id]);

         } else {
             $message = "Une erreur est survenue !";
             echo $message;
         }
     }
}
//creer fonction recuper les comment qui ont +5 signal
//trier par signam order desc pour apparaitre du plus signaler au moins signaler
//   recuper fonction vue
//



