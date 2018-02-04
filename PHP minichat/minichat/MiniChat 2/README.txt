////////////////////////////////////////////////////////////////////////
// Aide à la mise en place de l'activité - semaine 3
////////////////////////////////////////////////////////////////////////
// Lutie
////////////////////////////////////////////////////////////////////////

Bonjour à vous !

Nombreux serons ceux qui n'auront pas besoin de ce petit fichier afin
de procéder à la correction... Pour les autres, je me permet de vous aider.

Il m'ai arrivé par le passé d'avoir de vilaines surprises en pensant que
certaines choses étaient acquises pour tous, alors dans le doute je me
permet de rédiger cette aide pour le cas ou. Car c'est sur OpenClassRoom
que ces (quelques) mauvaises surprises ont eu lieu :p

Merci par avance pour l'attention que vous porterez à mon travail !
Puissiez vous réussir le votre :D

Bonne correction à vous !

////////////////////////////////////////////////////////////////////////

Le travail a été réalisé dans l'environnement conseillé durant le cours.
Base de donnée : Test, User : root, MdP : Aucun.

De plus il a été fait usage de wamp et phpMyAdmin.

Afin de mettre en place l'activité sur votre environnement, voici comment procéder :
- Copiez/collez le dossier "MiniChat" dans le dossier "www" de votre installation wamp.
- Insérez la table "chat.sql" dans la base de donnée "test" depuis phpMyAdmin.

Vous pouvez alors accéder au mini-chat via l'adresse suivante : 
http://localhost/minichat/index.php

////////////////////////////////////////////////////////////////////////

J'ai pensé à : 
- Garder le pseudo de l'auteur après l'envoie d'un message.
- Sécuriser les informations envoyées (en retirant les mise en forme au format html, etc).
- Modifier la présentation date/heure.

Mais aussi à : 
- Ne pas enregistrer de message invalide (pseudo ou message manquant et/ou vide).

En plus j'ai : 
- Permis la possibilité de changer le nombre de messages affichés... (que j'ai aussi sécurisé, au cas ou).

J'espère que je n'ai rien oublié d'important :) !