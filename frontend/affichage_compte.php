<?php
require_once('barre_navigation.php');
echo "
<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<title>ECE Amazon</title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>
    <div id='page'>
        <div id='content'>
            <div class='form-style-2'>
            <div class='form-style-2-heading'>Information de votre compte</div>
                <br><br><br>
                <form action='../backend/ajout_individu' method='post' enctype='multipart/form-data'>
                    <label for='field1'><span> </span>Nom : ".$_SESSION['nom']."</label><br>
                    <label for='field2'><span> </span>Prenom : ".$_SESSION['prenom']."</label><br>
                    <label for='field2'><span> </span>Pseudo : ".$_SESSION['pseudo']."</label><br>
                    <label for='field4'><span> </span>Statut : ".$_SESSION['statut']."</label><br>
                    <label for='field2'><span> </span>Email : ".$_SESSION['mail']."</label><br>
                    <label for='field2'><span></span>Adresse : ".$_SESSION['adresse']."</label><br>
                    <label for='field2'><span></span>Ville : ".$_SESSION['ville']."</label><br>
                    <label for='field2'><span></span>Code_Postal : ".$_SESSION['code_postal']."</label><br>
                    <label for='field2'><span></span>Pays : ".$_SESSION['pays']."</label><br>
                    <label for='field2'><span></span>Telephone : ".$_SESSION['telephone']."</label><br>
                    <label for='field2'><span></span>Image du compte :</label><br>
                    <label for='field2'><span></span><img src='"."../backend/".$_SESSION['photo']."'></label><br>
                </form>
            </div>"?>
        <div>
    <?php require_once('footer.php'); ?>
    </div>
    </body>

</html>


<style>
    img{
        height: 450px;
    }
</style>