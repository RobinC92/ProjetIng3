<?php

require 'includes/connect_db.php';
require 'panier.php';

$statut = isset($_POST["statut"]) ? $_POST["statut"] : "";
$pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";

$connexion = 0;

if ($db_found) {
    $sql = "SELECT * FROM individu";
    $result = mysqli_query($db_handle, $sql);
    while ($db_field = mysqli_fetch_assoc($result)) {

        if ($db_field['Pseudo'] == $pseudo && $db_field['Mdp'] == $mdp && $statut && $db_field['Statut']) {
            $connexion = 1;
            session_start();
            $_SESSION['nom'] = $db_field['Nom'];
            $_SESSION['prenom'] = $db_field['Prenom'];
            $_SESSION['pseudo'] = $db_field['Pseudo'];
            $_SESSION['statut'] = $db_field['Statut'];
            $_SESSION['mail'] = $db_field['Email'];
            $_SESSION['mdp'] = $db_field['Mdp'];
            $_SESSION['adresse'] = $db_field['Adresse'];
            $_SESSION['ville'] = $db_field['Ville'];
            $_SESSION['code_postal'] = $db_field['Code_postal'];
            $_SESSION['pays'] = $db_field['Pays'];
            $_SESSION['telephone'] = $db_field['Telephone'];
            $_SESSION['photo'] = $db_field['Photo'];
            $_SESSION['type_carte'] = $db_field['Type_carte'];
            $_SESSION['numero_carte'] = $db_field['Numero_carte'];
            $_SESSION['nom_carte'] = $db_field['Nom_carte'];
            $_SESSION['date_expiration'] = $db_field['Date_expiration'];
            $_SESSION['code_securite'] = $db_field['Code_securite'];
            $_SESSION['panier'] = unserialize($db_field['Panier']);
            $_SESSION['solde'] = ($db_field['Solde']);

            //$_SESSION['solde'] = $db_field['Solde'];
            echo "Vous êtes connecté";

            //ajouterAuPanier(1);
            //supprimerDuPanier(1);
            //echo totalAPayer();
        }
    }

    if ($connexion == 1) {
        // header('Location: ventes_flash.php');
        // exit();
    } else {
        echo "Mauvais identifiants";
    }
}
?>
