<?php

class CommentsManager
{

    static function getAllComments(){
        global $db;
        $reqComment = $db->prepare('SELECT * FROM comments');
        $reqComment->execute([]);
        $comments = array();
        while ($donnees = $reqComment->fetch()){
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

    function getComment($id_comment)
    {
        global $db;
        $id_comment = str_secur($id_comment);
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
}




