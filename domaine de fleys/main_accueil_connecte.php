
<main class="container-fluid"><!--début du main-->
		<section class="bg-transp mx-auto">
			<img class="img-fluid mx-auto d-block my-4 " src="assets/images/logo2.png" alt="logo">
		</section>
		<a class="d-none d-lg-block" href="nos_vins.php#chablis"><button type="button" class="btn chablis ">
			<img class="img-fluid " src="assets/images/chablis.png">
		</button>
		<a class="d-none d-lg-block" href="nos_vins.php#premier_cru"><button type="button" class="btn chabliscru">
			<img class="img-fluid " src="assets/images/chabliscru.png">
		</button></a>
		<div class="texte d-none d-lg-block">
			<h1>Bienvenue au Domaine du Château de Fleys</h1><i class="fas fa-caret-right text-light arrow"></i>
			<h2>La famille Philippon, vigneron depuis 4 générations, vous acceuil au caveau pour une découverte du vignoble et des vins de Chablis.</h2>
		</div>
		<div class="d-none d-sm-block">
			<img class="bouteilles1 img-fluid " src="assets/images/chablis3.png">
		</div>
		<div class="d-none d-sm-block">
			<img class="bouteilles2 img-fluid" src="assets/images/premier_cru3.png">
		</div>
		<div class="d-none d-xl-block">
			<img class="bouteilles3 img-fluid" src="assets/images/premier_cru1.png">
		</div>
		<div>
			<img class="logo3" src="assets/images/logo.png">
		</div>
<?php
	if (isset($_SESSION) AND !empty($_SESSION['niveau_autorisation']) AND $_SESSION['niveau_autorisation'] == 99){
?>

		<div class="d-none d-sm-block admin ml-auto p-3">
			<a href="inscription.php"><button  class="btn btn-outline-warning mb-4 btn-lg">Ajouter un compte administrateur</button></a><br>
			<a href="deconnexion.php"><button  class="btn btn-outline-danger btn-lg ">Se déconnecter</button></a>
		</div>
<?php  	
	}elseif (isset($_SESSION) AND !empty($_SESSION['niveau_autorisation'])) {
?>
		<div class="d-none d-sm-block admin ml-auto p-3">
			<a href="deconnexion.php">Se déconnecter</a>
		</div>
<?php
	}
?>
		
</main><!--fin du main-->