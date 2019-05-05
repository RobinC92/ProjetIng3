<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Formulaire </title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>
	<div id="page">
		<?php
		require_once('barre_navigation.php');
		?>
		<div id="content">
			<div class="form-style-2">
				
				<div class="form-style-2-heading">Connexion à votre compte</div>
				<br><br><br>
				<?php 
					if (isset($_SESSION['flags'])){
						if ($_SESSION['flags']== true){
							echo "<p>Pseudo ou mot de passe incorect</p>";
							$_SESSION['flags']= false;
						}
					}
				?>
				<form action="../backend/verification_connexion.php" method="post">
				<label for="field1"><span>Pseudo <span class="required">*</span></span><input required="true" type="text" class="input-field" name="pseudo" value="" /></label>
				<label for="field2"><span>Mot de Passe <span class="required">*</span></span><input required="true" type="password" class="input-field" name="mdp" value="" /></label>
					
					<br>
					
					<label><span></span><input type="submit" name="button" value="Valider" /></label>
				</form>
			</div>
		</div>
		<?php
		require_once('footer.php');
		?>
	</div>
</body>

</html>










