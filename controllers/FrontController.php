<?php
// a supprimer session start
//session_start();

class FrontController
{
    function home()
    {
        include_once 'views/home_view.php';
    }

    function listChapters()
    {
        $title = "Les chapitres";
        $allChapters = ChaptersManager::getAllChapters();
        $allComments = CommentsManager::getAllComments();
        $arrayComments = array();
        foreach ($allComments as $comment) {
            $arrayComments[$comment->getIdChapter()][] = $comment;
        }
        include_once 'views/chapter_view.php';
    }

    function chapter()
    {
        $chapter = ChaptersManager::getChapter($_GET['id']);
        $allComments = CommentsManager::getCommentsByChapter($_GET['id']);
        include_once 'views/single_chapter.php';
    }

    public function createComment()
    {
        if (!empty($_SESSION['pseudo'])) {
            CommentsManager::addComment();
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = "index.php?page=chapter&id=" . $_POST['id_chapter'];
            header("Location: http://$host$uri/$extra");
            exit;
        } else {
            // creer variable title ici
            $message = "Vous devez créer un compte et/ou vous connecter pour laisser ou signaler un commentaire !";
            include_once 'views/createaccount.php';
        }
    }

    /*
    Fonction permettant de signaler un commentaire par un utilisateur possédant un compte
    */
    public function signalComment()
    {
        if (isset($_POST['signaler']) && isset($_POST['id_comment']) && !empty($_SESSION['pseudo'])) {
            CommentsManager::signalComment((int)$_POST['id_comment']);
            header("Location: index.php?page=chapter&id=" . $_POST['id_chapter']);
        } else {

            $message = "Vous devez créer un compte et/ou vous connecter pour signaler un commentaire !";
            // include_once 'views/createaccount.php';
            header("Location: index.php?page=connection");
        }
    }

    public function createUser()
    {
        if (empty($_POST['pseudo']) || empty($_POST['mail']) || empty($_POST['password'])) {
            $message = "Merci de remplir tous les champs du formulaire !";
            include_once 'views/createaccount.php';
        } else {
            $user = UsersManager::addUser();
        }
    }

    public function displayCreateAccount()
    {
        include_once 'views/createaccount.php';
    }

    public function displayConnection()
    {
        if (isset($_POST['login'])) {
            //Formulaire soumis
            if (empty($_POST['pseudo']) || empty($_POST['password'])) {
                $message = 'Veuillez renseigner tous les champs !';
            }
            $user_exists = UsersManager::checkConnection();

            if ($user_exists && empty($_SESSION['admin'])) {
                header('Location: index.php');
            }

            if ($_SESSION['admin']) {
                header('Location: index.php?admin&page=users');
            } else {
                $message = 'Accès refusé !';
            }
        }
        include_once 'views/user_view.php';
    }

    public function logout()
    {
        if (isset($_SESSION['pseudo'])) {
            session_start();
            session_destroy();
            header("Location: index.php?page=connection");
            exit;
        }
    }
}

