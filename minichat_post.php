<?php

// démarre la session
session_start();
$_SESSION['pseudo']=$_POST['pseudo'];
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testing;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>