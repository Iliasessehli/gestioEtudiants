<html>
<head>
<title>Lire la table personne</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>


<?php


require_once 'connect.php';
require_once 'head.php';
$id=$_GET['id'];

$sql = 'DELETE FROM etudiants WHERE id =?';
$req = $pdo->prepare($sql);
 $param=array($id);
  $ps=$req->execute($param);
  header('Location: etudiants.php');
   
?>
 
 
</body> 
</html>