-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 07 mars 2023 à 20:29
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookshelf`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id_book` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price_et` int NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `released_at` date NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id_book`, `title`, `price_et`, `isbn`, `author`, `released_at`, `cover`) VALUES
(1, 'Contes d\'ailleurs et d\'autres part', 2, '2-246-43781-4', 'Pierre Gripari', '1990-01-01', 'gripari.jpg'),
(2, 'Expiration', 23, '978-2-207-13682-9', 'Ted Chiang', '2019-01-01', 'expiration.jpg'),
(3, 'Le solfège', 3, '978-2-290-07660-6', 'Daniel Ichbiah', '2013-01-01', 'solfege.jpg'),
(4, 'La saga Legacy of Kain', 25, '978-2-37784-084-7', 'Raphaël Lucas', '2019-01-01', 'legacyOfKain.jpg'),
(5, 'Zelda Chronique d\'une saga légendaire', 25, '979-10-94723-78-4', 'Valérie Précigout', '2017-01-01', 'zelda.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
