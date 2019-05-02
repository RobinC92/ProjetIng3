<?php 

require 'includes/connect_db.php';

		if($db_found) {
		$sql = "SELECT * FROM produit WHERE Categorie ='livres' ";    
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
			echo "ID: " . $data['ID'] . '<br>';
			echo "Nom: " . $data['Nom'] . '<br>';
			echo "Prix: " . $data['Prix'] . '<br>';
            echo "Description: " . $data['Description'] . '<br>';
            echo "Pseudo: " . $data['Pseudo'] . '<br>';
            echo "Photo: " . $data['Photo'] . '<br>';
			echo "<br>";
		}
	} else {
		echo "Database not found";
	}
