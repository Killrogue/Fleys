<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" 	 href="assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles_DDF.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
		<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
		<script defer src="assets/js/fontawesome-all.js"></script>
	</head>
	<body class="bg-paysage">
		<header class="container-fluid  px-0"><!--début du header-->
			<nav class="navbar navbar-expand-lg bg-nav fixed-top">
			 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   					<i class="fas fa-bars burger"></i>
  				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav mx-auto">
				      <li class="nav-item active mr-3 pt-2 pl-2"> <img class="img-fluid logo" src="assets/images/logo.png" alt="logo">
				        <a class="nav-link d-inline" href="page_d'accueil_DDF.php">ACCUEIL</a>
				      </li>
				      <li class="nav-item mx-3">
				        <a class="nav-link " href="historique_DDF.php">HISTORIQUE</a>
				      </li>
				      <li class="nav-item mx-3">
				        <a class="nav-link" href="le_domaine_DDF.php">LE DOMAINE</a>
				      </li>
				      <li class="nav-item mx-3">
				        <a class="nav-link " href="nos_vins.php">NOS VINS</a>
				      </li>
				      <li class="nav-item mx-3">
				        <a class="nav-link" href="actualité.php">ACTUALITE</a>
				      </li>
				      <li class="nav-item ml-3">
				        <a class="nav-link " href="contact.php">CONTACT</a>
				      </li>
				    </ul>
				</div>
			</nav>
		</header><!--fin du header-->
		<main class="container"><!--début du main-->
			<div class="row">
				<section class="col pad-dom"><!-- Slider -->
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a data-fancybox href="assets/images/slider1.jpg"><img class="d-block w-100" src="assets/images/slider1.jpg" alt="Premier cru Mont de Milieu" title="Cliquez pour zoomer"></a>
								<div class="carousel-caption d-none d-md-block">
									<h2>Premier cru Mont de Milieu</h2>
								</div>
							</div>
							<?php 
								include('assets/php/inc_bdd.php');

								$sql = "SELECT * FROM slider WHERE id NOT LIKE 1";
								$requete = $db -> query($sql);

								while ($result = $requete -> fetch()) {
							?>
							<div class="carousel-item">
								<a data-fancybox href="<?= $result['lien_image'] ?>"><img class="d-block w-100" src="<?= $result['lien_image'] ?>" alt="<?= $result['texte_alt'] ?>" title="Cliquez pour zoomer"></a>
								<div class="carousel-caption d-none d-md-block">
									<h2><?= $result['caption'] ?></h2>
								</div>
							</div>
							<?php		
								}
							?>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<!--Fin Slider -->	
				</section>
			</div>
			<div class="row bg-domaine my-5">
				<section class="col-12 text-light">
					<h1 class="text-center my-3">Présentation du domaine</h1>
				</section>
				<section class="col-12 col-md-4 text-light my-5 "><!-- Description exploitation -->
					<h2 class="mt-3 mb-2">L'exploitation</h2>
					<p class="text-justify">Le domaine du Château de Fleys est une exploitation familiale(sous forme de GAEC) appartenant à Béatrice, Benoît et  Olivier Philippon.<br>
					Il se situe dans la commune de Fleys en plein coeur du chablisien, à 4.5 km à l'est de Chablis, sur la rive droite du Serein.</p>
				<!-- Fin Description exploitation -->	
				</section>
				<section class="col-12 col-md-4 text-light my-5"><!-- Description vignoble -->
					<h2 class="mt-3 mb-2">Taille du Domaine</h2>
					<p class="text-justify">Il s'étend sur une vingtaine d'hectares, composé de Chablis AOC ( dont le Clos du Château) et de Chablis 1 er cru AOC le "Mont de Milieu" et "Les Fourneaux", deux climats de rive droite du Serein.<br>
					La culture raisonnée y est pratiquée dans le respect de la nature.</p>
				<!-- Fin Description vignoble -->
				</section>
				<section class="col-12 col-md-4 text-light my-5"><!-- Description élaboration des vins -->
					<h2 class="mt-3 mb-2">Elaboration des vins</h2>
					<p class="text-justify">Les vins sont élaborés dans le chai construit en 2006 au 2,rue des Fourneaux.<br>
					Différents types de vinification sont effectuées suivant les vins.<br>
					La commercialisation des vins a aussi lieu dans ce même chai où vous serez accueilli chaleureusement par la famille Philippon.</p>
				<!-- Fin Description élaboration des vins -->	
				</section>
			</div>
		</main><!--fin du main-->
		<section class="container-fluid px-0 link"><!--début langue et réseaux sociaux-->
			<nav class="navbar navbar-expand bg-nav-2 ">
				<div>
					<img src="assets/images/fr-FR.png" alt="Français">
					<i class="fas fa-caret-right text-light"></i>
					<img src="assets/images/en-GB.png" alt="English">
					<a href="mentions_legales.php" class="ml-5">Mentions légales</a>
				</div>
			  	<div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item mr-2">
				        <a class="nav-link " href="https://fr-fr.facebook.com/chateaudefleys.chablis.9" title="Rejoindre notre page Facebook"><i class="fab fa-facebook-f"></i><span class="d-md-inline d-none">&nbsp;&nbsp;FACEBOOK</span></a>
				      </li>
				      <li class="nav-item mx-2">
				        <a class="nav-link" href="https://twitter.com/chateaudefleys" title="Rejoindre notre compte Twitter"><i class="fab fa-twitter"></i><span class="d-md-inline d-none">&nbsp;&nbsp;TWITTER</span></a>
				      </li>
				      <li class="nav-item ml-2">
				        <a class="nav-link" href="https://www.instagram.com/chateau_de_fleys/" title="Rejoindre notre page Instagram"><i class="fab fa-instagram"></i><span class="d-md-inline d-none">&nbsp;&nbsp;INSTAGRAM</span></a>
				      </li>
				    </ul>
			  	</div>
			</nav>
		</section><!--fin langue et réseaux sociaux-->
		<footer class="container-fluid"><!--début du footer-->
			<p class="mb-0 text-light text-center pb-2">L'abus d’alcool est dangereux pour la santé.</p>
		</footer><!--fin du footer-->
	</body>
</html>