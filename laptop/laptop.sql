-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 07 2021 г., 12:18
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab_8`
--

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `ID` int(10) NOT NULL,
  `company_ID` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `foundYear` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`ID`, `company_ID`, `name`, `author`, `foundYear`) VALUES
(1, 1, 'SAMSUNG', 'Ли Бён Чхоль', 1938),
(2, 2, 'APPLE', 'Стив Джобс', 1976),
(3, 3, 'RAZER', 'Мин Лианг Тан', 1998),
(4, 1, 'MSI', 'Джозеф Хсу', 1986),
(5, 2, 'LENOVO', 'Лиу Чуанджи', 1984),
(6, 3, 'HP', 'Девид Паккард', 1939);

-- --------------------------------------------------------

--
-- Структура таблицы `laptop`
--

CREATE TABLE `laptop` (
  `ID` int(10) NOT NULL,
  `type_ID` int(10) NOT NULL,
  `GPU` varchar(20) NOT NULL,
  `RAM` int(5) NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `laptop`
--

INSERT INTO `laptop` (`ID`, `type_ID`, `GPU`, `RAM`, `weight`, `price`) VALUES
(1, 1, ' Intel Core i3-10110', 8, '1', 19000),
(2, 2, 'Apple M1', 8, '2', 34999),
(3, 3, 'I7-10750H', 16, '2', 40000),
(4, 4, 'I3-1115G4', 8, '1', 20000),
(5, 5, 'Ryzen 3 3250', 8, '2', 15000),
(6, 6, 'Ryzen 5 5600H', 16, '2', 29999);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `ID` int(10) NOT NULL,
  `product_ID` int(10) NOT NULL,
  `maker` varchar(20) NOT NULL,
  `model` varchar(15) NOT NULL,
  `god_sozd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`ID`, `product_ID`, `maker`, `model`, `god_sozd`) VALUES
(1, 1, 'LENOVO', 'Aspire', 2021),
(2, 2, 'RAZER', 'Blade', 2020),
(3, 3, 'APPLE', 'MacBook', 2020),
(4, 4, 'MSI', 'Prestige_14', 2018),
(5, 5, 'HP', 'Pavilion_15', 2018),
(6, 6, 'Lenovo', 'ThinkPad', 2021);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `type_ID` (`type_ID`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_ID` (`product_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `laptop`
--
ALTER TABLE `laptop`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`type_ID`) REFERENCES `company` (`ID`),
  ADD CONSTRAINT `laptop_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `product` (`product_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
