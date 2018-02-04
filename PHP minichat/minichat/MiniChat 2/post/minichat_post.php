<?php
   			// On se connecte à la BDD
			try { $bdd = new PDO('mysql:host=localhost;dbname=testing;charset=utf8', 'root', ''); } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }

			// On vérifis qu'on a bien les informations demandée avant tout, sinon on renvoie à la page précédente :
				if((!$_POST['pseudo'])OR(!$_POST['message'])) goto a;

   			// On construit la requête & envoie la requête
			$req = $bdd->prepare('INSERT INTO chat (pseudo,message,quand) VALUES(:pseudo, :message, NOW())');

				if((strip_tags($_POST['pseudo'])=="")OR(strip_tags($_POST['message'])=="")) goto a;

			$req->execute(array(
				'pseudo' => strip_tags($_POST['pseudo']),
				'message' => strip_tags($_POST['message']),
				));

			// Puis rediriger vers index.php comme ceci :
			// Au passage on vérifis si il y a un pseudo ou non afin de le conserver ou pas (tout en pensant à retirer les tags si il y en a) :
			a :
				if($_POST['pseudo']) { header('Location: ../index.php?pseudo=' . strip_tags($_POST['pseudo']) . ''); } else { header('Location: ../index.php'); }
?>