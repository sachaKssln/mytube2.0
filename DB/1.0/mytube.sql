-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 27 août 2020 à 16:29
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mytube`
--

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `videoURL` char(20) NOT NULL,
  `videoName` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`videoURL`, `videoName`) VALUES
('5f47ba0596037.webm', 'cup song moustique'),
('5f47b0cc6f1fb.mp4', 'weqdxadx'),
('5f47ba1172b07.webm', 'luigi, it\'s 4pm'),
('5f47ba1b79573.mp4', 'swain bit box'),
('5f47bbbfbed10.webm', 'rickRolled'),
('5f47bc3844658.mp4', 'spanish');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`videoURL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
