<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
};

require ('Config\database.php');

require_once realpath('Services\routing.php');
require_once realpath('View\layout.phtml');

?>