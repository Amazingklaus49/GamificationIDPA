CREATE DATABASE QandA_DB;

USE QandA_DB;

CREATE TABLE QandA (
                       id INT PRIMARY KEY AUTO_INCREMENT,
                       question VARCHAR(255) NOT NULL,
                       answer VARCHAR(255) NOT NULL
);

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Feuer in der schwarzen Sprache?', 'gash');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Dreck in der schwarzen Sprache?', 'dug');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Narr in der schwarzen Sprache?', 'glob');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Geist in der schwarzen Sprache?', 'gal');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Leute in der schwarzen Sprache?', 'hai');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Turm in der schwarzen Sprache?', 'lug');

INSERT INTO QandA (question, answer)
VALUES ('Wie heisst Der Dunkle Turm in der schwarzen Sprache?', 'Lugburz');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Ring in der schwarzen Sprache?', 'nazg');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Ring-geist in der schwarzen Sprache?', 'Nazgul');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Troll in der schwarzen Sprache?', 'olog');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Grube in der schwarzen Sprache?', 'ronk');

INSERT INTO QandA (question, answer)
VALUES ('Was heisst Sklave in der schwarzen Sprache?', 'snaga');

INSERT INTO QandA (question, answer)
VALUES ('Wie lautet die Gravur des einen Ringes', 'Ein Ring sie zu knechten, sie alle zu finden, ins Dunkel zu treiben und ewig zu binden.');

INSERT INTO QandA (question, answer)
VALUES ('In welcher Zwergen Mine begegnen die Gefaehrten dem Balrog', 'Moria');

INSERT INTO QandA (question, answer)
VALUES ('Wie heisst der Schwiegervater von Drogo Beutlin, Frodos Vater, mit Vornamen?', 'Gorbadoc');

INSERT INTO QandA (question, answer)
VALUES ('Wie wird die Kleidung von Tom Bombadil beschrieben?', 'gelbe Stiefel, blaue Jacke, Hut mit blauer Feder
');

INSERT INTO QandA (question, answer)
VALUES ('Wie heisst der Grosse Baer in der Hobbitsprache?', 'Sichel');

INSERT INTO QandA (question, answer)
VALUES ('Was bedeutet "Noro Lim"?', 'Reite Zu');

INSERT INTO QandA (question, answer)
VALUES ('Was sagt Isildur ueber den Einen Ring?', 'Heiß war er, als ich zuerst nach ihm griff.');

INSERT INTO QandA (question, answer)
VALUES ('Wie lautet das elbische Wort für "Ork"?', 'Yrch');




CREATE TABLE HighScore (
                       id INT PRIMARY KEY AUTO_INCREMENT,
                       username VARCHAR(255) NOT NULL UNIQUE,
                       score INT NOT NULL
);

INSERT INTO HighScore (username, score)
VALUES ('Test Score', '0');