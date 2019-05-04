<?php
    require '../backend/recuperation_produit.php';
	require 'affichage_produits.php';
	require 'page_principale.php';
    $id = $_GET['myid'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Galerie de Villes </title>
</head>
<body>

<?php 

echo "<div class='form-style-2-heading'> Description du produit </div>"

?>

	<div id="section">
        <?php
            $produit = objetParId($id);
            affichageDescription($produit);
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
	
	img {
		width: 60%;
		float:left;
		height: 100%;
	}

	.recap{
		width: 25%;
		float: right;
		margin-top: 0px;

		
		
	}

	#section {
		float: left;
		width: 100%;
		height: 100%;
		background-color: #eeeeee;
	}
	.description {
		
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
		
</style>