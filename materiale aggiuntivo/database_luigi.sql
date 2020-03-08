use my_gruppo1;

create table user
(

	CodU char(5) not null,
	NomeU varchar(30) not null,
	CognomeU varchar(30) not null, 
	Email varchar(30) not null,
	Password varchar(512) not null,
	Primary Key(CodU)

)Engine=INNODB;

create table GenereFilm
(

	CodGF char(5) not null,
	NomeGF varchar(30) not null,
	Primary Key(CodGF)

)Engine=INNODB;

create table RegistaFilm
(

	CodRF char(5) not null,
	NomeRF varchar(30) not null,
	CognomeRF varchar(30) not null, 
	Primary Key(CodRF)

)Engine=INNODB;

create table Ordine
(

	CodO char(5) not null,
	DataO date not null,
	FK_CodU char(5) not null, 
	FOREIGN KEY (FK_CodU) REFERENCES user(CodU)
	Primary Key(CodO)

)Engine=INNODB;


create table Elenco_Film
(

	CodEF char(5) not null,
	Titolo varchar(50) not null,
	Descrizione varchar(200) not null,
	Locandina varchar(200) not null,
	Durata int not null,

	FK_CodGF char(5) not null,
	FK_CodRF char(5) not null,
	FOREIGN KEY (FK_CodGF) REFERENCES GenereFilm(CodGF)
	FOREIGN KEY (FK_CodRF) REFERENCES RegistaFilm(CodRF)

	Primary Key(CodEF)

)Engine=INNODB;

create table Spettacoli
(

	CodS char(5) not null,
	Sala char(1) not null,
	Orario time not null,
	Costo float not null,

	FK_CodEF char(5) not null,
	FOREIGN KEY (FK_CodEF) REFERENCES Elenco_Film(CodEF)

	Primary Key(CodS)

)Engine=INNODB;


create table Biglietti
(

	CodB char(5) not null,
	Seduta varchar(3) not null,

	FK_CodS char(5) not null,
	FK_CodO char(5) not null,
	FOREIGN KEY (FK_CodS) REFERENCES Spettacoli(CodS)
	FOREIGN KEY (FK_CodO) REFERENCES Ordine(CodO)

	Primary Key(CodB)

)Engine=INNODB;
