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
	<body class="bg-vigne5">
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
		<main class="container-fluid formulaire"><!--début du main-->
			<div class="row ">
				<div class="col-md-6 col-12 offset-lg-1">
					<form class="needs-validation bg-black text-light px-5 py-3 ">
						<div class="row">
							<div class="col-md-12  mb-3">
							<p class="text-light text-center text-contact">
							Vous souhaitez un renseignement ?<br>
							Laissez-nous un message via ce formulaire de contact, nous y répondrons dans les plus brefs délais.
							</p>
							</div>
							<div class="col-sm-6 col-12 mb-3">
								<label for="validationCustom01">Prénom : *</label>
								<input type="text" class="form-control w-75" id="validationCustom01" required>
							</div>
							<div class="col-sm-6 col-12 mb-3">
								<label for="validationCustom02">Nom : *</label>
								<input type="text" class="form-control w-75" id="validationCustom02" required>
							</div>
							<div class="col-sm-6 col-12 mb-3">
								<label for="validationCustom01">Email : *</label>
								<input type="email" class="form-control w-75" id="colFormLabelSm" required>
							</div>
							<div class="col-sm-6 col-12 mb-3">
								<label for="validationCustom03">Téléphone : *</label>
								<input type="text" class="form-control w-75" id="validationCustom03"  required>
								<div class="valid-feedback">
								</div>
							</div>
							<div class="col-md-12 mb-3">
								<label for="validationCustom04">Objet de votre message : *</label>
								<input type="text" class="form-control " id="validationCustom04"  required>
								<div class="invalid-feedback">
								</div>
							</div>
							<div class="col-md-12 mb-3">
								<label for="exampleFormControlTextarea1">Votre message : *</label>
    							<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
							</div>
							<div class="col-md-3 mb-3">
								<button class="btn btn-gold " type="submit">Valider</button>
							</div>
						</div>	
					</form>
				</div>
				<div class="col-md-6 col-lg-4 col-12 pt-3 pt-md-0">
					<div class="card">
						<iframe class="map card-img-top" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.2384550681923!2d3.8540100160240183!3d47.815596379199036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee6927a9d9b571%3A0x5f6ac1fa6cac4a93!2sDomaine+du+Ch%C3%A2teau+de+Fleys+EARL!5e0!3m2!1sfr!2sfr!4v1523455217692" frameborder="0" style="border:0 " allowfullscreen></iframe>
					</div>
					<div class="bg-black text-light p-2 mt-3">
						<h2 class="text-center" >Nos coordonées</h2>
						<p><span class="pr-2"><i class="fas fa-rotate-90 fa-phone"></i></span>+ 33 3-86-42-47-70</p>
						<p><span class="pr-2"><i class="fas fa-home"></i></span>2 Rue des Fourneaux, 89800 Fleys</p>
						<p><span class="pr-2"><i class="far fa-clock"></i></span>Nos horaires de saison : </p>
						<p class="pr-2 text-center"> mardi au vendredi : 11h - 18h30 </p>
						<p class="pr-2 text-center"> samedi : 11h - 19h30 </p>

					</div>
				</div>
			</div>
		</main><!--fin du main-->
		<section class="container-fluid px-0 link pt-5"><!--début langue et réseaux sociaux-->
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
		</section><!--fin langue et réseaux sociaux-->
		<footer class="container-fluid"><!--début du footer-->
			<p class="mb-0 text-light text-center pb-2">L'abus d’alcool est dangereux pour la santé.</p>
		</footer><!--fin du footer-->
	</body>
</html>