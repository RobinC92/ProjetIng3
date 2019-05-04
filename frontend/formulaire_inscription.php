<?php
	require_once('barre_navigation.php');
?>
<!--
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ECE Amazon</title>
</head>
<body>
	<h2>Inscription au site</h2>
	<form action="../backend/ajout_individu" method="post" enctype="multipart/form-data">
		<table>
			<tr><td>Nom:</td>
				<td><input type="text" name="nom" required="true"></td>
			</tr>
			<tr>
				<td>Prénom:</td>
				<td><input type="text" name="prenom" required="true"></td>
			</tr>
			<tr>
				<td>Pseudo:</td>
				<td><input type="text" name="pseudo" required="true"></td>
			</tr>
			<tr>
				<td>Statut:</td>
				<td><select name="statut" id="classe">
					<option value="acheteur">Acheteur</option>
					<option value="vendeur">Vendeur</option>
				</select></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="mail" required="true"></td>
			</tr>
			<tr>
				<td>Mot de passe:</td>
				<td><input type="password" name="mdp" required="true"></td>
			</tr>
			<tr>
				<td>Adresse:</td>
				<td><input type="text" name="adresse" required="true"></td>
			</tr>
			<tr>
				<td>Numéro de carte:</td>
				<td><input type="text" maxlength="16" pattern="[0-9]{16}" placeholder="16 caractères" name="coord" required="true"></td>
			</tr>
			<tr>
				<td>Photo de profil:</td>
				<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
			</tr>
				<td colspan="2" align="center">
				<input type="submit" name="button" value="Valider"></td>
			</tr>
			</table>
		</form>
</body>
</html>
-->

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>ECE Amazon</title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>
	<div class="form-style-2">
	<div class="form-style-2-heading">Inscription au site</div>
		<br><br><br>
		<form action="../backend/ajout_individu" method="post" enctype="multipart/form-data">

			<label for="field1"><span>Nom <span class="required">*</span></span><input required="true" type="text" class="input-field" name="nom" value="" /></label>
			<label for="field2"><span>Prénom <span class="required">*</span></span><input required="true" type="text" class="input-field" name="prenom" value="" /></label>
			<label for="field2"><span>Pseudo <span class="required">*</span></span><input required="true" type="text" class="input-field" name="pseudo" value="" /></label>
			<label for="field4"><span>Statut</span><select name="Statut" id="classe" class="select-field">
					<option value="acheteur">Acheteur</option>
					<option value="vendeur">Vendeur</option>
				</select></label>
			<label for="field2"><span>Email <span class="required">*</span></span><input required="true" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="input-field" name="mail" value="" /></label>	
			<label for="field2"><span>Mot de passe <span class="required">*</span></span><input required="true" type="password" class="input-field" name="mdp" value="" /></label>
			<label for="field2"><span>Adresse <span class="required">*</span></span><input required="true" type="text" class="input-field" name="adresse" value="" /></label>
			<label for="field2"><span>Ville <span class="required">*</span></span><input required="true" type="text" class="input-field" name="ville" value="" /></label>
			<label for="field2"><span >Code postal <span class="required">*</span></span><input required="true" type="text" maxlength="5" pattern="[0-9]{5}" class="input-field" name="code_postal" value="" /></label>
			<label for="field2"><span>Pays <span class="required">*</span></span><input required="true" type="text" class="input-field" name="pays" value="" /></label>
			<label for="field2"><span >Téléphone <span class="required">*</span></span><input required="true" type="text" maxlength="10" pattern="[0-9]{10}"class="input-field" name="telephone" value="" /></label>
			<label for="field2"><span>Photo de profil<span class="required">*</span></span><input required="true" type="file" class="input-field" name="fileToUpload"  id="fileToUpload"  value="" /></label>
			
			<label><span> </span><input type="submit" name="button" value="Valider" /></label>

		</form>
	</div>
</body>

</html>




