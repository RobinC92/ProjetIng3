<?php
    function produitEnObjet($id, $nom, $prix, $description, $categorie, $photo, $pseudo, $ventes){
        $objet = (object) array(
            'id' => $id,
            'nom' => $nom,
            'prix' => $prix,
            'description' => $description,
            'categorie' => $categorie,
            'photo' => $photo,
            'pseudo' => $pseudo,
            'ventes' => $ventes
        );

        return $objet;
    }
    function tableauDobjetCategorie($cate)
    {
        require 'includes/connect_db.php';
        if($db_found) {
            $sql = "SELECT * FROM produit WHERE Categorie ='".$cate."'";    
            $result = mysqli_query($db_handle, $sql);
            $produits=array();
            while ($data = mysqli_fetch_assoc($result)) {
                array_push($produits,produitEnObjet($data['ID'], $data['Nom'], $data['Prix'],
                $data['Description'], $data['Categorie'], $data['Photo'], $data['Pseudo'], $data['Ventes']));
            }
        } else {
            echo "Database not found";
        }
        return $produits;
    }

    function objetParId($id)
    {
        require 'includes/connect_db.php';
        if($db_found) {
            $sql = "SELECT * FROM produit WHERE ID ='".$id."'";    
            $result = mysqli_query($db_handle, $sql);
            $data = mysqli_fetch_assoc($result);
            $produit = produitEnObjet($data['ID'], $data['Nom'], $data['Prix'],
            $data['Description'], $data['Categorie'], $data['Photo'], $data['Pseudo'], $data['Ventes']);
        } else {
            echo "Database not found";
        }
        return $produit;
    }
?>