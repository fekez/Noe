CREATE DATABASE `noe`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `noe`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)

ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `uzenetek` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `szoveg` varchar(100) NOT NULL default '',
  `datum` DATE, 
  `ido` TIME,
  PRIMARY KEY  (`id`)
)

ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;