<?php

require('Config\database.php');
require ('Model\Users.php');
require ('Model\UsersManager.php');


$manager = new UsersManager($bddPDO);


if (isset($_POST['name'])){
    // echo 'Formulaire envoyé';
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $User = new Users([   
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],   
            'password'=>$_POST['password']
        ]);
        // echo 'Nouvel utilisateur créer';

    if ($User->isUserValid()){
        $manager->insert($User);
        echo 'Utilisateur enregistré';
    } else {
        $errors = $User->getErrors();
    }
// var_dump($User);
}



require_once realpath('View\inscription.phtml');
?>