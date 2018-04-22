<?php

require_once 'connect.php';
$etudiant='SELECT * FROM etudiants';
$ps=$pdo->query($etudiant);
//$test=$pdo->execute();
?>
<html>
<head>
<link rel="stylesheet" href="CSS/mystyle.css" />
<title>
Liste des etudiants
</title>
</head>
<body>
<table cl>
<thead>
<th>ID</th><th>nom</th><th>prenom</th><th>email</th><th>photo</th>
</thead>
<tbody>

<?php while ($etudiants=$ps->fetch()) {;
  ?>
<tr>
<td><?php echo $etudiants['id']; ?></td>
<td><?php echo $etudiants['nom']; ?></td>
<td><?php echo $etudiants['prenom']; ?></td>
<td><?php echo $etudiants['email']; ?></td>
<td><?php echo $etudiants['photo']; ?></td>
</tr>
<?php
}?>

</tbody>
</table>
</body>
</html>