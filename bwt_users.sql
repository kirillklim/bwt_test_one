-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 06 2018 г., 12:04
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bwt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bwt_users`
--

CREATE TABLE IF NOT EXISTS `bwt_users` (
`id` int(11) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `birthday` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `bwt_users`
--

INSERT INTO `bwt_users` (`id`, `email`, `login`, `password`, `sex`, `birthday`) VALUES
(100, 'kirill@gmail.com', 'kirill', 'kirill', 0, '1 : 01 : 1900'),
(101, 'elena@gmail.com', 'elena', 'elena', 0, '1 : 01 : 1900'),
(102, 'dimass@gmail.com', 'dimass', 'dimass', 0, '1 : 01 : 1900');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bwt_users`
--
ALTER TABLE `bwt_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bwt_users`
--
ALTER TABLE `bwt_users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
