CREATE DATABASE CareerLink;

USE CareerLink;

CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);

INSERT INTO
    roles (id, name)
VALUES (1, 'admin'),
    (2, 'recruteur'),
    (3, 'candidat');

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(255),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles (id)
);

CREATE TABLE user_skills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    job VARCHAR(255),
    skills VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users (id)
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200)
);

CREATE TABLE tags (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories (id)
);

CREATE TABLE offers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    salary VARCHAR(50),
    location VARCHAR(100),
    description VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users (id)
);

CREATE TABLE postule (
    id INT PRIMARY KEY AUTO_INCREMENT,
    letter VARCHAR(255),
    document MEDIUMBLOB NOT NULL,
    user_id INT,
    offer_id INT,
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (offer_id) REFERENCES offers (id)
);