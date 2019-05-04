<?php 
	require '../backend/includes/connect_db.php';
	require '../backend/recuperation_produit.php';
	require 'affichage_produits.php';
	require '../backend/panier.php';
	
	require_once('page_principale.php');

	$categorie = $_GET['categorie'];
	$produits = tableauDobjetCategorie($categorie);	
	if ($categorie=="livres")
	{
		$affichage = "Livres";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Boutique </title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>
<body>
	<?php 

		echo "<div class='form-style-2-heading'> Catégorie : ".$affichage."</div>"
	
	?>
	<div id="section">
        <?php
			affichageProduits($produits);
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
		
		
	
</style>

