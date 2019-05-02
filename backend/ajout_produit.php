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
<<<<<<< HEAD
    // le pseudo n'existe pas dans la BDD
                $sql = "INSERT INTO produit VALUES(0, '$nom', '$prix', '$description', '$categorie','$photo')";
=======
    // le produit n'existe pas dans la BDD
                $sql = "INSERT INTO produit VALUES('$nom', '$prix', '$description', '$categorie','$photo')";
>>>>>>> 143677cc335965f7e0f4f4865be06b486f363696
                $result = mysqli_query($db_handle, $sql);
                echo "Produit ajouté avec succès" . "<br>";
            }else{
    // le produit existe déjà dans la BDD
                echo "Produit déjà existant";
            }
        }
    }    

?>