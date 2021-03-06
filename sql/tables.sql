USE bootigniter;

DROP TABLE IF EXISTS News;
DROP TABLE IF EXISTS Events;
DROP TABLE IF EXISTS Announcements;

CREATE TABLE News (
id INT(3) AUTO_INCREMENT NOT NULL,
title VARCHAR(30) NOT NULL,
content TEXT NOT NULL,
PRIMARY KEY(id));

CREATE TABLE Events (
id INT(3) AUTO_INCREMENT NOT NULL,
title VARCHAR(30) NOT NULL,
content TEXT NOT NULL,
PRIMARY KEY(id));

CREATE TABLE Announcements (
id INT(3) AUTO_INCREMENT NOT NULL,
title VARCHAR(30) NOT NULL,
content TEXT NOT NULL,
PRIMARY KEY(id));