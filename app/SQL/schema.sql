CREATE DATABASE CareerLink;

USE CareerLink;

CREATE TABLE
    roles (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50)
    );

INSERT INTO
    roles (id, name)
VALUES
    (1, 'admin'),
    (2, 'recruteur'),
    (3, 'candidat');

CREATE TABLE
    users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50),
        email VARCHAR(50),
        password VARCHAR(255),
        role_id INT,
        FOREIGN KEY (role_id) REFERENCES roles (id)
    );


CREATE TABLE user_skills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    skill_id INT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (skill_id) REFERENCES skills(id)
);

CREATE TABLE
    categories (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(200)
    );

CREATE TABLE skills (
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
    category_id INT,
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
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


CREATE TABLE
    offer_tag (
        offer_id INT NOT NULL,
        tag_id INT NOT NULL,
        PRIMARY KEY (offer_id, tag_id),
        FOREIGN KEY (offer_id) REFERENCES offers (id) ON DELETE CASCADE,
        FOREIGN KEY (tag_id) REFERENCES tags (id) ON DELETE CASCADE
    );

<<<<<<< HEAD

INSERT INTO offers (id, title, job_name, salary, location, application_deadline, user_id) VALUES
(1, 'Backend Developer', 'PHP Developer', 8000, 'Casablanca', '2026-02-01', 1),
(2, 'Frontend Developer', 'JS Developer', 7000, 'Rabat', '2026-02-10', 2),
(3, 'UI/UX Designer', 'Designer', 6000, 'Marrakech', '2026-02-15', 3);

INSERT INTO tags (id, name) VALUES
(1, 'PHP'),
(2, 'Laravel'),
(3, 'MySQL'),
(4, 'JavaScript'),
(5, 'React'),
(6, 'Figma');


INSERT INTO offer_tag (offer_id, tag_id) VALUES
(1, 1),
(1, 2),
(1, 3),

(2, 4),
(2, 5),

(3, 6);
=======
>>>>>>> adad131347f4732407dd211a70336736ef71f7b9
