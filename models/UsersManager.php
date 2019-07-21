<?php

class UsersManager
{
    /* Ajout utilisateur dans la base de données */
    public function addUser()
    {
        global $db;
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql_verif = "SELECT * FROM users WHERE pseudo = :pseudo";
        $req_verif = $db->prepare($sql_verif);
        $req_verif->execute(array('pseudo' => $_POST['pseudo']));
        $count = $req_verif->rowCount();
        if ($count > 0) {
            $message = "ce pseudo est deja pris";
            include_once 'views/createaccount.php';

        } else {
            $sql = "INSERT INTO `users` (pseudo, mail, password) VALUES (?,?,?)";
            $rs_insert = $db->prepare($sql);
            $rs_insert->bindValue(1, $pseudo, PDO::PARAM_STR);
            $rs_insert->bindValue(2, $mail, PDO::PARAM_STR);
            $rs_insert->bindValue(3, $password, PDO::PARAM_STR);
            $rs_insert->execute();
            $message = "Félicitation, votre compte est créé";
            include_once 'views/user_view.php';
        }
    }

    /*ajout d'une méthode qui affiche tous les users */
    public function getAllUsers()
    {
        global $db;
        $reqUser = $db->prepare('SELECT * FROM users');
        $reqUser->execute();
        $users = array();
        while ($data = $reqUser->fetch()) {
            $user = new User();
            $user->setIdUser($data['id_user']);
            $user->setPseudo($data['pseudo']);
            $user->setMail($data['mail']);
            $user->setPassword($data['password']);
            $user->setAdmin($data['admin']);
            $users[] = $user;
        }
        return $users;
    }

    /* renvoie l'enregistrement d'un user avec l'id en paramètre */
    public function getUser($id_user)
    {
        global $db;
        $reqUser = $db->prepare('SELECT * FROM users WHERE id_user = ?');
        $reqUser->execute($id_user);
        $data = $reqUser->fetch();
        $user = new User();
        $user->setIdUser($data['id_user']);
        $user->setPseudo($data['pseudo']);
        $user->setMail($data['mail']);
        $user->setPassword($data['password']);
        $user->setAdmin($data['admin']);
        return $user;
    }

    /* Vérification de la présence d'un utilisateur dans la base de données */

    /* REVOIR ET COMPRENDRE !!! */
     /**
     * @return bool
     * fonction verifiant donnees utilisateur en bdd
     */
    public static function checkConnection()
    {
        global $db;
        $sql = "SELECT * FROM users WHERE pseudo = :pseudo";
        $req = $db->prepare($sql);
        $req->execute(
            array(
                'pseudo'   => $_POST['pseudo'],
               // 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
            )
        );
        //var_dump(password_hash($_POST['password'],PASSWORD_DEFAULT));die;

        $count = $req->rowcount();

        //Si le couple pseudo/password est trouvé
        if ($count > 0) {
            $donnee = $req->fetch(PDO::FETCH_ASSOC);
           $result_password  = password_verify($_POST['password'], $donnee['password']);
          // var_dump($result_password);
           if($result_password)
           {
               $_SESSION['pseudo'] = $_POST['pseudo'];
             //  $_SESSION['password'] = $_POST['password'];
               $_SESSION['id']       = $donnee['id_user'];
               $_SESSION['admin'] = $donnee['admin'];
           }

          //  var_dump($_POST['password'], $donnee['password']);die;
            return $result_password;
        } else {
            return false;
        }
    }
}

// NOMBRE DE SIGNALEMENTS EN BDD
//AJOUTER BOUTON POUR LES COMMENTAIRE
/* sur feuille blanche dessiner, quelle route, quelle fonction du manager
avec un petit coquis
interface, bouton ? etc, prevoir interface pour ajoiu de btn */