-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bienesraices_crud
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bienesraices_crud
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bienesraices_crud` DEFAULT CHARACTER SET utf8mb3 ;
USE `bienesraices_crud` ;

-- -----------------------------------------------------
-- Table `bienesraices_crud`.`vendedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bienesraices_crud`.`vendedores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `apellido` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `bienesraices_crud`.`propiedades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bienesraices_crud`.`propiedades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  `precio` DECIMAL(20,2) NULL DEFAULT NULL,
  `imagen` VARCHAR(200) NULL DEFAULT NULL,
  `descripcion` LONGTEXT NULL DEFAULT NULL,
  `habitaciones` INT NULL DEFAULT NULL,
  `wc` INT NULL DEFAULT NULL,
  `estacionamiento` INT NULL DEFAULT NULL,
  `creado` DATE NULL DEFAULT NULL,
  `vendedores_id` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_propiedades_vendedores_idx` (`vendedores_id` ASC) VISIBLE,
  CONSTRAINT `fk_propiedades_vendedores`
    FOREIGN KEY (`vendedores_id`)
    REFERENCES `bienesraices_crud`.`vendedores` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `bienesraices_crud`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bienesraices_crud`.`usuarios` (
  `email` VARCHAR(60) NULL DEFAULT NULL,
  `password` CHAR(60) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
