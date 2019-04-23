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


if (isset($_GET['page'])) {
    if ($_GET['page'] == 'listChapters') {
        listChapters();
    } elseif ($_GET['page'] == 'chapter') {
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            chapter();
        } else {
            echo 'Erreur : aucun identifiant de chapitre envoyé';
        }
    } else {
        home();
    }

} else {
    home();
}



/* if (isset($_GET['page']))
{
    if ($_GET['page'] == 'single_chapter')
    {
        listChapters();
    } elseif ($_GET['page'] == 'chapter')
    {
        if (isset($_GET['id']) && $_GET['id'] > 0)
        {
            chapter();
        } else
        {
            echo 'Erreur : aucun identifiant de chapitre envoyé';
        }
    } else
    {
        home();
    }
} else
{
    home();
}  */





