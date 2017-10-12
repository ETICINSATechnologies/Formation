-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Octobre 2016 à 22:21
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdbibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `tablecomm`
--

CREATE TABLE `tablecomm` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `comm` text NOT NULL,
  `pseudo` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tablecomm`
--

INSERT INTO `tablecomm` (`id`, `titre`, `comm`, `pseudo`, `date`) VALUES
(15, 'Coucou', 'yololololololo', 'Sacha', '2016-10-18');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tablecomm`
--
ALTER TABLE `tablecomm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tablecomm`
--
ALTER TABLE `tablecomm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
