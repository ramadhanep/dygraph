-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 11:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dygraph`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `img_category`, `created_at`, `updated_at`) VALUES
(4, 'Landscape Photography', 'a727360a252ddee50e87c0c41267db26.jpeg', '2019-05-08 07:28:59', '2019-05-08 07:28:59'),
(5, 'Wildlife Photography', '02218b551a3cb229f172c8bd8eec0090.jpeg', '2019-05-08 07:29:24', '2019-05-08 07:29:24'),
(6, 'Aerial photography', '63fdcdf27bdd4bb96e42b0cd0a11df2f.jpeg', '2019-05-08 07:31:39', '2019-05-08 07:31:39'),
(7, 'Sports / Action Photography', '2273e8bc11f9d027e467e10c58b7da94.jpeg', '2019-05-08 07:32:07', '2019-05-08 07:32:07'),
(8, 'Portrait Photography', '753bdf8a6494a9d1ca0dcf18b274ca6e.jpeg', '2019-05-08 07:32:23', '2019-05-08 07:32:23'),
(9, 'Architectural Photography', '4643510246667a03481af7a76145fc0d.jpeg', '2019-05-08 07:32:42', '2019-05-08 07:32:42'),
(10, 'Wedding Photography/Event Photography', '0123aae47f817b538ac6a94698993e1f.jpeg', '2019-05-08 07:32:57', '2019-05-08 07:32:57'),
(11, 'Fashion Photography', 'ad38be4208dc034e6d0136d6d6bee3c2.jpeg', '2019-05-08 07:33:13', '2019-05-08 07:33:13'),
(12, 'Macro Photography', 'f2435d389bd7867ddfb0b0ec39c29acd.jpeg', '2019-05-08 07:33:41', '2019-05-08 07:33:41'),
(13, 'Baby Photography/Family Photography', 'f7d003f18d05e14b09d8a728647b691b.jpeg', '2019-05-08 07:33:57', '2019-05-08 07:33:57'),
(14, 'Abstract Photography', '437e95354f30e30b3827457c02eef31f.jpeg', '2019-05-08 07:34:17', '2019-05-08 07:34:17'),
(15, 'Beauty Photography', '4ab1291517bcf71fa8ebac8f23a82242.jpeg', '2019-05-08 07:34:31', '2019-05-08 07:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `fotografers`
--

CREATE TABLE `fotografers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fotografers`
--

INSERT INTO `fotografers` (`id`, `nama_lengkap`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'Romadhan  Edy Prasetyo', '739be6825eec9519810d1692cca22e07.jpeg', '2019-05-07 22:46:13', '2019-05-07 22:46:13'),
(7, 'Rio Wibowo', '2e1b3d73e7730955e75346c9a606ce72.jpeg', '2019-05-10 08:56:59', '2019-05-10 08:56:59'),
(8, 'Hakim Satriyo', '208081d2842f2c2087824604bc786aa4.jpeg', '2019-05-10 08:57:24', '2019-05-10 08:57:24'),
(9, 'Nicoline Patricia Malina', '7977b419d1b4cd2a9be99efb27a6ff7e.jpeg', '2019-05-10 08:57:47', '2019-05-10 08:57:47'),
(10, 'Mario Ardi', 'c9fc94129154d526b7283ee2c879136d.jpeg', '2019-05-10 08:58:13', '2019-05-10 08:58:13'),
(11, 'Diera Bachir', '8a88b3590e221dcbeffe5de054675e23.jpeg', '2019-05-10 08:58:27', '2019-05-10 08:58:27'),
(12, 'Glenn Prasetya', '66e1b02fab290a5a0ecd924786832360.jpeg', '2019-05-10 08:58:52', '2019-05-10 08:58:52'),
(13, 'Hendra Kusuma', '6302e912f2c96ca3fae37a278069a887.jpeg', '2019-05-10 08:59:03', '2019-05-10 08:59:03'),
(14, 'Advan Matthew', '2a4ee51d7390112421338e6e2b1c30a8.jpeg', '2019-05-10 08:59:24', '2019-05-10 08:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fotografer` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `id_fotografer`, `id_category`, `foto`, `deskripsi_foto`, `time`, `created_at`, `updated_at`) VALUES
(3, 7, 9, '0f678f7a187768a80f6f06336063deb6.jpeg', '<p><b>Candi Borobudur</b>,&nbsp; Magelang, Jawa Tengah, Indonesia</p>', '1557504160', '2019-05-10 09:02:40', '2019-05-10 09:02:40'),
(4, 1, 4, '976ca5c23b207b9e6d5b5bd6af767f0e.jpeg', '<p>Foto sapi sedang <b>makan</b> dikala senja!</p>', '1557504224', '2019-05-10 09:03:45', '2019-05-10 09:03:45'),
(7, 11, 9, '056ab7c44f168d342654c443b6d6fde9.jpeg', '<p><b>Gedung BNPB</b>, Jakarta</p>', '1557754900', '2019-05-13 06:41:40', '2019-05-13 06:41:40'),
(8, 1, 14, '13855742e2aa58186d4c9774635f95a5.jpeg', '<p>awdawdwa</p>', '1557757233', '2019-05-13 07:20:34', '2019-05-13 07:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_foto` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like_count` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `id_foto`, `id_user`, `like_count`, `created_at`, `updated_at`) VALUES
(37, 3, '1, 3, 73, 73, 75, 76', 6, '2019-05-13 05:47:32', '2019-05-13 06:10:00'),
(38, 4, '76, 3, 1', 3, '2019-05-13 06:14:40', '2019-05-13 22:37:17'),
(40, 7, ', 76, 1, 3, {\"id_user\":\"1\",\"name\":\"eddie\",\"email\":\"romadhanedy@outlook.com\"}', 4, '2019-05-13 06:41:40', '2019-05-14 00:55:53'),
(41, 8, ', 3, 1, {\"id_user\":\"1\",\"name\":\"eddie\",\"email\":\"romadhanedy@outlook.com\"}', 3, '2019-05-13 07:20:34', '2019-05-14 00:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Romadhan Edy P', 'romadhanedy@outlook.com', NULL, '$2y$10$o2CyM7.BdywxGoF1r0U1q.tgnEekdBqW0npd9kiZGZUj/lphQZ8zK', 'df931ef168dec0fa3815399eb4a00f05.jpeg', NULL, '2019-05-07 22:41:49', '2019-05-07 22:44:36');

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
(1, '2014_10_12_000000_create_masters_table', 1),
(2, '2019_04_05_053857_create_users_table', 1),
(3, '2019_04_15_072750_create_fotografers_table', 1),
(4, '2019_04_15_073029_create_categories_table', 1),
(5, '2019_04_15_073040_create_fotos_table', 1),
(6, '2019_04_15_075853_create_likes_table', 1),
(7, '2019_05_13_102138_create_likes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'Romadhan', 'romadhanedy@outlook.com', 'c8837b23ff8aaa8a2dde915473ce0991', NULL, NULL, NULL),
(2, 'Eddie', 'eddie@eddie.com', 'af15d5fdacd5fdfea300e88a8e253e82', NULL, NULL, NULL),
(3, 'Haha', 'haha@mail.xom', '4e4d6c332b6fe62a63afe56171fd3725', NULL, NULL, NULL),
(62, 'Die', 'dhanz@die.com', '101a6ec9f938885df0a44f20458d2eb4', NULL, NULL, NULL),
(63, 'Shds', 'chech@zz.com', 'c8837b23ff8aaa8a2dde915473ce0991', NULL, NULL, NULL),
(64, 'Jshshhsh', 'kdjdjsh@chss.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL),
(66, 'Romadhan Edy Pe', 'romadhanedy@outlook.come', 'c8837b23ff8aaa8a2dde915473ce0991', NULL, NULL, NULL),
(67, 'Romadhan Edy Pe', 'eddie@eddie.com222', '7815696ecbf1c96e6894b779456d330e', NULL, NULL, NULL),
(68, 'Romadhan Edy Pe', 'awdwadwa@awd.com', '79a628b2d968cfe1a7f9c5e398f6b96a', NULL, NULL, NULL),
(69, 'aww', 'romadhanedy@outlook.comawdwa', 'b787d22d9cb06342658bf546039117bc', NULL, NULL, NULL),
(70, 'aww', 'awdwa@awdaw.cwdw', '7815696ecbf1c96e6894b779456d330e', NULL, NULL, NULL),
(71, 'Aging', 'agung@aging.xxs', 'c8837b23ff8aaa8a2dde915473ce0991', NULL, NULL, NULL),
(72, 'Ronaldo', 'ronaldo@ronaldo.com', 'c8837b23ff8aaa8a2dde915473ce0991', NULL, NULL, NULL),
(73, 'Dieprast', 'diediedie@mail.com', 'c8837b23ff8aaa8a2dde915473ce0991', NULL, NULL, NULL),
(74, 'kawodkwao', 'kkkkk@kkkk.com', 'cb42e130d1471239a27fca6228094f0e', NULL, NULL, NULL),
(75, 'awdwa', 'romadhan@gmai.comeeee', '5fa72358f0b4fb4f2c5d7de8c9a41846', NULL, NULL, NULL),
(76, 'zxcvz', 'zxcv@mail.com', '5fa72358f0b4fb4f2c5d7de8c9a41846', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotografers`
--
ALTER TABLE `fotografers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fotos_id_fotografer_foreign` (`id_fotografer`),
  ADD KEY `fotos_id_category_foreign` (`id_category`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_id_foto_foreign` (`id_foto`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masters_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fotografers`
--
ALTER TABLE `fotografers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fotos_id_fotografer_foreign` FOREIGN KEY (`id_fotografer`) REFERENCES `fotografers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_id_foto_foreign` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
