-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 02:32 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_des_projets`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `registrationNumber` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `registrationNumber`, `name`, `email`, `address`, `phoneNumber`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'c_registrationNumber811', 'c_name1', 'c_email1@mail.com', 'c_address1', '22201', 'c_comment1', '2018-11-13 01:18:30', '2018-11-13 01:18:30'),
(2, 'c_registrationNumber754', 'c_name2', 'c_email2@mail.com', 'c_address2', '60948', 'c_comment2', '2018-11-13 01:18:30', '2018-11-13 01:18:30'),
(3, 'c_registrationNumber869', 'c_name3', 'c_email3@mail.com', 'c_address3', '55940', 'c_comment3', '2018-11-13 01:18:30', '2018-11-13 01:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_05_231817_Timers_Users_id_foreign', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `limitDate` datetime NOT NULL,
  `startDate` datetime DEFAULT NULL,
  `finishDate` datetime DEFAULT NULL,
  `displacement` tinyint(1) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `limitDate`, `startDate`, `finishDate`, `displacement`, `state`, `comment`, `created_at`, `updated_at`, `client_id`, `user_id`) VALUES
(1, 'p_title1', 'p_description1', '2018-11-18 00:00:00', '2018-11-12 00:00:00', NULL, 0, 1, 'p_comment1', '2018-11-13 01:22:36', '2018-11-13 01:22:36', 1, 5),
(2, 'p_title2', 'p_description2', '2018-11-19 00:00:00', '2018-11-13 00:00:00', '2018-11-18 00:00:00', 1, 0, 'p_comment2', '2018-11-13 01:22:36', '2018-11-13 01:22:36', 2, 6),
(3, 'p_title3', 'p_description3', '2018-11-20 00:00:00', '2018-11-14 00:00:00', NULL, 0, 1, 'p_comment3', '2018-11-13 01:22:36', '2018-11-13 01:22:36', 3, 5),
(4, 'p_title4', 'p_description4', '2018-11-21 00:00:00', '2018-11-15 00:00:00', '2018-11-20 00:00:00', 1, 0, 'p_comment4', '2018-11-13 01:22:37', '2018-11-13 01:22:37', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `limitDate` datetime NOT NULL,
  `state` enum('IN_PROGRESS','FINISHED','VALIDATED') COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `limitDate`, `state`, `progress`, `priority`, `comment`, `created_at`, `updated_at`, `project_id`) VALUES
(1, 't_title4', '2018-11-16 00:00:00', 'VALIDATED', 100, 1, 't_comment4', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 2),
(2, 't_title5', '2018-11-17 00:00:00', 'VALIDATED', 100, 2, 't_comment5', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 2),
(3, 't_title6', '2018-11-18 00:00:00', 'VALIDATED', 100, 3, 't_comment6', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 2),
(4, 't_title7', '2018-11-17 00:00:00', 'FINISHED', 100, 1, 't_comment7', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 3),
(5, 't_title8', '2018-11-18 00:00:00', 'IN_PROGRESS', 45, 2, 't_comment8', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 3),
(6, 't_title9', '2018-11-19 00:00:00', 'IN_PROGRESS', 90, 3, 't_comment9', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 3),
(7, 't_title10', '2018-11-18 00:00:00', 'VALIDATED', 100, 1, 't_comment10', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 4),
(8, 't_title11', '2018-11-19 00:00:00', 'VALIDATED', 100, 2, 't_comment11', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 4),
(9, 't_title12', '2018-11-20 00:00:00', 'VALIDATED', 100, 3, 't_comment12', '2018-11-13 01:23:40', '2018-11-13 01:23:40', 4),
(10, 't_title1', '2018-11-15 00:00:00', 'IN_PROGRESS', 50, 1, 't_comment1', '2018-11-13 01:23:39', '2018-11-13 01:23:39', 1),
(11, 't_title2', '2018-11-16 00:00:00', 'FINISHED', 100, 2, 't_comment2', '2018-11-13 01:23:39', '2018-11-13 01:23:39', 1),
(12, 't_title3', '2018-11-17 00:00:00', 'IN_PROGRESS', 75, 3, 't_comment3', '2018-11-13 01:23:39', '2018-11-13 01:23:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

CREATE TABLE `task_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL,
  `startDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `finishDate` datetime DEFAULT NULL,
  `hoursCount` double NOT NULL DEFAULT '0',
  `needCalculating` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_user`
