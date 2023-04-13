CREATE DATABASE QandA_DB;

USE QandA_DB;

CREATE TABLE QandA (
                       id INT PRIMARY KEY AUTO_INCREMENT,
                       question VARCHAR(255) NOT NULL,
                       answer VARCHAR(255) NOT NULL
);

INSERT INTO QandA (question, answer)
VALUES ('What is the capital of France?', '1');

INSERT INTO QandA (question, answer)
VALUES ('Who invented the telephone?', '2');

INSERT INTO QandA (question, answer)
VALUES ('What is the highest mountain in the world?', '3');

INSERT INTO QandA (question, answer)
VALUES ('Biggest Njeri in the world?', 'Samuel');

CREATE TABLE HighScore (
                       id INT PRIMARY KEY AUTO_INCREMENT,
                       username VARCHAR(255) NOT NULL UNIQUE,
                       score INT NOT NULL
);

INSERT INTO HighScore (username, score)
VALUES ('Test Score', '0');