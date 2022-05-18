
DROP DATABASE IF EXISTS planetlink;
CREATE DATABASE planetlink;
USE planetlink;
CREATE TABLE `planetlink`.`product` ( `image` TEXT NOT NULL , `name` TEXT NOT NULL , `description` TEXT NOT NULL , `number` TEXT NOT NULL , `stock` INT NOT NULL , `price` INT NOT NULL , `id` INT NULL , `type` TEXT NOT NULL ) ;
CREATE TABLE `planetlink`.`logotype` (`type` TEXT NOT NULL, `logo` TEXT NOT NULL) ENGINE = MyISAM;
