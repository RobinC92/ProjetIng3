<?php 
session_start();
if(!isset($_SESSION['flag'])) {
    header('Location: formulaire_connexion.php');
    $_SESSION['url'] = "../frontend/compte.php";
}
else {
    header('Location: affichage_compte.php');
}
?>