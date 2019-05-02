<?php 

require '../backend/includes/connect_db.php';
require '../backend/recuperation_produit.php';

		if($db_found) {
		$sql = "SELECT * FROM produit";    
		$result = mysqli_query($db_handle, $sql);
		$livres=array();
		while ($data = mysqli_fetch_assoc($result)) {
			array_push($livres,produitEnObjet($data['ID'], $data['Nom'], $data['Prix'],
			$data['Description'], $data['Categorie'], $data['Photo'], $data['Pseudo']));
		}
	} else {
		echo "Database not found";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Galerie de Villes </title>
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
</head>
<body>

	<div id="section">
        <?php
        for ($i=0;$i<count($livres);$i++){
            echo"
            <div class='ville'>
                <img src='"."../backend/".$livres[$i]->photo."'height='250'>
                <h2>".$livres[$i]->nom."</h2>
				<p>".$livres[$i]->prix."</p>
				<p>".$livres[$i]->categorie."</p>
                
                <p>".$livres[$i]->description."</p>
                <center><a href='#' class='myButton'>Ajouter au Panier</a></center>
            </div>";
        }
        ?>
        </div>
	</div>
</body>
</html>

<style>
    .myButton {
        -moz-box-shadow: 3px 4px 0px 0px #899599;
        -webkit-box-shadow: 3px 4px 0px 0px #899599;
        box-shadow: 3px 4px 0px 0px #899599;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #bab1ba));
        background:-moz-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:-webkit-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:-o-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:-ms-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#bab1ba',GradientType=0);
        background-color:#ededed;
        -moz-border-radius:15px;
        -webkit-border-radius:15px;
        border-radius:15px;
        border:1px solid #d6bcd6;
        display:inline-block;
        cursor:pointer;
        color:#3a8a9e;
        font-family:Arial;
        font-size:17px;
        padding:7px 25px;
        text-decoration:none;
        text-shadow:0px 1px 0px #e1e2ed;
        -webkit-align-items : center;
    }
    .myButton:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bab1ba), color-stop(1, #ededed));
        background:-moz-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:-webkit-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:-o-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:-ms-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bab1ba', endColorstr='#ededed',GradientType=0);
        background-color:#bab1ba;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
</style>