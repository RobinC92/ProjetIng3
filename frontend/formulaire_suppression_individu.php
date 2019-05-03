<?php
require_once('page_principale.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>amazon</title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>

	<div class="form-style-2">
		<div class="form-style-2-heading">Quel compte voulez-vous suprimmer</div>
		<br><br><br>
		<form action="../backend/suppression_individu.php" method="post" enctype="multipart/form-data">

			<label for="field1"><span>Pseudo du compte <span class="required">*</span></span><input required="true" type="text" class="input-field" name="pseudo" value="" /></label>

			<label><span> </span><input type="submit" name="button" value="Suppression" /></label>

		</form>
	</div>
</body>

</html>