<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$annee = isset($_POST["annee"])? $_POST["annee"] : "";
$editeur = isset($_POST["editeur"])? $_POST["editeur"] : "";
//identifier votre BDD
$database = "livres";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
if ($_POST["button2"]) {
	if ($db_found) {
		$sql = "SELECT * FROM books";
		if ($titre != "") {
//on cherche le livre avec les paramètres titre et auteur
			$sql .= " WHERE Titre LIKE '%$titre%'";
			if ($auteur != "") {
				$sql .= " AND Auteur LIKE '%$auteur%'";
			}
		}
		$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
		if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
			echo "Book already exists.
			Duplicate of book of same title and author not allowed.";
		} else {
			$sql = "INSERT INTO books(Titre, Auteur, Annee, Editeur)
			VALUES('$titre', '$auteur', '$annee', '$editeur')";
			$result = mysqli_query($db_handle, $sql);
			echo "Add successful." . "<br>";
 //on affiche le livre ajouté
			$sql = "SELECT * FROM books";
			if ($titre != "") {
//on cherche le livre avec les paramètres titre et auteur
				$sql .= " WHERE Titre LIKE '%$titre%'";
				if ($auteur != "") {
					$sql .= " AND Auteur LIKE '%$auteur%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result)) {
				echo "Informations sur le livre ajouté:" . "<br>";
				echo "ID: " . $data['ID'] . "<br>";
				echo "Titre: " . $data['Titre'] . "<br>";
				echo "Auteur: " . $data['Auteur'] . "<br>";
				echo "Année: " . $data['Annee'] . "<br>";
				echo "Editeur: " . $data['Editeur'] . "<br>";
				echo "<br>";
			}
		}
	} else {
		echo "Database not found";
	}
}
//fermer la connexion
mysqli_close($db_handle);
?>
