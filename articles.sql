-- Adminer 4.8.1 MySQL 5.5.5-10.4.32-MariaDB-1:10.4.32+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT NULL,
  `article` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `articles` (`id`, `position`, `article`) VALUES
(1,	    NULL,   'foo'),
(2,	    NULL,	'mat'),
(3,	    NULL,	'cat'),
(4,	    NULL,	'dog'),
(5,	    NULL,	'car'),
(6,	    NULL,	'not'),
(7,	    NULL,	'bad'),
(8,	    NULL,	'art'),
(9,	    NULL,	'bar'),
(10,	NULL,	'bag'),
(11,	NULL,	'ctd'),
(12,	NULL,	'was'),
(13,	NULL,	'wow'),
(14,	NULL,	'web'),
(15,	NULL,	'cup');

-- 2023-12-10 09:39:48
