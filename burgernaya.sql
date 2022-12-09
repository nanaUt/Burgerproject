-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 07 2022 г., 15:20
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burgernaya`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Бургеры с говядиной'),
(2, 'Бургеры с курицей'),
(3, 'Салаты'),
(4, 'Десерты'),
(5, 'Закуски'),
(6, 'Напитки'),
(7, 'Соусы');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `surname`, `name`, `email`, `number`, `adress`) VALUES
(1, 'Корепанов', 'Ефим', 'efim17051995@outlook.com', '+7 (921) 585-69-58', 'Трудовая ул., д. 4 кв.89'),
(2, 'Тимофееев', 'Тимофей', 'timofey6073@outlook.com', '+7 (911) 347-60-20', 'Севернаяул., д. 24 кв.199'),
(3, 'Загряжская', 'Юлиана', 'rada.zagryajskaya@hotmail.com', '+7 (978) 768-17-80', 'Коммунистическая ул., д. 7 кв.87'),
(4, 'Базанов', 'Филипп', 'filipp.bazanov@gmail.com', '+7 (915) 959-77-24', 'Лесной пер., д. 5 кв.216'),
(5, 'Семёнов', 'Егор', 'egor05051995@ya.ru', '+7 (950) 544-19-33', 'Набережная ул., д. 8 кв.44'),
(6, 'Канадин', 'Игнатий', 'ignatiy1966@outlook.com', '+7 (910) 173-10-30', 'Сельская ул., д. 16 кв.159'),
(7, 'Граббе', 'Елизавета', 'elizaveta03041980@mail.ru', '+7 (965) 665-15-53', '17 Сентября ул., д. 24 кв.185'),
(8, 'Оськина', 'Алина', 'alina.oskina@mail.ru', '+7 (968) 761-15-61', 'Дзержинского ул., д. 23 кв.47'),
(9, 'Циглер', 'Афанасий', 'afanasiy2573@mail.ru', '+7 (987) 395-15-61', 'ЯнкиКупалы ул., д. 16 кв.169'),
(10, 'Бабин', 'Лев', 'lev.babin@gmail.com', '+7 (972) 975-99-26', 'Парковая ул., д. 1 кв.139'),
(11, 'Кузнецов', 'Николай', 'nik@mail.com', '+7(965)775-75-56', 'Шаповалова, 101'),
(12, 'Аллегрова', 'Таисия', 'taya@gmail.com', '+7(957)575-85-85', '2 линия, 43'),
(13, 'Аллегрова', 'Таисия', 'taya@mail.com', '+7(957)574-84-84', 'Шаповалова, 101'),
(18, 'щодвав', 'ладлав', 'hfhf@mail.com', '+7(948)475-75-84', 'jkfjkf'),
(19, 'Куосососччс', 'ьослслс', 'hfjdd@mail.com', '+7(937)447-48-84', 'hkkd');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `date` datetime DEFAULT NULL,
  `sum` int DEFAULT NULL,
  `payment` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `sum`, `payment`) VALUES
(1, 1, '2012-11-20 00:00:00', 0, NULL),
(2, 2, '2013-11-20 00:00:00', 0, NULL),
(3, 3, '2014-11-20 00:00:00', 0, NULL),
(4, 4, '2014-11-20 00:00:00', 0, NULL),
(5, 5, '2014-11-20 00:00:00', 0, NULL),
(6, 6, '2015-11-20 00:00:00', 0, NULL),
(7, 7, '2015-11-20 00:00:00', 0, NULL),
(8, 8, '2015-11-20 00:00:00', 0, NULL),
(9, 9, '2015-11-20 00:00:00', 0, NULL),
(10, 10, '2015-11-20 00:00:00', 0, NULL),
(25, 7, '2020-12-12 00:00:00', 0, NULL),
(26, 8, '2022-11-11 00:00:00', 0, NULL),
(27, 8, '2022-11-11 00:00:00', 0, NULL),
(28, 8, '2022-11-11 00:00:00', 0, NULL),
(29, 6, '2022-11-10 00:00:00', 0, NULL),
(30, 5, '2022-12-12 00:00:00', NULL, NULL),
(31, 4, '2022-11-27 00:00:00', NULL, NULL),
(32, 3, '2022-11-27 00:39:00', NULL, NULL),
(33, 3, '2022-11-27 00:40:00', NULL, NULL),
(34, 4, '2022-11-27 02:20:00', NULL, NULL),
(35, 11, '2022-11-27 03:42:00', NULL, NULL),
(36, 13, '2022-11-27 04:14:00', NULL, NULL),
(37, 13, '2022-11-27 04:18:00', NULL, NULL),
(38, 4, '2022-12-02 16:11:00', NULL, NULL),
(39, 6, '2022-12-03 00:13:00', NULL, NULL),
(40, 4, '2022-12-03 02:00:00', NULL, 1),
(41, 6, '2022-12-03 03:41:00', NULL, 1),
(42, 5, '2022-12-03 03:48:00', NULL, 1),
(43, 4, '2022-12-03 02:09:00', NULL, 0),
(44, 8, '2022-12-03 06:01:00', NULL, 1),
(45, 5, '2022-12-03 06:02:00', NULL, 1),
(46, 2, '2022-12-03 06:32:00', NULL, 1),
(47, 4, '2022-12-03 09:29:00', NULL, 0),
(48, 2, '2022-12-03 09:55:00', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_products`
--

