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
VALUES ('1) Wer schrieb das Original ?', 'John Roland Reuel Tolkien', 'Joanne K. Rowling', 'Margaret Carroux', 'Alfred Hitchcok');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('2) Welches Schmuckstück spielt eine zentrale Rolle im Roman?', 'Ring', 'Brosche', 'Diadem', 'Halskette');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('3) Welche Gruppe gehört zu den Vertretern des Guten?', 'Menschen des Westens', 'Menschen des Südens', 'Orks', 'Trolle');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('4) Wie lautet der Orginal-Titel?', 'The Fellowship of the Ring', 'The Ramble of the Ring', 'The Obsession by the Ring', 'The Slaughter for the Ring');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('5) Welches historische Ereignis hat gemäss Tolkien das Werk beinflusst?', '1. Weltkrieg', '2. Weltkrieg', 'Kalter Krieg', 'Hiroshima');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('6) Welche Rasse hat die Meisten Ringe?', 'Menschen', 'Zwerge', 'Orks', 'Elben');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('7) Wie lautet Merry´s voller Name ?', 'Meriadoc Brandybock', 'Merlin Tuk', 'Meriadoc Tuk', 'Merlin Brandybock');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('8) In welchem Zeitalter spielt das erste Buch', '3.', '1.', '2.', '3.');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('9) In wie vielen Büchern wurde Tolkiens Roman "Herr der Ringe" geschrieben?', '6', '3', '4', '5');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('10) Wie heisst der Gasthof in Bree?', 'zum tänzelnden Pony', 'zum Quietscheentchen', 'zum hüpfenden Kaninchen', 'zum kühnen Fuchs');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('11) Wie wird der Fluss Bruinen auch genannt?', 'Lautwasser', 'Tiefenwasser', 'Njeri', 'Brandyweinfluss');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('12) Wie viele Ringe der Macht gibt es? ', '20', '17', '12', '22');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('13) Was ist das Erkennungsmerkmal der Hobbits?', 'grosse, behaarte Füsse', 'lange Haare', '4 Finger', 'Bärte');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('14) Womit wird Frodo beim Angriff der Nazgul verletzt ?', 'Morgulklinge', 'Düsterklinge', 'Breitschwert', 'Lanze');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('15) Wer zählt nicht zu den Gefährten?', 'Dick', 'Sam', 'Merry', 'Pippin');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('16) Welcher Elb lebt nicht in Bruchtal?', 'Legolas', 'Glorfindel', 'Elrond', 'Arwen');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('17) Von wem wird Frodo nicht angegriffen? ', 'Trolle', 'Nazgul', 'Orks', 'Balrog');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('18) Wie heisst die Fürstin von Lothlorien?', 'Galadriel', 'Miriel', 'Tauriel', 'Elwing');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('19) Wie setzen die Gefährten ihre Reise nach Lohtlorien fort?', 'in Booten', 'auf Ponys', 'zu Fuss', 'auf Adler');

INSERT INTO qa (question, solution, fake1, fake2, fake3)
VALUES ('20) Wer versucht Frodo den Ring zu entnehmen?', 'Boromir', 'Arwen', 'Galadriel', 'Aragorn');





CREATE TABLE HighScore (
                           id INT PRIMARY KEY AUTO_INCREMENT,
                           username VARCHAR(255) NOT NULL UNIQUE,
                           score INT NOT NULL
);

INSERT INTO HighScore (username, score)
VALUES ('Test Score', '0');