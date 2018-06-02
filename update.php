<?php

require_once 'connect.php';
$id=$_GET['id'];
$name=$_GET['name'];
$prenom=$_GET['prenom'];
$mail=$_GET['mail'];
$image=$_GET['image'];
$req = $pdo->prepare('UPDATE etudiants SET nom=?, prenom=?, email=?,photo=? where id=?');
$param=array($name,$prenom,$mail,$image,$id);
$ps=$req->execute($param);
//$test=$pdo->execute();

header('Location: etudiants.php');
?>
