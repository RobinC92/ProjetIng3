<?php    
    require 'includes/connect_db.php';

    session_start();

    $type_carte = isset($_POST["type_carte"])? $_POST["type_carte"] : "";
    $numero_carte = isset($_POST["numero_carte"])? $_POST["numero_carte"] : "";
    $nom_carte = isset($_POST["nom_carte"])? $_POST["nom_carte"] : "";
    $date_expiration = isset($_POST["date_expiration"])? $_POST["date_expiration"] : "";
    $code_securite = isset($_POST["code_securite"])? $_POST["code_securite"] : "";
    $pseudo = $_SESSION['pseudo'];
    if ($_POST["button"]) {
        if ($db_found) {   
            $sql = "SELECT * FROM individu WHERE Pseudo LIKE '%$pseudo%'";
            $result = mysqli_query($db_handle, $sql);

            $sql = "UPDATE individu
            SET Type_carte = '$type_carte',
            Numero_carte = '$numero_carte',
            Nom_carte = '$nom_carte',
            Date_expiration = '$date_expiration',
            Code_securite = '$code_securite'
            WHERE Pseudo LIKE '%$pseudo%'";
            $result = mysqli_query($db_handle, $sql);
        }
    }
    header("Location: ../backend/validation_commande.php");
    exit();
?>