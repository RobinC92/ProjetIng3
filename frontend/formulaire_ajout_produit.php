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
				<td><input type="number" name="nom" required="true"></td>
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