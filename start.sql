-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2020 г., 11:01
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kick`
--

-- --------------------------------------------------------

--
-- Структура таблицы `start`
--

CREATE TABLE `start` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `goal` int(100) NOT NULL,
  `donated` int(100) NOT NULL,
  `img` varchar(150) NOT NULL,
  `user` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `start`
--

INSERT INTO `start` (`id`, `title`, `description`, `goal`, `donated`, `img`, `user`, `place`) VALUES
(1, 'Weapons of Reason: a beautiful book tackling global issues', 'A hardback book exploring the world’s most pressing challenges, and what we can do to fix them', 16533, 13946, '1.jpg', 'Human After All', 'London'),
(2, 'ssssssss', 'Get educated, help the cause, and support Black creators.', 0, 390, '2.png', 'Kickstarter', 'Los-Angeles'),
(3, 'changed manga', 'changed manga description', 1945, 4506, '3.png', 'Fred', 'Chenged Manga city');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `start`
--
ALTER TABLE `start`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `start`
--
ALTER TABLE `start`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
