<?php
    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $statut = isset($_POST["statut"])? $_POST["statut"] : "";
    $mail = isset($_POST["mail"])? $_POST["mail"] : "";
    $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
    $adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
    //identifier votre BDD
    $database = "livres";
    //connectez-vous dans votre BDD
    //Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($_POST["button2"]) {
        $sql = "INSERT INTO books(Titre, Auteur, Annee, Editeur)
        VALUES('$titre', '$auteur', '$annee', '$editeur')";
        $result = mysqli_query($db_handle, $sql);
    }
?>