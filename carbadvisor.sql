-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 avr. 2019 à 21:17
-- Version du serveur :  5.7.23
-- Version de PHP :  7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `carbadvisor`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `pseudo` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `description` text,
  `nbavis` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0',
  `nbposts` int(11) DEFAULT '0',
  `nblike` int(11) DEFAULT '0',
  `nbnolike` int(11) DEFAULT '0',
  PRIMARY KEY (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`pseudo`, `password`, `mail`, `ville`, `description`, `nbavis`, `total`, `nbposts`, `nblike`, `nbnolike`) VALUES
('Imad', '123', 'imad@gmail.com', NULL, 'Bonjour tout le monde', 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
