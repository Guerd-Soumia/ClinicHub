CREATE DATABASE IF NOT EXISTS patient_management;

USE patient_management;

CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code_patient VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    numero_telephone VARCHAR(20) NOT NULL,
    situation VARCHAR(100) NOT NULL,
    service_militaire VARCHAR(100) NOT NULL
);
