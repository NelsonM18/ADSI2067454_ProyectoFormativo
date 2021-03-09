-- MySQL Script generated by MySQL Workbench
-- Tue Mar  9 13:18:21 2021
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
-- Table `SGI_CEB`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `numero_documento` VARCHAR(45) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `contraseña_usuario` VARCHAR(45) NOT NULL,
  `correo_usuario` VARCHAR(45) NOT NULL,
  `rol_id_rol` INT NOT NULL,
  `grupo_sanguineo_id_grupo_sanguineo` INT NOT NULL,
  `tipo_documento_id_tipo_documento` INT NOT NULL,
  PRIMARY KEY (`id_usuario`, `tipo_documento_id_tipo_documento`),
  INDEX `fk_usuario_rol_idx` (`rol_id_rol` ASC),
  INDEX `fk_usuario_grupo_sanguineo1_idx` (`grupo_sanguineo_id_grupo_sanguineo` ASC),
  INDEX `fk_usuario_tipo_documento1_idx` (`tipo_documento_id_tipo_documento` ASC),
  CONSTRAINT `fk_usuario_rol`
    FOREIGN KEY (`rol_id_rol`)
    REFERENCES `SGI_CEB`.`rol` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_grupo_sanguineo1`
    FOREIGN KEY (`grupo_sanguineo_id_grupo_sanguineo`)
    REFERENCES `SGI_CEB`.`grupo_sanguineo` (`id_grupo_sanguineo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_tipo_documento1`
    FOREIGN KEY (`tipo_documento_id_tipo_documento`)
    REFERENCES `SGI_CEB`.`tipo_documento` (`id_tipo_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`nivel_academico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`nivel_academico` (
  `id_nivel_academico` INT NOT NULL,
  `grado_academico` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_nivel_academico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`estudiante` (
  `id_estudiante` INT NOT NULL AUTO_INCREMENT,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `numero_documento` VARCHAR(45) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `acudiente_nombre` VARCHAR(45) NOT NULL,
  `telefono_acudiente` VARCHAR(45) NOT NULL,
  `grupo_sanguineo_id_grupo_sanguineo` INT NOT NULL,
  `nivel_academico_id_nivel_academico` INT NOT NULL,
  `tipo_documento_id_tipo_documento` INT NOT NULL,
  PRIMARY KEY (`id_estudiante`, `nivel_academico_id_nivel_academico`, `tipo_documento_id_tipo_documento`),
  INDEX `fk_estudiante_nivel_academico1_idx` (`nivel_academico_id_nivel_academico` ASC),
  INDEX `fk_estudiante_tipo_documento1_idx` (`tipo_documento_id_tipo_documento` ASC),
  INDEX `fk_estudiante_grupo_sanguineo1_idx` (`grupo_sanguineo_id_grupo_sanguineo` ASC),
  CONSTRAINT `fk_estudiante_nivel_academico1`
    FOREIGN KEY (`nivel_academico_id_nivel_academico`)
    REFERENCES `SGI_CEB`.`nivel_academico` (`id_nivel_academico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_tipo_documento1`
    FOREIGN KEY (`tipo_documento_id_tipo_documento`)
    REFERENCES `SGI_CEB`.`tipo_documento` (`id_tipo_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_grupo_sanguineo1`
    FOREIGN KEY (`grupo_sanguineo_id_grupo_sanguineo`)
    REFERENCES `SGI_CEB`.`grupo_sanguineo` (`id_grupo_sanguineo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`historial_ingreso_personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`historial_ingreso_personal` (
  `id_historialP` INT NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` DATE NOT NULL,
  `hora_ingreso` VARCHAR(45) NOT NULL,
  `comentario_historialP` VARCHAR(60) NULL,
  PRIMARY KEY (`id_historialP`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`historial_ingreso_externo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`historial_ingreso_externo` (
  `id_historialEx` INT NOT NULL AUTO_INCREMENT,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `numero_documento` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `fecha_ingreso` DATE NOT NULL,
  `hora_ingreso` VARCHAR(45) NOT NULL,
  `tipo_documento_id_tipo_documento` INT NOT NULL,
  PRIMARY KEY (`id_historialEx`, `tipo_documento_id_tipo_documento`),
  INDEX `fk_historial_ingreso_externo_tipo_documento1_idx` (`tipo_documento_id_tipo_documento` ASC),
  CONSTRAINT `fk_historial_ingreso_externo_tipo_documento1`
    FOREIGN KEY (`tipo_documento_id_tipo_documento`)
    REFERENCES `SGI_CEB`.`tipo_documento` (`id_tipo_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`historial_ingreso_estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`historial_ingreso_estudiante` (
  `id_historialEs` INT NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` VARCHAR(45) NOT NULL,
  `hora_ingreso` VARCHAR(45) NOT NULL,
  `comentario_historialEs` VARCHAR(60) NULL,
  PRIMARY KEY (`id_historialEs`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`retardos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`retardos` (
  `id_retardo` INT NOT NULL AUTO_INCREMENT,
  `fecha_retardo` DATE NOT NULL,
  `hora_retardo` VARCHAR(45) NOT NULL,
  `comentario_retraso` VARCHAR(60) NULL,
  `estudiante_id_estudiante` INT NOT NULL,
  PRIMARY KEY (`id_retardo`),
  INDEX `fk_retardos_estudiante1_idx` (`estudiante_id_estudiante` ASC),
  CONSTRAINT `fk_retardos_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante`)
    REFERENCES `SGI_CEB`.`estudiante` (`id_estudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`usuario_has_historial_ingreso_personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`usuario_has_historial_ingreso_personal` (
  `usuario_id_usuario` INT NOT NULL,
  `historial_ingreso_personal_id_historialP` INT NOT NULL,
  PRIMARY KEY (`usuario_id_usuario`, `historial_ingreso_personal_id_historialP`),
  INDEX `fk_usuario_has_historial_ingreso_personal_historial_ingreso_idx` (`historial_ingreso_personal_id_historialP` ASC),
  INDEX `fk_usuario_has_historial_ingreso_personal_usuario1_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_usuario_has_historial_ingreso_personal_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `SGI_CEB`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_historial_ingreso_personal_historial_ingreso_p1`
    FOREIGN KEY (`historial_ingreso_personal_id_historialP`)
    REFERENCES `SGI_CEB`.`historial_ingreso_personal` (`id_historialP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`estudiante_has_historial_ingreso_estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`estudiante_has_historial_ingreso_estudiante` (
  `estudiante_id_estudiante` INT NOT NULL,
  `historial_ingreso_estudiante_id_historialEs` INT NOT NULL,
  PRIMARY KEY (`estudiante_id_estudiante`, `historial_ingreso_estudiante_id_historialEs`),
  INDEX `fk_estudiante_has_historial_ingreso_estudiante_historial_in_idx` (`historial_ingreso_estudiante_id_historialEs` ASC),
  INDEX `fk_estudiante_has_historial_ingreso_estudiante_estudiante1_idx` (`estudiante_id_estudiante` ASC),
  CONSTRAINT `fk_estudiante_has_historial_ingreso_estudiante_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante`)
    REFERENCES `SGI_CEB`.`estudiante` (`id_estudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_has_historial_ingreso_estudiante_historial_ingr1`
    FOREIGN KEY (`historial_ingreso_estudiante_id_historialEs`)
    REFERENCES `SGI_CEB`.`historial_ingreso_estudiante` (`id_historialEs`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`curso_academico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`curso_academico` (
  `id_curso_academico` INT NOT NULL,
  `curso_academico` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_curso_academico`))
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
-- Table `SGI_CEB`.`curso_academico_has_nivel_academico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`curso_academico_has_nivel_academico` (
  `curso_academico_id_curso_academico` INT NOT NULL,
  `nivel_academico_id_nivel_academico` INT NOT NULL,
  PRIMARY KEY (`curso_academico_id_curso_academico`, `nivel_academico_id_nivel_academico`),
  INDEX `fk_curso_academico_has_nivel_academico_nivel_academico1_idx` (`nivel_academico_id_nivel_academico` ASC),
  INDEX `fk_curso_academico_has_nivel_academico_curso_academico1_idx` (`curso_academico_id_curso_academico` ASC),
  CONSTRAINT `fk_curso_academico_has_nivel_academico_curso_academico1`
    FOREIGN KEY (`curso_academico_id_curso_academico`)
    REFERENCES `SGI_CEB`.`curso_academico` (`id_curso_academico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_academico_has_nivel_academico_nivel_academico1`
    FOREIGN KEY (`nivel_academico_id_nivel_academico`)
    REFERENCES `SGI_CEB`.`nivel_academico` (`id_nivel_academico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SGI_CEB`.`curso_academico_has_jornada_academica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SGI_CEB`.`curso_academico_has_jornada_academica` (
  `curso_academico_id_curso_academico` INT NOT NULL,
  `jornada_academica_id_jornada_academica` INT NOT NULL,
  PRIMARY KEY (`curso_academico_id_curso_academico`, `jornada_academica_id_jornada_academica`),
  INDEX `fk_curso_academico_has_jornada_academica_jornada_academica1_idx` (`jornada_academica_id_jornada_academica` ASC),
  INDEX `fk_curso_academico_has_jornada_academica_curso_academico1_idx` (`curso_academico_id_curso_academico` ASC),
  CONSTRAINT `fk_curso_academico_has_jornada_academica_curso_academico1`
    FOREIGN KEY (`curso_academico_id_curso_academico`)
    REFERENCES `SGI_CEB`.`curso_academico` (`id_curso_academico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_academico_has_jornada_academica_jornada_academica1`
    FOREIGN KEY (`jornada_academica_id_jornada_academica`)
    REFERENCES `SGI_CEB`.`jornada_academica` (`id_jornada_academica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
