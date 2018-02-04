<?php
  
  try {
    $minichatbdd = new PDO('mysql:host=localhost;dbname=testing;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
  }

  $req = $minichatbdd->prepare('INSERT INTO tablemessages (pseudo, message) VALUES (?, ?)');
  $req->execute(array($_POST['pseudo'], $_POST['message']));


  header('Location: minichat.php');
   //exit;
?>
