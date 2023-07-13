SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `clubjaguar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci ;
USE `clubjaguar` ;

-- -----------------------------------------------------
-- Table `clubjaguar`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubjaguar`.`login` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(45) NOT NULL,
  `password` VARCHAR(250) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `pasadmin` VARCHAR(250) NOT NULL,
  `comentario` VARCHAR(250) NOT NULL,
  `rol` INT(2) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clubjaguar`.`video`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubjaguar`.`video` (
  `id_video` INT(12) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `ruta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_video`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data for table `clubjaguar`.`login`
-- -----------------------------------------------------
START TRANSACTION;
USE `clubjaguar`;
INSERT INTO `clubjaguar`.`login` (`id_usuario`, `user`, `password`, `email`, `pasadmin`,  `comentario`, `rol`) VALUES (1, 'ENTRENADOR', '', 'entrenador@gmail.com', '12345', '' ,1);


COMMIT;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
