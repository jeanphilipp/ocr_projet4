<?php

class UsersManager
{
    /* Inserer un utilisateur en base de données */

    public function addUser()
    {
        global $db;
                $pseudo = $_POST['pseudo'];
                $mail = $_POST['mail'];
                $pass = $_POST['pass'];

               // var_dump("ajout requete !"); //die;

                $sql_verif = "SELECT * FROM users WHERE pseudo = :pseudo";
                $req_verif = $db->prepare($sql_verif);
                $req_verif->execute(array('pseudo' => $_POST['pseudo']));
                $count = $req_verif->rowCount();

                if($count > 0){
                   $message = "Ce pseudo est déjà utilisé !";
                } else {
                    $sql = "INSERT INTO `users` (pseudo, mail, pass) VALUES (?,?,?)";
                    $rs_insert = $db->prepare($sql);
                    $rs_insert->bindValue(1,$pseudo,PDO::PARAM_STR);
                    $rs_insert->bindValue(2,$mail,PDO::PARAM_STR);
                    $rs_insert->bindValue(3,$pass,PDO::PARAM_STR);
                    $rs_insert->execute();
                    $message = 'Votre compte a bien été créé ! vous pouvez désormais y accéder';
                    include_once 'views/user_view.php';
                }
    }
    /*ajout d'une méthode qui affiche tous les users */
    public function getAllUsers(){
        global $db;
        $reqUser = $db->prepare('SELECT * FROM users');
        $reqUser->execute();
        $users = array();


        while ($data = $reqUser->fetch()) {

            $user = new User();

            $user->setIdUser($data['id_user']);
            $user->setPseudo($data['pseudo']);
            $user->setMail($data['mail']);
            $user->setPass($data['pass']);
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
        $user->setPass($data['pass']);
        $user->setAdmin($data['admin']);
        return $user;
    }

    /* modifier un user */
    public function updateUser(User $user)
    {

    }

    /* supprimer un user */
    public function deleteUser(User $user)
    {

    }

    /* Vérifie la présence d'un user */
    public function checkUser()
    {
        global $db;

            //Si pseudo ou password est vide
            if (empty($_POST['pseudo']) || empty($_POST['pass'])) {
                $message = 'Veuillez remplir les champs du formulaire';
            } else {//Si pseudo et password sont remplis
                $sql = "SELECT * FROM users WHERE pseudo = :pseudo AND password = :pass";
                $req = $db->prepare($sql);
                $req->execute(
                    array('pseudo' => $_POST['pseudo'],
                        'password' => $_POST['pass']));
                $count = $req->rowcount();
                //Si le couple pseudo/password est trouvé
                if ($count > 0) {
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    $donnee = $req->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['id_user'] = $donnee['id_user'];
                    header('location:');
                } else {
  // Si le couple pseudo/password n'est pas trouvé
                    $message = 'Accès refusé !';
                }
                var_dump($message);
            }
        }

}

