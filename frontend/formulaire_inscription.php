<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Premiere connexion</title>
</head>
<body>
	<h2>Création d'un compte</h2>
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
				<td><input type="text" pattern="" name="coord" required="true"></td>
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