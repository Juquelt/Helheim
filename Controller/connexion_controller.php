<?php
require('Config\database.php');
require ('Model\Users.php');
require ('Model\UsersManager.php');

$manager = new UsersManager($bddPDO);

if (isset($_POST['email']) AND isset($_POST['password'])){
    if (!empty($_POST['email']) AND !empty($_POST['password'])){
        $email = $_POST['email'];
        $query = $bddPDO->prepare("SELECT * FROM users WHERE email = ?");
        $query-> execute([$email]);

        $resultat = $query->fetch(PDO::FETCH_ASSOC);

        // var_dump($resultat);   
        if (!$resultat OR password_verify($_POST['password'], $resultat['password'])){
            echo 'Identifiant ou mot de passe incorrect.<br/>';
        }else{
            session_start();
            $_SESSION['auth'] = $resultat;
            header('location:/?page=profil');
            // echo 'Vous êtes connecté !<br/>';
        }
    }else{
        echo 'Renseignez un identifiant ou un mot de passe<br/>';
    }
}


require_once realpath('View\connexion.phtml');
?>