<?php


CREATE TABLE  `dyp_lab`.`books` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NOT NULL ,
`author` VARCHAR( 255 ) NOT NULL ,
`publication` VARCHAR( 255 ) NOT NULL ,
`publish_date` DATE NOT NULL ,
`added_date` DATE NOT NULL
) ENGINE = INNODB;



?>