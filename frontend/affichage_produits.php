
<?php
    function affichageProduits($produits){
        session_start();
        for ($i=0;$i<count($produits);$i++){
            echo"
            <div class='ville'>
                <a href='#'><img src='"."../backend/".$produits[$i]->photo."'height='250'></a>
                <h2>".$produits[$i]->nom."</h2>
                <p>".$produits[$i]->prix."</p>
                <p>".$produits[$i]->categorie."</p>
                <p>".$produits[$i]->description."</p>
                <center><a href='../backend/ajoutAuPanier.php?myid=".$produits[$i]->id."'>Ajouter au Panier</a></center>
            </div>";
        }
    }

    function affichageProduit($produits){
        echo"
        <div class='ville'>
            <a href='#'><img src='"."../backend/".$produits->photo."'height='250'></a>
            <h2>".$produits->nom."</h2>
            <p>".$produits->prix."</p>
            <p>".$produits->categorie."</p>
            <p>".$produits->description."</p>
            <center><a href='../backend/supprimerDuPanier.php?myid=".$produits->id."'>Supprimer du Panier</a></center>
        </div>";
    }
?>