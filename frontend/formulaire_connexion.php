<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Formulaire </title>
</head>
<body>

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

</body>
</html>