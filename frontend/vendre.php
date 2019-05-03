<?php 

if(session_start()){
    header('Location: formulaire_ajout_produit.php'); 
} else{
    header('Location: formulaire_connexion');
    
}

?>