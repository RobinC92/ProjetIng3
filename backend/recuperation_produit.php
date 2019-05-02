<?php
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
    function tableauDobjet($cate)
    {
        require 'includes/connect_db.php';
        if($db_found) {
            $sql = "SELECT * FROM produit WHERE Categorie ='".$cate."'";    
            $result = mysqli_query($db_handle, $sql);
            $produits=array();
            while ($data = mysqli_fetch_assoc($result)) {
                array_push($produits,produitEnObjet($data['ID'], $data['Nom'], $data['Prix'],
                $data['Description'], $data['Categorie'], $data['Photo'], $data['Pseudo']));
            }
        } else {
            echo "Database not found";
        }
        return $produits;
    }
?>