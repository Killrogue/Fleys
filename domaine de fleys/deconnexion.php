<?php

	session_start();

	if(isset($_SESSION))
	{
		session_unset();
	}
	else
	{
		echo "<p> Vous cherchez à vous déconnecter sans vous connecter, c'est étonnant !</p>";
	}

	session_destroy();
	header("Location: http://localhost/domaine%20de%20fleys/page_d'accueil_DDF.php");
	//ATTENTION ! changer le nom du fichier de la page d'accueil selon le vôtre !

?>