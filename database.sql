-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 22 oct. 2023 à 09:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fridi`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(100) NOT NULL,
  `phone_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `file_admin` text NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom_admin`, `phone_admin`, `password_admin`, `file_admin`) VALUES
(5, 'admin01', '0999576452', '25d55ad283aa400af464c76d713c07ad', 'DFKW9672.JPG'),
(7, 'admin 02', '0781182532', '4428c6c474502e61151877825bb41961', 'WIN_20230830_16_48_03_Pro.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `table_articlepublier`
--

DROP TABLE IF EXISTS `table_articlepublier`;
CREATE TABLE IF NOT EXISTS `table_articlepublier` (
  `id_publiable` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `coauteurs` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `domaine` varchar(50) NOT NULL,
  `LaDate` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `livreAuteur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_publiable`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `table_auteur`
--

DROP TABLE IF EXISTS `table_auteur`;
CREATE TABLE IF NOT EXISTS `table_auteur` (
  `id_auteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `is_approved` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `table_auteur`
--

INSERT INTO `table_auteur` (`id_auteur`, `nom`, `email`, `password`, `file`, `is_approved`) VALUES
(23, 'jeanpierre', 'sam@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'fridi.png', 1),
(24, 'jeanpierre', 'jeanpie@gmail.com', '1fbfd7e30f57a983fc334e0e13ec8dc1', 'jeanpie.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_facture`
--

DROP TABLE IF EXISTS `table_facture`;
CREATE TABLE IF NOT EXISTS `table_facture` (
  `id_facture` int(11) NOT NULL,
  `nom_auteur` varchar(50) DEFAULT NULL,
  `montant_paye` int(11) DEFAULT NULL,
  `motif_paiement` varchar(50) DEFAULT NULL,
  `date_paiement` timestamp NULL DEFAULT NULL,
  `signature_fridi` varchar(50) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_auteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_facture`),
  KEY `id_admin` (`id_admin`),
  KEY `id_auteur` (`id_auteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `table_livre`
--

DROP TABLE IF EXISTS `table_livre`;
CREATE TABLE IF NOT EXISTS `table_livre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `coauteurs` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `domaine` varchar(50) NOT NULL,
  `avatarAuteur` text NOT NULL,
  `livreAuteur` text NOT NULL,
  `laDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_published` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `table_livre`
--

INSERT INTO `table_livre` (`id`, `first_name`, `last_name`, `coauteurs`, `phone`, `type`, `titre`, `domaine`, `avatarAuteur`, `livreAuteur`, `laDate`, `is_published`) VALUES
(18, 'lekuste', 'isaac', 'frederick', 999576452, 'ouvrage', 'conception d\'un logiciel gestion de stock', 'Informatique', '31224725_104731843725896_6246128177878401024_n.jpg', '0212-formation-programmation-langage-c.pdf', '2023-10-12 11:19:32', 1),
(19, 'sammy', 'douze', 'Dr kalumendo, Prof frederick', 999576452, 'article', 'conception d\'un logiciel de la gestion du fridi', 'Informatique', 'hero-bg.jpg', 'cÃ´tes UOM.ods', '2023-10-16 15:38:07', 1),
(16, 'lekuste', 'isaac', 'frederick', 999576452, 'ouvrage', 'conception d\'un logiciel gestion de stock', 'Informatique', '31224725_104731843725896_6246128177878401024_n.jpg', '0212-formation-programmation-langage-c.pdf', '2023-10-12 11:19:32', 1),
(8, 'john', 'wasukundi', 'frederick', 999576452, 'ouvrage', 'conception d\'un logiciel de reservation', 'Informatique dans le Web', 'hero-bg.jpg', 'Horaire des jours de rencontre.odt', '2023-10-11 09:43:40', 1),
(20, 'sammy', 'douze', 'Dr kalumendo, Prof frederick', 999576452, 'article', 'conception d\'un logiciel de la gestion du fridi', 'Informatique', 'hero-bg.jpg', 'cÃ´tes UOM.ods', '2023-10-16 15:38:07', 1),
(21, 'sammy', 'wasukundi', 'will', 999576452, 'ouvrage', 'conception d\'un logiciel', 'Informatique', '170742415_767814870539745_3985928662301115144_n.jpg', '0212-formation-programmation-langage-c.pdf', '2023-10-17 05:00:32', 1),
(22, 'sammy', 'wasukundi', 'will', 999576452, 'ouvrage', 'conception d\'un logiciel', 'Informatique', '170742415_767814870539745_3985928662301115144_n.jpg', '0212-formation-programmation-langage-c.pdf', '2023-10-17 05:00:32', 1),
(23, 'sammy', 'wasukundi', 'will', 999576452, 'ouvrage', 'conception d\'un logiciel', 'Informatique', '170742415_767814870539745_3985928662301115144_n.jpg', '0212-formation-programmation-langage-c.pdf', '2023-10-17 05:05:56', 1),
(24, 'sammy', 'wasukundi', 'will', 999576452, 'ouvrage', 'conception d\'un logiciel', 'Informatique', '170742415_767814870539745_3985928662301115144_n.jpg', '0212-formation-programmation-langage-c.pdf', '2023-10-17 05:05:56', 1),
(25, 'pyjean', 'isaac', 'will', 999576452, 'ouvrage', 'conception d\'un logiciel gestion de stock', 'Informatique dans le Web', '31224725_104731843725896_6246128177878401024_n.jpg', 'UNIVERSTITE ADVENTISTE DE LUKANGA.odt', '2023-10-17 12:43:37', 1),
(26, 'pyjean', 'isaac', 'will', 999576452, 'ouvrage', 'conception d\'un logiciel gestion de stock', 'Informatique dans le Web', '31224725_104731843725896_6246128177878401024_n.jpg', 'UNIVERSTITE ADVENTISTE DE LUKANGA.odt', '2023-10-17 12:43:37', 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_message`
--

DROP TABLE IF EXISTS `table_message`;
CREATE TABLE IF NOT EXISTS `table_message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `date_message` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `destinataire_mail` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `monTextarea` varchar(50) NOT NULL,
  `monInputFile` varchar(100) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `table_message`
--

INSERT INTO `table_message` (`id_message`, `date_message`, `destinataire_mail`, `message`, `monTextarea`, `monInputFile`) VALUES
(3, '2023-10-02 19:29:55', 'fridiuniluk@gmail.com', 'hello', 'eventaire aoÃ»t.pdf', 'eventaire aoÃ»t.pdf'),
(4, '2023-10-02 19:34:07', 'fridiuniluk@gmail.com', 'comment allez vous ?', 'rapport de lecture de 128 pages PDF.pdf', 'rapport de lecture de 128 pages PDF.pdf'),
(5, '2023-10-02 20:12:28', 'fridiuniluk@gmail.com', 'encore un autre', 'ALGORITHMIQUE_83_ExerciceS_corriges_By_E.pdf', 'ALGORITHMIQUE_83_ExerciceS_corriges_By_E.pdf'),
(6, '2023-10-02 20:13:24', 'fridiuniluk@gmail.com', 'un autre essais', 'exercice.pdf', 'exercice.pdf'),
(7, '2023-10-02 20:17:18', 'fridiuniluk@gmail.com', 'un autre essais', 'exercice.pdf', 'exercice.pdf'),
(8, '2023-10-03 11:55:55', 'fridiuniluk@gmail.com', 'aaaaaaaaaaaaa', 'exercice.pdf', 'exercice.pdf'),
(9, '2023-10-03 12:11:45', 'fridiuniluk@gmail.com', 'bbbbbbbbbbbb', 'INSO_147_0010.pdf', 'INSO_147_0010.pdf'),
(10, '2023-10-03 12:12:05', 'fridiuniluk@gmail.com', 'bbbbbbbb', 'INSO_147_0010.pdf', 'INSO_147_0010.pdf'),
(11, '2023-10-03 14:47:40', 'fridiuniluk@gmail.com', '121222121212', 'INSO_147_0010.pdf', 'INSO_147_0010.pdf'),
(12, '2023-10-03 14:48:04', 'fridiuniluk@gmail.com', '1212121212', 'S1.pdf', 'S1.pdf'),
(13, '2023-10-04 15:07:03', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(14, '2023-10-04 15:12:19', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(15, '2023-10-04 15:14:01', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(16, '2023-10-04 15:17:45', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(17, '2023-10-04 15:20:44', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(18, '2023-10-04 15:22:06', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(19, '2023-10-04 15:28:31', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(20, '2023-10-04 15:28:44', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(21, '2023-10-04 15:29:13', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(22, '2023-10-04 15:30:39', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf'),
(23, '2023-10-04 15:31:39', 'fridiuniluk@gmail.com', 'abe', 'c++.pdf', 'c++.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
