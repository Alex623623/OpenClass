

<?php 

	session_start();
	$_SESSION["pseudo"]=$_POST['pseudo'];


//connexion a la base de donnés et insertion du messages 
try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=testing;charset=utf8', 'root', '');

	$req = $bdd->prepare('INSERT INTO minichat(pseudo,commentaire) VALUES (?, ?)');

	$req->execute(array($_POST['pseudo'], $_POST['commentaire']));
echo "toyo";
}

catch(Exception $e)
	{
    die('Erreur : '.$e->getMessage());
}

	
	

header('Location: view.php');



?>
