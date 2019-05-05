
<?php
function affichageProduits($produits)
{
    for ($i = 0; $i < count($produits); $i++) {
        echo "
            <div class='ville'>
                <a href='produit.php?myid=" . $produits[$i]->id . "'> <img src='" . "../backend/" . $produits[$i]->photo . "'height='250'></a>
                <h2>" . $produits[$i]->nom . "</h2>
                <p> Prix : " . $produits[$i]->prix . " €</p>
                
                <div class='ajoutpanier'>
                <center><a  href='../backend/ajoutAuPanier.php?myid=" . $produits[$i]->id . "'>Ajouter au Panier</a></center>
                </div>
            </div>";
    }
}

function affichageProduit($produits)
{
    echo "
        <div id='section'>
      
        
            <a href='produit.php?myid=" . $produits->id . "'><img src='" . "../backend/" . $produits->photo . "'height='250'></a>
            <div class='recapanier'>
            <h2>" . $produits->nom . "</h2>
            <p> Prix: " . $produits->prix . " €</p>
            <p> Catégorie : " . $produits->categorie . "</p>
            <div class 'descriptionlongue'>
            <p> Description du produit : <br>" . $produits->description . "</p>
            </div>
            <div class='supprimepanier'>
            <center><a href='../backend/supprimerDuPanier.php?myid=" . $produits->id . "'>Supprimer du Panier</a></center>
            </div>
            </div>
        </div> 
     
        ";
}

function affichageDescription($produits)
{
    echo "
        <div class='description'>
            <a href='produit.php?myid=" . $produits->id . "'><img src='" . "../backend/" . $produits->photo . "'height='250'></a>
            <div class='recap'>
            <h2>" . $produits->nom . "</h2>
            <p> Prix : " . $produits->prix . " €</p>
            <p> Catégorie : " . $produits->categorie . "</p>
            <p> Description du produit :<br> " . $produits->description . "</p>
            <div class='ajoutpanier'>
            <center><a  href='../backend/ajoutAuPanier.php?myid=" . $produits->id . "'>Ajouter au Panier</a></center>
            </div>
            </div>
        </div>";
}

function affichageVosProduits($produits)
{
    for ($i = 0; $i < count($produits); $i++) {
        echo "
            <div class='ville'>
                <a href='produit.php?myid=" . $produits[$i]->id . "'> <img src='" . "../backend/" . $produits[$i]->photo . "'height='250'></a>
                <h2>" . $produits[$i]->nom . "</h2>
                <p> Prix : " . $produits[$i]->prix . " €</p>
                
                <div class='ajoutpanier'>
                <center><a  href='../backend/supprimer_produit.php?myid=" . $produits[$i]->id . "'>Supprimer de la vente</a></center>
                </div>
            </div>";
    }
}
?>
