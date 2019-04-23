<?php
/**
 * Created by PhpStorm.
 * User: jpg
 * Date: 20/03/19
 * Time: 13:44
 */

class FrontController
{
    public function listChapters(){
        $allChapters = ChaptersManager::getAllChapters();
    }

    public function listComments()
    {
        $allComments = CommentsManager::getAllComments();
    }
}

include_once 'views/chapter_view.php';
include_once 'views/single_chapter.php';