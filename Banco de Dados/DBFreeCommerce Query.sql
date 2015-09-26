-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema DBFreeCommerce
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema DBFreeCommerce
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DBFreeCommerce` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `DBFreeCommerce` ;

-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Perfis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Perfis` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Competencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Competencias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idCategoria` INT NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Competencia_Categoria1_idx` (`idCategoria` ASC),
  CONSTRAINT `fk_Competencia_Categoria1`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `DBFreeCommerce`.`Categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Servicos` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `idPerfil` BIGINT NOT NULL,
  `idCompetencia` INT NOT NULL,
  `titulo` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  `duracao` VARCHAR(50) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Servico_Perfil1_idx` (`idPerfil` ASC),
  INDEX `fk_Servicos_Competencias1_idx` (`idCompetencia` ASC),
  CONSTRAINT `fk_Servico_Perfil1`
    FOREIGN KEY (`idPerfil`)
    REFERENCES `DBFreeCommerce`.`Perfis` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Servicos_Competencias1`
    FOREIGN KEY (`idCompetencia`)
    REFERENCES `DBFreeCommerce`.`Competencias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Extras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Extras` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `idServico` BIGINT NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `valor` DOUBLE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Extra_Servico1_idx` (`idServico` ASC),
  CONSTRAINT `fk_Extra_Servico1`
    FOREIGN KEY (`idServico`)
    REFERENCES `DBFreeCommerce`.`Servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Solicitacoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Solicitacoes` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `idPerfil` BIGINT NOT NULL,
  `idServico` BIGINT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Perfil_has_Servico_Servico1_idx` (`idServico` ASC),
  INDEX `fk_Perfil_has_Servico_Perfil1_idx` (`idPerfil` ASC),
  CONSTRAINT `fk_Perfil_has_Servico_Perfil1`
    FOREIGN KEY (`idPerfil`)
    REFERENCES `DBFreeCommerce`.`Perfis` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Perfil_has_Servico_Servico1`
    FOREIGN KEY (`idServico`)
    REFERENCES `DBFreeCommerce`.`Servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Solicitacoes_has_Extras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Solicitacoes_has_Extras` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `idSolicitacao` BIGINT NOT NULL,
  `idExtra` BIGINT NOT NULL,
  INDEX `fk_Extra_has_Solicitacoes_Solicitacoes1_idx` (`idSolicitacao` ASC),
  INDEX `fk_Extra_has_Solicitacoes_Extra1_idx` (`idExtra` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Extra_has_Solicitacoes_Extra1`
    FOREIGN KEY (`idExtra`)
    REFERENCES `DBFreeCommerce`.`Extras` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Extra_has_Solicitacoes_Solicitacoes1`
    FOREIGN KEY (`idSolicitacao`)
    REFERENCES `DBFreeCommerce`.`Solicitacoes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Imagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Imagens` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `idServico` BIGINT NOT NULL,
  `extensao` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Imagens_Servicos1_idx` (`idServico` ASC),
  CONSTRAINT `fk_Imagens_Servicos1`
    FOREIGN KEY (`idServico`)
    REFERENCES `DBFreeCommerce`.`Servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Tags` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Comentarios` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `idServico` BIGINT NOT NULL,
  `idPerfil` BIGINT NOT NULL,
  `idComentario` BIGINT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  `data` DATETIME NOT NULL,
  `avaliacao` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Comentarios_Servicos1_idx` (`idServico` ASC),
  INDEX `fk_Comentarios_Comentarios1_idx` (`idComentario` ASC),
  INDEX `fk_Comentarios_Perfis1_idx` (`idPerfil` ASC),
  CONSTRAINT `fk_Comentarios_Servicos1`
    FOREIGN KEY (`idServico`)
    REFERENCES `DBFreeCommerce`.`Servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentarios_Comentarios1`
    FOREIGN KEY (`idComentario`)
    REFERENCES `DBFreeCommerce`.`Comentarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentarios_Perfis1`
    FOREIGN KEY (`idPerfil`)
    REFERENCES `DBFreeCommerce`.`Perfis` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBFreeCommerce`.`Servicos_has_Tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBFreeCommerce`.`Servicos_has_Tags` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `idServico` BIGINT NOT NULL,
  `idTag` BIGINT NOT NULL,
  INDEX `fk_Servicos_has_Tags_Tags1_idx` (`idTag` ASC),
  INDEX `fk_Servicos_has_Tags_Servicos1_idx` (`idServico` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Servicos_has_Tags_Servicos1`
    FOREIGN KEY (`idServico`)
    REFERENCES `DBFreeCommerce`.`Servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Servicos_has_Tags_Tags1`
    FOREIGN KEY (`idTag`)
    REFERENCES `DBFreeCommerce`.`Tags` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
