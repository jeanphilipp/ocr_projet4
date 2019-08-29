<?php
session_start();

include_once '_config/config.php';
include_once '_config/db.php';

function loadClasses($classe)
{
     if (file_exists('controllers/'.$classe.'.php'))
     {
         include_once 'controllers/'.$classe.'.php';
     }
    if (file_exists('models/'.$classe.'.php'))
    {
        include_once 'models/'.$classe.'.php';
    }

   // include 'models/'.$classe.'.php';
}

spl_autoload_register('loadClasses');

/************************ ESPACE ADMINISTRATION réservé à l'admin ************************/
/* Test si admin ou non dans URL */
if (isset($_GET['admin'])) {
    require 'router_back.php';
}
/************************ ESPACE FRONT-END ************************/
 else {
    require 'router.php';
}
