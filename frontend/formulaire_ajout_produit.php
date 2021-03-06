<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>ECE Amazon</title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>
	<div id="page">
		<?php
		require_once('barre_navigation.php');
		?>
		<div id="content">
			<div class="form-style-2">
				<div class="form-style-2-heading">Ajout d'un produit</div>
				<br><br><br>
				<form action="../backend/ajout_produit" method="post" enctype="multipart/form-data">
				
				<label for="field1"><span>Nom du produit <span class="required">*</span></span><input required="true" type="text" class="input-field" name="nom" value="" /></label>
				<label for="field2"><span>Prix<span class="required">*</span></span><input required="true" placeholder="€" pattern="[0-9]+" type="text" class="input-field" name="prix" value="" /></label>
					
					<label for="field4"><span>Catégorie</span><select name="categorie" id="classe" class="select-field">
							<option value="livres">Livres</option>
							<option value="musiques">Musiques</option>
							<option value="vetements">Vêtements</option>
							<option value="sport">Sports et Loisir</option>
						</select></label>
					<label for="field5"><span>Description <span class="required">*</span></span><textarea required="true" name="description" class="textarea-field"></textarea></label>
					<label for="field1"><span>Photo du produit <span class="required">*</span></span><input required="true" type="file" class="input-field" name="fileToUpload" id="fileToUpload" value="" /></label>

					<label><span> </span><input type="submit" name="button" value="Valider" /></label>
						
				</form>
			</div>
		</div>
		<?php
			require_once('footer.php')
		?>
	</div>
</body>

</html>

<!--
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ECE Amazon</title>
</head>
<body>
	<h2>Ajout d'un produit</h2>
	<form action="../backend/ajout_produit" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nom:</td>
				<td><input type="text" name="nom" required="true"></td>
			</tr>
			<tr><td>Prix:</td>
				<td><input type="number" name="prix" required="true"></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><input type="text" name="description" required="true"></td>
			</tr>
			<tr>
				<td>Catégorie:</td>
				<td><select name="categorie" id="classe">
					<option value="livres">Livres</option>
					<option value="musiques">Musiques</option>
                    <option value="vetements">Vêtements</option>
                    <option value="sports et loisir">Sports et Loisir</option>
				</select></td>
			</tr>
            <tr>
				<td>Photo du produit :</td>
				<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
			</tr>

			</tr>
				<td colspan="2" align="center">
				<input type="submit" name="button" value="Valider"></td>
			</tr>
		</table>
	</form>
</body>
</html>
-->