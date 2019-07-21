<?php

function listChapters()
{
   $allChapters = ChaptersManager::getAllChapters();
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
    $allComments =  CommentsManager::getCommentsByChapter($_GET['id']);
    include_once 'views/single_chapter.php';
}





