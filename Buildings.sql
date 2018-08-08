-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 30 2018 г., 19:39
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `Buildings`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Flat`
--

CREATE TABLE IF NOT EXISTS `Flat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NameF` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `Flat`
--

INSERT INTO `Flat` (`ID`, `NameF`) VALUES
(1, 'Студия'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '5'),
(7, '5-двухэтажная'),
(8, '6-двухэтажная');

-- --------------------------------------------------------

--
-- Структура таблицы `JK`
--

CREATE TABLE IF NOT EXISTS `JK` (
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Town` varchar(20) CHARACTER SET utf8 NOT NULL,
  `NameB` varchar(50) CHARACTER SET utf8 NOT NULL,
  `S` int(11) NOT NULL,
  `Price` double NOT NULL,
  `CountROOM` int(2) NOT NULL,
  `Type` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `JK`
--

INSERT INTO `JK` (`Name`, `Town`, `NameB`, `S`, `Price`, `CountROOM`, `Type`, `ID`) VALUES
('КиївБУД', 'Київ', 'Героїв Дніпра 5', 74, 7400, 4, 0, 49),
('КиївБУД', 'Київ', 'Героїв Дніпра 6', 80, 960000, 4, 1, 46),
('ЖитомирБУд', 'Житомир', 'Вул. TEMP', 26, 182000, 2, 0, 47),
('ТвійХмельницький', 'Хмельницьк', '------', 70, 560000, 3, 0, 48),
('Нове Місто', 'Київ', 'Дом 1 ', 54, 405000, 4, 0, 42),
('ТЕст', 'ТЕст ', '1', 5, 625000, 8, 0, 45);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
