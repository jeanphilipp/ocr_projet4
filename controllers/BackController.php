<?php

class BackController
{
    /*
    * 3 CAS de figure => 1) user non connecté, 2) user connecté et non admin, 3) l'user est l'admin
    */
    public function espacePerso()
    {

        if (!isset($_SESSION['pseudo'])) {
            header('Location: index.php?page=connection');
        } elseif (!$this->isAdmin()) {
            header('Location: index.php');
        } else//Admin
        {
            $this->showUsers();
        }
    }

    public function showUsers()
    {
        $allUsers = UsersManager::getAllUsers();
        $allComments = CommentsManager::getAllComments();
        require 'views/back/users_view.php';
    }

    public function listChapters()
    {
        $chapters = ChaptersManager::getAllChapters();
        require 'views/back/chapters_view.php';
    }

    /* CRUD
    Rédaction d'un chapitre par l'administrateur Jean Forteroche
     */
    public function createChapter()
    {
        $errors =[];

        if(empty($_POST['chapt_title']))
        {
            $errors[] = "Titre vide";
        }
        if(empty($_POST['chapt_sentence']))
        {
            $errors[] = "Phrase vide";
        }
        if(empty($_POST['chapt_datecreated']))
        {
            $errors[] = "Date vide";
        }

        if(count($errors) === 0 )
      {
          //On a une erreur et on les affiche avec le formulaire
          $chapter = ChaptersManager::addChapter();
          header('Location: index.php?admin&page=listChapters');
      }
      include 'views/back/chapter_create_view.php';
    }

    public function displayCreateChapter()
    {
        include_once 'views/back/chapter_create_view.php';
    }

    public function updateChapter()
    {
        /*  1) récupère les données du formulaire, 2) modifie les données en bdd, 3) redirige sur la route de listChapters */
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

    public function removeComment()
    {
        $id = $_GET['id'];
        CommentsManager::deleteComment($id);
        header('Location: index.php?admin&page=users');
    }

    public function isAdmin()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            return true;
        }
        return false;
    }
}



