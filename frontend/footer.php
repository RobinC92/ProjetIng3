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
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Informations additionnelles</h6>
                    <p> ECE Amazon est un site de mise en vente de produits, crée en 2019 par 3 associés : Robin Canaguier, Julien Rauber et Hugo Desgouillon </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p> 37, quai de Grenelle, 75015 Paris, France <br>
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
  
  .page-footer {  
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #222;
    color: #ccc;
  }

  .footer-copyright {
    color: #666;
 }

</style>

<script>

jQuery(document).ready(function($) {
    /**
     * Set footer always on the bottom of the page
     */
    function footerAlwayInBottom(footerSelector) {
        var docHeight = $(window).height();
        var footerTop = footerSelector.position() + footerSelector.height();
        if (footerTop < docHeight) {
            footerSelector.css("margin-top", (docHeight - footerTop) + "px");
        }
    }
    // Apply when page is loading 
    footerAlwayInBottom($("#footer"));
    // Apply when page is resizing
    $(window).resize(function() {
        footerAlwayInBottom($("#footer"));
    });
});

</script>