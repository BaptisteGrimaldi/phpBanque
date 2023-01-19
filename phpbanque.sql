-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 19 jan. 2023 à 13:28
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
-- Structure de la table `contact_forms`
--

DROP TABLE IF EXISTS `contact_forms`;
CREATE TABLE IF NOT EXISTS `contact_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monnaie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `fullname`, `phone`, `created_at`, `monnaie`) VALUES
(1, 'New fullname', '09090909', '2023-01-16 10:50:29', ''),
(2, 'Test 2', '08080808', '2023-01-16 11:03:23', ''),
(81, 'Test fullname', '08020282924', '2023-01-17 09:54:54', ''),
(82, 'Test fullname', '08020282924', '2023-01-17 10:06:25', ''),
(83, 'Test fullname', '08020282924', '2023-01-17 10:09:52', ''),
(84, 'Test fullname', '08020282924', '2023-01-17 10:12:39', ''),
(85, 'Test fullname', '08020282924', '2023-01-17 10:18:56', ''),
(86, 'Test fullname', '08020282924', '2023-01-17 10:18:58', ''),
(87, 'Test fullname', '08020282924', '2023-01-17 10:36:25', ''),
(88, 'Test fullname', '08020282924', '2023-01-17 10:45:39', ''),
(89, 'Test fullname', '08020282924', '2023-01-17 10:45:54', ''),
(90, 'Test fullname', '08020282924', '2023-01-17 10:47:44', ''),
(91, 'Test fullname', '08020282924', '2023-01-17 11:13:53', ''),
(92, 'Test fullname', '08020282924', '2023-01-17 11:26:59', '');

-- --------------------------------------------------------

--
-- Structure de la table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE IF NOT EXISTS `currencies` (
  `id_monnaie` int(11) NOT NULL,
  `nom_monnaie` int(11) NOT NULL,
  `taux_change` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montant_depot` int(100) NOT NULL,
  `date_depos` datetime NOT NULL,
  `date_retrait` datetime NOT NULL,
  `description_depot` varchar(255) NOT NULL,
  `montant_retrait` int(100) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_ip` text NOT NULL,
  `bankaccounts` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created_at`, `last_ip`, `bankaccounts`) VALUES
(1, 'grimaldi.baptiste@gmail.com', 'Yolo2001ù', 'user_no_verify', '2023-01-18 11:53:41', '::1', 0),
(2, 'admini@gmail.com', '1234', 'user_no_verify', '2023-01-19 10:16:57', '::1', 0),
(4, 'jenaimarre@gmail.com', '123456', 'user_no_verify', '2023-01-19 12:00:09', '::1', 0),
(5, 'jenai@gmail.com', '98765', 'user_no_verify', '2023-01-19 12:01:37', '::1', 0);

-- --------------------------------------------------------

--
-- Structure de la table `withdrawals`
--

DROP TABLE IF EXISTS `withdrawals`;
CREATE TABLE IF NOT EXISTS `withdrawals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
  `monnaie` varchar(200) NOT NULL,
  `date_retrait` datetime NOT NULL,
  `montant_retrait` int(11) NOT NULL,
  `id_retrait` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
