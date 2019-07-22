-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 juil. 2019 à 14:24
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_dispatch-map`
--

-- --------------------------------------------------------

--
-- Structure de la table `dessins`
--

DROP TABLE IF EXISTS `dessins`;
CREATE TABLE IF NOT EXISTS `dessins` (
  `desid` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  PRIMARY KEY (`desid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patrouilles`
--

DROP TABLE IF EXISTS `patrouilles`;
CREATE TABLE IF NOT EXISTS `patrouilles` (
  `patrid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `zoneid` int(11) DEFAULT NULL,
  PRIMARY KEY (`patrid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patrouilles`
--

INSERT INTO `patrouilles` (`patrid`, `nom`, `zoneid`) VALUES
(1, 'Alpha 1', NULL),
(2, 'Alpha 2', NULL),
(3, 'Alpha 3', NULL),
(4, 'Fox 1', NULL),
(5, 'Fox 2', NULL),
(6, 'Fox 3', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `punaises`
--

DROP TABLE IF EXISTS `punaises`;
CREATE TABLE IF NOT EXISTS `punaises` (
  `punaid` int(11) NOT NULL,
  `emplacementx` varchar(50) NOT NULL,
  `emplacementy` varchar(50) NOT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#ff0000',
  PRIMARY KEY (`punaid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

DROP TABLE IF EXISTS `zones`;
CREATE TABLE IF NOT EXISTS `zones` (
  `zoneid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`zoneid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`zoneid`, `nom`) VALUES
(1, 'Nord'),
(2, 'Ouest'),
(3, 'Est'),
(4, 'Sud Ouest'),
(5, 'Sud Est'),
(6, 'Sud');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
