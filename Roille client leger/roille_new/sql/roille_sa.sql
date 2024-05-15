DROP DATABASE IF EXISTS roille_sa;
CREATE DATABASE roille_sa;
USE roille_sa;

CREATE TABLE technicien (
    idtechnicien INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30),
    adr VARCHAR(100) NOT NULL,
    tel CHAR(10)
);

CREATE TABLE utilisateur (
    iduser INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30),
    email VARCHAR(30) NOT NULL,
    mdp VARCHAR(255),
    roles VARCHAR(30)
);

CREATE TABLE client (
    idclient INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    adr VARCHAR(30) NOT NULL,
    tel VARCHAR(30),
    email VARCHAR(30),
    mdp VARCHAR(255)
);

CREATE TABLE particulier (
    idclient INT PRIMARY KEY AUTO_INCREMENT,
    prenom VARCHAR(30) NOT NULL,
    nom VARCHAR(30) NOT NULL,
    adr VARCHAR(30) NOT NULL,
    tel VARCHAR(30),
    email VARCHAR(30),
    mdp VARCHAR(255) NOT NULL,
    FOREIGN KEY (idclient) REFERENCES client(idclient)
);

CREATE TABLE entreprise (
    idclient INT PRIMARY KEY AUTO_INCREMENT,
    siret VARCHAR(30) NOT NULL,
    statut VARCHAR(30) NOT NULL,
    tel VARCHAR(30),
    nom VARCHAR(30) NOT NULL,
    adr VARCHAR(30) NOT NULL,
    email VARCHAR(30),
    mdp VARCHAR(255) NOT NULL,
    FOREIGN KEY (idclient) REFERENCES client(idclient)
);


CREATE TABLE contrat (
    idcontrat INT PRIMARY KEY AUTO_INCREMENT,
    idclient INT NOT NULL,
    date_deb VARCHAR(30),
    date_fin VARCHAR(30),
    etat_c VARCHAR(100) NOT NULL,
    FOREIGN KEY (idclient) REFERENCES client(idclient)
);

CREATE TABLE materiel (
    idmateriel INT PRIMARY KEY AUTO_INCREMENT,
    idcontrat INT NOT NULL,
    nom VARCHAR(50),
    types VARCHAR(50),
    img varchar(1000) NOT NULL,
    descriptions TEXT NOT NULL,
    prix VARCHAR(50) NOT NULL,
    FOREIGN KEY (idcontrat) REFERENCES contrat(idcontrat)
);

CREATE TABLE intervention (
    idintervention INT PRIMARY KEY AUTO_INCREMENT,
    idmateriel INT NOT NULL,
    idclient INT NOT NULL,
    descriptions TEXT NOT NULL,
    dateheure DATETIME,
    FOREIGN KEY (idmateriel) REFERENCES materiel(idmateriel),
    FOREIGN KEY (idclient) REFERENCES client(idclient)
);

CREATE TABLE reservation (
    idreservation INT PRIMARY KEY AUTO_INCREMENT,
    idclient INT,
    idmateriel int,
    date_reservation DATE,
    FOREIGN KEY (idclient) REFERENCES client(idclient),
    FOREIGN KEY (idmateriel) REFERENCES materiel(idmateriel)
);

INSERT INTO utilisateur (nom, prenom, email, mdp, roles) VALUES
    ('Olivier', 'Paul', 'a@gmail.com', '123', 'particulier'),
    ('Marie', 'Lucie', 'b@gmail.com', '456', 'entreprise');

INSERT INTO technicien (idtechnicien, nom, prenom, adr, tel) VALUES
    (null, 'KAMARA', 'Ali', '58 rue DAVIOUD', '0652439675'),
    (null, 'DIALLO', 'Adrien', '56 rue rodin', '0756423106'),
    (null, 'KANT', 'Emmanuel', '27 rue du Maroc', '0652419678');

INSERT INTO client (idclient, nom, prenom, adr, tel, email, mdp) VALUES
    (null, 'LELLOI', 'Brice', '16 rue de la Fourche', '0748279274', 'ik@outlook.me', '123'),
    (null, 'Pierre', 'Alin', '12 rue Clichy', '0645279274', 'l@yahoo.com', '456'),
    (null, 'Diallo', 'Brad', '73 rue Lamarck', '0763534294', 'y@gmail.fr', '780'),
    (null, 'Bio cbon', 'Colin', '3 rue de Lamartine', '0948279274', 'biocbon@entreprise.com.', '123'),
    (null, 'ROCQ', 'Joe', '12 rue du Maroc', '0245279274', 'rocq@entreprise.com', '456');

