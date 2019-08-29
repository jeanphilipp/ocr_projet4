<?php
$backcontrol = new BackController();
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
        //1) récupère les donnees du formulaire 2)modifie les données en bdd 3) redirige sur la route de listChapters
        $backcontrol->updateChapter();
    } elseif ($_GET['page'] == 'delete-chapter') {
        $backcontrol->removeChapter();
    } elseif ($_GET['page'] == 'users') {
        $backcontrol->showUsers();
    } elseif ($_GET['page'] == 'delete-comment') {
        $backcontrol->removeComment();
    }elseif($_GET['page'] == 'espace-perso')  {
        $backcontrol->espacePerso();
    } else {
        echo "Erreur 404, page introuvable !";
    }
}


