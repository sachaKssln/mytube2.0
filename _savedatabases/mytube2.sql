-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 14 sep. 2020 à 16:44
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mytube2`
--
CREATE DATABASE IF NOT EXISTS `mytube2` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `mytube2`;

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `url` char(20) COLLATE utf8_bin NOT NULL,
  `name` tinytext COLLATE utf8_bin NOT NULL,
  `imgExtension` char(5) COLLATE utf8_bin NOT NULL,
  `videoExtension` char(5) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`url`, `name`, `imgExtension`, `videoExtension`) VALUES
('5f5f803259fb6', 'knuc', '.png', '.png'),
('5f5f7fcf990a2', 'nerf', '.png', '.webm'),
('5f5f7f4143a1e', 'nerf gun music', '.png', '.webm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`url`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
