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
        $reqChapter = $db->prepare('SELECT * FROM chapters WHERE id_chapter = ?');
        $reqChapter->execute([$id_chapter]);
        $data = $reqChapter->fetch();
        $chapter = new Chapter();
        $chapter->setIdChapter($data['id_chapter']);
        $chapter->setChaptTitle($data['chapt_title']);
        $chapter->setChaptSentence($data['chapt_sentence']);
        $chapter->setChaptContent($data['chapt_content']);
        $chapter->setChaptDateCreated($data['chapt_datecreated']);
        return $chapter;
    }

    static function addChapter()
    {
        global $db;
        $chapt_title = $_POST['chapt_title'];
        $chapt_sentence = $_POST['chapt_sentence'];
        $chapt_content = $_POST['chapt_content'];
        $chapt_datecreated = $_POST['chapt_datecreated'];
        $id_user = $_POST['id_user'];

        if (isset($_POST['add_chapter'])) {
            $sql = "INSERT INTO `chapters` (chapt_title, chapt_sentence, chapt_content, chapt_datecreated, id_user)
VALUES (?,?,?,?,?)";
            $rs_insert = $db->prepare($sql);
            $rs_insert->bindValue(1, $chapt_title, PDO::PARAM_STR);
            $rs_insert->bindValue(2, $chapt_sentence, PDO::PARAM_STR);
            $rs_insert->bindValue(3, $chapt_content, PDO::PARAM_STR);
            $rs_insert->bindValue(4, $chapt_datecreated, PDO::PARAM_STR);
            $rs_insert->bindValue(5, $id_user, PDO::PARAM_INT);
            $rs_insert->execute();

            include_once 'views/back/users_view.php';
        } else {
            echo "Une erreur est survenue !";
        }
    }

    static function updateChapter(Chapter $chapter)
    {
        global $db;
        $reqChapter = $db->prepare("UPDATE `chapters` SET `chapt_title` =:chapt_title,`chapt_sentence` =:chapt_sentence, 
        `chapt_content` =:chapt_content, `chapt_datecreated` = :chapt_datecreated WHERE `id_chapter` =:chapt_id");

            $reqChapter->bindValue(':chapt_id',$chapter->getIdChapter(),PDO::PARAM_INT);
            $reqChapter->bindValue(':chapt_title',     $chapter->getChaptTitle(), PDO::PARAM_STR);
            $reqChapter->bindValue(':chapt_sentence',  $chapter->getChaptSentence(), PDO::PARAM_STR);
            $reqChapter->bindValue(':chapt_content',   $chapter->getChaptContent(), PDO::PARAM_STR);
            $reqChapter->bindValue(':chapt_datecreated',$chapter->getChaptDateCreated(), PDO::PARAM_STR);
            $reqChapter->execute();
    }

    public function deleteChapter($id)
    {
        global $db;
        if (isset($_GET['id'])) {
            $reqChapter = $db->prepare('DELETE FROM chapters WHERE id_chapter = ?');
            $reqChapter->execute([$id]);
        } else {
            $message = "Une erreur est survenue !";
            echo $message;
        }
    }
}