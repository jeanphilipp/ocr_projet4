<?php

class Users
{
    public $id_user;
    public $firstname;
    public $lastname;
    public $mail;
    public $pass;
    public $admin;

    function __construct($id_user)
    {
        global $db;

        $id_user = str_secur($id_user);

        $reqUser = $db->prepare('SELECT * FROM users WHERE id_user = ?');
        $reqUser->execute([$id_user]);
        $data = $reqUser->fetch();

        $this->id_user = $id_user;
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->mail  = $data['mail'];
        $this->pass = $data['pass'];
        $this->admin = $data['admin'];
    }
}

?>