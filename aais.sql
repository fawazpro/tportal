-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cat`;
CREATE TABLE `cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(5) NOT NULL,
  `term` varchar(10) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `obj` longtext NOT NULL,
  `fig` longtext NOT NULL,
  `thr` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject`),
  CONSTRAINT `cat_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subjects` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(220) NOT NULL,
  `lname` varchar(220) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `class` varchar(6) NOT NULL,
  `paid` int(11) NOT NULL,
  `combo1` longtext NOT NULL,
  `combo2` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-10-27 05:34:02
