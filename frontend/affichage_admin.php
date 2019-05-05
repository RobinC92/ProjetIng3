<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<title>ECE Amazon</title>
	<link rel='stylesheet' type='text/css' media='screen' href='formulaire.css'>
</head>

<body>
    <div id='page'>
        <?php require_once('barre_navigation.php'); ?>
        <div id='content'>
            <center> <?php require_once('../backend/liste_individu.php');?> </center>
        </div>
        <?php require_once('footer.php'); ?>
    </div>
    
    </body>

</html>