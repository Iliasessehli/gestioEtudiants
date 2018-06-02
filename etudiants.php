<?php
require_once 'securite.php';

?>
<?php

require_once 'connect.php';
require_once 'head.php';
$mc="";
$size=3;

if(isset($_GET['mc'])){
$mc = $_GET['mc'];

$req=("SELECT * FROM etudiants WHERE nom like '%{$mc}%'");


}




$reqPage="SELECT COUNT(*) as NBE FROM etudiants ";
$ps1=$pdo->query($reqPage);
$ligne=$ps1->fetch();
$NBE=$ligne['NBE'];

if($NBE % $size==0){
    $nbPage=$NBE / $size;
}
else{
    $nbPage=floor($NBE / $size)+1;
}
if(isset($_GET['page'])){
    $page=$_GET['page'];

$offset=($page-1)*$nbPage;
if($offset>0)
$offset=($offset-1);
echo $offset;
$req=("SELECT * FROM etudiants LIMIT $size OFFSET $offset  ");
}
else{
    
$req=("SELECT * FROM etudiants  ");


}



$ps=$pdo->query($req);

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/mystyle.css"/>
<link rel="stylesheet" href="CSS/bootstrap.min.css"/>
<title>
Liste des etudiants
</title>
</head>
<body>

<div class="panel  panel-default container col-md-12 col-xs-3">
 <div class="panel-info">
 <div class="panel-heading">Liste des etudiants</div>
</div>
<div class="panel-body">

<form method="get" action="etudiants.php">
<label>mot cle</label> : <input type="text" name="mc"/> 
<button >Rechercher</button>
</form>
<table class="table">
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
<td><a href="edite.php?id=<?php echo $etudiants['id']; ?>"  > editer </a></td>
<td><a href="supprimer.php?id=<?php echo $etudiants['id']; ?>"  > supprimer </a></td>
</tr>
<?php
}?>

</tbody>
</table>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse">
<ul class="navbar-nav">
<?php 
for ($i=1; $i<$nbPage;$i++){

?>

<li class="nav-item active"><a class="nav-link" href="etudiants.php?page=<?php echo "$i" ?> ">Page <?php echo "$i" ?></a></li>

<?php
}?>
</ul>
</div>
</nav>


</div>
</div>
</body>
</html>
