-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Octobre 2017 à 00:15
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `quand` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`ID`, `pseudo`, `message`, `quand`) VALUES
(26, 'Max', 'Ah ? Je ne sais pas si je dois être rassuré du coup...', '2017-10-24 01:10:25'),
(25, 'Lutie', 'Mais non Max tu va voir, j\'ai plein d\'autres personnalités à convier à l\'exercice !', '2017-10-24 01:10:02'),
(24, 'Max', 'Espérons que je ne serais pas le seul...', '2017-10-24 01:09:22'),
(23, 'Max', 'Moi c\'est Max, le personnage fictif qui raconte des trucs anecdotiques pour remplir le vide de ce minichat !', '2017-10-24 01:09:12'),
(22, 'Max', 'Yo ! (Je fais genre il y a un autre utilisateur !) ça roule les amis ?', '2017-10-24 01:08:25'),
(21, 'Lutie', 'Le chat garde mon pseudo, c\'est pratique :) !', '2017-10-24 01:07:53'),
(20, 'Lutie', 'Pour le moment ça marche bien !', '2017-10-24 01:07:44'),
(19, 'Lutie', 'Eh bien voici le premier commentaire ! Je vais en faire 20 d\'ailleurs... Histoire de tester l\'affichage des messages qui doit se limiter à 20 !', '2017-10-24 01:07:31'),
(27, 'Tantine', 'QUI VEUX DES TARTIIIIIIINES ???', '2017-10-24 01:10:38'),
(28, 'Max', 'Oh la vache, c\'est une de tes personnalités celle ci ? ça fait flipper !', '2017-10-24 01:10:56'),
(29, 'Lutie', 'J\'en suis pas très fier...', '2017-10-24 01:11:03'),
(30, 'Tantine', 'Allez, on ne fait pas sa petite nature, une tartine ça ne fait de mal à personne !', '2017-10-24 01:11:54'),
(31, 'Marco', 'On p@rle de b0uff3 ici ?', '2017-10-24 01:13:04'),
(32, 'Marco', 'J3 m3 f3r@15 b13n un 3nc@5 !', '2017-10-24 01:14:54'),
(33, 'Max', 'mais passe ton chemin toi et ton écriture diabolique !', '2017-10-24 01:15:23'),
(34, 'Lutie', 'Un peu de tolérance voyons...', '2017-10-24 01:15:52'),
(35, 'Tantine', 'Maxou on ne brime pas ses camarades, tu vas être privé de tartines !!!', '2017-10-24 01:16:15'),
(36, 'Lutie', 'Bon plus que 3 commentaires et c\'est bon... c\'est long 20 messages en fait !', '2017-10-24 01:16:45'),
(37, 'Max', 'je ne te le fais pas dire...', '2017-10-24 01:16:51'),
(38, 'Marco', '@l0r5 p@5 d3 b0uff3 f1n@l3m3nt T_T ?', '2017-10-24 01:17:25'),
(39, 'Tantine', 'Bien sûr que si, ça arrive !', '2017-10-24 01:17:36'),
(40, 'Lutie', 'Voilà, bon, il est temps de terminer sur une doute positive : Tout ceci est du pipeau, je n\'ai évidemment pas de multiple personnalité :D', '2017-10-24 01:18:13'),
(41, 'Lutie', 'Encore un dernier test pour la route !', '2017-10-24 02:14:04'),
(42, 'Lutie', 'Et si je tente d\'écrire du html là dedans... Ceci est un test  !', '2017-10-24 02:14:33'),
(43, 'Lutie', 'Ah ah ! La balise a été supprimée :)', '2017-10-24 02:14:43');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
