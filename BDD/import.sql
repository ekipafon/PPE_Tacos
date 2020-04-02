	DROP DATABASE IF EXISTS PPE_TACOS;

CREATE DATABASE IF NOT EXISTS PPE_TACOS;
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE PPE_TACOS;

CREATE TABLE IF NOT EXISTS Client 
(
	idClient INT(11) NOT NULL AUTO_INCREMENT,
	prenom VARCHAR(64),
	nom VARCHAR(64),
	adresse VARCHAR(64),
	PRIMARY KEY (idClient)
);

CREATE TABLE IF NOT EXISTS Panier 
(
	idPanier INT(11) NOT NULL AUTO_INCREMENT,
	idTacos INT,
	PRIMARY KEY (idPanier)

);

CREATE TABLE IF NOT EXISTS Tacos 
(
	idTacos INT(11) NOT NULL AUTO_INCREMENT,
	taille  VARCHAR(64),
	prixTacos INT(11),
	idViande INT,
	idSauce INT,
	PRIMARY KEY (idTacos)
);

CREATE TABLE IF NOT EXISTS Sauce 
(
	idSauce INT(11) NOT NULL AUTO_INCREMENT,
	nomSauce VARCHAR(64),
	PRIMARY KEY (idSauce)
);

CREATE TABLE IF NOT EXISTS Viande 
(
	idViande INT(11) NOT NULL AUTO_INCREMENT,
	nomViande VARCHAR(64),
	PRIMARY KEY (idViande)
);

CREATE TABLE IF NOT EXISTS Boisson
(
	idBoisson INT(11) NOT NULL AUTO_INCREMENT,
	nomBoisson VARCHAR(64),
	prixBoisson INT(11),
	PRIMARY KEY (idBoisson)
);

CREATE TABLE IF NOT EXISTS Client_Panier
(
	idClient INT(11) NOT NULL,
	idPanier INT(11) NOT NULL,
	PRIMARY KEY (idClient,idPanier)
);

CREATE TABLE IF NOT EXISTS Tacos_Sauce
(
	idTacos INT(11) NOT NULL,
	idSauce INT(11) NOT NULL,
	PRIMARY KEY (idSauce,idTacos)
);

CREATE TABLE IF NOT EXISTS Tacos_Viande
(
	idTacos INT(11) NOT NULL,
	idViande INT(11) NOT NULL,
	PRIMARY KEY (idViande,idTacos)
);

CREATE TABLE IF NOT EXISTS Panier_Tacos
(
	idTacos INT(11) NOT NULL,
	idPanier INT(11) NOT NULL,
	PRIMARY KEY (idTacos,idPanier)
);

CREATE TABLE IF NOT EXISTS Panier_Boisson
(
	idBoisson INT(11) NOT NULL,
	idPanier INT(11) NOT NULL,
	PRIMARY KEY (idBoisson,idPanier)
);

ALTER TABLE Client_Panier
ADD CONSTRAINT Client_Panier_idClient
FOREIGN KEY (idClient)
REFERENCES Client (idClient);

ALTER TABLE Client_Panier
ADD CONSTRAINT Client_Panier_idPanier
FOREIGN KEY (idPanier)
REFERENCES Panier (idPanier);

ALTER TABLE Panier_Boisson
ADD CONSTRAINT Boisson_Panier_idBoisson
FOREIGN KEY (idBoisson)
REFERENCES Boisson (idBoisson);

ALTER TABLE Panier_Boisson
ADD CONSTRAINT Boisson_Panier_idPanier
FOREIGN KEY (idPanier)
REFERENCES Panier (idPanier);

ALTER TABLE Panier_Tacos
ADD CONSTRAINT Panier_Tacos_idPanier
FOREIGN KEY (idPanier)
REFERENCES Panier (idPanier);

ALTER TABLE Panier_Tacos
ADD CONSTRAINT Panier_Tacos_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos (idTacos);

ALTER TABLE Tacos_Viande
ADD CONSTRAINT Tacos_Viande_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos (idTacos);

ALTER TABLE Tacos_Viande
ADD CONSTRAINT Tacos_Viande_idViande
FOREIGN KEY (idViande)
REFERENCES Viande (idViande);

ALTER TABLE Tacos_Sauce
ADD CONSTRAINT Tacos_Sauce_idSauce
FOREIGN KEY (idSauce)
REFERENCES Sauce (idSauce);

ALTER TABLE Tacos_Sauce
ADD CONSTRAINT Tacos_Sauce_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos (idTacos);