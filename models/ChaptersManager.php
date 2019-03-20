<?php


class ChaptersManager
{
    /* Envoi de tous les chapitres  */
    static function getAllChapters(){
        global $db;
        $reqChapter = $db->prepare('SELECT * FROM chapters');
        $reqChapter->execute([]);
        
        //plutot un while
        //return $reqChapter->fetchAll();
        echo '<pre>';
        $chapters = array();
        while ($donnees = $reqChapter->fetch()){
            $chapter = new Chapter();

            $chapter->setIdChapter($donnees['id_chapter']);
            $chapter->setChaptTitle($donnees['chapt_title']);

            $chapter->setChaptSentence($donnees['chapt_sentence']);
            $chapter->setChaptContent($donnees['chapt_content']);
            $chapter->setChaptDateCreated($donnees['chapt_datecreated']);

            $chapters[] = $chapter;
        }
       // echo '<h1>Liste des chapitres</h1><br />';
       // var_dump($chapters);
        return $chapters;
    }

    function getChapter($id_chapter)
    {
        global $db;
        $id_chapter = str_secur($id_chapter);
        $reqChapter = $db->prepare('SELECT * FROM chapters WHERE id_chapter = ?');
        $reqChapter->execute([$id_chapter]);
        $data = $reqChapter->fetch();

        $chapter = new Chapter();
       // a virer $chapter->idChapter = $id_chapter;
        $chapter->setIdChapter($data['id_chapter']);
        $chapter->setChaptTitle($data['chapt_title']);

        $chapter->setChaptSentence($data['chapt_sentence']);
        $chapter->setChaptContent($data['chapt_content']);
        $chapter->setChaptDateCreated($data['chapt_datecreated']);

        return $chapter;
    }

}

