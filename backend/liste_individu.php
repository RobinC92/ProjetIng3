<?php 

require 'includes/connect_db.php';

if ($_POST["button"]){
		if($db_found) {
		$statut = "vendeur";
		$sql = "SELECT * FROM individu WHERE Statut LIKE '%$statut%'";    
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
			echo "Nom: " . $data['Nom'] . '<br>';
			echo "Prénom: " . $data['Prenom'] . '<br>';
			echo "Pseudo: " . $data['Pseudo'] . '<br>';
			echo "Statut: " . $data['Statut'] . '<br>';
			echo "<br>";
		}
	} else {
		echo "Database not found";
	}
}
	
