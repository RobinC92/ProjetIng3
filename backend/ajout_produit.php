<?php    
    require 'upload_image.php';
    require 'includes/connect_db.php';
    session_start();

    $photo = uploadImage("image_produit/",$_SERVER['HTTP_REFERER']);
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prix = isset($_POST["prix"])? $_POST["prix"] : "";
    $description = isset($_POST["description"])? $_POST["description"] : "";
    $categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
    $pseudo = $_SESSION['pseudo'];
    $vente = 0;

    if ($_POST["button"]) {
        if ($db_found) {
            $sql = "INSERT INTO produit VALUES(0, '$nom', '$prix', '$description', '$categorie','$photo','$pseudo','$vente')";
            $result = mysqli_query($db_handle, $sql);
        }
    }
    header("Location: ../frontend/produit_vendeur.php");
    exit();
?>