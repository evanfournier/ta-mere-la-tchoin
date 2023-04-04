-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 avr. 2023 à 08:19
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
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `creator` varchar(255) NOT NULL,
  `smallDescription` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `grade` decimal(10,2) NOT NULL DEFAULT '0.00',
  `votes` int NOT NULL DEFAULT '0',
  `images` json NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`name`, `date`, `creator`, `smallDescription`, `description`, `price`, `grade`, `votes`, `images`) VALUES
('Formulaire\r\n', '2023-03-08 14:49:38', 'Evan Fournier', 'Formulaire coloré et doux, idéal pour un site de vetements.', 'Grosse description que j\'ai la flemme de faire', '10', '0.00', 0, '[\"Images/Form.png\", \"Images/Accounts.png\"]'),
('Calculator', '2023-03-08 14:54:51', 'Justin Constans', 'Calculatrice très pratique', 'Calculatrice réaliser en html, css et js', '45', '4.00', 0, '[\"Offers/Calculator/Calculator.png\"]'),
('Base converter', '2023-03-08 14:57:38', 'Justin Constans', 'Convertisseur en base très utiles', 'le convertisseur en base est très utile, notamment en informatique', '123', '3.00', 0, '[\"Offers/BaseConverter/BaseConverter.png\"]'),
('Number as a product of prime factors', '2023-03-08 14:02:02', 'Justin Constans', 'Décompte n\'importe quel nombre en produit de facteur premier', 'Ce programme réalisé en js permet décomposer n\'importe quel nombre en produit de facteurs premiers. Cela peut être utile en aritmétique.', '76', '1.35', 0, '[\"Offers/NumberAsAProductOfPrimeFactors/NumberAsAProductOfPrimeFactors.png\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
