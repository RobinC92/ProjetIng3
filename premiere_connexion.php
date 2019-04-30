<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Premiere connexion</title>
</head>
<body>
	<h2>Création d'un compte</h2>
	<form>
		<table>
			<tr><td>Nom:</td>
				<td><input type="text" name="nom"></td>
			</tr>
			<tr>
				<td>Prénom:</td>
				<td><input type="text" name="prenom"></td>
			</tr>
			<tr>
				<td>Statut:</td>
				<td><select name="classe" id="classe">
					<option value="acheteur">Acheteur</option>
					<option value="vendeur">Vendeur</option>
				</select></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td>Mot de passe:</td>
				<td><input type="password" name="mdp"></td>
			</tr>
			<tr>
				<td>Adresse:</td>
				<td><input type="text" name="adresse"></td>
			</tr>
			<tr>
				<td>Photo de profil:</td>
				<td><input type="file" name="photo"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="button" value="Valider"></td>
				</tr>
			</table>
		</form>
</body>
</html>