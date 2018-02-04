<!DOCTYPE html> 

<html>

    <head>
        <meta charset="utf-8" />
        <title>MiniChat</title>
		<link rel="stylesheet" href="css/chat_style.css" />
    </head>

    <body>
    	<header>
	    	<h1>~ MiniChat ~</h1>
	   		</br>
    	</header>

	   		<!-- Formulaire -->
	    <div id="formulaire">
	    	<h2>Votre Message</h2>
	   		<form method="POST" action="post/minichat_post.php">

	   		<!-- On cherche si un pseudo a été transmis depuis la page d'enregistrement des commentaires -->
	   		<?php
		   		if(isset($_GET['pseudo'])) {
		   			?>
		   			<label>Pseudo</label> : <input type="text" id="pseudo" name="pseudo" value =<?php echo strip_tags($_GET['pseudo']); ?> />
		   			<?php
		   		} else {
		   			?>
		   			<label>Pseudo</label> : <input type="text" id="pseudo" name="pseudo"/>
		   			<?php
		   		}
	   		?>

	   		<!-- Formulaire des commentaires -->
	   		</br>
	   		<label>Message</label> : <textarea id="message" name="message" placeholder="Veuillez écrire votre commentaire ici ;) !"></textarea>
	   		</br>
	   		<input type="submit"/>
	   		</form>
	    </div>

	    <div id="commentaires">
	   		<!-- Afficher les commentaires -->
	    	<?php
	   			// On se connecte à la BDD
				try { $bdd = new PDO('mysql:host=localhost;dbname=testing;charset=utf8', 'root', ''); } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }

	   			// On récupère le nombre de message postés
				$reponse = $bdd->query('SELECT COUNT(ID) AS total_message FROM chat');
				$donnees = $reponse->fetch();
				$total_message = $donnees['total_message'];
				$reponse->closeCursor();

	    		// Combien de message on va afficher ?
	    		if(isset($_GET['nb_message'])) { $nb_message = (int) $_GET['nb_message']; } else { $nb_message = 10; }
				if($nb_message>50) $nb_message = 50;
				if($nb_message<5) $nb_message = 5;
	    		echo '<h2>Les ' . $nb_message . ' derniers messages (sur ' . $total_message . ')</h2>';
			?>
	    		<span class="i2"><p>(Combien de messages voulez vous afficher : <a href="index.php?nb_message=5">5</a>, <a href="index.php?nb_message=10">10</a>, <a href="index.php?nb_message=20">20</a>, <a href="index.php?nb_message=50">50</a>)</p></span>

	    	<?php
	   			// On récupère les 10 derniers commentaires postés
				$reponse = $bdd->query('SELECT ID, pseudo, message, DATE_FORMAT(quand, \'%d/%m/%Y (%Hh %imn %ss)\') AS quand_fr FROM chat ORDER BY ID DESC LIMIT '.$nb_message.'');

				// On va afficher les commentaires récupérés
				while ($donnees = $reponse->fetch()) 
				{
					echo '<p><strong>' . strip_tags($donnees['pseudo']) . '</strong> a dit : <span class="i1">"' . strip_tags($donnees['message']) . '"</span>, le ' . $donnees['quand_fr'] . '.</p>';
				}
			?>
	    </div>

   	  <!-- Quelques infos en fin de page -->
	    <footer>
	    	<h3>Créé par Lutie</h3>
		    	<div id="container">
				<a id="hide" href="#show" class="button">Cacher</a><a id="show" href="#container" class="button">Ce à quoi j'ai penser (cliquez pour afficher)</a>
				<p id="content">J'ai pensé à : Garder le pseudo de l'auteur après l'envoie d'un message, sécuriser les informations envoyées (en retirant les mise en forme au format html, etc), modifier la présentation date/heure.
				</br>Mais aussi à : Ne pas enregistrer de message invalide (pseudo ou message manquant et/ou vide).
				</br>En plus j'ai : Permis la possibilité de changer le nombre de messages affichés... (que j'ai aussi sécurisé, au cas ou).
				</br>J'espère que je n'ai rien oublié d'important :) !</p>
				</div>
	    </footer>

    </body>

</html>