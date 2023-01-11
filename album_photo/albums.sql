-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 jan. 2023 à 17:05
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `albums`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `idAlb` int(3) UNSIGNED NOT NULL,
  `nomAlb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`idAlb`, `nomAlb`) VALUES
(1, 'Chats'),
(2, 'Chiens'),
(3, 'Oiseaux');

-- --------------------------------------------------------

--
-- Structure de la table `comporter`
--

CREATE TABLE `comporter` (
  `idAlb` int(3) UNSIGNED NOT NULL,
  `idPh` int(17) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `comporter`
--

INSERT INTO `comporter` (`idAlb`, `idPh`) VALUES
(1, 3),
(1, 3),
(1, 5),
(1, 6),
(1, 18),
(2, 1),
(2, 7),
(2, 6),
(2, 8),
(2, 10),
(2, 9),
(2, 12),
(2, 14),
(3, 4),
(3, 13),
(3, 15),
(3, 16),
(3, 17);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `idPh` int(17) UNSIGNED NOT NULL,
  `nomPh` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`idPh`, `nomPh`) VALUES
(1, 'ph_01'),
(3, 'ph_02'),
(4, 'ph_03'),
(5, 'ph_04'),
(6, 'ph_05'),
(7, 'ph_06'),
(8, 'ph_07'),
(9, 'ph_08'),
(10, 'ph_09'),
(11, 'ph_10'),
(12, 'ph_11'),
(13, 'ph_12'),
(14, 'ph_13'),
(15, 'ph_14'),
(16, 'ph_15'),
(17, 'ph_16'),
(18, 'ph_17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`idAlb`);

--
-- Index pour la table `comporter`
--
ALTER TABLE `comporter`
  ADD KEY `idAlb` (`idAlb`),
  ADD KEY `idPh` (`idPh`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`idPh`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `albums`
--
ALTER TABLE `albums`
  MODIFY `idAlb` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `idPh` int(17) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comporter`
--
ALTER TABLE `comporter`
  ADD CONSTRAINT `comporter_ibfk_1` FOREIGN KEY (`idAlb`) REFERENCES `albums` (`idAlb`),
  ADD CONSTRAINT `comporter_ibfk_2` FOREIGN KEY (`idPh`) REFERENCES `photos` (`idPh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
