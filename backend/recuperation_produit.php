<?php
    require 'includes/connect_db.php';

    function produitEnObjet($id, $nom, $prix, $description, $categorie, $photo, $pseudo){
        $objet = (object) array(
            'id' => $id,
            'nom' => $nom,
            'prix' => $prix,
            'description' => $description,
            'categorie' => $categorie,
            'photo' => $photo,
            'pseudo' => $pseudo
        );

        return $objet;
    }
?>