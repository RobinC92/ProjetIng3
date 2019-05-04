<?php 
session_start();
if(!isset($_SESSION['flag'])) {
    header('Location: formulaire_connexion.php');
    $_SESSION['url'] = "../frontend/panier.php";
}
else {
    header('Location: affichage_panier.php');
}
?>