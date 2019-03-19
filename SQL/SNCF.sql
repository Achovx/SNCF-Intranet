drop database if exists SNCF;
create database SNCF;
use SNCF;

create table employer
(
	idEmployer int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	telephone int(11),
	adresse varchar(50),
	codePostal int(5),
	email varchar(50),
	primary key (idEmployer)
);

create table evenement
(
	idEvent int(3) not null auto_increment,
	libelle varchar(50),
	dateDebut date,
	dateFin date,
	heureDebut time,
	heureFin time,
	primary key (idEvent)
);

create table annonce
(
	idAnnonce int(3) not null auto_increment,
	libelle varchar(50),
	dateAnnonce date,
	heureAnnonce time,
	description text,
	primary key (idAnnonce)
);

create table produit
(
	idProduit int(3) not null auto_increment,
	nomProduit varchar(50),
	prix int(5),
	qteRestant int(5),
	primary key (idProduit)
);


insert into employer values
	(null, "on", "alban", "0659729022", "6 rue jules valles", "77200", "on_alban@yahoo.fr"),
	(null, "on", "albana", "0659729022", "6 rue jules valles", "77200", "on_alban@yahoo.fr");


insert into evenement values
	(null, "fete", "2018-01-02", "2018-01-02", "18:00", "22:00"),
	(null, "feta", "2018-01-02", "2018-01-02", "18:00", "22:00");

insert into annonce values
	(null, "incident", "2018-01-05", "14:00", "sur RER A"),
	(null, "incidenta", "2018-01-05", "14:00", "sur RER B");

insert into produit values
	(null, "carte transport", "5", "150"),
	(null, "carte transporta", "5", "62");