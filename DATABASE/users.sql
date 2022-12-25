-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.138.5:3306
-- Время создания: Дек 25 2022 г., 13:43
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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `privilege` tinyint(1) DEFAULT NULL,
  `first_name` text,
  `second_name` text,
  `date` date DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `privilege`, `first_name`, `second_name`, `date`, `phone`, `mail`) VALUES
(24, 'afasffs', 'ee1b6285088515ba496b34a8fbbd490d5c3ff6cb7106c76f31a391ce447bba27', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'qwer', 'f6f2ea8f45d8a057c9566a33f99474da2e5c6a6604d736121650e2730c6fb0a3', 1, 'Матвей', 'Сербинович', '2003-09-23', '89084502900', 'ezepiz@mail.ru'),
(27, 'qwerrtt', '8af20ce49185a51800db8c8cb127f27429ba1e5b0e01aa0c39da55eef2770408', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'gizeb', '8edd17a7122c439b9eb4bfcd91f190258d0c1dc5e618a83b48915a811cc66cf0', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Guzev', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Danil', '8051d572562d5f113ecb940982c034b2f205f09344e85eb08c9f65b16610e2b1', NULL, 'Данил', 'kinza', '2022-12-02', '79084502900', 'ryzhkov@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
