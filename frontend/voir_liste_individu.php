<?php
require_once('barre_navigation.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>ECE Amazon</title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>

	<div class="form-style-2">
		<div class="form-style-2-heading">Accès à la base de données</div>
		<br><br><br>
		<form action="../backend/liste_individu.php" method="post" enctype="multipart/form-data">

			<label><span> </span><input type="submit" name="button" value="Liste des acheteurs et des vendeurs" /></label>

		</form>
	</div>

</body>

</html>