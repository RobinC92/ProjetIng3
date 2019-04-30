<?php
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
    $statut = isset($_POST["statut"])? $_POST["statut"] : "";
    $mail = isset($_POST["mail"])? $_POST["mail"] : "";
    $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
    $adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
    $photo = isset($_POST["photo"])? $_POST["photo"] : "";

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
//on cherche le livre avec les paramètres titre et auteur
            $sql .= " WHERE Pseudo LIKE '%$pseudo%'";
            if ($mail != "") {
                $sql .= " OR Email LIKE '%$mail%'";
            }
        }
        $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
        $test = mysqli_num_rows($result);
        if ($test < 1) {
//le mail ou le pseudo existent déjà dans la BDD
            $sql = "INSERT INTO individu VALUES('$nom', '$prenom', '$pseudo', '$statut', '$mail', '$mdp', '$adresse','$photo')";
            $result = mysqli_query($db_handle, $sql);
            echo "Add successful." . "<br>";
        }else{
            echo "C'est mort, trouve toi un autre pseudo";
        }
    }
}

?>