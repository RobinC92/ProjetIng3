-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 mai 2019 à 21:26
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `amazon`
--

-- --------------------------------------------------------

--
-- Structure de la table `individu`
--

DROP TABLE IF EXISTS `individu`;
CREATE TABLE IF NOT EXISTS `individu` (
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Statut` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Mdp` varchar(20) NOT NULL,
  `Adresse` text NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Code_postal` text NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Telephone` text NOT NULL,
  `Photo` text NOT NULL,
  `Type_carte` varchar(255) NOT NULL,
  `Numero_carte` text NOT NULL,
  `Nom_carte` varchar(255) NOT NULL,
  `Date_expiration` text NOT NULL,
  `Code_securite` text NOT NULL,
  `Panier` text NOT NULL,
  `Solde` decimal(11,0) NOT NULL,
  PRIMARY KEY (`Pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `individu`
--

INSERT INTO `individu` (`Nom`, `Prenom`, `Pseudo`, `Statut`, `Email`, `Mdp`, `Adresse`, `Ville`, `Code_postal`, `Pays`, `Telephone`, `Photo`, `Type_carte`, `Numero_carte`, `Nom_carte`, `Date_expiration`, `Code_securite`, `Panier`, `Solde`) VALUES
('John', 'Kennedy', 'JK', 'vendeur', 'jk@gmail.com', 'mdp', 'Broadway', 'New York', '95616', 'Etats-Unis', '0675854828', 'image_individu/John.jpg', '0', '0', '0', '0', '0', 'a:0:{}', '0'),
('Bonisseur', 'Hubert', 'HB', 'vendeur', 'huber@gmail.com', 'mdp', 'Pyramide', 'Le Caire', '75555', 'Egypte', '6969696969', 'image_individu/Lucien_Bramare.png', '0', '0', '0', '0', '0', 'a:0:{}', '8'),
('admin', 'admin', 'admin', 'admin', 'admin@admin.com', 'admin', 'ECE', 'Paris', '75015', 'France', '0000000000', 'image_individu/Admin.png', '0', '0', '0', '0', '0', 'a:0:{}', '0'),
('Julien', 'Rauber', 'JulienR', 'vendeur', 'julien.rauber@edu.ece.fr', 'mdp', 'Rue de la convention', 'Paris', '75015', 'France', '0648942498', 'image_individu/Julien.jpg', '0', '0', '0', '0', '0', 'a:0:{}', '0'),
('Canaguier', 'Robin', 'RobinC', 'admin', 'robin@canaguier.com', 'mdp', '18 rue des lilas', 'Chatillon', '92320', 'France', '0686788225', 'image_individu/robin.jpg', '0', '0', '0', '0', '0', 'a:0:{}', '0'),
('Mon petit', 'Larmina', 'LM', 'vendeur', 'larmina@gmail.com', 'mdp', 'Champs elysee', 'Paris', '75016', 'France', '0645828228', 'image_individu/Larmina.png', '0', '0', '0', '0', '0', 'a:0:{}', '4'),
('Desgouillon', 'Hugo', 'HD', 'acheteur', 'huo@gmail.com', 'mdp', 'Rue du plateau', 'Malakoff', '92330', 'France', '0695855995', 'image_individu/10501742_1422651677959583_2952601630716874627_n.jpg', 'visa', '1111111111111111', 'John', '2023', '1777', 'a:0:{}', '0');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prix` text NOT NULL,
  `Description` text NOT NULL,
  `Categorie` text NOT NULL,
  `Photo` text NOT NULL,
  `Pseudo` text NOT NULL,
  `Ventes` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ID`, `Nom`, `Prix`, `Description`, `Categorie`, `Photo`, `Pseudo`, `Ventes`) VALUES
(51, 'Raquette', '99', 'Raquette de tennis Dunlop, notamment utiliser par Andy Murray', 'sport', 'image_produit/raquette.jpg', 'JK', 0),
(42, 'Harry Potter 7', '9', 'Harry Pottet et les reliques de la mort. Dernier tome de la saga culte de JK rowling.', 'livres', 'image_produit/51sGIajSnGL._SX320_BO1,204,203,200_.jpg', 'JulienR', 0),
(43, 'Harry Potter', '7', 'Premier tome de fameuse saga de JK Rowling', 'livres', 'image_produit/Harry-Potter-a-l-ecole-des-sorciers.jpg', 'JulienR', 0),
(45, 'La Peste', '6', 'La Peste du grand Albert Camus.', 'livres', 'image_produit/La-peste-d-Albert-Camus.jpg', 'JulienR', 0),
(46, 'DIctionnaire', '13', 'Le petit dictionnaire Francais LAROUSSE. ', 'livres', 'image_produit/412XMBYYFML._SX328_BO1,204,203,200_.jpg', 'JulienR', 0),
(47, 'Ballon', '4', 'Ballon de football idÃ©al pour passer du bon temps', 'sport', 'image_produit/download.jpg', 'JK', 0),
(48, 'Chaussure', '59', 'Chaussure Addidas de tres bonne qualite', 'sport', 'image_produit/713XnqLeSHL._UY500_.jpg', 'JK', 0),
(49, 'Chaussure', '69', 'Chaussure de running nike, taille 42', 'sport', 'image_produit/nike-free-tr-6-w-chaussures-running-femme-118732-1-f.jpg', 'JK', 0),
(54, 'Babouche tribale', '89', 'Magnifiques babouches marocaines en cuir imprimÃ©. 100% cuir, intÃ©rieur extÃ©rieur et au niveau de la semelle avec talon compensÃ©.', 'vetements', 'image_produit/babouche-tribale-marron.jpg', 'HB', 0),
(53, 'Babouche', '149', 'Babouche marocaine trÃ¨s raffinÃ©e en velours', 'vetements', 'image_produit/ethnique-babouche.jpg', 'HB', 0),
(55, 'Casquette', '19', 'Casquette noire, simple, facilement portable', 'vetements', 'image_produit/casquette-baseball-x-noir-cendre.jpg', 'HB', 0),
(56, 'Noeud Papillon', '8', 'Noeud Papillon aux couleurs de la France pour afficher votre patriotisme en toute circonstance', 'vetements', 'image_produit/61AgUqTNqLL._UX385_.jpg', 'HB', 1),
(57, 'PNL', '4', 'Dernier album du duo PNL', 'musiques', 'image_produit/71dFTmV2jgL._SY355_.jpg', 'LM', 0),
(58, 'Or Noir', '3', 'Album Or Noir de Kaaris', 'musiques', 'image_produit/kaaris.jpg', 'LM', 0),
(59, 'Tout Oublier', '2', 'CD du titre tout oublier de Angele', 'musiques', 'image_produit/to.png', 'LM', 0),
(60, 'Chocolat', '4', 'CD de Chocolat le dernier album de Romeo Elvis', 'musiques', 'image_produit/chocolat.jpg', 'LM', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
