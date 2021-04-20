-- MySQL Script generated by MySQL Workbench
-- Tue Apr 20 12:23:10 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema SGI_CEB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema SGI_CEB
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `SGI_CEB` DEFAULT CHARACTER SET utf8 ;
USE `SGI_CEB` ;

-- -----------------------------------------------------
-- Table `SGI_CEB`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`rol` (
  `id_rol` INT NOT NULL,
  `rol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`grupo_sanguineo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`grupo_sanguineo` (
  `id_grupo_sanguineo` INT NOT NULL,
  `grupo_sanguineo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_grupo_sanguineo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`tipo_documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`tipo_documento` (
  `id_tipo_documento` INT NOT NULL,
  `tipo_documento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tipo_documento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`tipo_persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`tipo_persona` (
  `id_tipo_persona` INT NOT NULL AUTO_INCREMENT,
  `tipo_persona` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tipo_persona`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`persona` (
  `num_documento` VARCHAR(25) NOT NULL,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `grupo_sanguineo_id_grupo_sanguineo` INT NOT NULL,
  `tipo_documento_id_tipo_documento` INT NOT NULL,
  `tipo_persona_id_tipo_persona` INT NOT NULL,
  PRIMARY KEY (`num_documento`, `tipo_documento_id_tipo_documento`),
  INDEX `fk_usuario_grupo_sanguineo1_idx` (`grupo_sanguineo_id_grupo_sanguineo` ASC) ,
  INDEX `fk_usuario_tipo_documento1_idx` (`tipo_documento_id_tipo_documento` ASC) ,
  INDEX `fk_persona_tipo_persona1_idx` (`tipo_persona_id_tipo_persona` ASC) ,
  CONSTRAINT `fk_usuario_grupo_sanguineo1`
    FOREIGN KEY (`grupo_sanguineo_id_grupo_sanguineo`)
    REFERENCES `SGI_CEB`.`grupo_sanguineo` (`id_grupo_sanguineo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_tipo_documento1`
    FOREIGN KEY (`tipo_documento_id_tipo_documento`)
    REFERENCES `SGI_CEB`.`tipo_documento` (`id_tipo_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_persona_tipo_persona1`
    FOREIGN KEY (`tipo_persona_id_tipo_persona`)
    REFERENCES `SGI_CEB`.`tipo_persona` (`id_tipo_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`grado_academico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`grado_academico` (
  `id_grado_academico` INT NOT NULL,
  `grado_academico` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_grado_academico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`jornada_academica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`jornada_academica` (
  `id_jornada_academica` INT NOT NULL,
  `jornada_academica` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_jornada_academica`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`acudiente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`acudiente` (
  `id_acudiente` INT NOT NULL,
  `telefono_acudiente` VARCHAR(30) NOT NULL,
  `direccion_acudiente` VARCHAR(60) NOT NULL,
  `persona_num_documento` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_acudiente`, `persona_num_documento`),
  INDEX `fk_acudiente_persona1_idx` (`persona_num_documento` ASC) ,
  CONSTRAINT `fk_acudiente_persona1`
    FOREIGN KEY (`persona_num_documento`)
    REFERENCES `SGI_CEB`.`persona` (`num_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`estudiante` (
  `id_estudiante` INT NOT NULL AUTO_INCREMENT,
  `grado_academico_id_grado_academico` INT NOT NULL,
  `jornada_academica_id_jornada_academica` INT NOT NULL,
  `acudiente_id_acudiente` INT NOT NULL,
  `persona_num_documento` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_estudiante`, `persona_num_documento`),
  INDEX `fk_estudiante_grado_academico1_idx` (`grado_academico_id_grado_academico` ASC) ,
  INDEX `fk_estudiante_jornada_academica1_idx` (`jornada_academica_id_jornada_academica` ASC) ,
  INDEX `fk_estudiante_persona1_idx` (`persona_num_documento` ASC) ,
  INDEX `fk_estudiante_acudiente1_idx` (`acudiente_id_acudiente` ASC) ,
  CONSTRAINT `fk_estudiante_grado_academico1`
    FOREIGN KEY (`grado_academico_id_grado_academico`)
    REFERENCES `SGI_CEB`.`grado_academico` (`id_grado_academico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_jornada_academica1`
    FOREIGN KEY (`jornada_academica_id_jornada_academica`)
    REFERENCES `SGI_CEB`.`jornada_academica` (`id_jornada_academica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_persona1`
    FOREIGN KEY (`persona_num_documento`)
    REFERENCES `SGI_CEB`.`persona` (`num_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_acudiente1`
    FOREIGN KEY (`acudiente_id_acudiente`)
    REFERENCES `SGI_CEB`.`acudiente` (`id_acudiente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`historial_ingreso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`historial_ingreso` (
  `id_historial` INT NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` DATE NOT NULL,
  `hora_ingreso` TIME NOT NULL,
  `comentario_historial` VARCHAR(60) NULL,
  `persona_num_documento` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_historial`),
  INDEX `fk_historial_ingreso_persona1_idx` (`persona_num_documento` ASC) ,
  CONSTRAINT `fk_historial_ingreso_persona1`
    FOREIGN KEY (`persona_num_documento`)
    REFERENCES `SGI_CEB`.`persona` (`num_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `correo_usuario` VARCHAR(45) NOT NULL,
  `clave_usuario` VARCHAR(100) NOT NULL,
  `rol_id_rol` INT NOT NULL,
  `persona_num_documento` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_usuario`, `persona_num_documento`),
  INDEX `fk_usuario_rol1_idx` (`rol_id_rol` ASC) ,
  INDEX `fk_usuario_persona1_idx` (`persona_num_documento` ASC) ,
  CONSTRAINT `fk_usuario_rol1`
    FOREIGN KEY (`rol_id_rol`)
    REFERENCES `SGI_CEB`.`rol` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_persona1`
    FOREIGN KEY (`persona_num_documento`)
    REFERENCES `SGI_CEB`.`persona` (`num_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
