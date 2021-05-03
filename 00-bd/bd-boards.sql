DROP DATABASE IF EXISTS  `magics`;
CREATE DATABASE `magics`;
USE  `magics`;

CREATE TABLE `tipos`(
    `idtipo` TINYINT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(200) NOT NULL,
    PRIMARY KEY (idtipo)
);
CREATE TABLE `fondos`(
    `idfondo`INT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(200),
    `direccion` VARCHAR(100),
    PRIMARY KEY (idfondo)
);
CREATE TABLE `manas`(
    `idmana` TINYINT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(200),
    `direccion` VARCHAR(100),
    PRIMARY KEY (idmana)
);
CREATE TABLE `expansiones`(
    `idexpansion`INT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(200),
    `direccion` VARCHAR(100),
    PRIMARY KEY (idexpansion)
);
CREATE TABLE `imgtierras`(
    `idimgtierra` INT UNSIGNED AUTO_INCREMENT,
    `descripcion` VARCHAR(200),
    `direccion` VARCHAR(100),
    PRIMARY KEY (idimgtierra)
);
CREATE TABLE `cartas`(
    `idcarta` INT UNSIGNED AUTO_INCREMENT,
    `nombre` VARCHAR(100) NOT NULL,
    `idfondo` INT UNSIGNED,
    `idshiny` INT UNSIGNED,
    `idmana1` TINYINT UNSIGNED,
    `cantmana1` TINYINT,
    `idmana2` TINYINT UNSIGNED,
    `cantmana2` TINYINT,
    `idmanaincoloro` TINYINT UNSIGNED,
    `img` VARCHAR(100) NOT NULL,
    `idtipo` TINYINT UNSIGNED,
    `tipoespecifico` VARCHAR(50),
    `idexpansion` INT UNSIGNED,
    `habilidad` VARCHAR(400),
    `idimgtierra` INT UNSIGNED,
    `textambiente` VARCHAR(400),
    `fuerza` TINYINT,
    `resistencia` TINYINT,
    `artista` VARCHAR(50),
    `numcoleccion` SMALLINT,
    `colorbase` VARCHAR(30),
    `cantidad` SMALLINT UNSIGNED,
    PRIMARY KEY (`idcarta`),
    FOREIGN KEY (`idfondo`) REFERENCES `fondos` (`idfondo`),
    FOREIGN KEY (`idshiny`) REFERENCES `fondos` (`idfondo`),
    FOREIGN KEY (`idmana1`) REFERENCES `manas` (`idmana`),
    FOREIGN KEY (`idmana2`) REFERENCES `manas` (`idmana`),
    FOREIGN KEY (`idmanaincoloro`) REFERENCES `manas` (`idmana`),
    FOREIGN KEY (`idtipo`) REFERENCES `tipos` (`idtipo`),
    FOREIGN KEY (`idexpansion`) REFERENCES `expansiones` (`idexpansion`),
    FOREIGN KEY (`idimgtierra`) REFERENCES `imgtierras` (`idimgtierra`)
);