<?php
	require_once('barre_navigation.php');
?>
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
			<?php 
				if (isset($_SESSION['flagpseudo'])) 
				{
					if ($_SESSION['flagpseudo'] == true) {
						echo "Le pseudo que vous avez entré est déja utilisé";
						$_SESSION['flagpseudo'] = false;
					}
				}				
			?>
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




