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
	<body class="bg-wood">
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
		<main class="container-fluid"><!--début du main-->
				<div class="row">
					<div class="col-2 wine_link">
						<p class="py-2 mb-0 text-center">Nos Chablis</p>
					<?php
						include('assets/php/inc_bdd.php');
						$sql = "SELECT * FROM vin";
						$requete = $db -> query($sql);

						while ($result = $requete -> fetch()) { ?>
						<div class="pt-2">
							<img class="wine_glass" <?= ($result['id']==$_GET['id']) ? "style= 'transform: rotate(45deg);'" : ""; ?> src="<?= $result['lien_img']?>">
							<a href="description_vins.php?id=<?= $result['id'] ?>"><?= $result['nom_court'] ?></a>
						</div>


						<?php
							if ($result['id'] == 3) { ?>
								<p class="py-2 mb-0 mt-3 text-center">Nos Chablis Premier Cru</p>
						<?php
							}
						} 
						?>
					</div>
					<?php
					$sql = "SELECT * FROM vin AS v
							INNER JOIN caracteristique AS c
							ON v.id_caract = c.id
							WHERE v.id = :id";
					$requete = $db -> prepare($sql);
					$requete -> bindValue(':id', $_GET['id'], PDO::PARAM_INT);
					$requete -> execute();
					$result = $requete -> fetch();

					if (isset($_GET['id']) AND !empty($_GET['id'])) {
						$nom = strip_tags($result['nom']);
					?>

					<div class=" col-2 descr text-light">
						<p><i class="fab fa-vine"></i><br><?= $result['description']?></p>
						<p><i class="fas fa-tint"></i><br><?= $result['vinification']?></p>
						<p><i class="fab fa-untappd"></i><br><?= $result['degustation']?></p>
					</div>
					<div class=" col-3 ">
						<img class="img-fluid btls" src="<?= $result['lien_img']?>" alt="Chablis 2016">
					</div>
					<div class=" offset-1 col-2 descr text-light">
						<h2 class="text-center my-5 titledescr pb-4"><?= $nom ?></h2>
						<p class="text-center mt-4"><span class="pr-3"><i class="fas fa-dna"></i></span><?= $result['cepage']?></p>
						<p  class="text-center"><span class="pr-3"><i class="fas fa-compass"></i></span><?= $result['exposition']?></p>
						<p  class="text-center"><span class="pr-3"><i class="fas fa-birthday-cake"></i></span><?= $result['age_des_vignes']?></p>
						<p  class="text-center"><span class="pr-3"><i class="fas fa-expand"></i></span><?= $result['superficie']?></p>
						<p  class="text-center"><span class="pr-3"><i class="fas fa-chart-line"></i></span><?= $result['rendement']?></p>
						<p  class="text-center"><span class="pr-3"><i class="fas fa-sort-amount-up"></i></span><?= $result['production']?></p>
						<p  class="text-center"><span class="pr-3"><i class="fab fa-envira"></i></span><?= $result['vendanges']?></p>

					 	<?php	
					 	}else{
					 		echo "Il n'y a pas d'id";
					 	}
					?>
					

					</div>
				</div>
		</main><!--fin du main-->
		<section class="container-fluid px-0 link"><!--début langue et réseaux sociaux-->
			<nav class="navbar navbar-expand bg-nav-2  nav-bottom"">
				<div>
					<img src="assets/images/fr-FR.png" alt="Français">
					<i class="fas fa-caret-right text-light"></i>
					<img src="assets/images/en-GB.png" alt="English">
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
		<footer class="container-fluid footer-accueil"><!--début du footer-->
			<p class="mb-0 text-light text-center pb-2">L'abus d’alcool est dangereux pour la santé.</p>
		</footer><!--fin du footer-->
	</body>
</html>