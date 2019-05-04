<!DOCTYPE html>
<html>

<head>
  <title>ECE Amazon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon" href="favicon.ico" type="image/x-icon"> 
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
              <li><a href="affichage_categories.php?categorie=livres">Livres</a></li>
              <li><a href="affichage_categories.php?categorie=musiques">Musiques</a></li>
              <li><a href="affichage_categories.php?categorie=vetements">Vêtements</a></li>
              <li><a href="affichage_categories.php?categorie=sport">Sports et loisirs</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#">Ventes flash</a></li>
        <li><a href="vendre.php">Vendre</a></li>
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

</body>

</html>

<style type="text/css">
  .dropdown {
    margin-top: 8px;
  }



  html {
    height: 100%;
  }

  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

</style>

<script>
  $('ul.nav div.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
</script>