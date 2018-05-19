<?php
include('assets/php/inc_bdd.php');
$nom = strip_tags($_POST['nom']);
$mail = strip_tags($_POST['mail']);
$mail2 = strip_tags($_POST['mail2']);
$mot_de_passe = strip_tags(md5($_POST['mot_de_passe']));
$mot_de_passe2 = strip_tags(md5($_POST['mot_de_passe2']));
if (empty($_POST['nom']) 
	OR empty($_POST['mail'])
	OR empty($_POST['mail2']) 
	OR empty($_POST['mot_de_passe'])
	OR empty($_POST['mot_de_passe2'])  
	OR !$_POST['nom']  
	OR !$_POST['mail']
	OR !$_POST['mail2']
	OR !$_POST['mot_de_passe']
	OR !$_POST['mot_de_passe2']){
	echo "Remplis tout les champs avant d'envoyer";
}else{
	if ($mail !== $mail2){
		echo "Vos 2 emails doivent être identiques";
	}else{
		$reqmail = $db->prepare("SELECT * FROM user WHERE email = :mail");
		$reqmail->bindValue(':mail', $mail, PDO::PARAM_STR);
		$reqmail->execute();
		$mailexist = $reqmail->rowCount();
		if ($mailexist == 0){
			if ($mot_de_passe !== $mot_de_passe2) {
				echo "Vos 2 mots de passe doivent être identiques";
			}else{
				$sql = "SELECT id FROM rank WHERE id LIKE 2";
				$requete = $db -> query($sql);
				$result = $requete -> fetch();
				$id_rang = $result['id'];

				$sql = 'INSERT INTO user(nom, email, motdepasse, id_rang) 
						VALUES(:nom, :mail, :mot_de_passe, :id_rang)';
				$requete = $db->prepare($sql);
				$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
				$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
				$requete->bindValue(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);
				$requete->bindValue(':id_rang', $id_rang, PDO::PARAM_INT);
				$requete->execute();
				echo "Inscription réussie";
			}		
		}else{
			echo "Cet e-mail est déjà pris";
		}
	}
}
?>