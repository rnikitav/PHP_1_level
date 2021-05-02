-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 05 2020 г., 11:53
-- Версия сервера: 8.0.20
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `time` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `goods` json NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Оплачен'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `time`, `address`, `buyer`, `goods`, `status`) VALUES
(21, '2020/07/05 - 02:00', 'Germany/45/45/', 'asd', '{\"htc1\": {\"img\": \"htc.jpg\", \"name\": \"HTC\", \"count\": 1, \"price\": \"1000\", \"article\": \"htc1\"}, \"Samsung1\": {\"img\": \"samsung.jpg\", \"name\": \"Samsung\", \"count\": 1, \"price\": \"1500\", \"article\": \"Samsung1\"}}', 'Отправлен'),
(24, '2020/07/05 - 13:16', 'Bangladesh/ds/ds/', '123', '{\"htc1\": {\"img\": \"htc.jpg\", \"name\": \"HTC\", \"count\": 2, \"price\": \"1000\", \"article\": \"htc1\"}, \"Samsung1\": {\"img\": \"samsung.jpg\", \"name\": \"Samsung\", \"count\": 1, \"price\": \"1500\", \"article\": \"Samsung1\"}}', 'Оплачен'),
(25, '2020/07/05 - 13:23', 'Bangladesh/e/e/', '123', '{\"iphone11\": {\"img\": \"iphone.jpg\", \"name\": \"Iphone\", \"count\": 2, \"price\": \"2000\", \"article\": \"iphone11\"}}', 'Оплачен'),
(26, '2020/07/05 - 13:30', 'Bangladesh/32/32/', '123', '{\"htc1\": {\"img\": \"htc.jpg\", \"name\": \"HTC\", \"count\": 1, \"price\": \"1000\", \"article\": \"htc1\"}, \"Samsung1\": {\"img\": \"samsung.jpg\", \"name\": \"Samsung\", \"count\": 1, \"price\": \"1500\", \"article\": \"Samsung1\"}, \"iphone11\": {\"img\": \"iphone.jpg\", \"name\": \"Iphone\", \"count\": 5, \"price\": \"2000\", \"article\": \"iphone11\"}}', 'Принят');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
