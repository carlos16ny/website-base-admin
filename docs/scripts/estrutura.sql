-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema modelo
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `modelo` ;

-- -----------------------------------------------------
-- Schema modelo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `modelo` DEFAULT CHARACTER SET utf8 ;
USE `modelo` ;

-- -----------------------------------------------------
-- Table `modelo`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `modelo`.`users` ;

CREATE TABLE IF NOT EXISTS `modelo`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(60) NOT NULL,
  `password` VARCHAR(60) NOT NULL,
  `name` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`email` ASC))
ENGINE = InnoDB;

INSERT INTO `users`(`email`, `password`, `name`) VALUES ('admin@visaojr.com.br', '8d58defd03e08831be110619ca62fbdb2851219d', 'Visão Admin');
-- -----------------------------------------------------
-- Table `modelo`.`content`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `modelo`.`content` ;

CREATE TABLE IF NOT EXISTS `modelo`.`content` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(60) NOT NULL,
  `subcategory` VARCHAR(60) NULL DEFAULT NULL,
  `title` VARCHAR(255) NULL DEFAULT NULL,
  `subtitle` TEXT(500) NULL DEFAULT NULL,
  `text` TEXT(500) NULL DEFAULT NULL,
  `paragraph` LONGTEXT NULL DEFAULT NULL,
  `link` VARCHAR(300) NULL DEFAULT NULL,
  `photo` VARCHAR(300) NULL DEFAULT NULL,
  `alt_photo` TEXT(500) NULL DEFAULT NULL,
  `order` INT NULL DEFAULT 0,
  `status` TINYINT(1) NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
