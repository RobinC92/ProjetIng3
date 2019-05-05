<!DOCTYPE html>
<html>

<head>
    
</head>

<body>
    <div id="page">
        <div id=header>
            <?php
            require_once('barre_navigation.php');
            ?>
        </div>

        <div id=content>

            <div class="form-style-2-heading">Bienvenue sur le site ECE Amazon</div>

            <div id="my_carousel" class="carousel slide" data-ride="carousel">
	<!-- Bulles -->
	<ol class="carousel-indicators">
	<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
	<li data-target="#my_carousel" data-slide-to="1"></li>
	<li data-target="#my_carousel" data-slide-to="2"></li>
	</ol>
	<!-- Slides -->
	<div class="carousel-inner">
	<!-- Page 1 -->
	<div class="item active">  
	<div class="carousel-page">
	<img src="/images/bootstrap.png" class="img-responsive" style="margin:0px auto;" />
	</div> 
	<div class="carousel-caption">Page 1 de présentation</div>
	</div>   
	<!-- Page 2 -->
	<div class="item"> 
	<div class="carousel-page"><img src="/images/twitter-bootstrap.jpg" class="img-responsive img-rounded" 
	style="margin:0px auto;"  /></div> 
	<div class="carousel-caption">Page 2 de présentation</div>
	</div>  
	<!-- Page 3 -->
	<div class="item">  
	<div class="carousel-page">
	<img src="/images/tablette.png" class="img-responsive img-rounded" 
	style="margin:0px auto;max-height:100%;"  />
	</div>  
	<div class="carousel-caption">Page 2 de présentation</div>
	</div>     
	</div>
	<!-- Contrôles -->
	<a class="left carousel-control" href="#my_carousel" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#my_carousel" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	</div>


            

        </div>

        <div id=footer>
            <?php
            require_once('footer.php');
            ?>
        </div>
    </div>

</body>


<script type="text/javascript">
  
  

</script>


</html>

<style type="text/css">
    body {
        background-color: #eeeeee;
    }

    .form-style-2-heading {
        font-weight: bold;
        font-style: italic;
        border-bottom: 2px solid #ddd;
        margin-bottom: 10px;
        font-size: 20px;
        padding-bottom: 3px;
        margin-left: auto;
        margin-right: auto;
    }
    .carousel-page
	{
	width:100%;
	height:400px;
	background-color:#5f666d;
	color:white;
	}
    
</style>