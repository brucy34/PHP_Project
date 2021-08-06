-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2021 at 02:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hopital_2`
--
CREATE DATABASE IF NOT EXISTS `hopital_2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hopital_2`;

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `id_consultation` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_dossier` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL,
  `symptome` text NOT NULL,
  `date_consultation` date NOT NULL,
  UNIQUE KEY `id_consultation` (`id_consultation`),
  KEY `Consultation_no_dossier_Dossier_no_dossier` (`no_dossier`),
  KEY `Consultation_id_medecin_Médecin_id_medecin` (`id_medecin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dossier`
--

DROP TABLE IF EXISTS `dossier`;
CREATE TABLE IF NOT EXISTS `dossier` (
  `no_dossier` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_patient` int(11) NOT NULL,
  UNIQUE KEY `no_dossier` (`no_dossier`),
  KEY `Dossier_id_patient_Patient_id_patient` (`id_patient`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `id_medecin` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `sexe` text NOT NULL,
  `adresse` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL,
  `specialisation` text NOT NULL,
  PRIMARY KEY (`id_medecin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id_patient` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `sexe` text NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` text NOT NULL,
  `telephone` text NOT NULL,
  `nom_jeune_fille` tinytext NOT NULL,
  PRIMARY KEY (`id_patient`),
  KEY `id_patient` (`id_patient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `id_consultation` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ordonnance` text NOT NULL,
  UNIQUE KEY `id_consultation` (`id_consultation`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
