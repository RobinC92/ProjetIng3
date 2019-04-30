<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ECE Amazon</a>
    </div>
    <ul class="nav navbar-nav">
      <li>
	      <div class="dropdown">
	      	<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Catégories
	  		<span class="caret"></span></button>
	  		<ul class="dropdown-menu">
			    <li><a href="#">Livres</a></li>
			    <li><a href="#">Musiques</a></li>
			    <li><a href="#">Vêtements</a></li>
			    <li><a href="#">Sports et loisirs</a></li>
		    </ul>
	      </div>
  	  </li>	
      <li><a href="#">Ventes flash</a></li>
      <li><a href="#">Vendre</a></li>
      <li><a href="#">Votre compte</a></li>
      <li><a href="#">Panier</a></li>
      <li><a href="#">Admin</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Contenu</h3>
  <p>Ceci est une page vide</p>
</div>

</body>
</html>

<style type="text/css">
	
.dropdown{
	margin-top: 8px;
}

</style>