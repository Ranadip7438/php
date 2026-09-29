CREATE DATABASE mysitedb;
USE mysitedb;

CREATE TABLE registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(150),
    gender ENUM('m','f','o'),
    mobile VARCHAR(20),
    country VARCHAR(100),
    password VARCHAR(255)
);
