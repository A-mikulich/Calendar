-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 25 2022 г., 08:16
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `record`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `inn` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `date_broni` varchar(255) NOT NULL,
  `time_broni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `fio`, `inn`, `phone`, `e_mail`, `date_broni`, `time_broni`) VALUES
(9, 'Микулич А.С.', 2147483647, '89778533023', 'm@m.ru', '07252022', '13:00'),
(10, 'Микулич А.С.', 2147483647, '89778533023', 'm@m.ru', '07252022', '12:00'),
(11, 'колобок', 22222, '66666666', 'm@m.ru', '07262022', '15:00'),
(12, 'дядя миша', 2147483647, '555555555', 'm@m.ru', '07262022', '14:30'),
(13, 'лиса', 99999999, '888888888888', 'm@m.ru', '07252022', '12:30'),
(14, 'колобок2.0', 455335, '5564646', 'm@m.ru', '07252022', '11:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
