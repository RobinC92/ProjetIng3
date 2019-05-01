<?php

require 'includes/connect_db.php';

$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

$connexion=0;


if ($db_found) {
       $sql = "SELECT * FROM individu";
      $result = mysqli_query($db_handle, $sql);
      while ($db_field = mysqli_fetch_assoc($result) ) {

           if ($db_field['Pseudo'] == $pseudo && $db_field['Mdp'] ==$mdp)
           {
               $connexion=1;
               echo "Vous êtes connecté";
           }          
    }

    if ($connexion==1)
     {
      // header('Location: ventes_flash.php');
      // exit();
     }

     else {
      echo "Mauvais identifiants";  
          }      
}

?>
