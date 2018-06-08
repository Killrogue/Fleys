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
		<main class="container-fluid mb-3 news"><!--début du main-->
			<div class="container">
				<p class=" text-center" style="font-size: 3em; color: black; text-shadow:  2px -1px white;">Dernière actualité</p>
				<div class="row">
					<?php 

					include('assets/php/inc_bdd.php');

					$sql = "SELECT * FROM news ORDER BY date DESC limit 1";

					$requete = $db -> query($sql);
					$result = $requete -> fetch()
					
						
					?>
					<div class="col-12 mb-4 first-news">
						<div class="card">
							<a href="description_actualite.php?id=<?= $result['id']?>"><img class="card-img-top first-img-news" src="<?= $result['picture']?>" alt="Card image cap"></a>
							<div class="middle">
								<p class="middle-first-texte text-center"><?= $result['title']?></p>
							</div>
							<div class="card-footer d-flex justify-content-between">
	     						<small class="text-muted"><?= (date("d-m-Y", strtotime($result['date'])) )?></small>
	     						<a href="description_actualite.php?id=<?= $result['id']?>" class="lien-actu">En lire plus</a>
	    					</div>
    					</div>
					</div>
				</div>	
			</div>	
			<hr class="mb-4">
			<p class=" text-center" style="font-size: 3em; color: black; text-shadow:  2px -1px white;">Autres actualités</p>
		<div class="container">
			<div class="row justify-content-center">			
				<?php 
					//gestion de la page en GET

					$debut = 0;



					
					if( isset($_GET['page']) && !empty($_GET['page']))

					{

						$page = $_GET['page'];

						$debut = ($page-1)*6;

					}

					//récupération du nombre d'articles pour définir le nombre de pages

					$query = $db -> query("SELECT COUNT(*) as nb_news FROM news");



					$result = $query -> fetch();



					$nb_articles = $result['nb_news'];

					$articles_par_page = 6;

					$nb_pages = ceil($nb_articles / $articles_par_page);


					$sql = "SELECT * FROM news WHERE id < (SELECT max(id) FROM news n) ORDER BY date DESC, id DESC LIMIT :debut, 6";
						$query = $db -> prepare($sql);
						$query -> bindValue(":debut", $debut, PDO::PARAM_INT);
						$query -> execute();
						while ($result = $query -> fetch()) { 
					?>	

					<div class="card first-news col-10 col-sm-3  mb-5 px-0 mx-4 ">
						<a href="description_actualite.php?id=<?= $result['id']?>"><img class="card-img-top all-img-news" src="<?= $result['picture']?>" alt="Card image cap"></a>
						<div class="middle-all">
							<p class="middle-texte"><?= $result['title']?></p>
						</div>
						<div class="card-body bg-white">
							<p class="card-text">
								<?php 
									$description = substr($result['content'], 0, 70);
									$last_space = strrpos($description, " ");
									$description = substr($description, 0, $last_space)."...";

								 ?>
								 <?= $description ?>	
							</p>
						</div>
						<div class="card-footer d-flex justify-content-between">
     						<small class="text-muted"><?= (date("d-m-Y", strtotime($result['date'])) )?></small>
     						<a href="" class="lien-actu">En lire plus</a>
    					</div>
					</div>
					<?php  
					}
					?>
				</div>
			</div>
			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-center">
			    <?php
					for ($i=1; $i <= $nb_pages ; $i++) { 
						?>
							<!-- <a href="index.php?page=<?= $i ?>"><?= $i ?></a> -->
							<li class="page-item"><a class="page-link" href="actualité.php?page=<?= $i ?>"><?= $i ?></a></li>
						<?php
					}
				?>
			  </ul>
			</nav>
		</main><!--fin du main-->
		<section class="container-fluid px-0 link"><!--début langue et réseaux sociaux-->
			<nav class="navbar navbar-expand-lg bg-nav-2 ">
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