-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema juego_memoria
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema juego_memoria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `juego_memoria` ;
USE `juego_memoria` ;

-- -----------------------------------------------------
-- Table `juego_memoria`.`sexos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `juego_memoria`.`sexos` (
  `id_sexo` TINYINT(1) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_sexo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `juego_memoria`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `juego_memoria`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `clave` VARCHAR(80) NOT NULL,
  `email` VARCHAR(80) NOT NULL,
  `nombre` VARCHAR(60) NOT NULL,
  `apellido` VARCHAR(60) NOT NULL,
  `sexos_id_sexo` TINYINT(1) NOT NULL,
  `mejor_tiempo` TIME NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `fk_usuarios_sexos_idx` (`sexos_id_sexo` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  CONSTRAINT `fk_usuarios_sexos`
    FOREIGN KEY (`sexos_id_sexo`)
    REFERENCES `juego_memoria`.`sexos` (`id_sexo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `juego_memoria`.`top_jugadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `juego_memoria`.`top_jugadores` (
  `id_posicion` INT NOT NULL,
  `usuarios_id_usuario` INT NOT NULL,
  `mejor_tiempo` TIME NOT NULL,
  PRIMARY KEY (`id_posicion`),
  INDEX `fk_top_jugadores_usuarios1_idx` (`usuarios_id_usuario` ASC),
  CONSTRAINT `fk_top_jugadores_usuarios1`
    FOREIGN KEY (`usuarios_id_usuario`)
    REFERENCES `juego_memoria`.`usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
