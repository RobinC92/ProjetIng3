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
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span> ECE Amazon</a>
      
    </div>
    <ul class="nav navbar-nav">
      <li>
	      <div class="dropdown">
	      	<button class="btn dropdown-toggle" data-toggle="dropdown">Catégories</button>
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
      <li><a href="#">admin</a></li>
    </ul>
    <form class="navbar-form navbar-right inline-form">
            <div class="form-group">
               <a class="btn btn-warning"><span class="glyphicon  glyphicon-shopping-cart"></span> Ajouter au panier</a>
            </div>
    </form>
  </div>
</nav>

<footer class="page-footer">  
   <div class="container">   
    <div class="row">      
     <div class="col-lg-8 col-md-8 col-sm-12">   
       <h6 class="text-uppercase font-weight-bold">Informations additionnelles</h6>   
       <p> ECE Amazon est un site de mise en vente de produits, crée en 2019 par 3 associés : Robin Canaguier, Julien Robert et Hugo Desgouillon  </p> 
     </div> 
     <div class="col-lg-4 col-md-4 col-sm-12"> 
      <h6 class="text-uppercase font-weight-bold">Contact</h6>  
      <p>             37, quai de Grenelle, 75015 Paris, France <br> 
       info@amazon.ece.fr <br>            
       +33 01 02 03 04 05    
     </p> 
   </div> 
  </div> 
  <div class="footer-copyright text-center">&copy; 2019 Copyright | Droit d'auteur: webDynamique.ece.fr</div>
  </footer>

  
</body>
</html>

<style type="text/css">
	
body{
  background-color:GhostWhite;
}

.dropdown{
	margin-top: 8px;
}

.page-footer{
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: DimGray;
  color: white;
  text-align: center;
}

</style>

<script>

$('ul.nav div.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

</script>