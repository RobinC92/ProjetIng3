<?php
require_once('page_principale.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Formulaire </title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>

	<div class="form-style-2">
	
		<div class="form-style-2-heading">Connexion à votre compte</div>
		<br><br><br>
		<form action="../backend/verification_connexion.php" method="post">
		<label for="field1"><span>Pseudo <span class="required">*</span></span><input required="true" type="text" class="input-field" name="pseudo" value="" /></label>
		<label for="field2"><span>Mot de Passe <span class="required">*</span></span><input required="true" type="password" class="input-field" name="mdp" value="" /></label>
			
			<br>
			
			<label><span> </span><input type="submit" name="button" value="Valider" /></label>	
		</form>
	</div>

</body>

</html>
<!--
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Formulaire </title>
</head>

<body>

	<div class="form-style-2">
		<h3>Connexion à votre compte</h3>
		<form action="../backend/verification_connexion" method="post">
			<table>
				<tr>
					<td>Pseudo:</td>
					<td><input type="text" name="pseudo" required="true"></td>
				</tr>
				<tr>
					<td>Mot de passe:</td>
					<td><input type="password" name="mdp" required="true"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="button" value="Valider"></td>
				</tr>
			</table>
		</form>
	</div>

</body>

</html>
-->










