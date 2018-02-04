<?php

session_start();
if (!isset($_SESSION['pseudo']))
{
    $_SESSION['pseudo']= "";
}

//le try catch sert à tester la connexion à la base de données/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testing', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// on prépare une requête pour récupérer les nouveaux messages//

$req = $bdd->prepare('SELECT * FROM minichat');
$req->execute();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <body>
<?php
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $req->fetch())
{
	// print_r($donnees);
    echo '<p>' . date_format(date_create($donnees['date_ajout']), 'd/m/Y H:i:s') . ' : ' . htmlspecialchars($donnees['pseudo']) . ' : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$req->closeCursor();

?>

    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php echo $_SESSION['pseudo']; ?>" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
    </p>
    </form>
    </body>
</html>