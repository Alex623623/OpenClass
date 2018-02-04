<!DOCTYPE html>
<html>
<head>
  <title>Welcome to my Minichat!</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="titre">Minichat: TP OpenClassromm</h1>
<hr>
  <?php
  try {
    $minichatbdd = new PDO('mysql:host=localhost;dbname=testing', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
  }

  ?>


  <form action="minichat_post.php" method="POST">

    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo">

    <label for="message">Message</label>
    <input type="text" name="message" id="message">

    <input type="submit" name="submit" id="envoyer">
    <hr>
  </form>

<div class="chat">
  <?php
  $reponse = $minichatbdd->query('SELECT pseudo, message, date_message FROM tablemessages ORDER BY id DESC LIMIT 0, 10');
  while($donnees = $reponse->fetch()){
    echo '<p><strong>' . '<span style="font-size: 10px">' . $donnees['date_message'] . '</span>' . ' - ' . htmlspecialchars($donnees['pseudo']) . ': </strong>' . htmlspecialchars($donnees['message']) . '</p>';
  }

  $reponse->closeCursor();
  ?>
</div>


</body>
</html>
