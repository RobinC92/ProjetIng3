<?php 

    require 'includes/connect_db.php';

    $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";

    if ($_POST["button"]) {
        if ($db_found) {
            $sql = "SELECT * FROM individu";
            if ($pseudo != "") {
    //on cherche le pseudo dans la bdd
                $sql = " SELECT * FROM individu WHERE Pseudo='$pseudo'";
            }
            $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a un résultat
            $test = mysqli_num_rows($result);
            if ($test < 1) {
    // le pseudo n'existe pas dans la BDD
                echo "Ce pseudonyme n'existe pas" . "<br>";
            }else{
    // le produit existe déjà dans la BDD
               $sql ="DELETE FROM individu WHERE Pseudo='$pseudo'";
               $result = mysqli_query($db_handle, $sql);
               echo "le compte lié à ce pseudo a bien été supprimé";
            }
        }
    } 
 ?>