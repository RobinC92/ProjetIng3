<?php 
	require '../backend/includes/connect_db.php';
	require '../backend/recuperation_produit.php';
	require 'affichage_produits.php';
	require '../backend/panier.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Boutique </title>
	
</head>
<body>
	<div id="page">
	<?php require_once('barre_navigation.php');?>
		<div id="content">
            <?php 
                $intermediaire;
                $produits = tableauDobjetCategorie("livres");
				echo "<center><div class='form-style-2-heading'> Nos livres les plus vendus </div></center>"
			?>
			<div id="section">
				<?php
					affichageProduits($produits);
				?>
			</div>

            <?php 
                $produits = tableauDobjetCategorie("musiques");	
				echo "<center><div class='form-style-2-heading'> Nos Musiques les plus vendus </div></center>"
			?>
			<div id="section">
				<?php
					affichageProduits($produits);
				?>
			</div>

            <?php 
                $produits = tableauDobjetCategorie("vetements");
				echo "<center><div class='form-style-2-heading'> Nos Vêtements les plus vendus </div></center>"
			?>
			<div id="section">
				<?php
					affichageProduits($produits);
				?>
			</div>

            <?php 
                $produits = tableauDobjetCategorie("sport");
				echo "<center><div class='form-style-2-heading'> Nos meilleures ventes en Sport et Loisirs </div></center>"
			?>
			<div id="section">
				<?php
					affichageProduits($produits);
				?>
			</div>
		</div>
		<?php
        	require_once('footer.php');
       	?>
	</div>
</body>
</html>

<style type="text/css">
	#section {
		float: left;
		width: 100%;
		height: 100%;
        background-color: #eeeeee;
        margin-bottom: 30px;
	}
	.ville {
		width: 16.66%;
		float: left;
		border: solid #bbbbbb 2px;
		padding: 5px;
		background-color: white;
		text-align: center;
		font: bold Arial, Helvetica, sans-serif;
		font-weight: bold;
	}
	img {
		width: 100%;
	}

	.ajoutpanier{
		
	border:none;
	padding:6px 0 6px 0;
	border-radius:3px;
	background:#EA7B00;
	font:bold 13px Arial;
	color:white;
	width: 150px;
	margin: auto;

	}

	a{
		color :white;
		
	}

	.form-style-2-heading {
		font-weight: bold;
		font-style: italic;
		border-bottom: 2px solid #ddd;
		margin-bottom: 10px;
		font-size: 20px;
		padding-bottom: 3px;
		margin-left: auto;
		margin-right: auto;
	}		

	.ville:hover{
		background: rgba(0,0,0,0);
	
		box-shadow: inset 0 0 0 3px #FF8500;
	}	
</style>

