CREATE SCHEMA IF NOT EXISTS `my_netflix`
CHARACTER SET = `utf8`
COLLATE = `utf8_general_ci`;

USE `my_netflix`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `first_name` VARCHAR(35) NOT NULL,
    `last_name` VARCHAR(35) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `sign_up_date` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `is_subscribed` TINYINT(1) DEFAULT 0,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`)
);

