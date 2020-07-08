-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 juil. 2020 à 03:30
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
  `langue_ end` varchar(255) NOT NULL,
  `audio` text NOT NULL,
  `status` varchar(70) NOT NULL,
  `date_enr` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `langue_end`
--

CREATE TABLE `langue_end` (
  `id` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `date_enrg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langue_end`
--

INSERT INTO `langue_end` (`id`, `langue`, `date_enrg`) VALUES
(1, 'langue', '0000-00-00'),
(2, 'langue', '0000-00-00'),
(3, 'langue', '0000-00-00'),
(4, 'langue', '0000-00-00'),
(5, 'langue', '0000-00-00'),
(6, 'langue', '0000-00-00'),
(7, 'langue', '0000-00-00'),
(8, 'langue', '0000-00-00'),
(9, 'langue', '0000-00-00'),
(10, 'langue', '0000-00-00'),
(11, 'langue', '0000-00-00'),
(12, 'langue', '0000-00-00'),
(13, 'langue', '0000-00-00'),
(14, 'langue', '0000-00-00'),
(15, 'langue', '0000-00-00'),
(16, 'langue', '0000-00-00'),
(17, 'langue', '0000-00-00'),
(18, 'langue', '0000-00-00'),
(19, 'langue', '0000-00-00'),
(20, 'langue', '0000-00-00'),
(21, 'langue', '0000-00-00'),
(22, 'langue', '0000-00-00'),
(23, 'langue', '0000-00-00'),
(24, 'langue', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `langue_start`
--

CREATE TABLE `langue_start` (
  `id` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `date_enrg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langue_start`
--

INSERT INTO `langue_start` (`id`, `langue`, `date_enrg`) VALUES
(1, 'langue', '0000-00-00'),
(2, 'langue', '0000-00-00'),
(3, 'langue', '0000-00-00');

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
(1, 'Assatou sow', 'admin', 'assatousow5@gmail.com', '65aaaa197cf24fcb6ceb7b5a4120b14dac181930f002262e93db39c162906d0e');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `langue_end`
--
ALTER TABLE `langue_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `langue_start`
--
ALTER TABLE `langue_start`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `recherche`
--
ALTER TABLE `recherche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
