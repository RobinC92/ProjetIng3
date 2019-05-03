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
	<title> Galerie de Villes </title>
</head>
<body>

	<div id="section">
        <?php
		session_start();
		for($i=0 ; $i < count($_SESSION['panier']); $i++)
		{
			$produits = tableauDobjetID($_SESSION['panier'][$i]);
			affichageProduit($produits);
		}
        ?>
        </div>
	</div>
</body>
</html>

<style type="text/css">
	#section {
		float: left;
		width: 100%;
		height: 100%;
		background-color: #eeeeee;
	}
	.ville {
		width: 20%;
		float: left;
		border: solid #bbbbbb 1px;
		padding: 5px;
	}
	img {
		width: 100%;
	}
</style>