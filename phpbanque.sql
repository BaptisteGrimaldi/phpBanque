-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 20 jan. 2023 à 08:46
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
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deposits`
--

INSERT INTO `deposits` (`id`, `role`, `date_depos`, `monnaie`, `montant`, `description_depot`, `id_user`) VALUES
(1, 'user_no_verify', '2023-01-20 09:33:10', 'Bitcoin', 3000, 'lol', 1);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montantTransaction` int(100) NOT NULL,
  `date_depos` datetime NOT NULL,
  `description_depot` varchar(255) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id`, `montantTransaction`, `date_depos`, `description_depot`, `sender_id`, `receiver_id`) VALUES
(1, 1000, '2023-01-20 09:44:42', 'lol', 1, 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created_at`, `last_ip`, `bankaccounts`) VALUES
(1, 'grimaldi.baptiste@gmail.com', 'Yolo2001ù', 'user_no_verify', '2023-01-18 11:53:41', '::1', -1000),
(2, 'nabil@gmail.com', 'nabil95300', 'user_no_verify', '2023-01-19 14:17:29', '::1', 1000),
(5, 'jetest@gmail.com', 'Inchala2001*', 'admin', '2023-01-20 09:38:48', '::1', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_transactions`
--

DROP TABLE IF EXISTS `user_transactions`;
CREATE TABLE IF NOT EXISTS `user_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_id` (`transaction_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD CONSTRAINT `user_transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_transactions_ibfk_2` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`),
  ADD CONSTRAINT `user_transactions_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;