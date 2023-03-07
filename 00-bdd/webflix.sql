-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 07 mars 2023 à 07:39
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
-- Base de données : `webflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `actor`
--

CREATE TABLE `actor` (
  `id_actor` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actor`
--

INSERT INTO `actor` (`id_actor`, `name`, `firstname`, `birthdate`) VALUES
(1, 'Pacino', 'Al', '1940-04-25'),
(2, 'Brando', 'Marlon', '1924-04-03'),
(3, 'de Niro', 'Robert', '1943-08-17'),
(4, 'Willis', 'Bruce', '1955-03-19'),
(5, 'Liotta', 'Ray', '1954-12-18'),
(6, 'Snipes', 'Wesley', '1962-07-31'),
(7, 'Stalone', 'Sylvester', '1946-07-06'),
(8, 'Norton', 'Edward', '1969-08-18'),
(9, 'Spacey', 'Kevin', '1959-07-26'),
(10, 'Kilmer', 'Val', '1959-12-31'),
(11, 'Milou', 'Tintin', '1999-12-25');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Films de gangsters'),
(2, 'Action'),
(3, 'Horreur'),
(4, 'Science-fiction'),
(5, 'Thriller');

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `id_movie` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `released_at` date NOT NULL,
  `description` longtext NOT NULL,
  `duration` int NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `id_category` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`id_movie`, `title`, `released_at`, `description`, `duration`, `cover`, `id_category`) VALUES
(1, 'Le Parrain', '1972-01-01', 'Lorem ipsum', 186, 'le-parrain.jpg', 1),
(2, 'Scarface', '1983-01-01', 'Lorem ipsum', 120, 'scarface.jpg', 1),
(3, 'Les Affranchis', '1990-01-01', 'Lorem ipsum', 145, 'les-affranchis.jpg', 1),
(4, 'Heat', '1995-01-01', 'Lorem ipsum', 146, 'heat.jpg', 1),
(5, 'Die Hard', '1988-01-01', 'Lorem ipsum', 124, 'die-hard.jpg', 2),
(6, 'Demolition Man', '1993-01-01', 'Lorem ipsum', 89, 'demolition-man.jpg', 2),
(7, 'Taken', '2008-01-01', 'Lorem ipsum', 96, 'taken.jpg', 2),
(8, 'Deadpool', '2016-01-01', 'Lorem ipsum', 97, 'deadpool.jpg', 2),
(9, 'The Expandables', '2010-01-01', 'Lorem ipsum', 132, 'the-expandables.jpg', 2),
(10, 'Scream', '1996-01-01', 'Lorem ipsum', 78, 'scream.jpg', 3),
(11, 'Vendredi 13', '1980-01-01', 'Lorem ipsum', 97, 'vendredi-13.jpg', 3),
(12, 'Saw', '2005-01-01', 'Lorem ipsum', 102, 'saw.jpg', 3),
(13, 'Scary Movie', '2000-01-01', 'Lorem ipsum', 79, 'scary-movie.jpg', 3),
(14, 'Star Wars IV Un nouvel espoir', '1977-01-01', 'Lorem ipsum', 160, 'star-wars-iv-un-nouvel-espoir.jpg', 4),
(15, 'Alien', '1979-01-01', 'Lorem ipsum', 145, 'alien.jpg', 4),
(16, 'ET', '1982-01-01', 'Lorem ipsum', 95, 'et.jpg', 4),
(17, 'Robocop', '1987-01-01', 'Lorem ipsum', 98, 'robocop.jpg', 4),
(18, 'The Game', '1997-01-01', 'Lorem ipsum', 96, 'the-game.jpg', 5),
(19, 'Sixième Sens', '1999-01-01', 'Lorem ipsum', 120, 'sixieme-sens.jpg', 5),
(20, 'Usual Suspects', '1995-01-01', 'Lorem ipsum', 114, 'usual-suspects.jpg', 5),
(21, 'Fight Club', '1999-01-01', 'Lorem ipsum', 108, 'fight-club.jpg', 5),
(22, 'Inception', '2010-01-01', 'Lorem ipsum', 107, 'inception.jpg', 5),
(23, 'Deadpool 2', '2019-02-19', 'Lorem ipsum', 93, 'deadpool-2.jpg', 2),
(24, 'Avengers Endgame', '2019-04-24', 'Lorem Ipsum', 220, 'endgame.jpg', 2),
(30, 'Test', '2000-01-01', 'Lorem Taguel', 90, 'test.jpg', 1),
(31, 'Test', '2000-01-01', 'Lorem Taguel', 90, 'test.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `movie_has_actor`
--

CREATE TABLE `movie_has_actor` (
  `id_actor` int NOT NULL,
  `id_movie` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movie_has_actor`
--

INSERT INTO `movie_has_actor` (`id_actor`, `id_movie`) VALUES
(1, 1),
(2, 1),
(1, 2),
(3, 3),
(5, 3),
(1, 4),
(3, 4),
(10, 4),
(4, 5),
(6, 6),
(7, 6),
(7, 9),
(4, 19),
(9, 20),
(8, 21);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `created_at`) VALUES
(1, 'Milou', 'milou@tintin.fr', 'dizzy', '2023-02-20 15:34:32'),
(3, 'Freud', 'damn@shit.com', 'multipass', '2023-02-20 15:34:32'),
(4, 'Billy', 'Billy@jean.com', 'pastworld', '2023-02-20 15:34:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `movie_category_FK` (`id_category`);

--
-- Index pour la table `movie_has_actor`
--
ALTER TABLE `movie_has_actor`
  ADD PRIMARY KEY (`id_actor`,`id_movie`),
  ADD KEY `casting_movie0_FK` (`id_movie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_category_FK` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Contraintes pour la table `movie_has_actor`
--
ALTER TABLE `movie_has_actor`
  ADD CONSTRAINT `casting_actor_FK` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `casting_movie0_FK` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
