<?php
session_start();
//var_dump($_SESSION);

include_once '_config/config.php';
include_once '_config/db.php';
include_once 'models/Chapter.php';
include_once 'models/ChaptersManager.php';
include_once 'models/Comment.php';
include_once 'models/CommentsManager.php';
include_once 'models/User.php';
include_once 'models/UsersManager.php';
include_once 'controllers/chapter_controller.php';
include_once 'controllers/home_controller.php';
include_once 'controllers/user_controller.php';
include_once 'controllers/FrontController.php';
include_once 'controllers/BackController.php';

$frontcontrol = new FrontController();
$backcontrol = new BackController();

/* Test si admin ou non dans URL */
if (isset($_GET['admin'])) {

    // ESPACE ADMINISTRATEUR
    if (!$backcontrol->isAdmin()) {
        header('Location: index.php?page=connection');
    }

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'listChapters') {
            $backcontrol->listChapters();
        } elseif ($_GET['page'] == 'create-chapter') {
            $backcontrol->displayCreateChapter();
        } elseif ($_GET['page'] == 'create-chapter-post') {
            $backcontrol->createChapter();
        } elseif ($_GET['page'] == 'update-chapter') {
            //Affiche le formulaire de modif d un chapitre
            $backcontrol->displayUpdateChapter();
        } elseif ($_GET['page'] == 'update-chapter-post') {
            //1) recuperer les donnees du formulaires 2)modifie les donnees en bdd 3) rediriger sur la route de listChapter
            $backcontrol->updateChapter();
        } elseif ($_GET['page'] == 'delete-chapter') {
            $backcontrol->removeChapter();
        } elseif ($_GET['page'] == 'users') {
            $backcontrol->showUsers();

        } elseif ($_GET['page'] == 'delete-comment') {
            $backcontrol->removeComment();
        } else {
            echo "page introuvable !";
        }
    }

    // ESPACE FRONTEND
} else {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'listChapters') {
            listChapters();
        } elseif ($_GET['page'] == 'chapter') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                chapter();
            } else {
                echo 'Erreur : aucun identifiant de chapitre envoyé';
            }
        } elseif ($_GET['page'] == 'addcomment') {
            $frontcontrol->createComment();

        } elseif ($_GET['page'] == 'signalComment') {
            $frontcontrol->signalComment();

        } elseif ($_GET['page'] == 'createaccount') {
            $frontcontrol->displayCreateAccount();
        } elseif ($_GET['page'] == 'createaccount-post') {
            $frontcontrol->createUser();
        } elseif ($_GET['page'] == 'connection') {
            $frontcontrol->displayConnection();
        } elseif ($_GET['page'] == 'logout') {
            $frontcontrol->logout();
        } else {
            home();
        }
    } else {
        home();
    }
}




















