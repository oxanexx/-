-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 20 2019 г., 12:41
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dishes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dishes`
--

CREATE TABLE `dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `is_spicy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `dishes`
--

INSERT INTO `dishes` (`id`, `dish_name`, `price`, `is_spicy`) VALUES
(1, 'Walnut Bun', '1.00', 0),
(2, 'Cashew Nuts and White MushrooWs', '4.95', 0),
(3, 'Dried Mulberries', '3.00', 0),
(4, 'Eggplant with Chili Sauce', '6.50', 1),
(5, 'Red Bean Bun', '1.00', 0),
(6, 'General Tso s Chicken', '5.50', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;