<?php
$dsn = 'mysql:host=localhost;dbname=gestion_etudiants;charset=utf8';

try{
$pdo= new PDO($dsn,'root','');

}
catch (PDOException $e){
    $msg= 'error connexion db'.$e->getMessage();
    die ($msg);
}
