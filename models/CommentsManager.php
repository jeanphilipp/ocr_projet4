<?php

class CommentsManager
{
    static function getAllComments()
    {
        global $db;
        $reqComment = $db->prepare("SELECT * FROM comments 
        AS c INNER JOIN users AS u ON u.id_user= c.id_user WHERE `signalement` >= 5 ORDER BY signalement DESC");
        $reqComment->execute([]);
        $comments = array();
        while ($donnees = $reqComment->fetch()) {
            $comment = new Comment();
            $comment->setIdComment($donnees['id_comment']);
            $comment->setComsContent($donnees['coms_content']);
            $comment->setComsDateCreated($donnees['coms_datecreated']);
            $comment->setIdChapter($donnees['id_chapter']);
            $comment->setIdUser($donnees['id_user']);
            $comment->setSignalement($donnees['signalement']);
            $comments[] = $comment;
        }
        return $comments;
    }

    static function getCommentsByChapter($id_chapter)
    {
        global $db;
        $reqComment = $db->prepare("SELECT *, DATE_FORMAT(coms_datecreated, '%d-%m-%Y') 
        AS coms_datecreated FROM comments AS c INNER JOIN users AS u ON u.id_user= c.id_user
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
        }
        return $comments;
    }

    static function addComment()
    {
        global $db;
        $req = $db->prepare("INSERT INTO `comments` (coms_content, id_chapter,id_user, coms_datecreated) 
        VALUES (?,?,?,now())");
        $req->execute(array($_POST['coms_content'], $_POST['id_chapter'], $_POST['id_user']));
    }

    public static function signalComment(int $id_comment)
    {
        global $db;
        $req = $db->prepare("UPDATE `comments` SET `signalement`= signalement + 1 WHERE id_comment=:id_comment");
        $req->bindValue(':id_comment', $id_comment, PDO::PARAM_INT);
        $req->execute();
    }

    public function deleteComment($id)
    {
        global $db;
        if (isset($id)) {
            $reqComment = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
            $reqComment->execute([$id]);
        }
    }
}




