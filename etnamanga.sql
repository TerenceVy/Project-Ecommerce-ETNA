-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 04:30 PM
-- Server version: 5.5.58-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `etnamanga_vy_t`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

DROP DATABASE IF EXISTS etnamanga_vy_t;

CREATE DATABASE etnamanga_vy_t CHARACTER SET utf8;

USE etnamanga_vy_t;

CREATE TABLE IF NOT EXISTS `Categories` (
`ID` int(10) unsigned NOT NULL,
  `Libelle` varchar(40) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Date_creation` datetime NOT NULL,
  `Date_modification` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`ID`, `Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, 'Manga', 'Un manga est un manga.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'POP', 'Figurine d''un personnage de serie ou aut', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Blu-ray', 'Edition collector d''un anime', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Produit_Utilisateur`
--

CREATE TABLE IF NOT EXISTS `Produit_Utilisateur` (
  `ID_produit` int(10) unsigned NOT NULL,
  `ID_utilisateur` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Produit_Utilisateur`
--

INSERT INTO `Produit_Utilisateur` (`ID_produit`, `ID_utilisateur`) VALUES
(1, 1),
(16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Produits`
--

CREATE TABLE IF NOT EXISTS `Produits` (
`ID` int(10) unsigned NOT NULL,
  `Categorie` int(10) unsigned DEFAULT NULL,
  `Libelle` varchar(40) NOT NULL,
  `Description` text NOT NULL,
  `Prix_achat` varchar(10) NOT NULL,
  `Prix_vente` varchar(10) NOT NULL,
  `Nombres_produit` int(11) NOT NULL,
  `Date_creation` datetime NOT NULL,
  `Date_modification` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Produits`
--

INSERT INTO `Produits` (`ID`, `Categorie`, `Libelle`, `Description`, `Prix_achat`, `Prix_vente`, `Nombres_produit`, `Date_creation`, `Date_modification`) VALUES
(1, 1, 'My Hero Academia Vol 1', '1er Volume de la serie My Hero Academia', '1', '2', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'POP All Might', 'Pop d''un personnage My Hero Academia', '0.5', '2', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Blu-ray My Hero Academia', 'Coffret Blu-ray de la saison 1', '0.45', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'POP Shinoa', 'POP d''un personnage OWari no Seraph', '0.35', '1.95', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'POP L', 'POP du celebre detective de Death Note', '0.25', '1.80', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'Kuroko no Basket Vol1', 'Premier volume des matchs de Kuroko', '0.45', '1.75', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'Your lie in April Vol1', 'Suivez les aventures de Kousei Arima', '0.35', '1.80', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, 'POP Tony Tony Chopper', 'POP de la mascotte de l''equipage au chapeau de paille', '0.25', '2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 'POP Asuna', 'POP du personnage feminin de SAO', '0.5', '1.99', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 3, 'Blu-ray Your lie in April', 'Vivez les musiques de l''anime Shigatsu Wa Kimi no Uso', '1.25', '2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'My Hero Academia Vol2', 'Suite des aventures de Midoriya Izuku', '0.9', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'My Hero Academia Vol3', 'Suite des aventures de Midoriya Izuku', '0.9', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 'My Hero Academia Vol4', 'Suite des aventures de Midoriya Izuku', '0.9', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 'My Hero Academia Vol5', 'Suite des aventures de Midoriya Izuku', '0.9', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 'My Hero Academia Vol6', 'Suite des aventures de Midoriya Izuku', '0.9', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 'My Hero Academia Vol7', 'Suite des aventures de Midoriya Izuku', '0.9', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 'My Hero Academia Vol8', 'Suite des aventures de Midoriya Izuku', '0.9', '2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE IF NOT EXISTS `Role` (
`ID` tinyint(3) unsigned NOT NULL,
  `Libelle` varchar(40) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Date_creation` date NOT NULL,
  `Date_modification` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`ID`, `Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, '0', 'Simple User', '0000-00-00', '0000-00-00'),
(2, '1', 'You are GROOT', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateurs`
--

CREATE TABLE IF NOT EXISTS `Utilisateurs` (
`ID` int(10) unsigned NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `Ville` varchar(40) NOT NULL,
  `Adresse` varchar(40) NOT NULL,
  `Code_postale` mediumint(8) unsigned NOT NULL,
  `Pays` varchar(40) NOT NULL,
  `Role` tinyint(3) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`ID`, `Nom`, `Prenom`, `Mail`, `Password`, `Date_de_naissance`, `Ville`, `Adresse`, `Code_postale`, `Pays`, `Role`) VALUES
(1, 'Puig', 'Jeremy', 'puig_j@etna-alternance.net', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '1999-03-15', 'Draveil', '26 allee des marronniers', 91210, 'France', 2),
(2, 'The', 'Groot', 'groot@groot.fr', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '2017-11-21', 'Ivry', '3 rue tudors', 91456, 'France', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Produit_Utilisateur`
--
ALTER TABLE `Produit_Utilisateur`
 ADD KEY `ID_produit` (`ID_produit`), ADD KEY `ID_utilisateur` (`ID_utilisateur`);

--
-- Indexes for table `Produits`
--
ALTER TABLE `Produits`
 ADD PRIMARY KEY (`ID`), ADD KEY `Categorie` (`Categorie`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
 ADD PRIMARY KEY (`ID`), ADD KEY `Role` (`Role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Produits`
--
ALTER TABLE `Produits`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `Role`
--
ALTER TABLE `Role`
MODIFY `ID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Produit_Utilisateur`
--
ALTER TABLE `Produit_Utilisateur`
ADD CONSTRAINT `Produit_Utilisateur_ibfk_1` FOREIGN KEY (`ID_produit`) REFERENCES `Produits` (`ID`),
ADD CONSTRAINT `Produit_Utilisateur_ibfk_2` FOREIGN KEY (`ID_utilisateur`) REFERENCES `Utilisateurs` (`ID`);

--
-- Constraints for table `Produits`
--
ALTER TABLE `Produits`
ADD CONSTRAINT `Produits_ibfk_1` FOREIGN KEY (`Categorie`) REFERENCES `Categories` (`ID`);

--
-- Constraints for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
ADD CONSTRAINT `Utilisateurs_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `Role` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
