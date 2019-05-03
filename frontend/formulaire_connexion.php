<?php
require_once('page_principale.php');
?>

<!--
<html>

<head>


</head>

<body>


	<div class="form-style-2">
		<div class="form-style-2-heading">Provide your information</div>
		<form action="" method="post">
			<label for="field1"><span>Pseudo <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
			<label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
			<label><span>Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" />-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4" />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10" /></label>
			<label for="field4"><span>Regarding</span><select name="field4" class="select-field">
					<option value="General Question">General</option>
					<option value="Advertise">Advertisement</option>
					<option value="Partnership">Partnership</option>
				</select></label>
			<label for="field5"><span>Message <span class="required">*</span></span><textarea name="field5" class="textarea-field"></textarea></label>

			<label><span> </span><input type="submit" value="Submit" /></label>
		</form>
	</div>

</body>
</html>
-->


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Formulaire </title>
</head>

<body>

	<div class="form-style-2">
	
		<div class="form-style-2-heading">Connexion à votre compte</div>
		<br><br><br>
		<form action="../backend/verification_connexion" method="post">
		<label for="field4"><span>Compte</span><select name="statut" class="select-field">
					<option value="acheteur">Acheteur</option>
					<option value="vendeur">Vendeur</option>
					<option value="administrateur">Administrateur</option>
				</select></label>
		<label for="field1"><span>Pseudo <span class="required">*</span></span><input type="text" class="input-field" name="pseudo" value="" /></label>
		<label for="field2"><span>Mot de Passe <span class="required">*</span></span><input type="password" class="input-field" name="mdp" value="" /></label>
			
			<br>
			
			<label><span> </span><input type="submit" value="Valider" /></label>	
		</form>
	</div>

</body>

</html>
<!--
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Formulaire </title>
</head>

<body>

	<div class="form-style-2">
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
	</div>

</body>

</html>
-->


<style type="text/css">
	.form-style-2 {
		margin-left: auto;
		margin-right: auto;
	}

	.form-style-2-heading {
		margin-left: auto;
		margin-right: auto;
	}



	.form-style-2 {
		max-width: 500px;
		padding: 20px 12px 10px 20px;
		font: 13px Arial, Helvetica, sans-serif;
	}

	.form-style-2-heading {
		font-weight: bold;
		font-style: italic;
		border-bottom: 2px solid #ddd;
		margin-bottom: 10px;
		font-size: 20px;
		padding-bottom: 3px;
	}

	.form-style-2 label {
		display: block;
		margin: 0px 0px 15px 0px;
	}

	.form-style-2 label>span {
		width: 100px;
		font-weight: bold;
		float: left;
		padding-top: 8px;
		padding-right: 5px;
	}

	.form-style-2 span.required {
		color: red;
	}

	.form-style-2 .tel-number-field {
		width: 40px;
		text-align: center;
	}

	.form-style-2 input.input-field,
	.form-style-2 .select-field {
		width: 48%;
	}

	.form-style-2 input.input-field,
	.form-style-2 .tel-number-field,
	.form-style-2 .textarea-field,
	.form-style-2 .select-field {
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		border: 1px solid #C2C2C2;
		box-shadow: 1px 1px 4px #EBEBEB;
		-moz-box-shadow: 1px 1px 4px #EBEBEB;
		-webkit-box-shadow: 1px 1px 4px #EBEBEB;
		border-radius: 3px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		padding: 7px;
		outline: none;
	}

	.form-style-2 .input-field:focus,
	.form-style-2 .tel-number-field:focus,
	.form-style-2 .textarea-field:focus,
	.form-style-2 .select-field:focus {
		border: 1px solid #0C0;
	}

	.form-style-2 .textarea-field {
		height: 100px;
		width: 55%;
	}

	.form-style-2 input[type=submit],
	.form-style-2 input[type=button] {
		border: none;
		padding: 8px 15px 8px 15px;
		background: #FF8500;
		color: #fff;
		box-shadow: 1px 1px 4px #DADADA;
		-moz-box-shadow: 1px 1px 4px #DADADA;
		-webkit-box-shadow: 1px 1px 4px #DADADA;
		border-radius: 3px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
	}

	.form-style-2 input[type=submit]:hover,
	.form-style-2 input[type=button]:hover {
		background: #EA7B00;
		color: #fff;
	}
</style>







