<?php    
    require 'upload_image.php';
    require 'includes/connect_db.php';

    $photo = uploadImage("image_produit/",$_SERVER['HTTP_REFERER']);
    $prix = isset($_POST["prix"])? $_POST["prix"] : "";
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $description = isset($_POST["description"])? $_POST["description"] : "";
    $categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";

    if ($_POST["button"]) {
        if ($db_found) {
    // le pseudo n'existe pas dans la BDD
                $sql = "INSERT INTO produit VALUES('$nom', '$prix', '$description', '$categorie', '$photo')";
                $result = mysqli_query($db_handle, $sql);
                echo "Compte crée avec succès" . "<br>";
        }
    }   

?>