CREATE TABLE `orders_products` (
  `orders_id` int NOT NULL,
  `products_id` int NOT NULL,
  `quanity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders_products`
--

INSERT INTO `orders_products` (`orders_id`, `products_id`, `quanity`) VALUES
(1, 1, 1),
(1, 4, 1),
(1, 11, 2),
(1, 18, 2),
(1, 34, 1),
(2, 18, 2),
(2, 28, 1),
(2, 33, 1),
(3, 17, 3),
(4, 40, 6),
(5, 7, 2),
(5, 11, 2),
(5, 19, 1),
(5, 22, 1),
(6, 24, 3),
(6, 30, 3),
(7, 6, 1),
(7, 8, 1),
(7, 12, 2),
(7, 19, 2),
(8, 31, 1),
(9, 15, 2),
(9, 39, 4),
(10, 29, 6),
(28, 12, 3),
(28, 15, 2),
(29, 8, 5),
(29, 12, 2),
(30, 4, 2),
(31, 4, 2),
(31, 5, 3),
(32, 2, 2),
(32, 3, 1),
(33, 1, 1),
(33, 4, 2),
(34, 10, 5),
(34, 34, 4),
(35, 16, 1),
(35, 19, 1),
(36, 11, 2),
(36, 19, 2),
(37, 9, 3),
(37, 21, 2),
(38, 4, 5),
(38, 13, 2),
(39, 1, 6),
(40, 1, NULL),
(41, 1, 5),
(42, 1, 5),
(43, 1, 4),
(44, 18, 3),
(45, 18, 3),
(46, 19, 2),
(47, 1, 12),
(48, 1, 2),
(48, 15, 2),
(48, 24, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE `payments` (
  `id` int NOT NULL,
  `payments` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `payments`
--

INSERT INTO `payments` (`id`, `payments`) VALUES
(0, 'Оплата при получении'),
(1, 'Оплата онлайн');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(65) DEFAULT NULL,
  `category_id` int NOT NULL,
  `price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `price`) VALUES
(1, 'Биг Спешиал Три Сыра', 1, 299),
(2, 'Биг Спешиал Джуниор', 1, 220),
(3, 'Гранд Де Люкс', 1, 195),
(4, 'Гранд', 1, 169),
(5, 'Двойной Гранд', 1, 250),
(6, 'Чизбургер', 1, 59),
(7, 'Гамбургер', 1, 55),
(8, 'Чикен Хит', 2, 110),
(9, 'Чикен Премьер', 2, 149),
(10, 'Чикенбургер', 2, 59),
(11, 'Картофель Фри', 5, 99),
(12, 'Картофель по-деревенски', 5, 129),
(13, 'Нагетсы(4шт)', 5, 69),
(14, 'Сырные палочки(3шт)', 5, 99),
(15, 'Овощной салат', 3, 110),
(16, 'Цезарь', 3, 179),
(17, 'Цезарь с креветками', 3, 245),
(18, 'Кола', 6, 79),
(19, 'Газ.напиток Лимон-Лайм', 6, 79),
(20, 'Сок Апельсиновый', 6, 89),
(21, 'Сок Яблочный', 6, 79),
(22, 'Сок Мультифрукт', 6, 79),
(23, 'Латте', 6, 169),
(24, 'Капучино', 6, 109),
(25, 'Двойной Эспрессо', 6, 70),
(26, 'Американо', 6, 139),
(27, 'Кофе Глясе', 6, 109),
(28, 'Малиновый пирог', 4, 195),
(29, 'Торт Шоколадный', 4, 175),
(30, 'Клубничный Чизкейк', 4, 175),
(31, 'Тирамису', 4, 165),
(32, 'Донат Шоколадный', 4, 79),
(33, 'Эклер Ванильный', 4, 69),
(34, 'Соус Сырный', 7, 40),
(35, 'Соус Кисло-сладкий', 7, 40),
(36, 'Кетчуп', 7, 40),
(37, 'Соус Чесночный', 7, 40),
(38, 'Соус Горчичный', 7, 40),
(39, 'Макарони(1шт)', 4, 49),
(40, 'Донат Клубничный', 4, 79);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$5yY3YGZ2ZP4r09WQrGqU2uy0AkhMXzvzv/saPEh2FyqfIfUf0cdqi', 'MiRupa4Bc0hhNJOQbal8Kwg1TOpWIS5o');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `id` (`id`),
  ADD KEY `payment` (`payment`);

--
-- Индексы таблицы `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`orders_id`,`products_id`),
  ADD KEY `fk_orders_has_products_products1_idx` (`products_id`),
  ADD KEY `fk_orders_has_products_orders1_idx` (`orders_id`);

--
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`payment`) REFERENCES `payments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_products_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_products_ibfk_2` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
