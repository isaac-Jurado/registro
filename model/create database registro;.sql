create database registro;
use registro;
CREATE TABLE `registro`.`t_registro` (
  `id_registro` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidoP` VARCHAR(45) NOT NULL,
  `apeliidoM` VARCHAR(45) NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`id_registro`));
ALTER TABLE `registro`.`t_registro` 
ADD COLUMN `sexo` VARCHAR(45) NOT NULL AFTER `fecha`;