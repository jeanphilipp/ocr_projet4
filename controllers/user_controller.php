<?php
/**
 * Created by PhpStorm.
 * User: jpg
 * Date: 11/02/19
 * Time: 14:58
 */

session_start();
//require_once('db.php');

//faire basculer cette requete dans une fonction de userManager verif
if(isset($_POST['login'])){
    //On controle si PSEUDO ou MAIL ou PASSWORD est vide
    if(empty($_POST['pseudo']) || empty($_POST['password'])){
        $message = 'Veuillez remplir les champs du formulaire';
    } // Si PSEUDO et PASSWORD sont remplis
    else {
        $sql = "SELECT * FROM users WHERE pseudo = :pseudo AND password = :password";
        $req = $db->prepare($sql);
        $req->execute(
                array('pseudo'   => $_POST['pseudo'],

                      'password' => $_POST['password']));
        $count = $req->rowcount();
        // Si Pseudo/Mail/Password sont trouvés
        if($count > 0) {
            $_SESSION['pseudo'] = $_POST['pseudo'];

            $donnee = $req->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id_user'] = $donnee['id_user'];

            header('location:');
        }  else {
       // Si Pseudo/Mail/Password ne sont PAS trouvés
            $message = 'Accès refusé !';
        }
    }
}
?>
