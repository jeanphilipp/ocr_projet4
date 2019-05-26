<?php

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

//die;

$frontcontrol = new FrontController();
$backcontrol = new BackController();

if (isset($_GET['page'])) {


    if ($_GET['page'] == 'listChapters') {
        listChapters();

    } elseif ($_GET['page'] == 'chapter') {
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            chapter();
        } else {
            echo 'Erreur : aucun identifiant de chapitre envoyé';
        }

    } elseif ($_GET['page'] == 'addcomment') {

        $frontcontrol->createComment();
    }

    elseif ($_GET['page'] == 'users'){

        $backcontrol->showUsers();
    }

    elseif ($_GET['page'] == 'createaccount-post'){
     $frontcontrol->createUser();

    } elseif($_GET['page'] == 'createaccount'){
       $frontcontrol->displayCreationAccount();
    }

    elseif ($_GET['page'] == 'connection'){
        $frontcontrol->displayConnection();
    }

    else {
        home();
    }

} else {
    home();
}









