-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Creato il: Mar 12, 2020 alle 09:31
-- Versione del server: 8.0.18
-- Versione PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_gruppo1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `biglietti`
--

DROP TABLE IF EXISTS `biglietti`;
CREATE TABLE IF NOT EXISTS `biglietti` (
  `CodB` char(5) NOT NULL,
  `Seduta` varchar(3) NOT NULL,
  `FK_CodS` char(5) NOT NULL,
  `FK_CodO` char(5) NOT NULL,
  PRIMARY KEY (`CodB`),
  KEY `FK_CodS` (`FK_CodS`),
  KEY `FK_CodO` (`FK_CodO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `elenco_film`
--

DROP TABLE IF EXISTS `elenco_film`;
CREATE TABLE IF NOT EXISTS `elenco_film` (
  `CodEF` char(5) NOT NULL,
  `Titolo` varchar(50) NOT NULL,
  `Descrizione` varchar(200) NOT NULL,
  `Locandina` varchar(200) NOT NULL,
  `Durata` int(11) NOT NULL,
  `FK_CodGF` char(5) NOT NULL,
  `FK_CodRF` char(5) NOT NULL,
  PRIMARY KEY (`CodEF`),
  KEY `FK_CodGF` (`FK_CodGF`),
  KEY `FK_CodRF` (`FK_CodRF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `generefilm`
--

DROP TABLE IF EXISTS `generefilm`;
CREATE TABLE IF NOT EXISTS `generefilm` (
  `CodGF` char(5) NOT NULL,
  `NomeGF` varchar(30) NOT NULL,
  PRIMARY KEY (`CodGF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

DROP TABLE IF EXISTS `ordine`;
CREATE TABLE IF NOT EXISTS `ordine` (
  `CodO` char(5) NOT NULL,
  `DataO` date NOT NULL,
  `FK_CodU` char(5) NOT NULL,
  PRIMARY KEY (`CodO`),
  KEY `FK_CodU` (`FK_CodU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `registafilm`
--

DROP TABLE IF EXISTS `registafilm`;
CREATE TABLE IF NOT EXISTS `registafilm` (
  `CodRF` char(5) NOT NULL,
  `NomeRF` varchar(30) NOT NULL,
  `CognomeRF` varchar(30) NOT NULL,
  PRIMARY KEY (`CodRF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `spettacoli`
--

DROP TABLE IF EXISTS `spettacoli`;
CREATE TABLE IF NOT EXISTS `spettacoli` (
  `CodS` char(5) NOT NULL,
  `Sala` char(1) NOT NULL,
  `Orario` time NOT NULL,
  `Costo` float NOT NULL,
  `FK_CodEF` char(5) NOT NULL,
  PRIMARY KEY (`CodS`),
  KEY `FK_CodEF` (`FK_CodEF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `CodU` char(5) NOT NULL,
  `NomeU` varchar(30) NOT NULL,
  `CognomeU` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(512) NOT NULL,
  PRIMARY KEY (`CodU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `biglietti`
--
ALTER TABLE `biglietti`
  ADD CONSTRAINT `biglietti_ibfk_1` FOREIGN KEY (`FK_CodS`) REFERENCES `spettacoli` (`CodS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `biglietti_ibfk_2` FOREIGN KEY (`FK_CodO`) REFERENCES `ordine` (`CodO`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `elenco_film`
--
ALTER TABLE `elenco_film`
  ADD CONSTRAINT `elenco_film_ibfk_1` FOREIGN KEY (`FK_CodGF`) REFERENCES `generefilm` (`CodGF`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elenco_film_ibfk_2` FOREIGN KEY (`FK_CodRF`) REFERENCES `registafilm` (`CodRF`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `ordine`
--
ALTER TABLE `ordine`
  ADD CONSTRAINT `ordine_ibfk_1` FOREIGN KEY (`FK_CodU`) REFERENCES `user` (`CodU`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `spettacoli`
--
ALTER TABLE `spettacoli`
  ADD CONSTRAINT `spettacoli_ibfk_1` FOREIGN KEY (`FK_CodEF`) REFERENCES `elenco_film` (`CodEF`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
