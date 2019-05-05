<?php 
session_start();
if(!isset($_SESSION['flag'])) {
    $_SESSION['url'] = "../frontend/vendre.php";
    header('Location: formulaire_connexion.php');
    exit();
}
else {
    if($_SESSION['statut'] == "vendeur" || $_SESSION['statut'] == "admin"){
        header('Location: formulaire_ajout_produit.php');
        exit();
    }
    else {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
}
?>