<?php
if(!isset($_SESSION['auth'])){
    header('location:/?page=connexion');
    exit();
}

require('Config\database.php');
require ('Model\Users.php');
require ('Model\UsersManager.php');

$manager = new UsersManager($bddPDO);

require_once realpath('View\profil.phtml');

?>