-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 03 2021 г., 10:32
-- Версия сервера: 8.0.19
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `goldbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1617172153),
('m130524_201442_init', 1617172168),
('m190124_110200_add_verification_token_column_to_user_table', 1617172170),
('m210331_090449_create_murojatlar_table', 1617194375),
('m210331_111749_create_user_profile_table', 1617194378);

-- --------------------------------------------------------

--
-- Структура таблицы `murojatlar`
--

CREATE TABLE `murojatlar` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text,
  `book_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `summa_vkalada` int NOT NULL,
  `prosent` int NOT NULL,
  `kolvo_tek_natch` int DEFAULT NULL,
  `summa_natch` int DEFAULT NULL,
  `status_deposit` int DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `summa_vkalada`, `prosent`, `kolvo_tek_natch`, `summa_natch`, `status_deposit`, `data`) VALUES
(1, 1, 20000, 20, 1, 16000, 0, NULL),
(2, 1, 20000, 20, 1, 16000, 0, '2021-04-01 00:00:00'),
(3, 1, 20000, 20, 1, 16000, 0, '2021-04-01 12:59:38'),
(4, 1, 15000, 20, 1, 12000, 0, '2021-04-01 13:47:01'),
(5, 1, 15000, 20, 1, 12000, 0, '2021-04-01 13:48:53'),
(6, 1, 26000, 20, 1, 20800, 0, '2021-04-01 14:43:52'),
(7, 1, 12000, 20, 1, 9600, 0, '2021-04-01 14:48:56'),
(8, 1, 12000, 20, 1, 9600, 0, '2021-04-01 14:56:03'),
(9, 9, 20000, 20, 1, 16000, 0, '2021-04-01 19:29:44');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', '3V8RFFqw9-ckbiJBiQyuOc5gwYZUFXVT', '$2y$13$jfravnS7DNwOcLuIOxCqW.2lkuJw/2qirAo9Mw1xfMXwOtQQMLmqO', NULL, 'kamol_ikramov@mail.ru', 10, 1617172247, 1617172247, 'heSbX66feszaRvZ5ZZvVXsBKNrqAze6v_1617172247'),
(8, 'pudge', 'Met4jQUYA735kB6CrmY4hbxDCo_KC9sF', '$2y$13$14LXpOcwn.JCZvLIDoRuQ.oBBnpY1rWyW0bdzdGf3cRUwiv9Cr5Bi', NULL, 'pudge@mail.ru', 10, 1617196557, 1617196557, 'NVtqNxoyzyyHMFS8YZmZCv372wC__7H-_1617196557'),
(9, 'coco', 'gzeJ6rbFBVn93gTAJ8akSMlA_KG3s9H-', '$2y$13$9UM0HOOui.qubAcOZi06e.p3FU875FQj11BxndvmrW6XZi7yOs3P2', NULL, 'coco@mail.ru', 10, 1617294392, 1617294392, 'vlYIhcxBN3SiZwD_yeBa8CsQ76dO6Fkn_1617294392');

-- --------------------------------------------------------

--
-- Структура таблицы `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `schot_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deposit` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `schot_user`, `deposit`) VALUES
(2, 1, '88003648423', 112000),
(3, 9, '88003648424', 16000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `murojatlar`
--
ALTER TABLE `murojatlar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user-user_profile` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `murojatlar`
--
ALTER TABLE `murojatlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user-user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
