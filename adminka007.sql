-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2023 г., 10:58
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `adminka007`
--

-- --------------------------------------------------------

--
-- Структура таблицы `administration`
--

CREATE TABLE `administration` (
  `id` int NOT NULL,
  `name_manger` varchar(111) NOT NULL,
  `login` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `role` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `administration`
--

INSERT INTO `administration` (`id`, `name_manger`, `login`, `password`, `role`) VALUES
(21, 'Юра', 'admin', 'admin228', 'admin'),
(23, 'Azat', 'manager', '22', 'manager');

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` int NOT NULL,
  `name` varchar(222) NOT NULL,
  `number` varchar(222) NOT NULL,
  `link` varchar(222) NOT NULL,
  `list` varchar(222) NOT NULL,
  `discription` varchar(222) NOT NULL,
  `stage` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `name`, `number`, `link`, `list`, `discription`, `stage`) VALUES
(73, 'фывф', 'фывфыв', '1asedfsf', 'Brandformance-маркетинг', ' ыфвывф', 'новая заявка'),
(74, 'Закатистов Антон Олегович', '9093144127', 'https://hd.kinopoisk.ru/', 'HR-брендинг', 'Чтобы я оставил все на смотек ', ''),
(75, 'Azat Talgatovich Farvaev', '+79172460813', '12312321', 'Брендинг', ' привет\r\n', 'новая заявка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
