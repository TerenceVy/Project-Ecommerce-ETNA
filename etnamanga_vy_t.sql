-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 13 Novembre 2017 à 15:47
-- Version du serveur :  5.5.57-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `etnamanga_vy_t`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categories`
--

CREATE TABLE IF NOT EXISTS `Categories` (
`ID` int(10) unsigned NOT NULL,
  `Libelle` varchar(40) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Date_creation` datetime NOT NULL,
  `Date_modification` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Categories`
--

INSERT INTO `Categories` (`ID`, `Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, 'Manga', 'Un manga est un manga.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'POP', 'Figurine d''un personnage de serie ou aut', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Blu-ray', 'Edition collector d''un anime', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `Categorie_Produit`
--

CREATE TABLE IF NOT EXISTS `Categorie_Produit` (
  `ID_categorie` int(10) unsigned DEFAULT NULL,
  `ID_produit` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Categorie_Produit`
--

INSERT INTO `Categorie_Produit` (`ID_categorie`, `ID_produit`) VALUES
(1, 1),
(1, 6),
(1, 7),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17);

-- --------------------------------------------------------

--
-- Structure de la table `Produits`
--

CREATE TABLE IF NOT EXISTS `Produits` (
`ID` int(10) unsigned NOT NULL,
  `Libelle` varchar(40) NOT NULL,
  `Description` text NOT NULL,
  `Prix_achat` varchar(10) NOT NULL,
  `Prix_vente` varchar(10) NOT NULL,
  `Nombres_produit` int(11) NOT NULL,
  `Date_creation` date NOT NULL,
  `Date_modification` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Produits`
--

INSERT INTO `Produits` (`ID`, `Libelle`, `Description`, `Prix_achat`, `Prix_vente`, `Nombres_produit`, `Date_creation`, `Date_modification`) VALUES
(1, 'My Hero Academia Vol 1', '1er Volume de la serie My Hero Academia', '2', '1', 5, '0000-00-00', '0000-00-00'),
(2, 'My Hero Academia Vol2', 'Suite des aventures de Midoriya Izuku', '2', '0.9', 7, '0000-00-00', '0000-00-00'),
(3, 'My Hero Academia Vol3', 'Suite des aventures de Midoriya Izuku', '2', '0.9', 7, '0000-00-00', '0000-00-00'),
(4, 'My Hero Academia Vol4', 'Suite des aventures de Midoriya Izuku', '2', '0.9', 7, '0000-00-00', '0000-00-00'),
(5, 'My Hero Academia Vol5', 'Suite des aventures de Midoriya Izuku', '2', '0.9', 7, '0000-00-00', '0000-00-00'),
(6, 'My Hero Academia Vol6', 'Suite des aventures de Midoriya Izuku', '2', '0.9', 7, '0000-00-00', '0000-00-00'),
(7, 'My Hero Academia Vol7', 'Suite des aventures de Midoriya Izuku', '2', '0.9', 7, '0000-00-00', '0000-00-00'),
(8, 'My Hero Academia Vol8', 'Suite des aventures de Midoriya Izuku', '2', '0.9', 7, '0000-00-00', '0000-00-00'),
(9, 'POP All Might', 'Pop d''un personnage My Hero Academia', '2', '0.5', 5, '0000-00-00', '0000-00-00'),
(10, 'Blu-ray My Hero Academia', 'Coffret Blu-ray de la saison 1', '2', '0.45', 7, '0000-00-00', '0000-00-00'),
(11, 'POP Shinoa', 'POP d''un personnage OWari no Seraph', '1.95', '0.35', 3, '0000-00-00', '0000-00-00'),
(12, 'POP L', 'POP du celebre detective de Death Note', '1.80', '0.25', 15, '0000-00-00', '0000-00-00'),
(13, 'Kuroko no Basket Vol1', 'Premier volume des matchs de Kuroko', '1.75', '0.45', 8, '0000-00-00', '0000-00-00'),
(14, 'Your lie in April Vol1', 'Suivez les aventures de Kousei Arima', '1.80', '0.35', 2, '0000-00-00', '0000-00-00'),
(15, 'POP Kaori Miyazono', 'POP du personnage feminim de Your lie in April', '2', '0.25', 1, '0000-00-00', '0000-00-00'),
(16, 'POP Kagami', 'POP du coequipier de Kuroko', '1.99', '0.5', 6, '0000-00-00', '0000-00-00'),
(17, 'Blu-ray Your lie in April', 'Vivez les musiques de l''anime Shigatsu Wa Kimi no Uso', '2', '1.25', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `Produit_Utilisateur`
--

CREATE TABLE IF NOT EXISTS `Produit_Utilisateur` (
  `ID_produit` int(10) unsigned DEFAULT NULL,
  `ID_utilisateur` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Produit_Utilisateur`
--

INSERT INTO `Produit_Utilisateur` (`ID_produit`, `ID_utilisateur`) VALUES
(1, 1),
(1, 10),
(2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `Rôle`
--

CREATE TABLE IF NOT EXISTS `Rôle` (
`ID` tinyint(3) unsigned NOT NULL,
  `Libelle` varchar(40) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Date_creation` date NOT NULL,
  `Date_modification` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Rôle`
--

INSERT INTO `Rôle` (`ID`, `Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, '0', 'Ceci est un test', '0000-00-00', '0000-00-00'),
(2, '1', 'Ceci est un autre test', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE IF NOT EXISTS `Utilisateurs` (
`ID` int(10) unsigned NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `Ville` varchar(40) NOT NULL,
  `Adresse` varchar(40) NOT NULL,
  `Code_postale` mediumint(8) unsigned NOT NULL,
  `Pays` varchar(40) NOT NULL,
  `Sexe` char(1) NOT NULL,
  `Rôle` tinyint(3) unsigned DEFAULT NULL,
  `Date_creation` date NOT NULL,
  `Date_modification` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`ID`, `Nom`, `Prenom`, `Date_de_naissance`, `Ville`, `Adresse`, `Code_postale`, `Pays`, `Sexe`, `Rôle`, `Date_creation`, `Date_modification`) VALUES
(1, 'Puig', 'Jeremy', '1999-03-15', 'Draveil', '26 allee des marronniers', 91210, 'France', 'H', 2, '0000-00-00', '0000-00-00'),
(2, 'Vy', 'Terence', '1997-09-27', 'Lognes', '2 rue Fernandel', 77185, 'Vietnam', 'H', 2, '0000-00-00', '0000-00-00'),
(3, 'Test', '1', '2017-11-07', 'Paris', 'Ceci est le test1', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00'),
(4, 'Test', '2', '2017-11-07', 'Paris', 'Ceci est le test2', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00'),
(5, 'Test', '3', '2017-11-07', 'Paris', 'Ceci est le test3', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00'),
(6, 'Test', '4', '2017-11-07', 'Paris', 'Ceci est le test4', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00'),
(7, 'Test', '5', '2017-11-07', 'Paris', 'Ceci est le test5', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00'),
(8, 'Test', '6', '2017-11-07', 'Paris', 'Ceci est le test6', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00'),
(9, 'Test', '7', '2017-11-07', 'Paris', 'Ceci est le test7', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00'),
(10, 'Test', '8', '2017-11-07', 'Paris', 'Ceci est le test8', 75000, 'France', 'H', 1, '0000-00-00', '0000-00-00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Categories`
--
ALTER TABLE `Categories`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Categorie_Produit`
--
ALTER TABLE `Categorie_Produit`
 ADD KEY `ID_categorie` (`ID_categorie`), ADD KEY `ID_produit` (`ID_produit`);

--
-- Index pour la table `Produits`
--
ALTER TABLE `Produits`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Produit_Utilisateur`
--
ALTER TABLE `Produit_Utilisateur`
 ADD KEY `ID_produit` (`ID_produit`), ADD KEY `ID_utilisateur` (`ID_utilisateur`);

--
-- Index pour la table `Rôle`
--
ALTER TABLE `Rôle`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
 ADD PRIMARY KEY (`ID`), ADD KEY `Rôle` (`Rôle`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Categories`
--
ALTER TABLE `Categories`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Produits`
--
ALTER TABLE `Produits`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `Rôle`
--
ALTER TABLE `Rôle`
MODIFY `ID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Categorie_Produit`
--
ALTER TABLE `Categorie_Produit`
ADD CONSTRAINT `Categorie_Produit_ibfk_1` FOREIGN KEY (`ID_categorie`) REFERENCES `Categories` (`ID`),
ADD CONSTRAINT `Categorie_Produit_ibfk_2` FOREIGN KEY (`ID_produit`) REFERENCES `Produits` (`ID`);

--
-- Contraintes pour la table `Produit_Utilisateur`
--
ALTER TABLE `Produit_Utilisateur`
ADD CONSTRAINT `Produit_Utilisateur_ibfk_1` FOREIGN KEY (`ID_produit`) REFERENCES `Produits` (`ID`),
ADD CONSTRAINT `Produit_Utilisateur_ibfk_2` FOREIGN KEY (`ID_utilisateur`) REFERENCES `Utilisateurs` (`ID`);

--
-- Contraintes pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
ADD CONSTRAINT `Utilisateurs_ibfk_1` FOREIGN KEY (`Rôle`) REFERENCES `Rôle` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
