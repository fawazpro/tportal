-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(5) NOT NULL,
  `term` varchar(10) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `week` varchar(10) NOT NULL,
  `topic` tinytext NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject`),
  CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subjects` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `notes` (`id`, `class`, `term`, `subject`, `week`, `topic`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3,	'JS1',	'1',	'Computer',	'week 2',	'Technology of Different Information Ages',	'<h2>Industrial Age</h2><p>Industrial Age also known as machine age began in the 18th century (1700) and ended in the 20th century (1900). The most immediate changes were in the nature of production. Goods that had traditionally been made in the home or small workshops began to be manufactured in the factory. Most of the inventions are machine tools, steam engines, locomotives, textile machinery, steel, electric telegraph, electricity generation, road construction, mail delivery and more</p>',	'2020-10-01 15:36:58',	'2020-10-01 16:29:18',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `subject` varchar(200) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  PRIMARY KEY (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `subjects` (`subject`, `subject_code`) VALUES
('Agric Science',	'ag'),
('Civic Education',	'cv'),
('Computer',	'cs'),
('Home Economics',	'he'),
('Security Education',	'se'),
('Social Studies',	'ss');

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `email` tinytext NOT NULL,
  `pass` tinytext NOT NULL,
  `subj1` varchar(200) NOT NULL,
  `subj2` varchar(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `accname` varchar(200) NOT NULL,
  `accnumb` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subj1` (`subj1`),
  KEY `subj2` (`subj2`),
  CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`subj1`) REFERENCES `subjects` (`subject`),
  CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`subj2`) REFERENCES `subjects` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `teachers` (`id`, `fname`, `lname`, `sex`, `email`, `pass`, `subj1`, `subj2`, `bname`, `accname`, `accnumb`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2,	'Fawaz',	'Ibraheem',	'male',	'fawazpro27@gmail.com',	'060477243115e419a039ac4e9eac9ab7d6a74981a0b78f1d00aba3a5f5db4f58',	'Agric Science',	'Computer',	'Zenith Bank',	'Fawaz Ibraheem',	'2048634157',	'2020-10-01 15:28:06',	'2020-10-01 15:28:06',	'0000-00-00 00:00:00');

-- 2020-10-02 05:35:32
