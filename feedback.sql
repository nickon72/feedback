-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2022 г., 11:57
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `feedback`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departmens`
--

CREATE TABLE `departmens` (
  `id` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `departmens`
--

INSERT INTO `departmens` (`id`, `title`, `email`) VALUES
(1, 'адрес 1', 'example1@rambler.ru'),
(2, 'адрес 2', 'example2@rambler.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_place` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `request_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_place`, `name`, `phone`, `message`, `request_name`) VALUES
(1, '4', 'nickon', '35558548545', 'ln,bn,,b,b,b,m,jhj,', '1235071640CategoriesController.php'),
(2, '1', '', '8941313131', 'любой текст', '876725377Алан Уотс – Книга о табу на знание о том, кто ты.doc'),
(3, '2', 'nickon', 'xxbcbcb', 'xbcvbcv', '1039798866Алан Уотс – Книга о табу на знание о том, кто ты.doc'),
(4, '2', 'nickon', '5653', 'lkl;kl', ''),
(5, '4', 'nickon', '87945661', 'адлпддивидд', '52998781Ивашов. Опрокинутый мир.pdf'),
(6, '1', 'nickon', '424', 'tdhd', ''),
(7, '4', 'nickon', '8941313131', 'sgdsfg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `place`
--

CREATE TABLE `place` (
  `id` int NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `place`
--

INSERT INTO `place` (`id`, `address`) VALUES
(1, 'место хранения 1'),
(2, 'место хранения 2'),
(3, 'место хранения 3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `departmens`
--
ALTER TABLE `departmens`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `departmens`
--
ALTER TABLE `departmens`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `place`
--
ALTER TABLE `place`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
