-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 12 2019 г., 10:22
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `accountstrust`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='contact';

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`userid`, `fullname`, `email`, `phone`, `message`) VALUES
(1, '', 'gg@gmail.com', 2147483647, 'dchgvgvhj'),
(2, 'wad', 'gg@gmail.com', 2147483647, 'adw,knadlns,dns'),
(3, 'wad', 'gg@gmail.com', 2147483647, 'adw,knadlns,dns'),
(4, 'aslkdmlaskmd`', 'gg@gmail.com', 2147483647, 'a.d, as.dfa.,fmdam'),
(5, 'Ayazhan', 'yermek.ayazhan@gmail.com', 2147483647, 'Very useful!');

-- --------------------------------------------------------

--
-- Структура таблицы `trustreg`
--

CREATE TABLE `trustreg` (
  `user_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `trustreg`
--

INSERT INTO `trustreg` (`user_id`, `email`, `password`) VALUES
(18, 'sanzhar', 'sanzhar'),
(19, 'b2a', '1'),
(20, '1', '1'),
(21, '1', '1'),
(22, '1', '1'),
(23, '2', '2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`userid`);

--
-- Индексы таблицы `trustreg`
--
ALTER TABLE `trustreg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `trustreg`
--
ALTER TABLE `trustreg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
