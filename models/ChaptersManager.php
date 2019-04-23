<?php

class ChaptersManager

{
    /* Envoi de tous les chapitres  */
    static function getAllChapters()
    {
        global $db;
        $reqChapter = $db->prepare('SELECT * FROM chapters');
        $reqChapter->execute([]);
        $chapters = array();
        while ($data = $reqChapter->fetch()) {
            $chapter = new Chapter();
            $chapter->setIdChapter($data['id_chapter']);
            $chapter->setChaptTitle($data['chapt_title']);
            $chapter->setChaptSentence($data['chapt_sentence']);
            $chapter->setChaptContent($data['chapt_content']);
            $chapter->setChaptDateCreated($data['chapt_datecreated']);
            $chapters[] = $chapter;
        }
        return $chapters;
    }

    static function getChapter($id_chapter)
    {
        global $db;
        //$id_chapter = str_secur($id_chapter);
        $reqChapter = $db->prepare('SELECT * FROM chapters WHERE id_chapter = ?');
        $reqChapter->execute([$id_chapter]);
        $data = $reqChapter->fetch();
        $chapter = new Chapter();

        $chapter->setIdChapter($data['id_chapter']);
        $chapter->setChaptTitle($data['chapt_title']);
        $chapter->setChaptSentence($data['chapt_sentence']);
        $chapter->setChaptContent($data['chapt_content']);
        $chapter->setChaptDateCreated($data['chapt_datecreated']);
        // je n ai pas id comment dans mes chapitres $chapter->setIdComment($data['id_comment']);
        return $chapter;
    }

}