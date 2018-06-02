<?php

require_once 'connect.php';
$name=$_POST['name'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$image=$_POST['image'];
$req = $pdo->prepare('INSERT INTO etudiants(nom, prenom, email,photo) VALUES(?, ?, ?, ?)');
$param=array($name,$prenom,$mail,$image);
$ps=$req->execute($param);
//$test=$pdo->execute();

header('Location: etudiants.php')
?>
