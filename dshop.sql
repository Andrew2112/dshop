-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 16 2020 г., 12:19
-- Версия сервера: 5.6.43
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_group`
--

CREATE TABLE `attribute_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_group`
--

INSERT INTO `attribute_group` (`id`, `title`) VALUES
(1, 'Brand'),
(2, 'Стекло'),
(3, 'Season'),
(4, 'Корпус'),
(5, 'Style'),
(6, 'тестовая группа!!');

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_product`
--

CREATE TABLE `attribute_product` (
  `attr_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_product`
--

INSERT INTO `attribute_product` (`attr_id`, `product_id`) VALUES
(1, 1),
(1, 51),
(1, 52),
(1, 54),
(1, 56),
(1, 57),
(2, 4),
(2, 5),
(2, 11),
(2, 15),
(2, 16),
(2, 17),
(2, 20),
(2, 21),
(2, 22),
(2, 53),
(3, 12),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(4, 2),
(4, 3),
(4, 27),
(4, 28),
(5, 1),
(5, 4),
(5, 5),
(5, 12),
(5, 13),
(5, 51),
(5, 53),
(5, 54),
(5, 56),
(5, 57),
(6, 2),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(6, 52),
(7, 3),
(7, 6),
(8, 1),
(8, 53),
(8, 56),
(9, 2),
(9, 14),
(9, 51),
(10, 4),
(10, 5),
(10, 13),
(10, 52),
(11, 7),
(11, 8),
(11, 9),
(11, 10),
(12, 1),
(12, 56),
(13, 53),
(14, 3),
(15, 51),
(15, 52),
(16, 1),
(16, 4),
(16, 5),
(19, 51),
(19, 52),
(19, 53);

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `attr_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `value`, `attr_group_id`) VALUES
(1, 'Alessandro Mansoni', 1),
(2, 'Boss', 1),
(3, 'Ritter', 1),
(4, 'Luhta', 1),
(5, 'Сапфировое', 2),
(6, 'Минеральное', 2),
(7, 'Полимерное', 2),
(8, 'Демисезон', 3),
(9, 'Зима', 3),
(10, 'Лето', 3),
(11, 'Мульти', 3),
(12, 'Нержавеющая сталь', 4),
(13, 'Титановый сплав', 4),
(14, 'Латунь', 4),
(15, 'Полимер', 4),
(16, 'Керамика', 4),
(17, 'Алюминий', 4),
(18, 'Casual', 5),
(19, 'Sportstyle', 5),
(21, 'Test!!', 6),
(22, 'тест', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'brand_no_image.jpg',
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `alias`, `img`, `description`) VALUES
(1, 'VASSA & Co', 'vassa&co', 'abt-1.jpg', 'In sit amet sapien eros Integer dolore magna aliqua'),
(2, 'Lee Cooper', 'lee-cooper', 'abt-2.png', 'In sit amet sapien eros Integer dolore magna aliqua'),
(3, 'Alessandro Manzoni', 'alessandro-manzoni', 'abt-3.jpg', 'In sit amet sapien eros Integer dolore magna aliqua'),
(4, 'Seiko', 'seiko', 'seiko.png', NULL),
(5, 'Diesel', 'diesel', 'diesel.png', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`) VALUES
(1, 'Shop', 'shop', 0, 'Shop', 'Shop'),
(2, 'Women', 'women', 0, 'Women', 'Women'),
(3, 'Kids', 'kids', 0, 'Kids', 'Kids'),
(4, 'Сoat', 'coat', 15, 'coat', 'coat'),
(5, 'Jeans', 'jeans', 15, 'jeans', 'jeans'),
(6, 'Boss', 'boss', 4, 'Boss', 'Boss'),
(7, 'Armani', 'armani', 4, 'Armani', 'Armani'),
(8, 'Alessandro Manzoni', 'alessandro-manzoni', 5, 'Alessandro Manzoni', 'Alessandro Manzoni'),
(9, 'Jachting', 'jachting', 5, 'jachting', 'jachting'),
(10, 'Epos', 'epos', 5, 'Epos', 'Epos'),
(11, 'Women dress', 'women-dress', 2, 'Women dress', 'Women dress'),
(12, 'Skirt', 'skirt', 2, 'Skirt', 'Skirt'),
(13, 'Adriatica', 'adriatica', 11, 'Adriatica', 'Adriatica'),
(14, 'Anne Klein', 'anne-klein', 12, 'Anne Klein', 'Anne Klein'),
(15, 'Men', 'men', 0, 'Men', 'Men'),
(16, '\r\nClothes for Boys', 'clothes-for-boys', 3, 'Clothes for Boys', 'Clothes for Boys'),
(17, 'Clothes for Girls', 'clothes-for-girls', 3, 'Clothes for Girls', 'Clothes for Girls'),
(18, 'Hoody', 'hoody', 16, 'Hoody', 'Hoody'),
(19, '\r\nJacket for girls', 'jacket-for-girls', 17, '\r\nJacket for girls', '\r\nJacket for girls'),
(20, 'Accessaries', 'accessaries', 0, 'Accessaries', 'Accessaries'),
(21, 'Sale', 'sale', 0, 'Sale', 'Sale'),
(26, 'Люксембургский сад2', 'lyuksemburgskiy-sad2', 15, '222', '121');

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE `currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(10) NOT NULL,
  `symbol_right` varchar(10) NOT NULL,
  `value` float(15,2) NOT NULL,
  `base` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `symbol_left`, `symbol_right`, `value`, `base`) VALUES
(1, 'Рубль', 'RUR', '₽', ' руб.', 62.80, '0'),
(2, 'доллар', 'USD', '$', '', 1.00, '1'),
(3, 'Евро', 'EUR', '€', '', 0.88, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `img`) VALUES
(1, 2, 'goods21.jpg'),
(2, 2, 'goods22.jpg'),
(3, 2, 'goods23.jpg'),
(4, 3, 'goods31.jpg'),
(5, 3, 'goods32.jpg'),
(6, 3, 'goods33.jpg'),
(7, 4, 'goods41.jpg'),
(8, 4, 'goods42.jpg'),
(15, 54, '6324c3f08f109c7338db7bb0c441ec59.jpg'),
(18, 54, '1463e289ac6d335a907a2ac72a758bd7.jpg'),
(20, 6, 'f545c95f242158f84d5c6484a681bd23.jpg'),
(21, 6, '7fbdbd7c59beb02fc4b0b7a07f32198d.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `modification`
--

CREATE TABLE `modification` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `modification`
--

INSERT INTO `modification` (`id`, `product_id`, `title`, `price`) VALUES
(1, 3, 'XS', 40),
(2, 3, 'S', 40),
(3, 3, 'M', 40),
(4, 3, 'L', 45),
(5, 2, 'S', 68),
(6, 2, 'M', 70),
(7, 4, 'XS', 40),
(8, 4, 'S', 40),
(9, 4, 'M', 42),
(10, 4, 'L', 44),
(11, 5, 'S', 55),
(12, 5, 'XS', 55),
(13, 5, 'M', 55),
(14, 5, 'L', 58),
(15, 6, 'S', 35),
(16, 6, 'XS', 35),
(17, 6, 'M', 35),
(18, 6, 'L', 38),
(19, 7, 'S', 20),
(20, 7, 'XS', 20),
(21, 7, 'M', 20),
(22, 7, 'L', 23);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `currency` varchar(10) NOT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `currency`, `note`) VALUES
(58, 15, '0', '2019-12-05 08:06:44', NULL, 'RUR', ''),
(59, 15, '0', '2019-12-05 08:07:14', NULL, 'RUR', ''),
(60, 15, '0', '2019-12-05 19:32:36', NULL, 'RUR', '111'),
(61, 15, '0', '2019-12-05 19:33:05', NULL, 'RUR', '222'),
(69, 15, '0', '2019-12-05 19:39:45', NULL, 'RUR', ''),
(70, 15, '0', '2019-12-05 20:25:04', NULL, 'RUR', ''),
(71, 15, '0', '2019-12-05 20:27:02', '2019-12-05 20:28:54', 'RUR', ''),
(72, 12, '0', '2019-12-18 09:25:25', NULL, 'USD', ''),
(73, 20, '0', '2019-12-18 09:34:18', NULL, 'USD', ''),
(74, 15, '0', '2019-12-19 10:40:58', NULL, 'USD', ''),
(75, 24, '0', '2020-02-15 07:47:22', NULL, 'RUR', ''),
(76, 24, '0', '2020-02-15 07:49:10', NULL, 'RUR', ''),
(77, 24, '0', '2020-02-15 07:50:58', NULL, 'RUR', ''),
(78, 24, '0', '2020-02-15 07:54:56', NULL, 'RUR', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(153, 58, 11, 1, 'Тестовый товар', 658),
(154, 59, 17, 1, 'Тестовый товар 6', 7896),
(155, 59, 22, 1, 'Тестовый товар 9', 8225),
(156, 59, 23, 1, 'Тестовый товар 10', 8225),
(157, 60, 14, 1, 'Тестовый товар3', 7238),
(158, 60, 13, 1, 'Тестовый товар2', 6909),
(159, 61, 11, 2, 'Тестовый товар', 658),
(160, 69, 2, 1, 'CREAM SISSI TUNIC', 4606),
(161, 70, 5, 1, 'CREAM JANE JEANS DRESS', 3619),
(162, 71, 11, 1, 'Тестовый товар', 658),
(163, 72, 3, 1, 'BIG DOODLE SHAWL - BLUE/BLACK', 40),
(164, 73, 2, 1, 'CREAM SISSI TUNIC', 70),
(165, 74, 34, 1, 'Новый товар', 350),
(166, 75, 2, 1, 'CREAM SISSI TUNIC', 4396),
(167, 75, 6, 1, 'CREAM SISSI TUNIC', 2198),
(168, 76, 2, 1, 'CREAM SISSI TUNIC', 4396),
(169, 76, 6, 1, 'CREAM SISSI TUNIC', 2198),
(170, 77, 2, 1, 'CREAM SISSI TUNIC', 4396),
(171, 77, 6, 1, 'CREAM SISSI TUNIC', 2198),
(172, 78, 2, 1, 'CREAM SISSI TUNIC', 4396),
(173, 78, 6, 1, 'CREAM SISSI TUNIC', 2198);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `email`, `text`) VALUES
(1, 'Автор', 'mail@mail.com', 'Текст сообщения'),
(2, 'User1', '22@we.rt', 'Lorem ipsum'),
(3, 'User2', 'linnike@list.ru', 'Текст сообщения');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `brand_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `old_price` float NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `hit` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `brand_id`, `title`, `alias`, `content`, `price`, `old_price`, `status`, `keywords`, `description`, `img`, `hit`) VALUES
(1, 6, 1, 'Ritter Skirt men', 'ritter-skirt-men', '', 70, 79, '1', '', '', 'goods1.jpg', '0'),
(2, 6, 1, 'CREAM SISSI TUNIC', 'cream-sissi-tunics', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>\n\n                                            <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>', 70, 80, '1', NULL, 'Signature NYX cosmetics', 'goods2.jpg', '1'),
(3, 6, 1, 'BIG DOODLE SHAWL - BLUE/BLACK', 'big-doodle-shawl-blue-black', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem?\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem?', 40, 49, '1', NULL, 'Lightweight with just a hint of sheer color, this hydrating', 'goods3.jpg', '1'),
(4, 7, 2, 'Big Doodle Shawl', 'big-doodle-shawl ', NULL, 40, 0, '1', NULL, 'Lightweight with just a hint of sheer color, this hydrating', 'goods4.jpg', '1'),
(5, 7, 2, 'CREAM JANE JEANS DRESS', 'cream-jane-jeans-dress', NULL, 55, 65, '1', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ', 'goods5.jpg', '1'),
(6, 7, 2, 'CREAM SISSI TUNIC', 'cream-sissi-tunic', '', 35, 45, '1', '', ' A aliquam aliquid amet.', 'goods6.jpg', '1'),
(7, 6, 3, 'MY TWIN TWINSET JEANS', 'my-twin-twinset-jeans', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem?', 20, 0, '1', NULL, 'Lorem ipsum dolor sit amet. ', 'goods7.jpg', '1'),
(8, 6, 4, 'ALESSANDRO MANZONI WOMEN\'S DRESS', 'alessandro-manzoni-women-s-dress', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem?</p>\r\n', 90, 0, '1', '', 'Ad dicta ex illum quia, unde ut!', 'goods8.jpg', '1'),
(9, 6, 4, 'MY TWIN TWINSET', 'my-twin-twinset', NULL, 99, 0, '1', NULL, 'Accusantium, alias consectetur, doloremque ex mollitia, nam nisi non pariatur perferendis perspiciatis quis rem similique.', 'goods9.jpg', '1'),
(10, 6, 4, 'Lee Cooper Seal Knit Sweater Men\'s', 'lee-cooper-seal-knit-sweater-mens', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>\n\n                                            <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>', 75, 0, '1', NULL, 'This Men\'s Lee Cooper Seal Knit Sweater comes with a crew neck, whilst the ribbed/elasticated cuffs', 'goods11.jpg', '1'),
(11, 3, 2, 'Тестовый товар', 'testovyy-tovar', 'контент...', 10, 0, '1', NULL, NULL, 'goods11.jpg', '0'),
(12, 15, 2, 'Bikkembergs\r\n\r\nДжинсы', 'bikkembergs', NULL, 100, 0, '1', NULL, NULL, 'goods12.jpg', '0'),
(13, 2, 2, 'Тестовый товар2', 'testovyy-tovar-2', NULL, 105, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(14, 2, 2, 'Тестовый товар3', 'testovyy-tovar-3', NULL, 110, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(15, 7, 2, 'Тестовый товар 4', 'testovyy-tovar-4', NULL, 115, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(16, 7, 2, 'Тестовый товар 5', 'testovyy-tovar-5', NULL, 115, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(17, 7, 2, 'Тестовый товар 6', 'testovyy-tovar-6', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(20, 7, 2, 'Тестовый товар 7', 'testovyy-tovar-7', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(21, 7, 2, 'Тестовый товар 8', 'testovyy-tovar-8', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(22, 7, 2, 'Тестовый товар 9', 'testovyy-tovar-9', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(23, 7, 2, 'Тестовый товар 10', 'testovyy-tovar-10', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(24, 7, 2, 'Тестовый товар 11', 'testovyy-tovar-11', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(25, 7, 2, 'Тестовый товар 12', 'testovyy-tovar-12', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(26, 7, 2, 'Тестовый товар 13', 'testovyy-tovar-13', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(27, 7, 2, 'Тестовый товар 14', 'testovyy-tovar-14', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(28, 7, 2, 'Тестовый товар 15', 'testovyy-tovar-15', '', 125, 0, '1', '', '', 'no_image.jpg', '0'),
(29, 7, 2, 'Тестовый товар 16', 'testovyy-tovar-16', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(30, 7, 2, 'Тестовый товар 17', 'testovyy-tovar-17', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(31, 7, 2, 'Тестовый товар 18', 'testovyy-tovar-18', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(32, 7, 2, 'Тестовый товар 19', 'testovyy-tovar-19', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(33, 7, 2, 'Тестовый товар 20', 'testovyy-tovar-20', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(34, 16, 0, 'Новый товар', 'novyi-tovar', 'Суперновый товар', 350, 400, '1', 'Новый товар', 'Новый товар', 'no_image.jpg', '0'),
(36, 16, 0, 'Новый товар1', 'novyi-tovar1', 'Новый товар1', 231, 233, '1', 'Новый товар1', 'Новый товар1', 'no_image.jpg', '0'),
(49, 26, 0, 'Новый товар5', 'novyy-tovar5', '<p><img alt=\"\" src=\"/public/upload/images/1/vesta.jpg\" style=\"float:left; height:107px; width:200px\" />test upload</p>\r\n', 123, 126, '1', 'Новый товар5', 'Новый товар5', 'no_image.jpg', '0'),
(51, 26, 0, 'Новый товар 6', 'novyy-tovar-6-51', '<p><strong><img alt=\"\" src=\"/public/upload/images/1/vesta.jpg\" style=\"float:left; height:180px; width:335px\" /></strong></p>\r\n', 12, 15, '1', 'Новый товар 6', 'Новый товар 6', 'no_image.jpg', '0'),
(54, 26, 0, 'Новый товар 7', 'novyy-tovar-7', '<p>Новый товар 7</p>\r\n', 350, 400, '1', 'Новый товар 7', 'Новый товар 7', '3daf254e92a63b1b12b1551310e99de1.jpg', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `related_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(1, 2),
(1, 5),
(2, 5),
(2, 10),
(5, 1),
(5, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`, `address`, `role`) VALUES
(10, 'user2', '$2y$10$OklLwKKjH3rHNeZSbFR3LuGfbUgzvkzjAcoY4ROXf7Iu1dSa6NvO.', 'mahatu@mail.ru', 'User2', '111', 'user'),
(11, 'user3', '$2y$10$GpmWR78qI.9.4icyXMOKc..4Bl2YWeIRuMUZuVqNy88wVIJMcOkYO', '1@11.qq', 'User3', '111', 'user'),
(13, 'user4', '$2y$10$j8LXDCyGAP20rmZtQF83vOjyyP2fM9BvbBmYObPUVl07mAn3gQN3a', '12@qq.ru', 'User4', '111', 'user'),
(14, 'user5', '$2y$10$JciqRTJ6rDnXEBx93mJc8.JtHB3p8GClfPJ9eMKwyxjYEwDIYJATu', 'energomeh@mail.ru', 'User5', '345', 'user'),
(15, 'admin', '$2y$10$ns967.Q2U0Je6wcHsn8Qf.q5rpYu7I1Ojjc1oE2Qre5hu12qOo/fi', 'www@dshop.loc', 'Andrew', 'SPb', 'admin'),
(16, 'user7', '$2y$10$EwT7jJPNpasH6S75xHF.NOKVwIQsPjQUWL0mnysDJ/hdTBzRqTmvK', '121@nr.ru', 'User7', '123', 'user'),
(17, 'user9', '$2y$10$tmewwXxQiQnbgezkXuqF6egz36.q7GS4Q7mMz1Pu/RN6wvtwLxUdi', '1q21@nr.ru', 'User9', '1234', 'user'),
(18, 'user10', '$2y$10$gmOn6zhy0r2ZwjEaC0OQL.jX6dtbYaUjG1u7KMqUDYsFk8.7Nggva', 'qwe@qw.ry', 'User10', '222', 'user'),
(19, 'user16', '$2y$10$M5yJeGDi/lLWM54yEZY/GOH4hRD4DaitYfyC1GAZHLqV56G5WMZtm', 'taf397@yahoo.com', 'User16', 'Науки пр., д.63-60', 'user'),
(20, 'user1', '$2y$10$JF9gm3iEEP6YZL0fukj1QODv29gbyLdJ4SUjrlDEx9tLwwJPo3Fhe', 'taf_397@yahoo.com', 'User1', 'Науки пр., д.63-60', 'admin'),
(23, 'user17', '$2y$10$TpmMJHnXfzWz3dYRdsnxSu.1mjLHUdjT3sAz3Gk6di5pHOgNRT/KC', 'as@bn.vn', 'User17', '123', 'user'),
(24, 'nataly', '$2y$10$Kwb9uAF83FA.PevzStJu/ObnOEsWo5YjLAh8jLcMjQ7t.bOGJh5mC', 'natalinv74@mail.ru', 'Наталья', 'Николая Рубцова', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`attr_id`,`product_id`);

--
-- Индексы таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `attr_group_id` (`attr_group_id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `hit` (`hit`);

--
-- Индексы таблицы `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `modification`
--
ALTER TABLE `modification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
