-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 04 Avril 2013 à 17:14
-- Version du serveur: 5.1.44
-- Version de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `getion_comp`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE IF NOT EXISTS `competences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `Groupe` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id`, `libelle`, `type`, `Groupe`) VALUES
(1, 'Allemand', 'Cométences Linguistiques', 'Linguistique'),
(8, 'Contonais', 'Competences Liguistique', 'Linguistique'),
(7, 'Arabe', 'Competences Liguistique', 'Linguistique'),
(6, 'Anglais', 'Competences Liguistique', 'Linguistique'),
(9, 'ADO', 'Communication & Réseau', 'Specifique'),
(10, 'coreen', 'Competences Linguistique', 'Linguistique'),
(11, 'danois', 'Competences Linguistique', 'Linguistique'),
(12, 'Espagnol', 'Competences Linguistique', 'Linguistique'),
(13, 'Finlandais', 'Competences Linguistique', 'Linguistique');

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(8) NOT NULL,
  `NOM` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Tel` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `motpasse` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `manager`
--

INSERT INTO `manager` (`id`, `cin`, `NOM`, `Prenom`, `Email`, `Tel`, `login`, `motpasse`) VALUES
(1, '05476895', 'Anane', 'Abd El Jalil', 'abdeljalilAnane', '21382761', 'jaloul', 'jaloul');

-- --------------------------------------------------------

--
-- Structure de la table `service_supervise`
--

CREATE TABLE IF NOT EXISTS `service_supervise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(200) NOT NULL,
  `cin_Manager` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `service_supervise`
--

INSERT INTO `service_supervise` (`id`, `service`, `cin_Manager`) VALUES
(1, 'informatique', '5476895'),
(2, 'maarketing', '5476895'),
(3, 'info', '05476895');

-- --------------------------------------------------------

--
-- Structure de la table `Teste`
--

CREATE TABLE IF NOT EXISTS `Teste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` int(11) NOT NULL,
  `tesbb` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `Teste`
--

INSERT INTO `Teste` (`id`, `test`, `tesbb`) VALUES
(1, 111, 1111);

-- --------------------------------------------------------

--
-- Structure de la table `type_comp`
--

CREATE TABLE IF NOT EXISTS `type_comp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `type_comp`
--

INSERT INTO `type_comp` (`id`, `type`) VALUES
(1, 'Competences Liguistique'),
(2, 'Competences Spécifique'),
(3, 'Competences de Base'),
(4, 'Communication & Réseau'),
(5, 'Domaine d''application'),
(6, 'Langage et Base de donnée'),
(7, 'Materiel'),
(8, 'outils logiciel & burotique'),
(9, 'Systeme d''exploitation & serveur');
