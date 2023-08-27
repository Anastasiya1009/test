-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 27 2023 г., 14:35
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `phone1` varchar(20) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `phone3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `email`, `company_name`, `position`, `phone1`, `phone2`, `phone3`) VALUES
(1, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '111111', '222222', '333333'),
(2, 'Анастасия', 'Торопцева', 'toroptseva92@mail.ru', 'one', 'two', '444444', '555555', '666666'),
(3, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '777777', '888888', '999999'),
(4, 'Анастасия', 'Торопцева', 'toroptseva92@mail.ru', 'one', 'two', '111111', '222222', '333333'),
(5, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '121212', '232323', '343434'),
(6, 'Анастасия', 'Торопцева', 'toroptseva92@mail.ru', 'one', 'two', '454545', '565656', '676767'),
(7, 'Анастасия', 'Торопцева', 'toroptseva92@mail.ru', 'one', 'two', '909090', '898989', '787878'),
(8, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '212121', '323232', '545454'),
(9, 'Анастасия', 'Торопцева', 'toroptseva92@mail.ru', 'one', 'two', '444444', '333333', '111111'),
(10, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '666666', '555555', '444444'),
(11, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '777777', '666666', '555555'),
(12, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '444444', '333333', '222222'),
(13, 'Анастасия', 'Торопцева', 'toroptseva92@mail.ru', 'one', 'two', '666666', '555555', '444444'),
(14, 'Анастасия', 'Торопцева', 'toroptseva92@mail.ru', 'one', 'two', '444444', '333333', '111111'),
(15, 'Максим', 'Десятков', 'max_10kov@mail.ru', 'one', 'two', '777777', '666666', '555555'),
(16, 'Максим', 'Десятков', 'max_10kov@mail.ru', '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
