-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Juin 2017 à 03:38
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `deeveadee_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id` int(10) UNSIGNED NOT NULL,
  `numA` int(10) UNSIGNED NOT NULL,
  `nomA` varchar(255) NOT NULL,
  `prenomA` varchar(255) NOT NULL,
  `ageA` smallint(5) UNSIGNED NOT NULL,
  `sexeA` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id`, `numA`, `nomA`, `prenomA`, `ageA`, `sexeA`) VALUES
(1, 0, 'test', 'Xavier', 24, 0);

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

CREATE TABLE `casting` (
  `id` int(10) UNSIGNED NOT NULL,
  `dvdC` int(10) UNSIGNED NOT NULL,
  `acteurC` int(10) UNSIGNED NOT NULL,
  `roleC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `casting`
--

INSERT INTO `casting` (`id`, `dvdC`, `acteurC`, `roleC`) VALUES
(1, 1, 1, 'Principal');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dvd`
--

CREATE TABLE `dvd` (
  `id` int(10) UNSIGNED NOT NULL,
  `numD` int(10) UNSIGNED NOT NULL,
  `titreD` varchar(255) NOT NULL,
  `auteurD` varchar(255) NOT NULL,
  `anneeD` year(4) NOT NULL,
  `categorieD` varchar(255) NOT NULL,
  `dateAchatD` int(10) UNSIGNED NOT NULL,
  `nombreD` int(10) UNSIGNED NOT NULL,
  `societeD` int(10) UNSIGNED NOT NULL,
  `afficheD` varchar(255) DEFAULT NULL,
  `descriptionD` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dvd`
--

