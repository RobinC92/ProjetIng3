<?php
require_once('page_principale.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulaire Coordonées Banquaire</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
    <script src='main.js'></script>
</head>
<body>

<div class="form-style-2">
	<div class="form-style-2-heading">Coordonées bancaires</div>
		<br><br><br>
		<form action="../backend/ajout_coordonnees_bancaires" method="post" enctype="multipart/form-data">

			
			<label for="field4"><span>Type de carte</span><select name="type_carte" id="classe" class="select-field">
					<option value="visa">Visa</option>
                    <option value="master_card">Master Card</option>
                    <option value="american_express">American Express</option>
                    <option value="paypal">PayPal</option>
				</select></label>
			<label for="field2"><span >Numéro de la carte <span class="required">*</span></span><input required="true" type="text" maxlength="16" pattern="[0-9]{16}" placeholder="16 chiffres" class="input-field" name="numero_carte" value="" /></label>	
            <label for="field1"><span>Nom de la carte <span class="required">*</span></span><input required="true" type="text" class="input-field" name="nom_carte" value="" /></label>
            <label><span>Date d'expiration <span class="required">*</span></span><input required="true" type="number" class="tel-number-field" name="date_expiration" value="" maxlength="2" minlength="2" min="01" max="12" placeholder="Mois" /> <input type="number" class="tel-number-field" name="date_expiration" value="" maxlength="4" minlength="4" placeholder="Année" min="2019" /></label>
            <label for="field2"><span>Cryptogramme <span class="required">*</span></span><input required="true" type="text" maxlength="4" pattern="[0-9]{3,4}"  class="input-field" name="code_securite" value="" /></label>

            
            <label><span> </span><input type="submit" name="button" value="Valider" /></label>
            
		</form>
	</div>
    
</body>
</html>