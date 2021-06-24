-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2021 г., 05:45
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `av-maps`
--

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `number` varchar(100) NOT NULL,
  `navigate` varchar(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `number`, `navigate`, `date`) VALUES
(1, 'Событие №1', 'Улица Название д.1', '2021-06-01'),
(3, 'Событие №1', 'Улица Название д.1', '2021-06-02');

-- --------------------------------------------------------

--
-- Структура таблицы `mero`
--

CREATE TABLE `mero` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mero`
--

INSERT INTO `mero` (`id`, `name`, `info`, `date`) VALUES
(1, 'Щелкунчик', 'Мариинский Театр', '2021-06-29'),
(2, 'Экскурсия в публичную библиотеку', 'Российская национальная библиотека', '2021-06-25');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `auth_key`) VALUES
(0, 'Guest', NULL, NULL, NULL),
(1, 'Admin123', 'admin@gmail.com', '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2', NULL),
(2, 'yauser228', 'user1337@mail.ru', '$2y$13$WNZJG6gnWJqK5poRpEw7DOd1nPl81FAXC9PdVoS7SQ46HzckA2KcK', '_uavtwMpynITbivQV5-TIW5RxQ7oTerr'),
(5, 'loginator228', 'loginator@gmail.com', '$2y$13$CkJ79By5oyCZbAqO9ZO8neZekx8F8sMDdZ6xesOjQMbOntivQI8Gq', '5WYgnEX6dSKW9T4bQy8oNB1h6aXPCanL'),
(8, 'RTK20192020', 'rtk@mail.ru', '$2y$13$BfMdJEP.eOjywR5DrFFnZuxGoC0HH4k/dSZU3CqUi9U4QKGzKAA6y', 'DcCn15-MdAA_zMYRckxjexrH2pLcrIwi'),
(11, 'login122', 'password@gmail.com', '$2y$13$1T9VFG.SsXtzuLLS5uqmr.Iq7xIMq//zRv9dNKhkl5ho8pZ.1VJva', 'ny4vN2vBA6Ke1J0cloJVFbAjKrVtCAil');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mero`
--
ALTER TABLE `mero`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `mero`
--
ALTER TABLE `mero`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
