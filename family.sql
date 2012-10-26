-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 03 2012 г., 00:42
-- Версия сервера: 5.5.24-0ubuntu0.12.04.1
-- Версия PHP: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `family`
--

-- --------------------------------------------------------

--
-- Структура таблицы `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(8) NOT NULL,
  `family_id` int(8) NOT NULL,
  PRIMARY KEY (`id`,`family_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `person_details`
--

DROP TABLE IF EXISTS `person_details`;
CREATE TABLE IF NOT EXISTS `person_details` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `family` varchar(100) DEFAULT NULL,
  `family_second` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_second` varchar(100) DEFAULT NULL,
  `birth_day` tinyint(1) DEFAULT NULL,
  `birth_month` tinyint(1) DEFAULT NULL,
  `birth_year` smallint(2) DEFAULT NULL,
  `death_day` tinyint(1) DEFAULT NULL,
  `death_month` tinyint(1) DEFAULT NULL,
  `death_year` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `person_family`
--

DROP TABLE IF EXISTS `person_family`;
CREATE TABLE IF NOT EXISTS `person_family` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ids` text NOT NULL,
  `year` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
