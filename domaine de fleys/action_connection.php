<?php 

	include('assets/php/inc_bdd.php');
	$mail = strip_tags($_POST['mail']);
	$mot_de_passe = strip_tags(md5($_POST['mot_de_passe']));



	if (!empty($mail) AND !empty($mot_de_passe)){
		$sql = "SELECT u.id, u.nom, u.motdepasse, r.niveau_autorisation FROM user AS u INNER JOIN rank AS r ON r.id = u.id_rang WHERE email = :mail";
		$requete = $db->prepare($sql);
		$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
		$requete->execute();
		$result = $requete -> fetch();
			if (!empty($result)) {
				$mot_de_passe_db = $result['motdepasse'];
				$id = $result['id'];
				$nom = $result['nom'];
				$niveau_autorisation = $result['niveau_autorisation'];

				if ($mot_de_passe = $mot_de_passe_db) {
					session_start();
					$_SESSION['id'] = $id;
					$_SESSION['nom'] = $nom;
					$_SESSION['niveau_autorisation'] = $niveau_autorisation;
					echo "Vous êtes connecté !";?><a href="page_d'accueil_DDF.php">Retour accueil</a>
					<?php  
				}else{
					echo "Mot de passe incorrect";
				}
			}else{
				echo "Adresse e-mail inexistante";
			}
	}else{
		echo "Il manque quelque chose";
	}

	
 ?>