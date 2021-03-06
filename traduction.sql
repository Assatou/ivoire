-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 juil. 2020 à 17:02
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `traduction`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `iduser` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date_enrg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `texte1` varchar(255) NOT NULL,
  `langue_start` varchar(255) NOT NULL,
  `texte2` varchar(255) NOT NULL,
  `langue_end` varchar(255) NOT NULL,
  `audio` text DEFAULT NULL,
  `date_enr` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `data`
--

INSERT INTO `data` (`id`, `texte1`, `langue_start`, `texte2`, `langue_end`, `audio`, `date_enr`) VALUES
(1, 'bien dormi', 'français', 'belkèdjan', 'peulh', 'daudio/belkèdjan.m4a', '2020-07-08 09:25:29.000000'),
(2, 'bonne journée', 'français', 'gnalèdjan', 'peulh', 'daudio/gnallèdjan.m4a', '2020-07-08 09:27:02.000000'),
(3, 'ma maman', 'français', 'youma an', 'peulh', 'daudio/ma maman.m4a', '2020-07-08 09:28:57.000000'),
(4, 'viens manger ', 'français', 'ar gnamen', 'peulh', 'daudio/viens manger.m4a', '2020-07-08 09:29:44.000000'),
(5, 'bonjour', 'français', 'djarama', 'peulh', 'daudio/belkèdjan.m4a', '2020-07-09 03:59:35.000000');

-- --------------------------------------------------------

--
-- Structure de la table `langue_end`
--

CREATE TABLE `langue_end` (
  `id` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `date_enrg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langue_end`
--

INSERT INTO `langue_end` (`id`, `langue`, `date_enrg`) VALUES
(1, 'peulh', '2020-07-08 00:00:00'),
(2, 'dioula', '2020-07-08 00:00:00'),
(3, 'baoule', '2020-07-08 00:00:00'),
(4, 'bété', '2020-07-08 00:00:00'),
(5, 'dida', '2020-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `langue_start`
--

CREATE TABLE `langue_start` (
  `id` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `date_enrg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langue_start`
--

INSERT INTO `langue_start` (`id`, `langue`, `date_enrg`) VALUES
(1, 'anglais', '2020-07-08 16:22:34'),
(2, 'français', '2020-07-08 16:22:43');

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `id` int(11) NOT NULL,
  `search_text` varchar(255) NOT NULL,
  `langue_start` varchar(255) NOT NULL,
  `langue_end` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `statuts` varchar(20) NOT NULL,
  `date_enrg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `type`, `email`, `password`) VALUES
(1, 'Assatou sow', 'admin', 'assatousow5@gmail.com', '65aaaa197cf24fcb6ceb7b5a4120b14dac181930f002262e93db39c162906d0e'),
(2, 'Assatou ', 'superviseur', 'assatousow5@gmail.com', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9'),
(3, 'Assatou', 'operateur', 'assatou.sow@uvci.edu.ci', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9'),
(4, 'oury', 'operateur', 'assatousow5@gmail.com', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9'),
(5, 'kouassi delima', 'operateur', 'ubuntuser92@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(6, 'kouassi delima', 'operateur', 'ubuntuser92@gmail.com', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646'),
(7, 'Assatou sow', 'utilisateur', 'assatousow5@gmail.com', '192486023e53830e91f75d7f9f11c57d54869a9ff482aa68dca66c8cd95f3d4f'),
(8, 'Assatou sow', 'operateur', 'assatousow5@gmail.com', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414'),
(9, 'Assatou', 'operateur', 'assatou.sow@uvci.edu.ci', '65aaaa197cf24fcb6ceb7b5a4120b14dac181930f002262e93db39c162906d0e'),
(10, 'kouassi delima', 'operateur', 'assatou.sow@uvci.edu.ci', 'c566b39b1042ff412be9880a42c316b0a4c0280e4d5296ed7b75fe13d41ef016');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langue_end`
--
ALTER TABLE `langue_end`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langue_start`
--
ALTER TABLE `langue_start`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `langue_end`
--
ALTER TABLE `langue_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `langue_start`
--
ALTER TABLE `langue_start`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `recherche`
--
ALTER TABLE `recherche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
