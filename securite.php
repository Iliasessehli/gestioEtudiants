<?php

if(isset($_SESSION['PROFIL'])){
    echo $_SESSION['PROFIL'];
    echo "tet";
    header('Location: login.php');
}
?>

    