-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Juin 2017 à 23:20
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
  `societeD` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dvd`
--

INSERT INTO `dvd` (`id`, `numD`, `titreD`, `auteurD`, `anneeD`, `categorieD`, `dateAchatD`, `nombreD`, `societeD`) VALUES
(1, 0, 'Spider-Man: Homecoming', 'Jon Watts ', 2017, 'Action', 1496695960, 10, 1),
(2, 0, 'Logan', 'James Mangold', 2017, 'Action', 1496695960, 10, 1),
(3, 0, 'Interstellar', 'Christopher Nolan', 2014, 'Science fiction', 1496695960, 10, 1),
(4, 0, 'Rogue One: A Star Wars Story', 'Gareth Edwards (II)', 2016, 'Science fiction', 1496695960, 10, 1),
(5, 0, 'test', 'test', 2017, 'test', 0, 10, 2);

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
