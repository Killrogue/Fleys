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
<body>
	<header class="container-fluid"><!--début du header-->
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
	<main class="container-fluid img-wine"><!--Main-->
		<div class="big-title">
			<p class="text-center mb-md-5 mt-2 mt-md-0 text-white">Domaine de fleys</p>
			<h1 class="text-center mt-md-5 text-white"> Chablis - Chablis 1er cru</h1>
		</div>
		<div class="row wine">
			<section class="col-12 col-lg-9 col-xl-6 m-auto wine-card"><!-- Item Chablis-->
				<div class="card-columns">
					<div class="card text-white black-quote pb-4 pt-5 text-center d-none d-md-block">
						<blockquote class="blockquote mb-0 card-body">
							<p id="chablis" >"Souplesse"</p>
						</blockquote>
					</div>
					<?php 

					include('assets/php/inc_bdd.php');

					$sql = "SELECT * FROM vin ORDER BY ordre ASC";

					$requete = $db -> query($sql);

					

					while ($result = $requete -> fetch()) { 
						
					?>	
					<div class="card p-3">
						<img class="card-img-top" src="<?= $result['lien_img']?>" alt="Chablis 2016">
						<div class="card-body">
							<h5 class="card-title"><?= $result['nom']?></h5>
							<a href="description_vins.php?id=<?= $result['id']?>">En savoir plus</a>
						</div>
					</div>
					<?php 
					if ($result['ordre'] == 4) { ?>
					<div class="card text-white text-center black-quote pb-4 pt-5 d-none d-md-block">
						<blockquote class="blockquote mb-0 card-body">
							<p id="premier_cru" class="mineral" >"Minéral"</p>
						</blockquote>
					</div>
					<div class="card text-white black-quote pb-4 pt-5 text-center d-none d-md-block">
						<blockquote class="blockquote mb-0 card-body">
							<p id="chablis" >"Équilibré"</p>
						</blockquote>
					</div>
					<?php	
						}
					}
					?>
				</div>
				<div class="raisonnee d-none d-xl-block">
					<img  src="assets/images/leaf.png">
					<p class="bg-green mt-1">Culture <br> raisonnée</p>
				</div>
			<!--Fin Item Chablis 1er cru-->	
			</section>
		</div>
	<!--fin du main-->	
	</main>
	<section class="container-fluid link px-0 mt-3"><!--début langue et réseaux sociaux-->
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
		<p class="mb-0 text-center pb-2">L'abus d’alcool est dangereux pour la santé.</p>
	</footer><!--fin du footer-->
</body>
</html>