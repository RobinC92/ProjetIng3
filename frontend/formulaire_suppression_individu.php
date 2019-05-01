<?php
    require_once('barre_navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>amazon</title>
</head>
<body>
	<h2> Quel compte voulez-vous supprimer ?</h2>
	<form action="../backend/suppression_individu" method="post">
		<table>
			<tr>
				<td>pseudo du compte:</td>
				<td><input type="text" name="pseudo" required="true"></td>
			</tr>
			</tr>
				<td colspan="2" align="center">
				<input type="submit" name="button" value="Suppression"></td>
			</tr>
		</table>
	</form>

</body>
</html>