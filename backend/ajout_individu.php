<?php    
    require 'upload_image.php';
    require 'includes/connect_db.php';

    $photo = uploadImage("image_individu/",$_SERVER['HTTP_REFERER']);
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
    $statut = isset($_POST["statut"])? $_POST["statut"] : "";
    $mail = isset($_POST["mail"])? $_POST["mail"] : "";
    $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
    $adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
    $coord = isset($_POST["coord"])? $_POST["coord"] : "";

    if ($_POST["button"]) {
        if ($db_found) {
            $sql = "SELECT * FROM individu";
            if ($pseudo != "") {
    //on cherche le pseudo dans la bdd
                $sql .= " WHERE Pseudo LIKE '%$pseudo%'";
            }
            $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a un résultat
            $test = mysqli_num_rows($result);
            if ($test < 1) {
    // le pseudo n'existe pas dans la BDD
                $sql = "INSERT INTO individu VALUES('$nom', '$prenom', '$pseudo', '$statut', '$mail', '$mdp', '$adresse','$photo','$coord')";
                $result = mysqli_query($db_handle, $sql);
                echo "Compte crée avec succès" . "<br>";
            }else{
    // le pseudo existe déjà dans la BDD
                echo "Pseudo déjà pris";
            }
        }
    }   

?>