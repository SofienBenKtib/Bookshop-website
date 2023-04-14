-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 avr. 2023 à 01:20
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
-- Base de données : `bookshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Price` int NOT NULL,
  `Availability` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `Name`, `Author`, `Price`, `Availability`) VALUES
(1, 'Who moved my cheese ?', 'by Dr. Spencer Johnson', 15, 'true'),
(2, 'To Kill a Mockingbird', 'Harper Lee', 25, 'true'),
(3, 'Pride and Prejudice', 'Jane Austen', 35, 'true'),
(4, 'Harry Potter and the Goblet of Fire', 'JK Rowling', 80, 'true'),
(5, 'A Little Life', 'Hanya Yanagihara', 65, 'false'),
(6, 'Darkmans', 'Nicola Barker', 65, 'false'),
(7, 'Light', 'M.John Harrison', 75, 'false'),
(8, 'Noughts & Crosses', 'Malorie Blackman', 88, 'false'),
(9, 'The Hare with Amber Eyes', 'Edmund de Waal', 120, 'false'),
(10, 'Fun Home', 'Alison Bechdel', 72, 'true'),
(11, 'The Underground Railroad', 'Colson Whitehead', 35, 'false'),
(12, 'The Noonday Demon', 'Andrew Solomon', 35, 'false');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
