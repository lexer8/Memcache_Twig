-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 10 2016 г., 06:11
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` smallint(5) unsigned NOT NULL COMMENT 'Идентификатор объекта',
  `author` varchar(100) NOT NULL COMMENT 'Автор(ы) книги',
  `title` varchar(100) NOT NULL COMMENT 'Название книги',
  `year` smallint(5) unsigned NOT NULL COMMENT 'Год издания',
  `page_count` smallint(5) unsigned NOT NULL COMMENT 'Количество страниц',
  `price` float unsigned NOT NULL COMMENT 'Цена',
  `created` datetime NOT NULL COMMENT 'Дата создания записи',
  `link` varchar(100) DEFAULT NULL COMMENT 'Ссылка',
  `status` tinyint(1) NOT NULL COMMENT 'Активно или нет'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `author`, `title`, `year`, `page_count`, `price`, `created`, `link`, `status`) VALUES
(1, 'Robin Nixon', 'Learning PHP, MySQL, JavaScript and CSS', 2012, 560, 337.72, '2016-02-18 00:28:00', 'http://shop.oreilly.com/product/0636920023487.do', 1),
(2, 'Luke Welling, Laura Thomson', 'PHP and MySQL Web Development', 2010, 834, 330, '2016-02-18 01:00:00', 'http://www.amazon.com/PHP-MySQL-Web-Development-Edition/dp/0672329166', 1),
(3, 'Matt Zandstra', 'PHP Objects, Patterns and Practice', 2011, 528, 1192.24, '2016-02-18 01:02:00', 'http://www.apress.com/9781430229254', 1),
(4, 'Bear Bibeault, Yehuda Katz', 'jQuery in Action', 2009, 373, 930, '2016-02-18 00:05:00', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор объекта',AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
