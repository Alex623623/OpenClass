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

	$req0=$bdd->query('SELECT pseudo FROM exo_minichat ORDER BY date_commentaire DESC LIMIT 1');
	$lastpsd=$req0->fetch();
?>

<p>- Mini chat -</p>

	<form action="TPminichat2.php" method="POST">
		<p><label>Pseudo : <input type="text" name="psd" placeholder=<?php echo $lastpsd['pseudo'] ?>></label></p>
		<p><label>Commentaire :</p><p><textarea rows=5 cols=50 type="text" name="comm" placeholder="Raconte ta vie"></textarea></label></p>
		<p><input type="submit"></p>
	</form>

<?php

	$req=$bdd->query('SELECT pseudo,commentaire,DATE_FORMAT(date_commentaire,"%d/%m/%Y %Hh%i\'%s\'\'") AS date_commentaire_fr FROM exo_minichat ORDER BY date_commentaire DESC LIMIT 10');
	while($donnees=$req->fetch())
		{
			echo '<p>['.htmlspecialchars($donnees['date_commentaire_fr']).'] <strong>'.htmlspecialchars($donnees['pseudo']).'</strong> : '.nl2br(htmlspecialchars($donnees['commentaire'])).'</p>';
		}
	$req->closeCursor();

?>
	
</html>