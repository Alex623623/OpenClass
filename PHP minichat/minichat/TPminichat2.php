<!DOCTYPE html>
<html>

<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=testing;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		die('Erreur: '.$e->getMessage());
	}

	$req=$bdd->prepare('INSERT INTO exo_minichat (pseudo,commentaire,date_commentaire) VALUES (:pseudo,:commentaire,NOW())');
	if(isset($_POST['psd'])and $_POST['psd']!="")
	{
		$req->execute(array('pseudo'=>htmlspecialchars($_POST['psd']),'commentaire'=>htmlspecialchars($_POST['comm'])));
	}

	$req->closeCursor();
	
	header('Location:TPminichat.php');
?>
	
</html>