<?php
$frontcontrol = new FrontController();
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'listChapters') {
        $frontcontrol->listChapters();
    } elseif ($_GET['page'] == 'chapter') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $frontcontrol->chapter();
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
        $frontcontrol->home();
    }
    //appeler la fonction du frontController exligne77
} else {
    $frontcontrol->home();
}