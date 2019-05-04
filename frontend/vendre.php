<?php 
session_start();
if(!isset($_SESSION['flag'])) {
    header('Location: formulaire_connexion.php');
}
else {
    header('Location: formulaire_ajout_produit.php');
}
?>