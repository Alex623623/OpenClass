<!DOCTYPE html>
<html>
<head>
	
	<title>MINICHAT</title>
	<!--Style -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<?php 
	//Affichage de psuedo
	session_start();
	$currentPseudo=null;
	$currentPseudo = $_SESSION['pseudo'];
	//var_dump($currentPseudo);


?>

<form action="minichat.php" method="POST">

	<label for="pseudo">Pseudo</label><br>
	<input type="text" name="pseudo" id="pseudo" value="<?php echo $currentPseudo?>" ><br><br>
	<label for="Commentaire">Commentaire </label> <br>
	<textarea type="text" name="commentaire" rows="5" cols="50" ></textarea> <br><br>
	<input type="submit" name="valider" value="OK" >

</form>

<?php 

//Connexion a la base de donnés et recuperations 10 derniers messages
try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=testing;charset=utf8', 'root', '');

	}

	catch(Exception $e)
	{
    die('Erreur : '.$e->getMessage());
	}
	
	$reponse = $bdd->query('SELECT `date`, `pseudo`, `commentaire` FROM minichat ORDER BY ID DESC LIMIT 0, 10');

	//Affichage de chaque message et date en format française
	while ($donnees = $reponse->fetch()) {
		$sourceFormat = 'Y-m-d H:i:s';
		$desiredFormat = 'd/M/Y  H:i';
		$dateStr = $donnees['date'];
		$dateObj = DateTime::createFromFormat($sourceFormat, $dateStr);

		echo $dateObj->format($desiredFormat) .'<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['commentaire']) . '</p>'.'<br>';
	}

	$reponse->closeCursor();

 ?>


</body>
</html>