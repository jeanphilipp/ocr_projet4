<?php

function listChapters()
{
    $allChapters = ChaptersManager::getAllChapters();
   // var_dump($allChapters); die();

    $allComments = CommentsManager::getAllComments();

    $arrayComments = array();
    foreach ($allComments as $comment)
    {
        $arrayComments[$comment->getIdChapter()][] = $comment;
    }

    include_once 'views/chapter_view.php';
}

function chapter()
{
    $chapter = ChaptersManager::getChapter($_GET['id']);
    //var_dump($chapter);die;

    // recuperer les commentaire associes au chapitre

    // creer une vue et lappeler
    include_once 'views/single_chapter.php';

}




