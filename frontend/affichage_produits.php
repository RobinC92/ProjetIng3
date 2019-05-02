<?php
    function affichageProduits($produits){
        for ($i=0;$i<count($produits);$i++){
            echo"
            <div class='ville'>
                <a href='#'><img src='"."../backend/".$produits[$i]->photo."'height='250'></a>
                <h2>".$produits[$i]->nom."</h2>
                <p>".$produits[$i]->prix."</p>
                <p>".$produits[$i]->categorie."</p>
                <p>".$produits[$i]->description."</p>
                <center><a href='#'>Ajouter au Panier</a></center>
            </div>";
        }
    }
?>