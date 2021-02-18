-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 jan. 2021 à 18:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `EcoleDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `Id_formation` int NOT NULL AUTO_INCREMENT,
  `typeformationid` int NOT NULL,
  `nom` varchar(30) COLLATE ascii_bin NOT NULL,
  `volH` int NOT NULL,
  `tarif` int NOT NULL,
  `tax` float NOT NULL,
  PRIMARY KEY (`Id_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`Id_formation`, `typeformationid`, `nom` , `volH` , `tarif` , `tax` ) VALUES
(1, 1, 'MS Word',0,1000,7),
(2, 1, 'Excel',0,1500,7),
(3, 1, 'Latex',0,1000,7),
(4, 2, 'Power point',0,1000,7),
(5, 2, 'Photoshop',0,1700,7),
(6, 2, 'Illustrator',0,1000,8),
(7, 3, 'Anglais',0,1000,7),
(8, 3, 'Turque',0,1000,7),
(9, 3, 'Chinois',0,1000,7),
(10, 4, 'Management',0,1000,7),
(11, 4, 'Management qualite',0,1000,7),
(12, 5, 'Finance',0,1000,7),
(13, 5, 'gestion et droit',0,1000,7);

-- --------------------------------------------------------

--
-- Structure de la table `type_formation`
--

DROP TABLE IF EXISTS `type_formation`;
CREATE TABLE IF NOT EXISTS `type_formation` (
  `Id_type_formation` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_type_formation` varchar(30) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`Id_type_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `type_formation`
--

INSERT INTO `type_formation` (`Id_type_formation`, `Nom_type_formation`) VALUES
(1, 'Bureautique'),
(2, 'Infographie'),
(3, 'Langue'),
(4, 'Management'),
(5, 'Comptabilite');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(20) COLLATE ascii_bin NOT NULL,
  `hash_pwd` varchar(1024) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `name_user` (`name_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `name_user`, `hash_pwd`) VALUES
(1, 'admin', SHA1('admin'));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
