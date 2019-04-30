<?php

$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

// identifier votre BDD
    $database = "amazon";
    //connectez-vous dans votre BDD
    //Rappel: votre serveur = localhost et votre login = root et votre password = <rien>

    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);


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
