<?php    
    require 'upload_image.php';
    require 'includes/connect_db.php';

    $photo = uploadImage("image_produit/",$_SERVER['HTTP_REFERER']);
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prix = isset($_POST["prix"])? $_POST["prix"] : "";
    $description = isset($_POST["description"])? $_POST["description"] : "";
    $categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";

    if ($_POST["button"]) {
        if ($db_found) {
            $sql = "SELECT * FROM produit";
            if ($nom != "") {
    //on cherche le nom du produit dans la bdd
                $sql .= " WHERE Nom LIKE '%$nom%'";
            }
            $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a un résultat
            $test = mysqli_num_rows($result);
            if ($test < 1) {
    // le pseudo n'existe pas dans la BDD
                $sql = "INSERT INTO produit VALUES(0, '$nom', '$prix', '$description', '$categorie','$photo')";
                $result = mysqli_query($db_handle, $sql);
                echo "Produit ajouté avec succès" . "<br>";
            }else{
    // le produit existe déjà dans la BDD
                echo "Produit déjà existant";
            }
        }
    }    

?>