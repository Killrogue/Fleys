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
	<body >
		<header class="container-fluid  px-0"><!--début du header-->
			<nav class="navbar navbar-expand-lg bg-nav">
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
		<main class="container-fluid mb-3 news"><!--début du main-->
			<div class="container">
				<div class="btn-return2">
					<a href="actualité.php" class="btn btn-light btn-lg " role="button" aria-pressed="true">Retour</a>
				</div>
				<div class="row justify-content-center">
					<?php
						include('assets/php/inc_bdd.php');
						$sql = "SELECT * FROM news WHERE id = :id";
						$requete = $db -> prepare($sql);
						$requete -> bindValue(':id', $_GET['id'], PDO::PARAM_INT);
						$requete -> execute();
						$result = $requete -> fetch();

						if (isset($_GET['id']) AND !empty($_GET['id'])) {

					?>
					<div class="mb-5" style="font-size: 3em;"><?= $result['title'] ?></div>	
					<div class="col-10 mb-4">
						<img class="first-img-news" src="<?= $result['picture']?>" alt="Card image cap">
					</div>
					<div class="col-10 text-center">
						<h1></h1>
						<p></p>
						<p><?= $result['content']?></p>
					</div>
					<?php	
					 	}else{
					 		echo "Il n'y a pas d'id";
					 	}
					?>
				</div>
			</div>
		</main><!--fin du main-->
		<section class="container-fluid px-0 link"><!--début langue et réseaux sociaux-->
			<nav class="navbar navbar-expand bg-nav-2">
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
			<footer class="container-fluid"><!--début du footer-->
				<p class="mb-0 text-center pb-2">L'abus d’alcool est dangereux pour la santé.</p>
			</footer><!--fin du footer-->
		</section><!--fin langue et réseaux sociaux-->
		
	</body>
</html>