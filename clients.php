CREATE DATABASE gestion_clients;
USE gestion_clients;

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    sexe VARCHAR(10),
    ville VARCHAR(50),
    loisirs VARCHAR(100)
);

-- Facultatif pour login
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', MD5('1234'));
