<?php

class UsersManager
{
    /* Ajout d'un utilisateur dans la BDD */
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

    /* Ajout d'une méthode qui affiche tous les utilisateurs */
    public static function getAllUsers()
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

    /**
     * @return bool
     * Fonction vérifiant les données d'utilisateur en BDD
     */
    public static function checkConnection()
    {
        global $db;
        $sql = "SELECT * FROM users WHERE pseudo = :pseudo";
        $req = $db->prepare($sql);
        $req->execute(
            array(
                'pseudo' => $_POST['pseudo'],
            )
        );
        $count = $req->rowcount();
        //Si la ligne représentant le couple pseudo/password est trouvée en BDD
        if ($count > 0) {
            $donnee = $req->fetch(PDO::FETCH_ASSOC);
            $result_password = password_verify($_POST['password'], $donnee['password']);
            if ($result_password) {
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $_SESSION['id'] = $donnee['id_user'];
                $_SESSION['admin'] = $donnee['admin'];
            }
            return $result_password;
        } else {
            return false;
        }
    }
}

