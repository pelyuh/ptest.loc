-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 09 2019 г., 16:42
-- Версия сервера: 5.7.27-0ubuntu0.16.04.1
-- Версия PHP: 7.2.22-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guest_book`
--
CREATE DATABASE IF NOT EXISTS `guest_book` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `guest_book`;

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `author`, `review`, `date`) VALUES
(1, 'Vitaliy', 'Aliquet porttitor lacus luctus accumsan tortor. Interdum posuere lorem ipsum dolor sit amet. Eget magna fermentum iaculis eu non diam. Aliquet nibh praesent tristique magna sit amet purus gravida quis. Nisl pretium fusce id velit ut tortor pretium viverra suspendisse. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Libero enim sed faucibus turpis in eu mi. Lectus urna duis convallis convallis tellus id interdum. Tristique nulla aliquet enim tortor at auctor. Euismod in pellentesque massa placerat duis ultricies lacus sed. Pretium lectus quam id leo.', '2019-10-09 13:38:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
