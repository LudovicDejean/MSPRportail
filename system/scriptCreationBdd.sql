DROP DATABASE IF EXISTS `bddPortail`;
CREATE DATABASE IF NOT EXISTS `bddPortail`;
USE `bddPortail`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `login` VARCHAR(30) NOT NULL PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL,
  `infosNavigateur` BLOB NOT NULL,
  `ipUser` VARCHAR(30) NOT NULL,
  `fk_id_clinique` INT(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `server_cliniques`;
CREATE TABLE `server_cliniques` (
  `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
  `urlClinique` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD CONSTRAINT `fk_clinique` FOREIGN KEY (`fk_id_clinique`) REFERENCES `server_cliniques` (`id`);

