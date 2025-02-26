-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 fév. 2025 à 14:25
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `daeu`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `etudiant_id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `groupe_id` int NOT NULL,
  PRIMARY KEY (`etudiant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`etudiant_id`, `nom`, `prenom`, `age`, `email`, `groupe_id`) VALUES
(4, 'Bernard', 'Sophie', 21, 'sophie.bernard@email.com', 1),
(6, 'Morel', 'Camille', 19, 'camille.morel@email.com', 1),
(8, 'Fournier', 'Emma', 20, 'emma.fournier@email.com', 1),
(9, 'Girard', 'Hugo', 25, 'hugo.girard@email.com', 1),
(10, 'Lefevre', 'Alice', 23, 'alice.lefevre@email.com', 1),
(11, 'Mercier', 'Julien', 22, 'julien.mercier@email.com', 2),
(12, 'Robin', 'Laura', 21, 'laura.robin@email.com', 2),
(13, 'Moreau', 'Nathan', 24, 'nathan.moreau@email.com', 2),
(14, 'Garnier', 'Elodie', 19, 'elodie.garnier@email.com', 2),
(15, 'Lambert', 'Thomas', 23, 'thomas.lambert@email.com', 2),
(26, 'test', 'deuxieme', 25, 'test@tesst.fr', 2),
(27, 'Berd', 'Maxime', 14, 'berd@test.fr', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