INSERT INTO particulier (prenom, nom, adr, tel, email, mdp) VALUES
    ('India', 'LELLOI', '16 rue de la Fourche', '0748279274', 'ik@outlook.me', '123'),
    ('Loic', 'Pierre', '12 rue Clichy', '0645279274', 'l@yahoo.com', '456'),
    ('Yvan', 'Diallo', '73 rue Lamarck', '0763534294', 'y@gmail.fr', '780');

INSERT INTO entreprise (siret, statut, tel, nom, adr, email, mdp) VALUES
    ('123456789', 'SAS', '0948279274', 'Bio cbon', '3 rue de Lamartine', 'biocbon@entreprise.com', '123'),
    ('029456789', 'EUrl', '0123456789', 'Rocq', '12 rue du Maroc', 'rocq@entreprise.com', '456');

INSERT INTO contrat (idcontrat, idclient, date_deb, date_fin, etat_c) VALUES
    (null, 1, '2021-01-01', '2023-12-10', 'en cours'),
    (null, 2, '2021-06-04', '2023-11-10', 'fini'),
    (null, 3, '2021-01-01', '2023-12-10', 'en cours');

INSERT INTO materiel (idmateriel, idcontrat, nom, types, img, prix ) VALUES
    (null, 1, 'Tournevis plat', 'BTP', 'tournevis_plat.png',5),
    (null, 2, 'Pince a bec', 'BTP', 'pince_a_bec.jpg',7),
    (null, 1, 'Tournevis etoile', 'BTP', 'Tournevis_etoile',5),
    (null, 2, 'Souffleure', 'Netoyage', 'souffleur.jpeg' ,40),
    (null, 1, 'Balayeuse accompagner', 'Netoyage','balayeuse_accompa.jpg',75),
    (null, 3, 'Nettoyeur haut pression', 'Netoyage','karcher.jpg',85),
    (null, 2, 'Pinceau plat', 'Peinture', 'pinceau_plat',15),
    (null, 1, 'Ensemble pompe a peinture"', 'Peinture', 'ensemble-pompe-peinture.jpg',110),
    (null, 3, 'Rouleau', 'Peinture', 'rouleau.jpeg',10),
    (null, 3, 'Perceuse viseuse', 'Perforation','perforateur.jpg',25),
    (null, 2, 'Perforatrice hydraulique', 'Perforation','perforatrice_hydraulique.jpg',110),
    (null, 1, 'Marteau perforateur', 'Perforation', 'marteau_perforateur.jpg',35),
    (null, 2, 'Ponceuse', 'Poncage', 'ponceuse.jpeg',40),
    (null, 3, 'Languette de poncage', 'Ponçage', 'languette_de_ponçage.jpg','inclus'),
    (null, 1, 'Ponceuse de sol en beton', 'Poncage','ponceuse_sol_beton' ,50),
    (null, 3, 'Scie egoine stanley', 'Sciage', 'scie-egoine-stanley.jpg',20),
    (null, 2, 'Scie circulaire', 'Sciage','scie_circulaire.jpg' ,40),
    (null, 2, 'Scie plongeante', 'Sciage','scie-plongeante.jpg' ,60),
    (null, 1, 'Soudeuse Fibre', 'Soudure','soudeuse_fibre.jpeg' ,70),
    (null, 2, 'Positionneur de soudage 500Kg', 'Soudure', 'positionneur_de_soudage_500Kg.png',200),
    (null, 3, 'Poste a souder', 'Soudure','poste_a_souder.jpg' ,70),
    (null, 3, 'Excavatrice de taille standars ', 'Terrasement','engin_terrassement.jpeg' ,360),
    (null, 1, 'Compacteur a plaque vibrante', 'Terrasement','terrassement1.jpeg' ,110),
    (null, 2, 'Pilonneuse husqvarna', 'Terrasement', 'terrassement2.jpg',90);



INSERT INTO intervention (idintervention, idmateriel,  idclient, descriptions, dateheure) VALUES
    (null, 1, 1, 'Description3', '2023-11-15 09:00:00'),
    (null, 2, 2, 'Description2', '2021-10-09 09:00:00');



INSERT INTO reservation (idclient, idmateriel, date_reservation) VALUES
    (1, 1, '2024-01-18'),
    (2, 2, '2024-01-19'),
    (1, 1, '2024-01-20');
