DROP Database if EXISTS my_gruppo1;
create Database my_gruppo1;
use my_gruppo1;


--
-- Struttura della tabella `user`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `PK_CodU` int AUTO_INCREMENT NOT NULL,
  `NomeU` varchar(30) NOT NULL,
  `CognomeU` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Priviledge` varchar(15),
  PRIMARY KEY (`PK_CodU`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Struttura della tabella `generefilm`
--

DROP TABLE IF EXISTS `generifilm`;
CREATE TABLE IF NOT EXISTS `generifilm` (
  `PK_CodG` int AUTO_INCREMENT NOT NULL,
  `Nome` varchar(30) NOT NULL,
  PRIMARY KEY (`PK_CodG`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Struttura della tabella `registafilm`
--

DROP TABLE IF EXISTS `registifilm`;
CREATE TABLE IF NOT EXISTS `registifilm` (
  `PK_CodR` int AUTO_INCREMENT NOT NULL,
  `NomeRF` varchar(30) NOT NULL,
  `CognomeRF` varchar(30) NOT NULL,
  PRIMARY KEY (`PK_CodR`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Struttura della tabella `elenco_film`
--

DROP TABLE IF EXISTS `elenco_film`;
CREATE TABLE IF NOT EXISTS `elenco_film` (
  `PK_CodF` int AUTO_INCREMENT NOT NULL,
  `Titolo` varchar(50) NOT NULL,
  `Descrizione` varchar(200) NOT NULL,
  `Locandina` varchar(200) NOT NULL,
  `Durata` int(11) NOT NULL,
  `FK_CodG` int NOT NULL,
  `FK_CodR` int NOT NULL,
  PRIMARY KEY (`PK_CodF`),
  FOREIGN KEY (`FK_CodG`) REFERENCES generifilm(`PK_CodG`),
  FOREIGN KEY (`FK_CodR`) REFERENCES registifilm(`PK_CodR`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Struttura della tabella `spettacoli`
--

DROP TABLE IF EXISTS `spettacoli`;
CREATE TABLE IF NOT EXISTS `spettacoli` (
  `PK_CodS` int AUTO_INCREMENT NOT NULL,
  `Sala` char(1) NOT NULL,
  `Orario` time NOT NULL,
  `Costo` float NOT NULL,
  `FK_CodF` int NOT NULL,
  PRIMARY KEY (`PK_CodS`),
  FOREIGN KEY (`FK_CodF`) REFERENCES elenco_film(`PK_CodF`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

DROP TABLE IF EXISTS `ordini`;
CREATE TABLE IF NOT EXISTS `ordini` (
  `PK_CodO` int AUTO_INCREMENT NOT NULL,
  `DataO` date NOT NULL,
  `FK_CodU` int NOT NULL,
  PRIMARY KEY (`PK_CodO`),
  FOREIGN KEY (`FK_CodU`) REFERENCES users(`PK_CodU`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Struttura della tabella `biglietti`
--

DROP TABLE IF EXISTS `biglietti`;
CREATE TABLE IF NOT EXISTS `biglietti` (
  `PK_CodB` int AUTO_INCREMENT NOT NULL,
  `Seduta` varchar(3) NOT NULL,
  `FK_CodS` int NOT NULL,
  `FK_CodO` int NOT NULL,
  PRIMARY KEY (`PK_CodB`),
  FOREIGN KEY (`FK_CodS`) REFERENCES  spettacoli(`PK_CodS`),
  FOREIGN KEY (`FK_CodO`) REFERENCES ordini(`PK_CodO`)
) ENGINE=InnoDB;
