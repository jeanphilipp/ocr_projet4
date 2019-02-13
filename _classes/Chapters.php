<?php


class Chapters
{
    public $id_chapter;
    public $chapt_title;
    public $chapt_sentence;
    public $chapt_content;
    public $chapt_datecreated;

    function __construct($id_chapter)
    {
        global $db;

        $id_chapter = str_secur($id_chapter);

        $reqChapter = $db->prepare('SELECT * FROM chapters WHERE id_chapter = ?');
        $reqChapter->execute([$id_chapter]);
        $data = $reqChapter->fetch();

        $this->id_chapter = $id_chapter;
        $this->chapt_title = $data['chapt_title'];
        $this->chapt_sentence = $data['chapt_sentence'];
        $this->chapt_content  = $data['chapt_content'];
        $this->chapt_datecreated = $data['chapt_datecreated'];
    }
}

?>