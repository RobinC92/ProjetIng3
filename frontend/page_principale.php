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
					<li data-target="#my_carousel" data-slide-to="3"></li>
				</ol>
				<!-- Slides -->
				<div class="carousel-inner">
					<!-- Page 1 -->
					<div class="item active">
						<div class="carousel-page">
							<a href="affichage_categories.php?categorie=livres">
								<img src="img/livres5.jpg" class="img-responsive img-rounded" style="margin:0px auto;" />
							</a>
						</div>
						<div class="carousel-caption">Livres</div>
					</div>
					<!-- Page 2 -->
					<div class="item">
						<div class="carousel-page">
							<a href="affichage_categories.php?categorie=vetements">
								<img src="img/vetements1.jpg" class="img-responsive img-rounded" style="margin:0px auto;" />
							</a>
						</div>
						<div class="carousel-caption">Vêtements</div>
					</div>
					<!-- Page 3 -->
					<div class="item">
						<div class="carousel-page">
							<a href="affichage_categories.php?categorie=musiques">
								<img src="img/musiques2.jpg" class="img-responsive img-rounded" style="margin:0px auto;max-height:100%;" />
							</a>
						</div>
						<div class="carousel-caption">Musiques</div>
					</div>

					<!-- Page 4 -->
					<div class="item">
						<div class="carousel-page">
							<a href="affichage_categories.php?categorie=sport">
								<img src="img/sports5.jpg" class="img-responsive img-rounded" style="margin:0px auto;" />
							</a>
						</div>
						<div class="carousel-caption">Sports et Loisir</div>
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
	$('.carousel-indicators').carousel({
		interval: 2000
	})
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

	.carousel-page {
		width: 100%;
		height: 650px;
		background-color: #5f666d;
		color: white;
	}


	.item img {
		height: 100%;
		width: 100%;
	}

	.carousel-indicators {
		height: 0px;

	}

	.carousel-caption {

		height: 0px;

	}
</style>