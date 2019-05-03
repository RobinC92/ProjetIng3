<?php 

if(session_start()){
    require 'formulaire_ajout_produit.php';
} else{
    require 'formulaire_connexion';
}

?>