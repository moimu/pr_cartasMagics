DROP DATABASE IF EXISTS  `magics`;
CREATE DATABASE `magics`;
USE  `magics`;



CREATE TABLE `tipo`(
    `idtipo` TINYINT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(50) NOT NULL,
    PRIMARY KEY (idtipo)
);

CREATE TABLE `tipoespecifico`(
    `idtipoespecifico` INT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(50) NOT NULL,
    PRIMARY KEY (idtipoespecifico)
);

CREATE TABLE `habilidades`(
    `idhabilidad` INT UNSIGNED AUTO_INCREMENT,
    `mana1` VARCHAR(30),
    `cantmana1` VARCHAR(10),
    `mana2` VARCHAR(30),
    `cantmana2` VARCHAR(10),
    `manaincoloro` VARCHAR(50),
    `descripcion` VARCHAR(200),
    PRIMARY KEY (idhabilidad) 
);

CREATE TABLE `carta`(
    `idcarta` INT UNSIGNED AUTO_INCREMENT,
    `nombre` VARCHAR(50) NOT NULL,
    `mana1` VARCHAR(30),
    `cantmana1` VARCHAR(10),
    `mana2` VARCHAR(30),
    `cantmana2` VARCHAR(10),
    `manaincoloro` VARCHAR(50),
    `img` VARCHAR(50) NOT NULL,
    `idtipo` TINYINT NOT NULL,
    `idtipoespecifico` INT,
    `habilidades` INT,
    `idhab2` INT,
    `habespecial`VARCHAR(100),
    `textambiente` VARCHAR(100),
    `fuerza` TINYINT,
    `resistencia` TINYINT,
    `artista` VARCHAR(25),
    `numcoleccion` SMALLINT,

    PRIMARY KEY (idcarta),
    FOREIGN KEY (idtipo) REFERENCES tipo(idtipo),
    FOREIGN KEY (idtipoespecifico) REFERENCES tipoespecifico(idtipoespecifico),
    FOREIGN KEY (habilidades) REFERENCES habilidades(idhabilidad)
);