-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2021 г., 09:48
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `count` varchar(55) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`order_id`, `user_id`, `product_id`, `count`, `status`) VALUES
(8, '10', '16', '3', 0),
(10, '8', '16', '1', 0),
(11, '8', '16', '1', 0),
(12, '8', '16', '1', 0),
(14, '8', '18', '6', 0),
(15, '8', '17', '1', 0),
(16, '8', '18', '3', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(55) NOT NULL,
  `title` varchar(55) NOT NULL,
  `content` varchar(255) NOT NULL,
  `price` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `content`, `price`) VALUES
(16, 'acer.jpeg', 'Acer', 'Acer lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam asperiores.', '800'),
(17, 'iphone.jpg', 'No-name', 'No-name some quick example text to build on the card title and make up the bulk of the card\'s content.', '650'),
(18, 'samsung.jpg', 'Samsung', 'Samsung deleniti doloremque fuga, impedit labore modi non nulla placeat quia sit totam. Consectetur.', '450');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `role`) VALUES
(6, 'aidar', 'admin', 'f0d587897834a73c4ca8290d3b13742781dc9bdb52d04dc20036dbd8313ed055', 1),
(7, 'asdasd', 'dvvd', 'c011728eed899c6e4694f44f761f5f8a81dc9bdb52d04dc20036dbd8313ed055', 0),
(8, 'max', 'max', '4115aa7ae6807f2517a9d52377e4eff2e10adc3949ba59abbe56e057f20f883e', 0),
(9, 'xamp', 'xamp', '11805e70338cbefb03bf0054cb3307d6e10adc3949ba59abbe56e057f20f883e', 0),
(10, 'Иван Иванов', 'qweert', '3d2f62b2a35acdec6f8545490ab7975cf5427c686cb91b020c69c1ebb8b19cf3', 0),
(11, 'qawsedrf', 'qawsedrf', '5a7f46b57452a3011ec14dfbcfcd2c1dd1c2dcfcbfd41ce1103a25475b64f7a5', 0),
(12, 'dfbseberbre', 'dfbseberbre', '667e118f2c57b0ad111d7e4158f363e22e363f8514e7d111da0b75c2f811e766', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
