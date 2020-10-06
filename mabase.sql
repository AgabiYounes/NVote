-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 30 nov. 2017 à 17:36
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `matricule` int(10) NOT NULL DEFAULT '1000000000',
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `vote` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`matricule`, `nom`, `prenom`, `email`, `vote`, `date`) VALUES
(1531058564, 'Aliliche', 'Fares', 'faliliche@gmail.com', 'Dimanche', '29/11/2017'),
(1531065595, 'Agabi', 'Rayane Younes', 'younes.agabi03@gmail.com', 'Samedi', '29/11/2017'),
(1531081398, 'Morsli', 'Mohamed Yani', 'yani0075.yk@gmail.com', 'Dimanche', '29/11/2017'),
(1531083493, 'Dahdouh', 'Ahmed', 'ahmed.dahdouh98@gmail.com', 'Dimanche', '29/11/2017'),
(1531084910, 'Arar', 'Mohamed Akram', 'm.akram.arar@gmail.com', 'Dimanche', '29/11/2017'),
(1531085592, 'Yahouni', 'Amine', 'amineyahouni@gmail.com', 'Dimanche', '29/11/2017'),
(1531101890, 'Hamada', 'Oussama', 'info.h.oussama@gmail.com', 'Samedi', '29/11/2017'),
(1533037190, 'Chenouf', 'Khaled', 'chn.khaled@gmail.com', 'Dimanche', '29/11/2017');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
