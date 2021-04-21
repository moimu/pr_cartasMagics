DROP DATABASE IF EXISTS  `magics`;
CREATE DATABASE `magics`;
USE  `magics`;

CREATE TABLE `tipo`(
    `idtipo` TINYINT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(50) NOT NULL,
    PRIMARY KEY (idtipo)
);

CREATE TABLE `cartas`(
    `idcarta` INT UNSIGNED AUTO_INCREMENT,
    `nombre` VARCHAR(50) NOT NULL,
    `fondo` VARCHAR(30),
    `mana1` VARCHAR(30),
    `cantmana1` TINYINT,
    `mana2` VARCHAR(30),
    `cantmana2` TINYINT,
    `cantmanainc` VARCHAR(30),
    `img` VARCHAR(50) NOT NULL,
    `idtipo` TINYINT UNSIGNED,
    `tipoespecifico` VARCHAR(30),
    `expansion` VARCHAR(30),
    `habilidad` VARCHAR(400),
    `imgtierra` VARCHAR(30),
    `textambiente` VARCHAR(400),
    `fuerza` TINYINT,
    `resistencia` TINYINT,
    `artista` VARCHAR(25),
    `numcoleccion` SMALLINT,
    PRIMARY KEY (`idcarta`),
    FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`)
);