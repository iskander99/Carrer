-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2021 г., 17:32
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cons_info_industry`
--

CREATE TABLE `cons_info_industry` (
  `id` bigint UNSIGNED NOT NULL,
  `user_cons_info_id` bigint UNSIGNED NOT NULL,
  `industry_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cons_info_region`
--

CREATE TABLE `cons_info_region` (
  `id` bigint UNSIGNED NOT NULL,
  `user_cons_info_id` bigint UNSIGNED NOT NULL,
  `region_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_12_13_113207_create_roles_table', 1),
(3, '2021_12_13_113343_create_tags_table', 1),
(4, '2021_12_13_113540_create_users_table', 1),
(5, '2021_12_13_120737_create_users_candidate_info_table', 1),
(6, '2021_12_13_123120_create_users_consultant_info_table', 1),
(7, '2021_12_13_123831_create_users_education_table', 1),
(8, '2021_12_13_124244_create_users_experience_table', 1),
(9, '2021_12_13_124647_create_consultant_info_region_table', 1),
(10, '2021_12_13_125125_create_consultant_info_industry_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`) VALUES
(1, 'Кандидат', 'Описание роля'),
(2, 'Консультант', 'Описание роля'),
(3, 'Консьерж', 'Описание роля');

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`, `description`) VALUES
(1, 'Бесплатная консультация', 'Описание'),
(2, 'Консультация из рейтинга Топ-100', 'Описание'),
(3, 'Консультация по региону', 'Описание'),
(4, 'Консультация по отрасли', 'Описание'),
(5, 'Консультация женщины', 'Описание'),
(6, 'VIP пакет', 'Описание');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_day` date NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `birth_day`, `citizenship`, `password`, `img`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Iskander', 'Nabiullin', '+79393016832', 'iskander99job@gmail.com', '1999-09-27', 'Tatarin', '$2y$10$6p6FIRcopQKbsI5vl.lEYOtpPJBUQvN4SuL7I/UOh0EKRhYXQRhBK', NULL, 1, '2021-12-13 10:40:44', '2021-12-13 10:40:44', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_cand_info`
--

CREATE TABLE `users_cand_info` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `region` int NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prof_field` int NOT NULL DEFAULT '0',
  `desired_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desired_salary` int NOT NULL,
  `search_region` int NOT NULL DEFAULT '0',
  `search_industry` int NOT NULL DEFAULT '0',
  `tag` bigint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_cand_info`
--

INSERT INTO `users_cand_info` (`id`, `user_id`, `region`, `city`, `prof_field`, `desired_post`, `desired_salary`, `search_region`, `search_industry`, `tag`) VALUES
(1, 2, 1, 'Kazan', 0, 'Programmer', 15000, 0, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users_cons_info`
--

CREATE TABLE `users_cons_info` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `work_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_incognito` int NOT NULL DEFAULT '0',
  `work_mode` int NOT NULL DEFAULT '0',
  `prof_achievements` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_edu`
--

CREATE TABLE `users_edu` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int NOT NULL,
  `edu_years_from` int NOT NULL,
  `edu_years_to` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_edu`
--

INSERT INTO `users_edu` (`id`, `user_id`, `institution`, `faculty`, `specialization`, `level`, `edu_years_from`, `edu_years_to`) VALUES
(1, 2, 'KTITS', 'Programming in comp systems', 'Programmer', 1, 2015, 2021),
(2, 2, 'KTITS', 'Programming in comp systems', 'Programmer', 1, 2015, 2021);

-- --------------------------------------------------------

--
-- Структура таблицы `users_exp`
--

CREATE TABLE `users_exp` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duties` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `func_direction` int NOT NULL DEFAULT '0',
  `exp_mode` int NOT NULL DEFAULT '0',
  `exp_years_from` int NOT NULL,
  `exp_years_to` int NOT NULL,
  `now` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_exp`
--

INSERT INTO `users_exp` (`id`, `user_id`, `organization`, `post`, `duties`, `func_direction`, `exp_mode`, `exp_years_from`, `exp_years_to`, `now`) VALUES
(1, 2, 'Produc', 'programmer', 'coding', 1, 0, 2020, 2021, 1),
(2, 2, 'Produc', 'programmer', 'coding', 0, 0, 2020, 2021, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cons_info_industry`
--
ALTER TABLE `cons_info_industry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_cons_info_industry_idx` (`user_cons_info_id`);

--
-- Индексы таблицы `cons_info_region`
--
ALTER TABLE `cons_info_region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_cons_info_region_idx` (`user_cons_info_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_idx` (`role`);

--
-- Индексы таблицы `users_cand_info`
--
ALTER TABLE `users_cand_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_candidate_idx` (`user_id`),
  ADD KEY `users_candidate_tag_idx` (`tag`);

--
-- Индексы таблицы `users_cons_info`
--
ALTER TABLE `users_cons_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_consultant_idx` (`user_id`);

--
-- Индексы таблицы `users_edu`
--
ALTER TABLE `users_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_edu_idx` (`user_id`);

--
-- Индексы таблицы `users_exp`
--
ALTER TABLE `users_exp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_exp_idx` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cons_info_industry`
--
ALTER TABLE `cons_info_industry`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cons_info_region`
--
ALTER TABLE `cons_info_region`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_cand_info`
--
ALTER TABLE `users_cand_info`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users_cons_info`
--
ALTER TABLE `users_cons_info`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_edu`
--
ALTER TABLE `users_edu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_exp`
--
ALTER TABLE `users_exp`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cons_info_industry`
--
ALTER TABLE `cons_info_industry`
  ADD CONSTRAINT `user_cons_info_industry_fk` FOREIGN KEY (`user_cons_info_id`) REFERENCES `users_cons_info` (`id`);

--
-- Ограничения внешнего ключа таблицы `cons_info_region`
--
ALTER TABLE `cons_info_region`
  ADD CONSTRAINT `user_cons_info_region_fk` FOREIGN KEY (`user_cons_info_id`) REFERENCES `users_cons_info` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role_fk` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_cand_info`
--
ALTER TABLE `users_cand_info`
  ADD CONSTRAINT `user_candidate_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_candidate_tag_fk` FOREIGN KEY (`tag`) REFERENCES `tags` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_cons_info`
--
ALTER TABLE `users_cons_info`
  ADD CONSTRAINT `user_consultant_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_edu`
--
ALTER TABLE `users_edu`
  ADD CONSTRAINT `user_edu_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_exp`
--
ALTER TABLE `users_exp`
  ADD CONSTRAINT `user_exp_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
