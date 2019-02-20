<?php

include_once '_config/config.php';
include_once '_config/db.php';

include_once '_functions/functions.php';

include_once 'models/Chapters.php';
include_once 'models/Comments.php';
include_once 'models/Users.php';

include_once 'models/UsersManager.php';

//include_once 'views/member_view.php';

/*$usersManager = new UsersManager();
$var = $usersManager->get(1);

var_dump($var);*/

//var_dump($db);

// Definition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

// Array contenant toutes les pages
$allPages = scandir('controllers/');

// test verification tableau
//var_dump($allPages);
var_dump($page);

if(in_array($page.'_controller.php', $allPages)){
    //inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {
    // retour d'une erreur
    echo 'test Erreur 404';

}
