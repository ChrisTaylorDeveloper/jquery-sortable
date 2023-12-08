SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NULL,
  `article` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `articles` (`id`, `position`, `article`) VALUES
(1,	    3,      'three'),
(2,	    NULL,   'bar'),
(3,	    2,      'two'),
(4,	    NULL,   'eggs'),
(5,	    1,      'one'),
(6,	    NULL,   'ever');
