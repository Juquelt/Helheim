<?php
$user = 'root';
$pass = '';

$bddPDO = new PDO('mysql:host=localhost;dbname=heilhem', $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
    // echo 'Connected > Hello Database !';

?>