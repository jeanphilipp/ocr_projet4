<?php


include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';
include_once '_classes/Chapters.php';
include_once '_classes/Comments.php';
include_once '_classes/Users.php';


$var = new Users(1);
debug($var);
exit;

// var_dump($db);

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

if(in_array($page.'_controller.php', $allPages)){
    //inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {
    // retour d'une erreur
    echo 'Erreur 404';

}
