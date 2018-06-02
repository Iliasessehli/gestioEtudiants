<?php
require_once 'securite.php';
require_once 'head.php';
require_once 'connect.php';

?>
<html>
<head>
<body>
<form method="post" action="save.php">
    <p>
        <label>Votre nom</label> : <input type="text" name="name" /><br>
        <label>Votre prenom</label> : <input type="text" name="prenom" /><br>
        <label>Votre mail</label> : <input type="text" name="mail" /><br>
        <label>Votre image</label> : <input type="file" name="image" /><br>
        <label>Sauvegarder</label> : <input type="submit" />
    </p>
</form>
</body>
</head>
</html>