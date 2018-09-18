-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 03:59 PM
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
CREATE DATABASE IF NOT EXISTS `gestion_des_projets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestion_des_projets`;

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
(1, '27872', 'Dr. Emie Roberts', 'emerson.wunsch@flatley.org', '8421 Judge Garden\nGleasonview, PA 26895-0423', '+7022174342981', 'At this moment.', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(3, '21279', 'Tate Deckow', 'torphy.onie@okon.com', '350 Roob Turnpike\nDaughertytown, IN 56186', '+8619996964524', 'Majesty,\' said.', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(4, '80614', 'Evert Ryan', 'nia08@gmail.com', '519 Ryan Gateway Apt. 099\nNathantown, KS 42646-5883', '+3977439123377', 'Panther received.', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(5, '59705', 'Kavon Greenholt', 'pcronin@hotmail.com', '3493 Kessler Circles Apt. 379\nSimoneland, NM 77490', '+8149314735099', 'Dodo, \'the best.', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(6, '44957', 'Mrs. Camylle Heidenreich MD', 'morton87@stroman.com', '3331 Bryce Cliff Suite 550\nWest Destiniland, NC 20085-6512', '+9716493452854', 'Alice went on in a.', '2018-07-31 11:12:34', '2018-07-31 11:12:34'),
(7, '35328', 'Shawna Hauck Sr.', 'letha40@gmail.com', '655 Isabell Burg Suite 479\nNew Johnpaul, IL 82009-4675', '+5947497344427', 'Duchess\'s cook.', '2018-07-31 11:12:34', '2018-07-31 11:12:34'),
(9, '59236', 'Brannon Hettinger DDS', 'eldora.schmitt@homenick.net', '9632 Claud Branch Apt. 267\nGrantshire, NE 67540', '+2735819347892', 'Alice could hear.', '2018-07-31 11:12:35', '2018-07-31 11:12:35'),
(11, '72659', 'Heloise Kuhn', 'beahan.quinton@yahoo.com', '472 Effertz Drive Suite 006\nSouth Arvel, OH 14252', '+1691216855444', 'Latitude was, or.', '2018-07-31 11:12:35', '2018-07-31 11:12:35'),
(12, '83402', 'Dillan Zboncak Sr.', 'joe18@yahoo.com', '93613 Hirthe Islands\nEast Alexane, OR 32398', '+6543184416542', 'Would not, could.', '2018-07-31 11:12:35', '2018-07-31 11:12:35'),
(15, '88913', 'Rebeka Kuhic III', 'hframi@farrell.com', '566 Ona Pines Apt. 601\nAlexandriashire, MD 95640', '+5298344940681', 'I can\'t be civil.', '2018-07-31 11:12:35', '2018-07-31 11:12:35');

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
(1, '2018_07_31_084652_fullDataBaseRename', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2018_08_20_165810_create_notifications_table', 3),
(4, '2018_08_06_081116_add_avatar_to_users', 4);

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

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1f382ffb-ece5-4e75-b9cf-2cf917fea150', 'App\\Notifications\\UserNotification', 2, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:06', '2018-09-12 19:56:06'),
('289b2e70-8000-4acc-8bc8-566e6e90c6d5', 'App\\Notifications\\UserNotification', 8, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('4658d1e1-1b4a-4b68-9be1-a0013df399fb', 'App\\Notifications\\UserNotification', 25, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', '2018-09-12 19:56:35', '2018-09-12 19:56:07', '2018-09-12 19:56:35'),
('557e4903-4ee9-4551-9095-b9cbf50842e3', 'App\\Notifications\\UserNotification', 21, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('67e0a7cb-859f-465d-8db8-99b308e586de', 'App\\Notifications\\UserNotification', 16, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('92576a02-e7df-4549-81b8-e022dca9772d', 'App\\Notifications\\UserNotification', 5, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('95d42e7a-93a7-4ab9-92b6-0c267bf33300', 'App\\Notifications\\UserNotification', 13, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('9a9ce16c-e761-4692-b5a2-d490ce43330f', 'App\\Notifications\\UserNotification', 1, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:06', '2018-09-12 19:56:06'),
('9d834fe2-a3ef-4e7d-87ce-06be26960f9d', 'App\\Notifications\\UserNotification', 30, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('a2d9c34b-1312-403c-9da5-ae07b87efc02', 'App\\Notifications\\UserNotification', 27, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('a46ec22f-7140-4b79-86c5-c41815b50bb4', 'App\\Notifications\\UserNotification', 19, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('ab748aaf-6403-4d23-9c7b-d2882c74ed49', 'App\\Notifications\\UserNotification', 28, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('b7e54e11-03a9-47ff-91bc-36ac801d99de', 'App\\Notifications\\UserNotification', 22, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07'),
('f3d5f276-8fb7-4f97-8598-a92b5aaa6ae2', 'App\\Notifications\\UserNotification', 9, 'App\\User', '{\"id\":2,\"title\":\"project \\\"Alice quietly.\\\" updated\",\"date\":{\"date\":\"2018-07-31 12:15:36.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"type\":\"App\\\\Project\"}', NULL, '2018-09-12 19:56:07', '2018-09-12 19:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hosni.yassine.yh@gmail.com', '$2y$10$r07ks4g5q3QlTv.mThPt6.3l4hN9X7VZmy7rAz/BTtVfE7Zg0bML.', '2018-08-28 08:20:08');

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
(1, 'Queen jumped.', 'He looked at me,', '2018-10-28 00:00:00', '2018-09-30 00:00:00', '2018-10-27 00:00:00', 0, 1, 'Alice, \'shall I.', '2018-07-31 11:15:36', '2018-08-28 07:01:16', 7, 2),
(2, 'Alice quietly.', 'King very.', '1992-01-18 23:45:01', '2012-10-25 00:00:00', '1975-01-16 00:00:00', 1, 1, 'They all returned.', '2018-07-31 11:15:36', '2018-09-12 19:56:06', 12, 2),
(4, 'There was a.', 'What happened to.', '1986-03-19 00:00:00', '1978-11-03 00:00:00', '1997-09-26 00:00:00', 0, 1, 'Duchess, \'and.', '2018-07-31 11:15:36', '2018-07-31 11:15:36', 11, 11),
(5, 'Alice, rather.', 'I eat one of the.', '2012-10-18 00:00:00', '1978-06-20 00:00:00', '1974-02-10 00:00:00', 0, 1, 'Alice, and she.', '2018-07-31 11:15:36', '2018-07-31 11:15:36', 9, 16),
(6, 'mount and blade warlord', 'new mount and blade game.', '2018-08-24 14:05:19', '2018-08-20 00:00:00', '2018-08-24 00:00:00', 0, 1, 'restarting, 1257ad', '2018-08-15 12:09:17', '2018-08-27 23:51:18', 1, 2),
(7, 'tiger tiger', 'the things you do for life..', '2018-08-28 01:46:06', '2018-08-29 00:46:32', '2018-09-02 20:04:55', 0, 0, 'this is the lates project.', '2018-08-27 23:46:32', '2018-09-02 19:04:55', 4, 24),
(8, 'titleddddddddsdfsdfsfd', 'dsfsddvdddddddddd          sssssssssss', '2018-06-25 05:00:04', '2018-08-28 01:07:20', '2018-08-31 00:00:00', 1, 1, 'vvvv', '2018-08-28 00:07:21', '2018-08-28 00:07:21', 1, 24),
(10, 'titleggggggg', 'gggggggggggggggggggggggggg', '2018-07-08 07:35:04', '2018-08-28 01:09:48', '2018-08-29 00:00:00', 1, 1, 'ggggggggggggg gg', '2018-08-28 00:09:48', '2018-08-28 13:44:43', 4, 2),
(12, 'titfffffgggffffggg', 'gggggggggffffffffffffffffgggggg', '2018-07-16 12:40:04', '2018-08-15 01:13:10', '2018-08-19 00:00:00', 0, 1, 'gggggggfffffffffgggggg gg', '2018-08-28 00:13:10', '2018-08-28 13:45:04', 5, 2),
(13, 'titledddddsssaaaaaaa', 'aaaaaaaaaaa', '2018-07-26 11:36:04', '2018-08-20 01:16:00', '2018-08-28 00:00:00', 1, 1, 'aaaaaaaaa aaaaaa', '2018-08-28 00:16:00', '2018-08-28 13:45:35', 11, 2),
(15, 'Intern', 'tfzaaa', '2018-08-28 00:00:00', '2018-08-26 01:19:42', '2018-09-10 00:00:00', 1, 1, 'fdzz', '2018-08-28 00:19:42', '2018-08-28 07:08:34', 1, 2),
(16, 'mount and blade warlord 2', 'comeback', '2018-08-29 23:00:11', '2018-08-01 01:25:33', '2018-08-27 00:00:00', 1, 1, 'never give up', '2018-08-28 00:25:33', '2018-08-28 00:28:38', 1, 2),
(17, 'new stuff to do', 'nothing said me', '2018-07-31 00:00:04', '2018-08-28 08:08:08', '2018-08-28 15:44:23', 0, 0, 'the last project', '2018-08-28 07:08:08', '2018-08-28 14:44:23', 12, 24);

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
(1, 'I beat him when he.', '2018-09-25 00:00:00', 'VALIDATED', 100, 3, 'Molestiae voluptatem aut minus blanditiis. Voluptates architecto et consectetur eos ullam voluptates tempora. Adipisci totam similique non.', '2018-07-31 11:16:25', '2018-08-03 13:37:32', 4),
(2, 'Cat, and vanished.', '2018-10-14 09:12:23', 'IN_PROGRESS', 10, 3, 'Natus possimus quaerat rem deleniti velit. Distinctio asperiores nihil quia sed odio dignissimos expedita. Ut rerum perferendis qui accusamus maiores qui ullam.', '2018-07-31 11:17:58', '2018-08-28 07:30:57', 1),
(3, 'Lobster.', '2018-09-16 00:00:00', 'VALIDATED', 100, 2, 'Sed sed adipisci nulla dolor sapiente nihil aspernatur voluptatem. Quibusdam odit ducimus veniam.', '2018-07-31 11:17:58', '2018-09-03 12:40:05', 5),
(4, 'Queen. \'Can you.', '2018-09-03 00:00:00', 'IN_PROGRESS', 0, 3, 'Id aut vero fugiat optio sed rerum nemo. Ipsa ea ab labore qui eveniet. Iste consectetur iste perspiciatis. Cupiditate et expedita laudantium.', '2018-07-31 11:17:58', '2018-07-31 11:17:58', 5),
(6, 'It was all dark.', '2018-08-05 00:00:00', 'IN_PROGRESS', 100, 1, 'Quo culpa nihil in aliquam ad aut. Debitis fugiat est laborum qui. Sit qui laborum et aperiam possimus rerum fugiat.', '2018-07-31 11:17:58', '2018-09-03 12:44:47', 4),
(7, 'finishing the project tigers', '2018-08-28 01:47:56', 'IN_PROGRESS', 0, 3, 'this is not a joke', '2018-08-27 23:48:32', '2018-08-27 23:49:22', 7),
(8, 'movies are fun', '2018-07-29 19:35:04', 'IN_PROGRESS', 0, 2, 'true story', '2018-08-28 00:40:11', '2018-08-28 00:40:11', 16),
(9, 'titleghb', '2018-07-26 11:36:04', 'IN_PROGRESS', 0, 4, 'gb', '2018-08-28 00:46:31', '2018-08-28 00:46:31', 16),
(10, 'titlescsc', '2018-07-26 11:36:04', 'IN_PROGRESS', 0, 3, 'scsc', '2018-08-28 00:47:25', '2018-08-28 07:23:17', 16);

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

CREATE TABLE `task_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL,
  `startDate` datetime DEFAULT NULL,
  `finishDate` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_user`
--

INSERT INTO `task_user` (`user_id`, `task_id`, `startDate`, `finishDate`, `created_at`, `updated_at`) VALUES
(6, 1, NULL, NULL, NULL, NULL),
(10, 1, NULL, NULL, NULL, NULL),
(11, 1, NULL, NULL, NULL, NULL),
(17, 1, NULL, NULL, NULL, NULL),
(9, 2, '2018-07-02 00:00:00', '2018-07-05 00:00:00', '2018-07-01 23:00:00', '2018-07-04 23:00:00'),
(10, 2, '2018-07-01 00:00:00', '2018-07-04 00:00:00', '2018-06-30 23:00:00', '2018-07-03 23:00:00'),
(26, 2, NULL, NULL, NULL, NULL),
(6, 3, NULL, NULL, NULL, NULL),
(7, 3, NULL, NULL, NULL, NULL),
(8, 3, '2018-07-30 00:00:00', '2018-07-31 00:00:00', '2018-07-29 23:00:00', '2018-07-30 23:00:00'),
(12, 3, NULL, NULL, NULL, NULL),
(7, 4, NULL, NULL, NULL, NULL),
(17, 4, NULL, NULL, NULL, NULL),
(26, 4, NULL, NULL, NULL, NULL),
(6, 7, NULL, NULL, NULL, NULL),
(7, 7, NULL, NULL, NULL, NULL),
(10, 7, NULL, NULL, NULL, NULL),
(11, 10, '2018-08-28 01:47:25', NULL, '2018-08-28 00:47:25', '2018-08-28 00:47:25'),
(26, 10, NULL, NULL, NULL, NULL);

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
(1, 'Dr. Adrain Tromp PhD', 'wisoky.elena@example.org', 'default.png', '$2y$10$zNy7NuMG9oP9uZ3KmH2GHewhh.2VMDroU1UanTWPA2JVOrA3AuHYC', 'ADMIN', 'The further off.', 'nJ5ru8awoz', '2018-07-31 09:55:35', '2018-07-31 09:55:35'),
(2, 'Dr. Talon Trantow V', 'linda.borer@example.org', 'default.png', '$2y$10$zNy7NuMG9oP9uZ3KmH2GHewhh.2VMDroU1UanTWPA2JVOrA3AuHYC', 'PROJECT_MANAGER', 'Alice began to cry.', 'Upjt1FA0C8', '2018-07-31 09:55:35', '2018-07-31 09:55:35'),
(3, 'Mr. Olaf Jones IV', 'wilson19@example.com', 'default.png', '$2y$10$zNy7NuMG9oP9uZ3KmH2GHewhh.2VMDroU1UanTWPA2JVOrA3AuHYC', 'PROJECT_MANAGER', 'Turtle--we used to.', '9yycDiPU5T', '2018-07-31 09:55:35', '2018-07-31 09:55:35'),
(4, 'Marques Fahey', 'adonis.cummings@example.org', 'default.png', '$2y$10$zNy7NuMG9oP9uZ3KmH2GHewhh.2VMDroU1UanTWPA2JVOrA3AuHYC', 'PROJECT_MANAGER', 'I suppose?\' \'Yes,\'.', '8yBb8p96ID', '2018-07-31 09:55:35', '2018-07-31 09:55:35'),
(5, 'Karolann Veum DVM', 'xsimonis@example.org', 'default.png', '$2y$10$zNy7NuMG9oP9uZ3KmH2GHewhh.2VMDroU1UanTWPA2JVOrA3AuHYC', 'MANAGER', 'Then came a.', 'PtWObzeyDv', '2018-07-31 09:55:35', '2018-07-31 09:55:35'),
(6, 'Mr. Lazaro Kunde DVM', 'vquitzon@example.net', 'default.png', '$2y$10$xg9WkIrJytYvrqAcgnLaLe1EpbOBi9K6A5nnHBGetN/5jBa4mCA7u', 'EMPLOYEE', 'Alice, (she had.', 'GKnBVSRBca', '2018-07-31 09:56:04', '2018-07-31 09:56:04'),
(7, 'Eduardo Schultz', 'zswift@example.com', 'default.png', '$2y$10$xg9WkIrJytYvrqAcgnLaLe1EpbOBi9K6A5nnHBGetN/5jBa4mCA7u', 'EMPLOYEE', 'Alice; \'only, as.', '2LrJukLgWd', '2018-07-31 09:56:04', '2018-07-31 09:56:04'),
(8, 'Jacklyn Greenfelder Sr.', 'brooklyn87@example.net', 'default.png', '$2y$10$xg9WkIrJytYvrqAcgnLaLe1EpbOBi9K6A5nnHBGetN/5jBa4mCA7u', 'MANAGER', 'BEST butter,\' the.', 'aFcqE1xzTy', '2018-07-31 09:56:04', '2018-07-31 09:56:04'),
(9, 'Bradley Sauer', 'crawford.rosenbaum@example.net', 'default.png', '$2y$10$xg9WkIrJytYvrqAcgnLaLe1EpbOBi9K6A5nnHBGetN/5jBa4mCA7u', 'ADMIN', 'Alice did not like.', 'LIkoh7yy7C', '2018-07-31 09:56:04', '2018-07-31 09:56:04'),
(10, 'Andre Howell', 'citlalli49@example.com', 'default.png', '$2y$10$xg9WkIrJytYvrqAcgnLaLe1EpbOBi9K6A5nnHBGetN/5jBa4mCA7u', 'EMPLOYEE', 'Alice, \'it\'s very.', 'fkyQtFoAaa', '2018-07-31 09:56:04', '2018-07-31 09:56:04'),
(11, 'Georgiana Langworth', 'hgusikowski@example.net', 'default.png', '$2y$10$P1SV/10iaN1/jCvyxt534uwwOMm6EvhnTQiqLudzZk0HH0FoL0M62', 'EMPLOYEE', 'I believe.\' \'Boots.', 'sNzJnufbIO', '2018-07-31 09:56:18', '2018-07-31 09:56:18'),
(12, 'Ethan Pouros', 'boyer.roslyn@example.net', 'default.png', '$2y$10$P1SV/10iaN1/jCvyxt534uwwOMm6EvhnTQiqLudzZk0HH0FoL0M62', 'EMPLOYEE', 'However, the.', 'MAf8CNkiEQ', '2018-07-31 09:56:18', '2018-07-31 09:56:18'),
(13, 'Cade Mohr I', 'rafael54@example.net', 'default.png', '$2y$10$P1SV/10iaN1/jCvyxt534uwwOMm6EvhnTQiqLudzZk0HH0FoL0M62', 'MANAGER', 'CHAPTER V. Advice.', 'dtsPlEMsC1', '2018-07-31 09:56:18', '2018-07-31 09:56:18'),
(14, 'Fredrick Sanford', 'hgleason@example.org', 'default.png', '$2y$10$P1SV/10iaN1/jCvyxt534uwwOMm6EvhnTQiqLudzZk0HH0FoL0M62', 'EMPLOYEE', 'Alice\'s first.', 'KoVPPqlVZq', '2018-07-31 09:56:18', '2018-07-31 09:56:18'),
(15, 'Lizzie Bechtelar', 'alexandrine.marquardt@example.com', 'default.png', '$2y$10$P1SV/10iaN1/jCvyxt534uwwOMm6EvhnTQiqLudzZk0HH0FoL0M62', 'EMPLOYEE', 'Mouse. \'Of.', 'ylGoV4Aewa', '2018-07-31 09:56:18', '2018-07-31 09:56:18'),
(16, 'Prof. Adan Runolfsson', 'kmarquardt@example.com', 'default.png', '$2y$10$zenZQSm.H9EvXVBTG8hzs.DyP3HwSP9nhDPjgip/zz1PtPYqrmr9O', 'MANAGER', 'WASHING--extra.\"\'.', '11QFtnM9Gd', '2018-07-31 09:56:55', '2018-07-31 09:56:55'),
(17, 'Mr. Wendell Hermann DDS', 'jewel27@example.net', 'default.png', '$2y$10$zenZQSm.H9EvXVBTG8hzs.DyP3HwSP9nhDPjgip/zz1PtPYqrmr9O', 'EMPLOYEE', 'I!\' said the Mouse.', '7baQlNPk9F', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(18, 'Dr. Lilla Cremin DDS', 'rempel.eryn@example.com', 'default.png', '$2y$10$zenZQSm.H9EvXVBTG8hzs.DyP3HwSP9nhDPjgip/zz1PtPYqrmr9O', 'PROJECT_MANAGER', 'Lizard, who seemed.', 'dWKUS7Gcof', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(19, 'Miss Johanna Dickinson I', 'treva.gulgowski@example.net', 'default.png', '$2y$10$zenZQSm.H9EvXVBTG8hzs.DyP3HwSP9nhDPjgip/zz1PtPYqrmr9O', 'MANAGER', 'Alice asked. \'We.', 'hxes2iIrsJ', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(20, 'Walter Armstrong', 'foster33@example.com', 'default.png', '$2y$10$zenZQSm.H9EvXVBTG8hzs.DyP3HwSP9nhDPjgip/zz1PtPYqrmr9O', 'PROJECT_MANAGER', 'Alice, quite.', 'LSygHlZ78x', '2018-07-31 09:56:56', '2018-07-31 09:56:56'),
(21, 'yassine el hosni', 'hosni.yassine.yh@gmail.com', 'default.png', '$2y$10$gG96nWKUb1B.2TLgsJp5IOuuVwH2y7Smsu4FYqC0jG/MmGkFtzEwe', 'ADMIN', 'one of the devs', 'gfKozBvh7iqKNITGZMNJaMZxtrusxfithG9UImK1d24egf7ClyWDvUZxphmw', '2018-08-09 22:55:04', '2018-08-28 08:19:45'),
(22, 'nouha guedira', 'nouha.guedira.gn@gmail.com', 'default.png', '$2y$10$yNgdtNGzIQSvtBokQIpgT.XIP//fKxYrSRSKgmQ1yA8UqJTpDi7dS', 'ADMIN', 'the other dev.', 'JwoqQYrHKd7FpiphL54EQ6CgZCp1VYm1C9Ws1VjOAQpUBh6rh378osi3yxkp', '2018-08-10 07:37:06', '2018-08-28 08:18:52'),
(24, 'yassineH', 'elhosniyassineyh@gmail.com', 'default.png', '$2y$10$fgvXNdEG3IvY7Eb8XoBuUuLsmdlhNO/7HsQzJwjW7hVt1YIO24l1C', 'PROJECT_MANAGER', 'yassineH123', 'QOa7EUNIiQapLTLCDbZmmzqfQ2ULO40HZXK0kip8pBSG0FN3eLJXa13ABfjN', '2018-08-15 12:17:52', '2018-08-15 12:17:52'),
(25, 'john smith', 'john_smith@gmail.com', '2082733891.png', '$2y$10$C9I4jmt/Eu7QaW15lZJrOuNh7jrYQJBFK9/lhx6TUU9/uUAosafzu', 'ADMIN', 'azerty123', 'hN5MfTTOuSn6pURLgqeAfoHbFwVqCd1SNLIPag973QyDCg1GllgUXPyWgxJE', '2018-08-18 19:00:16', '2018-09-02 21:19:43'),
(26, 'imad ben', 'imad_ben@gmail.com', 'default.png', '$2y$10$.DjsrQVvLGAzPSnlCDtUt.RzGjnzLxzrr11/JRklrRvjxk3tcPWr6', 'EMPLOYEE', '159, the new guy', 'LWP4ZTyHCh7OfqC2ZkyX8BeVQYKvQaijvPrKnTynHbwqvEWmXOZLLEpo7VfL', '2018-08-28 07:21:08', '2018-08-28 08:20:59'),
(27, 'person001', 'person.001@gmail.com', 'default.png', '$2y$10$ZKRIJH4WkjlBzu/POAgaeOGT/ztPN/pHyc7VzXlpyJI4OmWgi4wVa', 'MANAGER', '001, person 001', 'zORkNVtxdxTLap4FH15W2UFtSLdrrIeBm9kjMnS3qHmdhfCW0mEsZdBw1fG9', '2018-08-28 10:16:05', '2018-08-28 10:16:05'),
(28, 'person002', 'person.002@gmail.com', 'default.png', '$2y$10$WHCw0NYxLU4TVFZwaaPnoeYAOzGdvbwXTqC48jqqd1AQD7KzvUDZS', 'MANAGER', '002, person 002', '3j5KMipycFHo6p3qrfu7nqu6owAZVTcFmVsVYaB5RCNPsTSEmXPZt31UKybQ', '2018-08-28 12:34:22', '2018-08-28 12:34:22'),
(29, 'person003', 'person.003@gmail.com', 'default.png', '$2y$10$YFIdSyL42jeVASRvmnd/0.ulncNfXGEkuxHTeQs6zE/JYX21C1ij.', 'PROJECT_MANAGER', '003, person 003', NULL, '2018-08-28 13:04:13', '2018-08-28 13:04:13'),
(30, 'yassine el hosni', 'azerty@gamli.com', 'default.png', '$2y$10$31SsFsUW/NgiSvZcoB0zgOK1iJr6kPVPZ9kLNV.4amy3nqLs9.hY.', 'ADMIN', '123456', NULL, '2018-08-28 14:25:03', '2018-08-28 14:25:03');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
