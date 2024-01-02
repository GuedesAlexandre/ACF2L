-- Création de la base de données ASTA_ACF2L
CREATE DATABASE ASTA_ACF2L;

-- Utilisation de la base de données ASTA_ACF2L
USE ASTA_ACF2L;

-- Création de la table USER
CREATE TABLE ASTA_USER (
    USER_ID INT PRIMARY KEY,
    NOM VARCHAR(50),
    PRENOM VARCHAR(50),
    EMAIL VARCHAR(100),
    PASSWORD VARCHAR(100),
    BIRTHDATE DATE,
    ADRESSE VARCHAR(200),
    ROLE VARCHAR(50)
);

-- Création de la table PILOTES
CREATE TABLE ASTA_PILOTES (
    ID_PILOTES INT PRIMARY KEY,
    NOM VARCHAR(50),
    PRENOM VARCHAR(50),
    BIRTHDATE DATE,
    TYPE_AVION VARCHAR(50)
);


-- Création de la table ADHERENTS
CREATE TABLE ASTA_ADHERENTS (
    ADHERENT_ID INT PRIMARY KEY,
    NOM VARCHAR(50),
    PRENOM VARCHAR(50),
    CIVILITE VARCHAR(50),
    SITUATION VARCHAR(50),
    TEL VARCHAR(50),
    EMAIL VARCHAR(100),
    PASSWORD VARCHAR(100),
    BIRTHDATE DATE,
    ADRESSE VARCHAR(200),
    ROLE VARCHAR(50)
);

-- Création de la table AVIONS

CREATE TABLE ASTA_AVIONS (
    ID_AVIONS INT PRIMARY KEY,
    ID_PILOTES INT,
    MODELE VARCHAR(50),
   CAPACITE VARCHAR(200),
   POIDS_A_VIDE INT,
   AUTONOMIE INT,
   CONSSOMATION VARCHAR(50),
   DESCRIPTION VARCHAR(1000),

    FOREIGN KEY (ID_PILOTES) REFERENCES ASTA_PILOTES(ID_PILOTES)
);

-- Création de la table RESERVATION
CREATE TABLE ASTA_RESERVATION (
    ADHERENT_ID INT,
    ID_PILOTES INT,
    DATE_RESERVATION DATE,
    HEURE_RESERVATION TIME,
    DESCRIPTION VARCHAR(200),
    PRIMARY KEY (ADHERENT_ID, ID_PILOTES),
    FOREIGN KEY (ADHERENT_ID) REFERENCES ASTA_ADHERENTS(ADHERENT_ID),
    FOREIGN KEY (ID_PILOTES) REFERENCES ASTA_PILOTES(ID_PILOTES)
);

  <div class="dropdown show">
                            <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ri-user-line"></i></a>
                            <div class="dropdown-menu menu-connect" aria-labelledby="dropdownMenuLink">
                                <a style="gap: 5px;" class="dropdown-item d-flex align-items-center" href="Services_Back/Compte.php"><i style="font-size: 18px;" class="ri-user-add-line"></i> Mon Compte</a>
                                <hr class="drop-hr" />
                                <a style="gap: 4px;" class="dropdown-item d-flex align-items-center" href="Services_Back/deconnexion.php"><ion-icon style="font-size: 24px;" name="log-in-outline"></ion-icon>Déconnexion</a>
                            </div>
                        </div>