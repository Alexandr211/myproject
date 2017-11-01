-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2017 г., 08:39
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `LifeExampleShop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `url`, `parent`, `sort`) VALUES
(1, 'shirts', 'monitory', 5, 0),
(2, 'jackets', 'periferiya', 5, 0),
(3, 'blouses', 'myshki', 2, 0),
(4, 'Any products', 'raznoe', 0, 0),
(5, 'pants', 'kompyutery', 0, 0),
(8, 'shorts', 'rolikovyie', 3, 0),
(14, 'Jersey', 'struynyie', 13, 0),
(15, 't-shirts', 'lazernyie', 13, 0),
(16, 'belts', 'kalkulyatoryi', 2, 0),
(18, 'boots', 'opticheskie', 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `summ` varchar(255) NOT NULL,
  `order_content` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `date`, `name`, `email`, `phone`, `adres`, `summ`, `order_content`) VALUES
(80, 1338545364, 'asd', 'alexandr211@yandex.ru', '123', 'werweqr', '123', 'a:1:{i:72;a:2:{s:5:\\\"price\\\";s:3:\\\"123\\\";s:5:\\\"count\\\";i:1;}}'),
(81, 1338979545, 'Alex', 'alexandr211@ya.ru', '123', '123', '500', 'a:1:{i:58;a:2:{s:5:\\\"price\\\";s:3:\\\"500\\\";s:5:\\\"count\\\";i:1;}}');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc` text NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `cat_id`, `name`, `desc`, `price`, `url`, `image_url`, `code`) VALUES
(58, 4, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam?', '52', 'myish', 'item_foto1.jpg', 'm1'),
(59, 5, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '52', 'klaviatura', 'item_foto2.jpg', 'k-1'),
(60, 5, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '52', 'kolonki', 'item_foto3.jpg', 'kol-1'),
(61, 3, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '120', 'modem', 'item_foto4.jpg', 'modem-1'),
(63, 5, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '223', 'sistemnyiy_blok', 'item_foto5.jpg', 's1'),
(71, 4, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '160', 'testovyiy_tovar', 'item_foto7.jpg', 'T1'),
(73, 4, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '34', 'naushniki', 'item_foto8.jpg', 'NT-1'),
(78, 4, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '34', 'naushniki', 'item_foto8.jpg', 'NT-1'),
(79, 1, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '99', 'monitor', 'item_foto6.jpg', 'mon1'),
(80, 3, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '120', 'modem', 'item_foto4.jpg', 'modem-1'),
(81, 4, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '52', 'myish', 'item_foto1.jpg', 'm1'),
(82, 4, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '52', 'myish', 'item_foto1.jpg', 'm1'),
(83, 1, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '99', 'monitor', 'item_foto6.jpg', 'mon1'),
(84, 4, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '34', 'naushniki', 'item_foto8.jpg', 'NT-1'),
(85, 1, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '99', 'monitor', 'item_foto6.jpg', 'mon1'),
(86, 3, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? ', '120', 'modem', 'item_foto4.jpg', 'modem-1'),
(87, 5, 'MANGO PEOPLE T-SHIRT', 'Lorem ipsum', '23', 'MANGO_PEOPLE_T-SHIRT', 'item_foto5.jpg', 'm1');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `role`) VALUES
(1, 'admin', '1', 1),
(2, 'alex', '123456', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
