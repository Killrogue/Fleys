<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles_DDF.css">
		<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
		<script defer src="assets/js/fontawesome-all.js"></script>
	</head>
	<body >
		<header class="container-fluid  px-0"><!--début du header-->
			<nav class="navbar navbar-expand-lg bg-nav fixed-top">
			 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   					<span class="navbar-toggler-icon"></span>
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
				<div class="row">
					<?php 

					include('assets/php/inc_bdd.php');

					$sql = "SELECT * FROM news ORDER BY date DESC limit 1";

					$requete = $db -> query($sql);
					$result = $requete -> fetch()
					
						
					?>
					<div class="col-12 mb-4 first-news">
						<div class="card">
							<a href="description_actualite.php?id=<?= $result['id']?>"><img class="card-img-top first-img-news" src="assets/images/firstnews.jpg" alt="Card image cap"></a>
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
		<div class="container">
			<div class="row justify-content-center">			
						<?php 
							$sql = "SELECT * FROM news WHERE date > 1 ORDER BY date DESC";

								$requete = $db -> query($sql);
								while ($result = $requete -> fetch()) { 
						?>	
						<div class="card first-news col-3 mb-5 px-0 mx-4 ">
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
		</main><!--fin du main-->
		<section class="container-fluid px-0 link"><!--début langue et réseaux sociaux-->
			<nav class="navbar navbar-expand-lg bg-nav-2 ">
				<div>
					<img src="assets/images/fr-FR.png" alt="Français">
					<i class="fas fa-caret-right text-light"></i>
					<img src="assets/images/en-GB.png" alt="English">
				</div>
			  	<div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item mr-2">
				        <a class="nav-link " href="https://fr-fr.facebook.com/chateaudefleys.chablis.9" title="Rejoindre notre page Facebook"><i class="fab fa-facebook-f"></i>&nbsp;FACEBOOK</a>
				      </li>
				      <li class="nav-item mx-2">
				        <a class="nav-link" href="https://twitter.com/chateaudefleys" title="Rejoindre notre compte Twitter"><i class="fab fa-twitter"></i>&nbsp;TWITTER</a>
				      </li>
				      <li class="nav-item ml-2">
				        <a class="nav-link" href="https://www.instagram.com/chateau_de_fleys/" title="Rejoindre notre page Instagram"><i class="fab fa-instagram"></i>&nbsp;INSTAGRAM</a>
				      </li>
				    </ul>
			  	</div>
			</nav>
		</section><!--fin langue et réseaux sociaux-->
		<footer class="container-fluid"><!--début du footer-->
			<p class="mb-0 text-center pb-2 text-light">L'abus d’alcool est dangereux pour la santé.</p>
		</footer><!--fin du footer-->
	</body>
</html>