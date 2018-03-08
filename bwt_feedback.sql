-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 06 2018 г., 12:03
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
-- Структура таблицы `bwt_feedback`
--

CREATE TABLE IF NOT EXISTS `bwt_feedback` (
`id` int(11) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `dwhen` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `bwt_feedback`
--

INSERT INTO `bwt_feedback` (`id`, `email`, `name`, `message`, `dwhen`) VALUES
(36, 'kirill@gmail.com', 'Kirill', 'Hello to all the developers of BWT', '2018-03-06 11:52:03'),
(37, 'andrew@gmail.com', 'Andrew', 'Ð’ Ñ‡ÐµÐ¼ ÑÐ¼Ñ‹ÑÐ» Ð¶Ð¸Ð·Ð½Ð¸-Ð³Ð»Ð°Ð²Ð½Ñ‹Ð¹ Ð²Ð¾Ð¿Ñ€Ð¾Ñ ÐºÐ½Ð¸Ð³Ð¸ "ÐÐ²Ñ‚Ð¾ÑÑ‚Ð¾Ð¿Ð¾Ð¼ Ð¿Ð¾ Ð³Ð°Ð»Ð°ÐºÑ‚Ð¸ÐºÐµ"', '2018-03-06 11:53:23'),
(38, 'dextormetorfan@gmail.com', 'Dendrite Dendrite', 'Dendrite flowers', '2018-03-06 11:58:03');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bwt_feedback`
--
ALTER TABLE `bwt_feedback`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bwt_feedback`
--
ALTER TABLE `bwt_feedback`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