--

INSERT INTO `task_user` (`user_id`, `task_id`, `startDate`, `finishDate`, `hoursCount`, `needCalculating`, `created_at`, `updated_at`) VALUES
(7, 1, '2018-11-13 08:30:00', '2018-11-13 10:30:00', 2.5, 1, '2018-11-13 01:27:17', '2018-11-13 01:27:17'),
(10, 1, '2018-11-12 08:30:00', '2018-11-12 10:00:00', 2, 1, '2018-11-13 01:27:17', '2018-11-13 01:27:17'),
(7, 2, '2018-11-15 08:30:00', '2018-11-15 13:00:00', 4, 1, '2018-11-13 01:27:17', '2018-11-13 01:27:17'),
(8, 2, '2018-11-16 08:30:00', '2018-11-16 11:00:00', 5.2, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(9, 3, '2018-11-14 08:30:00', NULL, 5, 0, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(10, 4, '2018-11-16 08:30:00', '2018-11-16 11:00:00', 2.3, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(8, 5, '2018-11-15 08:30:00', '2018-11-15 13:02:00', 3.6, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(9, 5, '2018-11-16 08:30:00', '2018-11-16 09:06:00', 4.6, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(11, 5, '2018-11-15 08:30:00', '2018-11-15 10:50:00', 5, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(10, 6, '2018-11-18 08:30:00', '2018-11-18 13:00:00', 5, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(12, 6, '2018-11-18 08:30:00', '2018-11-18 12:00:00', 1.5, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(10, 7, '2018-11-16 08:30:00', '2018-11-16 09:30:00', 3, 1, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(8, 8, '2018-11-17 08:30:00', NULL, 2, 0, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(11, 8, '2018-11-16 08:30:00', NULL, 5, 0, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(9, 9, '2018-11-18 08:30:00', NULL, 3, 0, '2018-11-13 01:27:19', '2018-11-13 01:27:19'),
(12, 9, '2018-11-18 08:30:00', NULL, 4.1, 0, '2018-11-13 01:27:18', '2018-11-13 01:27:18'),
(7, 10, '2018-11-20 08:30:00', '2018-11-20 13:00:00', 4.1, 1, '2018-11-13 01:27:19', '2018-11-13 01:27:19'),
(9, 10, '2018-11-20 08:30:00', '2018-11-20 13:00:00', 3.9, 1, '2018-11-13 01:27:19', '2018-11-13 01:27:19'),
(8, 11, '2018-11-19 08:30:00', '2018-11-19 13:00:00', 3, 1, '2018-11-13 01:27:19', '2018-11-13 01:27:19'),
(10, 11, '2018-11-19 08:30:00', '2018-11-19 13:00:00', 2, 1, '2018-11-13 01:27:19', '2018-11-13 01:27:19'),
(9, 12, '2018-11-21 08:30:00', '2018-11-21 13:00:00', 2.3, 1, '2018-11-13 01:27:19', '2018-11-13 01:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `timers`
--

CREATE TABLE `timers` (
  `id` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `pauseDate` datetime DEFAULT NULL,
  `idTask` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idUser` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('ADMIN','MANAGER','PROJECT_MANAGER','EMPLOYEE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `password`, `role`, `comment`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'u_name1', 'u_email1@mail.com', 'default.png', '$2y$10$JPHR/5sOMa4QurnqNPpY5O5D1BKJ/W1qhgHr53HqDD2eSGhN8Bd5C', 'ADMIN', 'u_comment1', 'u_remember_token_rAaExd2eeb', '2018-11-13 01:18:27', '2018-11-13 01:18:27'),
(2, 'u_name2', 'u_email2@mail.com', 'default.png', '$2y$10$CZTSqk.UtiimSBx.YGayxuG1RIkY39P.V4r.LkzQfZahOS2of0sti', 'ADMIN', 'u_comment2', 'u_remember_token_zspDkWwziq', '2018-11-13 01:18:27', '2018-11-13 01:18:27'),
(3, 'u_name3', 'u_email3@mail.com', 'default.png', '$2y$10$Or8zzENXVZvYkcPJZItSD.5fyDWXVTzfBPyJZN0yTyHwNyEkyre0G', 'MANAGER', 'u_comment3', 'u_remember_token_NwNxweH8Ib', '2018-11-13 01:18:27', '2018-11-13 01:18:27'),
(4, 'u_name4', 'u_email4@mail.com', 'default.png', '$2y$10$l4ee0ckjKPrr2/tQujh5luMGt9CAiSiRxkI/THtO9DXN79/G7QFRa', 'MANAGER', 'u_comment4', 'u_remember_token_GLTkFBHuJD', '2018-11-13 01:18:28', '2018-11-13 01:18:28'),
(5, 'u_name5', 'u_email5@mail.com', 'default.png', '$2y$10$kTFispt3c8zxKbVv/fiHUepS.EXT8XCkN38/zMHRl3EFPzCK1a0gK', 'PROJECT_MANAGER', 'u_comment5', 'u_remember_token_EIiK3Ex9Fi', '2018-11-13 01:18:28', '2018-11-13 01:18:28'),
(6, 'u_name6', 'u_email6@mail.com', 'default.png', '$2y$10$iyUZgqtMSCv1FCbtIR/zWugLeKndl9jUedfUTuhQefIaaEEBIVGXy', 'PROJECT_MANAGER', 'u_comment6', 'u_remember_token_z01R3QyIDY', '2018-11-13 01:18:28', '2018-11-13 01:18:28'),
(7, 'u_name7', 'u_email7@mail.com', 'default.png', '$2y$10$ITnMAs5ay/S2li.BXt3yve2EzdY1UYm7UTQhppy8puaCHO4ncQO3u', 'EMPLOYEE', 'u_comment7', 'u_remember_token_0ipqxnVYfe', '2018-11-13 01:18:29', '2018-11-13 01:18:29'),
(8, 'u_name8', 'u_email8@mail.com', 'default.png', '$2y$10$AA/WNt2eOPQPSn8Cin9xgeXDVrEZxSiiVq3ZI3rdStk5/P9mMSrUO', 'EMPLOYEE', 'u_comment8', 'u_remember_token_QzmgLkf6xg', '2018-11-13 01:18:29', '2018-11-13 01:18:29'),
(9, 'u_name9', 'u_email9@mail.com', 'default.png', '$2y$10$RcfL/LfpXbFsRR1SWPlRe.adsAuRplpYIGOnA3pUfh1IoUg6Ul5wq', 'EMPLOYEE', 'u_comment9', 'u_remember_token_tKBD6YaZhZ', '2018-11-13 01:18:29', '2018-11-13 01:18:29'),
(10, 'u_name10', 'u_email10@mail.com', 'default.png', '$2y$10$d4qIg3hHtFMRf97gXY7IdOFrvevLhxA3twhNtMQ123ChEW9z0nTGW', 'EMPLOYEE', 'u_comment10', 'u_remember_token_vk7Kho4B3L', '2018-11-13 01:18:29', '2018-11-13 01:18:29'),
(11, 'u_name11', 'u_email11@mail.com', 'default.png', '$2y$10$ahlOzU6Gc9Ku/sP75.Bp1OuHC5wTPMmUcdT38iJidhCY.sVvBsEKi', 'EMPLOYEE', 'u_comment11', 'u_remember_token_yCpIs4gUTs', '2018-11-13 01:18:30', '2018-11-13 01:18:30'),
(12, 'u_name12', 'u_email12@mail.com', 'default.png', '$2y$10$9Fk6KGkEjQFlNobZ/04nSec4gp57dDQ/bwP9Y6V9ikn34o6Dcn/xe', 'EMPLOYEE', 'u_comment12', 'u_remember_token_mCnM4eSlMX', '2018-11-13 01:18:30', '2018-11-13 01:18:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_registrationnumber_unique` (`registrationNumber`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_title_unique` (`title`),
  ADD KEY `projects_client_id_foreign` (`client_id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_project_id_foreign` (`project_id`);

--
-- Indexes for table `task_user`
--
ALTER TABLE `task_user`
  ADD PRIMARY KEY (`task_id`,`user_id`),
  ADD KEY `task_user_user_id_index` (`user_id`),
  ADD KEY `task_user_task_id_index` (`task_id`);

--
-- Indexes for table `timers`
--
ALTER TABLE `timers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timers_iduser_foreign` (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `timers`
--
ALTER TABLE `timers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_user`
--
ALTER TABLE `task_user`
  ADD CONSTRAINT `task_user_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`),
  ADD CONSTRAINT `task_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `timers`
--
ALTER TABLE `timers`
  ADD CONSTRAINT `timers_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
