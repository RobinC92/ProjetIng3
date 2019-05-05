<?php    
    require 'upload_image.php';
    require 'includes/connect_db.php';

    $photo = uploadImage("image_individu/",$_SERVER['HTTP_REFERER']);
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
    $statut = isset($_POST["statut"])? $_POST["statut"] : "";
    $email = isset($_POST["email"])? $_POST["email"] : "";
    $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
    $adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
    $ville = isset($_POST["ville"])? $_POST["ville"] : "";
    $code_postal = isset($_POST["code_postal"])? $_POST["code_postal"] : "";
    $pays = isset($_POST["pays"])? $_POST["pays"] : "";
    $telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
    $panier = serialize(array());

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
                $sql = "INSERT INTO individu VALUES('$nom', '$prenom', '$pseudo', '$statut', '$email', '$mdp', '$adresse','$ville','$code_postal','$pays','$telephone','$photo',0,0,0,0,0,'$panier',0)";
                $result = mysqli_query($db_handle, $sql);
                header("Location: ../frontend/formulaire_connexion.php");

            }else{
            // le pseudo existe déjà dans la BDD
            session_start();
            $_SESSION['flagpseudo'] = true;
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
            }
        }
    }   

?>