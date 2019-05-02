<?php
    require_once('page_principale.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Formulaire </title>
</head>
<body>

	<h3>Connexion admin</h3>
    <p> La connexion sur cette page est réservée aux comptes administrateurs. <br> Cela ne sert à rien d'essayer de vous connecter avec votre compte acheteur ou vendeur. </p>
	<form action="../backend/verification_connexion_admin" method="post">
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