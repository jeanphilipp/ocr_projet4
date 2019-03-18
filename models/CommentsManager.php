<?php

class commentsManager
{
    public $id_comment;
    public $coms_content;
    public $coms_datecreated;
    public $id_chapter;
    public $id_user;

    function __construct($id_comment)
    {
        global $db;

        $id_comment = str_secur($id_comment);

        $reqComment = $db->prepare('SELECT * FROM comments WHERE id_comment = ?');
        $reqComment->execute([$id_comment]);
        $data = $reqComment->fetch();

        $this->id_comment = $id_comment;
        $this->coms_content = $data['coms_content'];
        $this->coms_datecreated= $data['coms_datecreated'];
        $this->id_chapter  = $data['id_chapter'];
        $this->id_user = $data['id_user'];
    }
}

