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
	<div id="page">
	<?php require_once('barre_navigation.php'); ?>
	<p>Votre total a payer est de 
	<?php
		echo totalAPayer(); 
	?></p>
	<a href="formulaire_coordonnees_bancaires">Payer</a>
		<div id="content">
			
				<?php
				for($i=0 ; $i < count($_SESSION['panier']); $i++)
				{
					$produits = objetParId($_SESSION['panier'][$i]);
					
					affichageProduit($produits);
					
				}
			
				?>
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
		height: 50%;
		background-color: #eeeeee;
		width: 50%;
		margin-top: 20px;
		margin-bottom: 20px;
		border: solid black 2px;
		padding: 50px;
		background-color: white;
		text-align: center;
		font: bold Arial, Helvetica, sans-serif;
		font-weight: bold;
		height: 500px;
		margin-left: 25%;
	}
	.ville {
		
		width: 20%;
		float: left;
		border: solid #bbbbbb 1px;
		padding: 5px;
		
	}
	
	img {
		width: 60%;
		float:left;
		height: 100%;
	}

	
	.recap{
		width: 25%;
		float: right;
		margin-top: 0px;
</style>