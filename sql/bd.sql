CREATE DATABASE IF NOT EXISTS store;

USE store;

CREATE TABLE IF NOT EXISTS clients (
    id INTEGER NOT NULL AUTO_INCREMENT,
    doctype CHAR(2) NOT NULL,
    document VARCHAR(255) NOT NULL,
    names VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE(document),
    CHECK (doctype IN ('CC', 'TE', 'PS'))
);

INSERT INTO clients (doctype, document, names)
VALUES ('CC', '100000', 'julio martinez');

INSERT INTO clients (doctype, document, names)
VALUES ('T', '200000', 'cristian diez');