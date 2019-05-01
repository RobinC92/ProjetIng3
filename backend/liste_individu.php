<?php 

require 'includes/connect_db.php';

if ($_POST["button1"]){
		if($db_found) {
		$sql = "SELECT * FROM individu WHERE Statut ='acheteur' ";    
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

if ($_POST["button2"]){
		if($db_found) {
		$sql = "SELECT * FROM individu WHERE Statut ='vendeur' ";     
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
	
 ?>