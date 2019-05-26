<?php

class FrontController
{
    function listChapters()
    {
        $allChapters = ChaptersManager::getAllChapters();
        $allComments = CommentsManager::getAllComments();
        $arrayComments = array();
        foreach ($allComments as $comment)
        {
            $arrayComments[$comment->getIdChapter()][] = $comment;
        }
        include_once 'views/chapter_view.php';
    }

    function chapter()
    {
        $chapter = ChaptersManager::getChapter($_GET['id']);
        $allComments =  CommentsManager::getCommentsByChapter($_GET['id']);
        include_once 'views/single_chapter.php';
    }

    public function listComments()
    {
        $allComments = CommentsManager::getAllComments();
    }

   public function createComment()
   {
        $comment_created = CommentsManager::addComment();
       /* cree en visio */
       $host = $_SERVER['HTTP_HOST'];
       $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
       $extra = "index.php?page=chapter&id=".$_POST['id_chapter'];
       header("Location: http://$host$uri/$extra");
       exit;
   }

    public function createUser()
    {
        if(empty($_POST['pseudo']) || empty($_POST['mail']) || empty($_POST['pass']))
        {
            $message = "Merci de remplir tous les champs du formulaire !";
           // $this->displayCreationAccount();
            include_once 'views/create-account.php';

        }
        else {
            $user_created = UsersManager::addUser();
        }

    }

    public function displayCreationAccount(){
        include_once 'views/create-account.php';
    }

    /* Ajout mardi*/
    public function displayConnection(){
        include_once 'views/user_view.php';
    }



}

