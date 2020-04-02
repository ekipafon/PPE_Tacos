	DROP DATABASE IF EXISTS PPE_TACOS;

CREATE DATABASE PPE_TACOS;

USE PPE_TACOS;

CREATE TABLE IF NOT EXISTS Client
(
	idClient INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(64),
	prenom VARCHAR(64),
	adresse VARCHAR(64),
	PRIMARY KEY (idClient)
);

CREATE TABLE IF NOT EXISTS Panier
(
	idPanier INT NOT NULL AUTO_INCREMENT,
	dateCommande date,
	idClient INT,
	PRIMARY KEY (idPanier)
);

CREATE TABLE IF NOT EXISTS Tacos
(
	idTacos INT NOT NULL AUTO_INCREMENT,
	size VARCHAR,
	prix INT,
	PRIMARY KEY (idTacos)
);

CREATE TABLE IF NOT EXISTS Viande
(
	idViande INT NOT NULL AUTO_INCREMENT,
	nomViande VARCHAR,
	PRIMARY KEY (idViande)
);

CREATE TABLE IF NOT EXISTS Sauce
(
	idSauce INT NOT NULL AUTO_INCREMENT,
	nomSauce VARCHAR,
	PRIMARY KEY (idSauce)
);

CREATE TABLE IF NOT EXISTS Boisson
(
	idBoisson INT NOT NULL AUTO_INCREMENT,
	nomBoisson VARCHAR,
	PRIMARY KEY (idBoisson)
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

CREATE TABLE IF NOT EXISTS Tacos_Viande
(
    idTacos INT(11) NOT NULL,
    idViande INT(11) NOT NULL,
    PRIMARY KEY (idViande,idTacos)
);

CREATE TABLE IF NOT EXISTS Tacos_Sauce
(
    idTacos INT(11) NOT NULL,
    idSauce INT(11) NOT NULL,
    PRIMARY KEY (idSauce,idTacos)
);

ALTER TABLE Panier_Tacos
ADD CONSTRAINT Panier_Tacos_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);


ALTER TABLE Panier_Tacos
ADD CONSTRAINT Panier_Tacos_idPanier
FOREIGN KEY (idPanier)
REFERENCES Panier(idPanier);


ALTER TABLE Panier_Boisson
ADD CONSTRAINT Panier_Boisson_idBoisson
FOREIGN KEY (idBoisson)
REFERENCES Boisson(idBoisson);


ALTER TABLE Panier_Boisson
ADD CONSTRAINT Panier_Tacos_idPanier
FOREIGN KEY (idPanier)
REFERENCES Panier(idPanier);

ALTER TABLE Tacos_Viande
ADD CONSTRAINT Tacos_Viande_idViande
FOREIGN KEY (idViande)
REFERENCES Viande(idViande);


ALTER TABLE Tacos_Viande
ADD CONSTRAINT Tacos_Viande_idTacos
FOREIGN KEY(idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Tacos_Boisson
ADD CONSTRAINT Tacos_Boisson_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Tacos_Boisson
ADD CONSTRAINT Tacos_Boisson_idBoisson
FOREIGN KEY (idBoisson)
REFERENCES Boisson(idBoisson);

ALTER TABLE Panier
ADD CONSTRAINT Panier_idClient
FOREIGN KEY (idClient)
REFERENCES Client(idClient);