<?php
/**
 * Created by PhpStorm.
 * User: jpg
 * Date: 13/02/19
 * Time: 13:37
 */

class UsersManager
{
//fonction getAll qui récupère tous les users

    public function get($id_user){
        global $db;
        $id_user = str_secur($id_user);

        $reqUser = $db->prepare('SELECT * FROM users WHERE id_user = ?');
        $reqUser->execute([$id_user]);
        $data = $reqUser->fetch();

        $user = new Users();

        $user->setIdUser($id_user);
        $user->setPseudo($data['pseudo']);
        $user->setMail($data['mail']);
        $user->setPass( $data['pass']);
        $user->setAdmin($data['admin']);

        return $user;
    }

}

//ajouter user
//etc getall , delete, add, update
//avec les requetes qui corresponde (base de donnees
