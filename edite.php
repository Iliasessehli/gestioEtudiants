<?php

require_once 'connect.php';
require_once 'head.php';
$id=$_GET['id'];

$req = $pdo->prepare('SELECT * FROM etudiants WHERE id=?');
$param=array($id);
$ps=$req->execute($param);
$et=$req->fetch();

?>
<html>
<head>
<body>
<form method="get" action="update.php">
    <p>
        <label>Votre id</label> : <input type="text" name="id" value="<?php echo $et['id']; ?>"/><br>
        <label>Votre nom</label> : <input type="text" name="name" value="<?php echo $et['nom']; ?>"/><br>
        <label>Votre prenom</label> : <input type="text" name="prenom" value="<?php echo $et['prenom']; ?>" /><br>
        <label>Votre mail</label> : <input type="text" name="mail" value="<?php echo $et['email']; ?>" /><br>
        <label>Votre image</label> : <input type="file" name="image" value="<?php echo $et['photo']; ?>" /><br>
        <label>Update</label> : <input type="submit" />
    </p>
</form>
</body>
</head>
</html>