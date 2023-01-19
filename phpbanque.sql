-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 19 jan. 2023 à 13:19
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phpbanque`
--

-- --------------------------------------------------------

--
-- Structure de la table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `date_depos` datetime NOT NULL,
  `monnaie` varchar(100) NOT NULL,
  `montant` int(11) NOT NULL,
  `description_depot` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deposits`
--

INSERT INTO `deposits` (`id`, `role`, `date_depos`, `monnaie`, `montant`, `description_depot`, `id_user`) VALUES
(1, 'user_no_verify', '2023-01-19 14:12:34', '0', 1000, 'mabite ', '1'),
(2, 'user_no_verify', '2023-01-19 14:14:12', '0', 2000, 'yolo', '5'),
(3, 'user_no_verify', '2023-01-19 14:15:19', '0', 1000, 'STP', '1'),
(4, 'user_no_verify', '2023-01-19 14:17:39', 'Dollard', 1000, 'yolo', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
