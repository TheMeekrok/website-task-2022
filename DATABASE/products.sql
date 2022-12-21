-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.138.5:3306
-- Время создания: Дек 21 2022 г., 16:30
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
-- База данных: `online_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` text,
  `price` float DEFAULT NULL,
  `description` text,
  `image` text,
  `rating` float DEFAULT NULL,
  `count` int DEFAULT NULL,
  `category` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `rating`, `count`, `category`) VALUES
(2, 'Мужские повседневные футболки премиум-класса Slim Fit', 22.3, 'Приталенный фасон, контрастный длинный рукав реглан, планка Хенли на трех пуговицах, легкий вес и мягкая ткань для воздухопроницаемого и комфортного ношения. И однотонные сшитые рубашки с круглым вырезом, созданные для долговечности и отлично подходящие для повседневной одежды и несгибаемых поклонников бейсбола. Круглый вырез в стиле Хенли дополнен планкой на трех пуговицах', 'https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg', 4.1, 259, 'men\'s clothing'),
(8, 'Mens Cotton Jacket', 55, 'great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.', 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg', 4.7, 500, 'men\'s clothing');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
