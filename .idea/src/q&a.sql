CREATE DATABASE QandA_DB;

USE QandA_DB;

CREATE TABLE QandA (
                       id INT PRIMARY KEY AUTO_INCREMENT,
                       question VARCHAR(255) NOT NULL,
                       answer VARCHAR(255) NOT NULL
);

INSERT INTO QandA (question, answer)
VALUES ('What is the capital of France?', 'Paris');

INSERT INTO QandA (question, answer)
VALUES ('Who invented the telephone?', 'Alexander Graham Bell');

INSERT INTO QandA (question, answer)
VALUES ('What is the highest mountain in the world?', 'Mount Everest');

INSERT INTO QandA (question, answer)
VALUES ('Biggest Njeri in the world?', 'Samuel Wachter');