<?php

require 'includes/connect_db.php';

$pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";

$connexion = 0;

if ($db_found) {
    $sql = "SELECT * FROM individu";
    $result = mysqli_query($db_handle, $sql);
    while ($db_field = mysqli_fetch_assoc($result)) {

        if ($db_field['Pseudo'] == $pseudo && $db_field['Mdp'] == $mdp) {
            $connexion = 1;
            session_start();
            $_SESSION['nom'] = $db_field['Nom'];
            $_SESSION['prenom'] = $db_field['Prenom'];
            $_SESSION['pseudo'] = $db_field['Pseudo'];
            $_SESSION['statut'] = $db_field['Statut'];
            $_SESSION['mail'] = $db_field['Mail'];
            $_SESSION['mdp'] = $db_field['Mdp'];
            $_SESSION['adresse'] = $db_field['Adresse'];
            $_SESSION['photo'] = $db_field['Photo'];
            $_SESSION['coord'] = $db_field['Coordonnées_bancaire'];
            $_SESSION['pannier'] = unserialise($db_field['Coordonnées_bancaire']);
            echo "Vous êtes connecté";
        }
    }

    if ($connexion == 1) {
        // header('Location: ventes_flash.php');
        // exit();
    } else {
        echo "Mauvais identifiants";
    }
}
