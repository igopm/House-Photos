-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 07 2016 г., 17:09
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `housephotos`
--

-- --------------------------------------------------------

--
-- Структура таблицы `skycom`
--

CREATE TABLE IF NOT EXISTS `skycom` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_adm` int(1) NOT NULL DEFAULT '0',
  `com_kgol` varchar(30) DEFAULT NULL,
  `com_papa` int(11) NOT NULL,
  `com_kto` varchar(100) NOT NULL,
  `com_kogda` int(11) NOT NULL,
  `com_email` varchar(200) NOT NULL,
  `com_text` text NOT NULL,
  `com_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `skycom`
--

INSERT INTO `skycom` (`com_id`, `com_adm`, `com_kgol`, `com_papa`, `com_kto`, `com_kogda`, `com_email`, `com_text`, `com_ip`) VALUES
(3, 0, '1', 0, 'Р®СЂР°', 1465294019, 'igopm@ukr.net', '1 Р±Р°Р·Р° РґР°РЅРЅРёС…', '127.0.0.1'),
(4, 0, '2', 0, 'Р®СЂР°', 1465294040, 'igopm@ukr.net', '2 Р±Р°Р·Р° РґР°РЅРёС…', '127.0.0.1'),
(5, 0, '1', 0, 'Р®СЂР°', 1465294094, 'igopm@ukr.net', 'ru РєРѕРјРµРЅС‚Р°СЂСЉР№', '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `skynas`
--

CREATE TABLE IF NOT EXISTS `skynas` (
  `nas_id` int(2) NOT NULL AUTO_INCREMENT,
  `nas_par` varchar(15) NOT NULL,
  `nas_znach` varchar(255) NOT NULL,
  PRIMARY KEY (`nas_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `skynas`
--

INSERT INTO `skynas` (`nas_id`, `nas_par`, `nas_znach`) VALUES
(4, 'com_width', '700'),
(5, 'com_dlina', '350'),
(6, 'com_str', '7');

-- --------------------------------------------------------

--
-- Структура таблицы `skyusers`
--

CREATE TABLE IF NOT EXISTS `skyusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_icq` int(10) NOT NULL,
  `user_web` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_emailview` int(1) DEFAULT '0',
  `user_login` varchar(50) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `user_sol` char(3) NOT NULL,
  `user_tel` varchar(30) NOT NULL,
  `user_fax` varchar(30) NOT NULL,
  `user_gorod` varchar(20) NOT NULL,
  `user_obl` varchar(25) NOT NULL,
  `user_regtime` int(14) NOT NULL,
  `user_vizit` int(14) NOT NULL,
  `user_osebe` varchar(255) NOT NULL,
  `user_prava` int(1) NOT NULL DEFAULT '0',
  `user_ip` varchar(15) NOT NULL,
  `user_ras` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 PACK_KEYS=0 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `skyusers`
--

INSERT INTO `skyusers` (`user_id`, `user_icq`, `user_web`, `user_email`, `user_emailview`, `user_login`, `user_pass`, `user_sol`, `user_tel`, `user_fax`, `user_gorod`, `user_obl`, `user_regtime`, `user_vizit`, `user_osebe`, `user_prava`, `user_ip`, `user_ras`) VALUES
(1, 0, 'skyscript.ru', 'igopm@ukr.net', 0, 'Administrator', 'f8da4ad0ffbefaccd06497bf330d94c9', 'o+p', '', '', '', '', 1047563998, 1268312603, '', 5, '127.0.0.1', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
