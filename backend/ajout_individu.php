<?php    
    require 'upload_image.php';

    $photo = uploadImage("uploads/",$_SERVER['HTTP_REFERER']);
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
    $statut = isset($_POST["statut"])? $_POST["statut"] : "";
    $mail = isset($_POST["mail"])? $_POST["mail"] : "";
    $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
    $adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
    $coord = isset($_POST["coord"])? $_POST["coord"] : "";

    // identifier votre BDD
    $database = "amazon";
    //connectez-vous dans votre BDD
    //Rappel: votre serveur = localhost et votre login = root et votre password = <rien>

    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

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