<?php
/**
 * Created by PhpStorm.
 * User: jpg
 * Date: 11/02/19
 * Time: 14:58
 */

/* test jp */
//include_once 'models/Chapter.php';

//include_once 'models/ChaptersManager.php';

$allChapters = ChaptersManager::getAllChapters();
include_once 'views/chapter_view.php';
