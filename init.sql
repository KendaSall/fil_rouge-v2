-- Création de la base de données aws_p3_g1
CREATE DATABASE IF NOT EXISTS profil;

-- Utilisation de la base de données aws_p3_g1
USE profil;

-- Création de la table personnes
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    photo VARCHAR(255),
    dateNaissance DATE
    

);