INSERT INTO `dvd` (`id`, `numD`, `titreD`, `auteurD`, `anneeD`, `categorieD`, `dateAchatD`, `nombreD`, `societeD`, `afficheD`, `descriptionD`) VALUES
(1, 0, 'Spider-Man: Homecoming', 'Jon Watts ', 2017, 'Action', 1496695960, 10, 1, 'homecoming.jpg', 'Après ses spectaculaires débuts dans Captain America : Civil War, le jeune Peter Parker découvre peu à peu sa nouvelle identité, celle de Spider-Man, le super-héros lanceur de toile. Galvanisé par son expérience avec les Avengers, Peter rentre chez lui auprès de sa tante May, sous l’œil attentif de son nouveau mentor, Tony Stark. Il s’efforce de reprendre sa vie d’avant, mais au fond de lui, Peter rêve de se prouver qu’il est plus que le sympathique super héros du quartier. L’apparition d’un nouvel ennemi, le Vautour, va mettre en danger tout ce qui compte pour lui... '),
(2, 0, 'Logan', 'James Mangold', 2017, 'Action', 1496695960, 10, 1, 'logan.jpg', 'Dans un futur proche, un certain Logan, épuisé de fatigue, s’occupe d’un Professeur X souffrant, dans un lieu gardé secret à la frontière Mexicaine. Mais les tentatives de Logan pour se retrancher du monde et rompre avec son passé vont s’épuiser lorsqu’une jeune mutante traquée par de sombres individus va se retrouver soudainement face à lui. '),
(3, 0, 'Interstellar', 'Christopher Nolan', 2014, 'Science fiction', 1496695960, 10, 1, 'interstellar.jpg', 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire. '),
(4, 0, 'Rogue One: A Star Wars Story', 'Gareth Edwards (II)', 2016, 'Science fiction', 1496695960, 10, 1, 'rogueone.jpg', 'Situé entre les épisodes III et IV de la saga Star Wars, le film nous entraîne aux côtés d’individus ordinaires qui, pour rester fidèles à leurs valeurs, vont tenter l’impossible au péril de leur vie. Ils n’avaient pas prévu de devenir des héros, mais dans une époque de plus en plus sombre, ils vont devoir dérober les plans de l’Étoile de la Mort, l’arme de destruction ultime de l’Empire. '),
(5, 0, 'Inception', 'Christopher Nolan', 2010, 'Science fiction', 1496695960, 10, 1, 'inception.jpg', 'Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve et que son esprit est particulièrement vulnérable. Très recherché pour ses talents dans l’univers trouble de l’espionnage industriel, Cobb est aussi devenu un fugitif traqué dans le monde entier qui a perdu tout ce qui lui est cher. Mais une ultime mission pourrait lui permettre de retrouver sa vie d’avant – à condition qu’il puisse accomplir l’impossible : l’inception. Au lieu de subtiliser un rêve, Cobb et son équipe doivent faire l’inverse : implanter une idée dans l’esprit d’un individu. S’ils y parviennent, il pourrait s’agir du crime parfait. Et pourtant, aussi méthodiques et doués soient-ils, rien n’aurait pu préparer Cobb et ses partenaires à un ennemi redoutable qui semble avoir systématiquement un coup d’avance sur eux. Un ennemi dont seul Cobb aurait pu soupçonner l’existence. ');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(10) UNSIGNED NOT NULL,
  `numSecuE` bigint(13) UNSIGNED NOT NULL,
  `nomE` varchar(255) NOT NULL,
  `prenomE` varchar(255) NOT NULL,
  `adresseE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`id`, `numSecuE`, `nomE`, `prenomE`, `adresseE`) VALUES
(1, 1900306223603, 'Alex', 'Qhorin', 'Béziers');

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `id` int(10) UNSIGNED NOT NULL,
  `dvdE` int(10) UNSIGNED NOT NULL,
  `dateE` int(10) UNSIGNED NOT NULL,
  `clientE` int(10) UNSIGNED NOT NULL,
  `dureeE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `emprunt`
--

INSERT INTO `emprunt` (`id`, `dvdE`, `dateE`, `clientE`, `dureeE`) VALUES
(1, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id` int(10) UNSIGNED NOT NULL,
  `numS` int(10) UNSIGNED NOT NULL,
  `nomS` varchar(255) NOT NULL,
  `rueS` varchar(255) NOT NULL,
  `villeS` varchar(255) NOT NULL,
  `directeurS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`id`, `numS`, `nomS`, `rueS`, `villeS`, `directeurS`) VALUES
(1, 0, 'Deeveadee', '15 rue du fist profond', 'La Fistinière', 'Wilson Fist'),
(2, 0, 'Test', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(10) UNSIGNED NOT NULL,
  `emailU` varchar(255) NOT NULL,
  `passwordU` varchar(255) NOT NULL,
  `telephoneU` varchar(255) DEFAULT NULL,
  `adresseU` varchar(255) DEFAULT NULL,
  `dateU` int(10) UNSIGNED NOT NULL,
  `typeU` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `emailU`, `passwordU`, `telephoneU`, `adresseU`, `dateU`, `typeU`) VALUES
(1, 'corin.alex@gmail.com', '$2y$10$u0ougOP0q146buTasORH6e2hiNZm6fDXZecCoz8zT.6KTkHzysLfe', NULL, NULL, 1497314984, 0),
(2, 'corin-alex@outlook.com', '$2y$10$nTwBPejVTK/iAQJBQ.M6eeb0wGPfs5aohLxRg/hmC9kuGeFcRo8V6', NULL, NULL, 1497317135, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `casting`
--
ALTER TABLE `casting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dvd` (`dvdC`),
  ADD KEY `acteur` (`acteurC`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `societe` (`societeD`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dvd` (`dvdE`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `casting`
--
ALTER TABLE `casting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `casting_ibfk_1` FOREIGN KEY (`dvdC`) REFERENCES `dvd` (`id`),
  ADD CONSTRAINT `casting_ibfk_2` FOREIGN KEY (`acteurC`) REFERENCES `acteur` (`id`);

--
-- Contraintes pour la table `dvd`
--
ALTER TABLE `dvd`
  ADD CONSTRAINT `dvd_ibfk_1` FOREIGN KEY (`societeD`) REFERENCES `societe` (`id`);

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`dvdE`) REFERENCES `dvd` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
