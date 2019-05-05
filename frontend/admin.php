<?php 
session_start();
if(!isset($_SESSION['flag'])) {
    $_SESSION['url'] = "../frontend/vendre.php";
    header('Location: formulaire_connexion.php');
    exit();
}
else {
    if($_SESSION['statut'] == "admin"){
        header('Location: affichage_admin.php');
        exit();
    }
    else {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
}
?>