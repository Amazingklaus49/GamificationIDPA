CREATE DATABASE multiple_DB;

USE multiple_DB;

CREATE TABLE qa (
                       id INT PRIMARY KEY AUTO_INCREMENT,
                       question VARCHAR(255) NOT NULL,
                       solution VARCHAR(255) NOT NULL,
                       fake1 VARCHAR(255) NOT NULL,
                       fake2 VARCHAR(255) NOT NULL,
                       fake3 VARCHAR(255) NOT NULL
);

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('What is the capital of France?', '1', 'Paris', 'Istanbul', 'Wangen');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('Who invented the telephone?', '2', 'Samuel', 'Mateja', 'Johannes');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('What is the highest mountain in the world?', '3', 'Njeri', 'Ben', 'Matterhorn');

CREATE TABLE HighScore (
                           id INT PRIMARY KEY AUTO_INCREMENT,
                           username VARCHAR(255) NOT NULL UNIQUE,
                           score INT NOT NULL
);

INSERT INTO HighScore (username, score)
VALUES ('Test Score', '0');