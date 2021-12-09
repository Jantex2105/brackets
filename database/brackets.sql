-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 09 2021 г., 21:35
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `brackets`
--

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `result` varchar(15) DEFAULT NULL,
  `text` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`id`, `result`, `text`) VALUES
(56, 'False', '( 2 * 45 [ 11 ) - 7]'),
(57, 'False', '( 2 { 3 / [ ? } 1 ] )'),
(58, 'False', '> < > <'),
(59, 'True', '< ( { [ 42 ] } ) >'),
(60, 'True', '( 2 * 44 [ 11 ] )'),
(61, 'True', '< a * ( 4 / 7 - [ 2 - 2] / { 11 } ) >'),
(62, 'True', '(привет+пока)');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
