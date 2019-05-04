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
	<title> Panier </title>
</head>

<body>
	<div id="page">
		<?php require_once('barre_navigation.php'); ?>
		<div class="alignement">
		<div class="prix">
		<p>Votre total à payer est de
			<?php
			echo totalAPayer()  ;
			echo " €";
			?></p> 
			</div>
		<div class="payer">
			<a href="formulaire_coordonnees_bancaires">Payer</a>
		</div>
		</div>

		<div id="content">

			<?php
			echo "<div class='total'>";
			for ($i = 0; $i < count($_SESSION['panier']); $i++) {
				$produits = objetParId($_SESSION['panier'][$i]);

				affichageProduit($produits);
			}
			echo "</div>";
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
		width: 98%;
		margin: 1%;
		border: solid black 2px;

		background-color: white;
		text-align: center;
		font: bold Arial, Helvetica, sans-serif;
		font-weight: bold;
		height: 312px;

	}


	img {

		float: left;
		height: 300px;
		width: 30%;
		margin-left: 5px;
		margin-top: 5px;

	}


	.recapanier {
		width: 60%;
		float: left;
		margin-right: 10px;
		margin-left: 10px;
	}

	.supprimepanier {
		border: none;
		padding: 6px 0 6px 0;
		border-radius: 3px;
		background: #EA7B00;
		font: bold 13px Arial;
		color: white;
		width: 150px;
		margin: auto;
	}

	a {
		color: white;
	}

	

	.total {
		background-color: #eeeeee;
	}

	.payer{
		
		border: none;
		padding: 6px 0 6px 0;
		border-radius: 3px;
		background: #EA7B00;
		font: bold 13px Arial;
		color: white;
		text-align: center;
		width: 45px;
		margin-left:395px;
		height: 27px;
		
	}

	.prix{
		
		margin-left: 50px;
		font-weight: bold;
		width: 100%;
		font: bold 20px Arial;
		font-style: italic;
		
	}

	.alignement p{
		float:left;
	}
	.alignement a{
		position : absolute;
		left:400px;

	}
</style>