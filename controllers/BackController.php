<?php
class BackController{

    public function showUsers()
   {
       $allUsers = UsersManager::getAllUsers();
      /* var_dump($allUsers);die; */
       require 'views/back/users_view.php';

   }





}