<?php
require_once 'head.php';
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$req = $pdo->prepare('SELECT * FROM users WHERE Login=? AND Password=?');
$param = array($login,$password);
$req->execute($param);
$user = $req->fetch();

if (!isset($user['Login'])) {
    
    header('Location: login.php');
} 
else {
    session_start();
    $_SESSION['PROFIL'] = $user;
    header('Location: etudiants.php');
}
?>
 