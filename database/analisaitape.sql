-- MySQL Script generated by MySQL Workbench
-- Wed Aug 31 17:04:07 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema u995521796_econoveg
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema u995521796_econoveg
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `u995521796_econoveg` DEFAULT CHARACTER SET utf8 ;
USE `u995521796_econoveg` ;

-- -----------------------------------------------------
-- Table `u995521796_econoveg`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u995521796_econoveg`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` TEXT NOT NULL,
  `phone` VARCHAR(255) DEFAULT NULL,
  `cep` VARCHAR(20) NOT NULL,
  `street` VARCHAR(255) NOT NULL,
  `number` VARCHAR(255) NOT NULL,
  `neighborhood` VARCHAR(255) NOT NULL,
  `city` VARCHAR(255) NOT NULL,
  `state` VARCHAR(2) NOT NULL,
  `token` TEXT NULL DEFAULT NULL,
  `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `u995521796_econoveg`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `price` DECIMAL(20,2) NOT NULL,
  `old_price` DECIMAL(20,2) NOT NULL,
  `product_pic` LONGBLOB NULL DEFAULT NULL,
  `establishment_name` VARCHAR(255) NOT NULL,
  `cep` VARCHAR(20) NOT NULL,
  `street` VARCHAR(255) NOT NULL,
  `number` VARCHAR(255) NOT NULL,
  `neighborhood` VARCHAR(255) NOT NULL,
  `city` VARCHAR(255) NOT NULL,
  `state` VARCHAR(2) NOT NULL,
  `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `u995521796_econoveg`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u995521796_econoveg`.`products_complaints` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NOT NULL,
  `complaint_motive` VARCHAR(100) DEFAULT NULL,
  `description` TEXT DEFAULT NULL,
  `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
   INDEX `fk_products_products_complaints_idx` (`product_id` ASC),
  CONSTRAINT `fk_products_products_complaints`
    FOREIGN KEY (`product_id`)
    REFERENCES `u995521796_econoveg`.`products` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB;

ALTER TABLE `u995521796_econoveg`.`products`
ADD COLUMN `user_id` INT NOT NULL,
ADD CONSTRAINT `fk_products_users`
FOREIGN KEY (`user_id`)
REFERENCES `u995521796_econoveg`.`users` (`id`)
ON DELETE CASCADE
ON UPDATE CASCADE;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
