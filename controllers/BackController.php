<?php

class BackController
{


    public function espacePerso()
    {

        if(!isset($_SESSION['pseudo']))
        {
            header('Location: index.php?page=connection');
        }
        elseif(!$this->isAdmin())
        {
            header('Location: index.php');
        }
        else//Administrateur
        {
           // include_once 'views/createaccount.php';
            $this->showUsers();
        }


    }



    public function showUsers()
    {
        $allUsers = UsersManager::getAllUsers();
        $allComments = CommentsManager::getAllComments();
        require 'views/back/users_view.php';
    }

    /* Section ADMINISTRATEUR */

    public function listChapters()
    {
        $chapters = ChaptersManager::getAllChapters();
        require 'views/back/chapters_view.php';
    }

    /* CRUD  */
    public function createChapter()
    {
        if (!empty($_POST['chapt_title']) && !empty($_POST['chapt_sentence']) && !empty($_POST['chapt_sentence'])
            && !empty($_POST['chapt_datecreated']) && !empty($_POST['id_user'])) {
            $chapter = ChaptersManager::addChapter();
            //REDIRECTION sur la route index ...
            header('Location: index.php?admin&page=listChapters');
        }
    }

    public function displayCreateChapter()
    {
        include_once 'views/back/chapter_create_view.php';
    }

    public function updateChapter()
    {
        //1) récupère les données du formulaire
        //2) modifie les données en bdd
        //3) redirige sur la route de listChapters
        $chapter = new Chapter();
        $chapter->setIdChapter($_POST['id_chapter']);
        $chapter->setChaptTitle($_POST['chapt_title']);
        $chapter->setChaptSentence($_POST['chapt_sentence']);
        $chapter->setChaptContent($_POST['chapt_content']);
        $chapter->setChaptDateCreated($_POST['chapt_datecreated']);
        ChaptersManager::updateChapter($chapter);
        header('Location: index.php?admin&page=listChapters');
    }

    public function displayUpdateChapter()
    {
        $id = $_GET['id'];
        $chapter = ChaptersManager::getChapter($id);
        include_once 'views/back/chapter_update_view.php';
    }

    public function removeChapter()
    {
        $id = $_GET['id'];
        ChaptersManager::deleteChapter($id);
        header('Location: index.php?admin&page=listChapters');
    }

    /* a faire verifier : Ajout pour valider les commentaire (JP)*/
    public function validateComment()
    {
        $id = $_GET['id'];
        CommentsManager::valideComment();
        header('Location: index.php?page=chapter&id=');
    }

    public function removeComment()
    {
        $id = $_GET['id'];
        CommentsManager::deleteComment($id);
        header('Location: index.php?admin&page=users');
    }

    /* Admin*/
    public function isAdmin()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            return true;

        }
        return false;
    }
}



