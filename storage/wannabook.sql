-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2024 at 02:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wannabook`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Zelma Schmidt', '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(2, 'Dr. Amanda Corkery', '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(3, 'Dr. Branson Price', '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(4, 'Christopher Balistreri', '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(5, 'Ms. Zoe Douglas', '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(6, 'drgzf', '2024-10-09 09:53:23', '2024-10-09 09:53:23', NULL),
(7, 'fgzszsf', '2024-10-09 10:00:08', '2024-10-09 10:00:08', NULL),
(8, 'jdskfjz', '2024-10-09 10:02:04', '2024-10-09 10:02:04', NULL),
(9, 'dfvgfzfg', NULL, NULL, NULL),
(10, 'zvfdgfzg', NULL, NULL, NULL),
(11, 'جی آر رولین', NULL, NULL, NULL),
(12, 'بینام', NULL, NULL, NULL),
(13, 'علیرضا هاشمی', NULL, NULL, NULL),
(14, 'xfgxg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` bigint NOT NULL,
  `publication` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `like`, `publication`, `image`, `author_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dr. Kaylah Miller', 'Sed illum sed voluptatem dolore asperiores. Est corrupti occaecati et.', 62, 1958, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 2, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(2, 'Adeline O\'Reilly', 'Culpa eum quas vitae aut eaque. Natus et eum aut saepe enim.', 64, 2017, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 2, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(3, 'Bria Bailey', 'Veritatis aut repudiandae sunt quia pariatur. Provident et asperiores qui est architecto.', 37, 1992, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 1, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(4, 'Harley Erdman', 'Eos sit mollitia modi numquam. Suscipit accusantium quaerat et rerum.', 85, 1948, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 5, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(5, 'Monica Rohan', 'Odit rerum qui in omnis. Quod sequi natus assumenda error inventore quis. Et nemo maiores animi.', 17, 1977, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 5, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(6, 'Harmon Ferry', 'Quae rerum vero sint suscipit perspiciatis. Similique id accusantium voluptatum totam ab et at.', 64, 1936, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 3, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(7, 'Marlene Rogahn', 'Accusantium nemo nam qui officia. Sapiente est alias nam esse. Quis enim error quis et et ea.', 100, 1952, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 3, '2024-10-06 03:59:24', '2024-10-11 06:48:16', NULL),
(8, 'Alejandrin Feest', 'Dolore quasi modi omnis facere voluptates aperiam excepturi. Minima fugit sequi nemo.', 79, 1978, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 5, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(9, 'Lauriane Batz', 'Molestias voluptas voluptatem saepe. Nemo sunt autem ea esse error recusandae.', 81, 1927, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 1, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(10, 'Lorenzo Schmeler', 'Minima voluptatem asperiores dolore quia quaerat minima. Ratione saepe adipisci dolores laboriosam.', 68, 1940, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 2, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(11, 'zvzvf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis', 0, 3445, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 10, '2024-10-09 21:21:32', '2024-10-09 21:21:32', NULL),
(12, 'هری پاتر', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis', 8, 1999, 'http://127.0.0.1:8000/uploads/images/1728509053-Orange Modern Attractive YouTube Thumbnail (8).png', 11, '2024-10-09 21:24:13', '2024-10-11 06:52:13', NULL),
(13, 'مثل آب', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis', 0, 2000, 'http://127.0.0.1:8000/uploads/images/1728509164-which-of-these-first-age-maps-is-the-most-correct-v0-gy81mm2scagd1.jpg', 12, '2024-10-09 21:26:04', '2024-10-09 21:26:04', NULL),
(14, 'احساس خوب', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis', 0, 2024, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 13, '2024-10-09 21:28:12', '2024-10-09 21:28:12', NULL),
(15, 'bxzvd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis', 0, 1245, 'http://127.0.0.1:8000/uploads/images/Hobbit.jpg', 14, '2024-10-09 22:39:41', '2024-10-09 22:39:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `message`, `book_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dr. Ruben Jacobi', 'Qui et deleniti in facilis quaerat repudiandae sunt.', 6, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(2, 'Prof. Travis McLaughlin V', 'Enim animi at possimus placeat in asperiores et.', 6, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(3, 'Prof. Daryl Parker', 'At eos dolores consequuntur laboriosam et expedita.', 8, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(4, 'Margarita Schoen', 'Pariatur sint ipsum molestiae facere dicta.', 7, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(5, 'Prof. Gussie Leffler DVM', 'In et quas fugit ut libero modi.', 10, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(6, 'Bulah Collins PhD', 'Provident nemo rerum doloribus soluta laboriosam quo eos.', 1, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(7, 'Gabrielle Brakus', 'Perspiciatis ea perspiciatis modi vel et atque sit aliquam.', 3, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(8, 'Dr. Carey Rosenbaum', 'Voluptatem reprehenderit veritatis qui nemo enim velit.', 7, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(9, 'Frederic Harvey', 'Repellendus a libero porro. Voluptates quo harum dolore nesciunt ad.', 9, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(10, 'Garett Jacobi', 'Rerum et sit at sequi ut eum. Repudiandae et distinctio alias sit.', 9, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(11, 'Jayda Nienow', 'Numquam fuga facere maxime eum. Quia quia atque quos minus.', 5, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(12, 'Camille Kuhlman', 'Nostrum aut minus cumque veritatis voluptatem unde iste.', 9, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(13, 'Franco Corwin V', 'Tempore aut enim fuga qui odit culpa eum praesentium.', 7, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(14, 'Audie Connelly', 'Non rem ut accusamus nobis doloremque.', 7, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(15, 'Hallie Rau', 'Dolorem autem libero reprehenderit quia ratione molestiae.', 9, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(16, 'Martin Schiller', 'Omnis facilis dignissimos vitae voluptates.', 7, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(17, 'Hector Lowe', 'Delectus doloremque omnis et tempora corporis rem.', 7, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(18, 'Adolphus Bergnaum Sr.', 'Soluta nihil fuga aut et aspernatur sequi ea.', 3, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(19, 'Dortha Carroll', 'Quia autem officiis iste laudantium.', 5, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(20, 'Berniece Strosin', 'Atque autem cumque sapiente velit.', 3, '2024-10-06 03:59:24', '2024-10-06 03:59:24', NULL),
(21, 'Hadi', 'its very Gooooood', 6, '2024-10-10 21:00:18', '2024-10-10 21:00:18', NULL),
(22, 'هادی', 'من این کتاب خیلی دوس داشتم', 6, '2024-10-10 21:02:47', '2024-10-10 21:02:47', NULL),
(23, 'هادی', 'اولین کامنت :))))', 13, '2024-10-10 21:03:35', '2024-10-10 21:03:35', NULL),
(24, 'زیبا', 'هری پاتر یکی از زیبا ترین کتاب هاست', 12, '2024-10-10 21:06:42', '2024-10-10 21:06:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '0001_01_01_000000_create_users_table', 1),
(47, '0001_01_01_000001_create_cache_table', 1),
(48, '0001_01_01_000002_create_jobs_table', 1),
(49, '2024_10_06_063952_create_authors_table', 1),
(50, '2024_10_06_064013_create_books_table', 1),
(51, '2024_10_06_064030_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gibgQxmsBze7KQhBFchR2W1sG3r2caKlVCKRPuqf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1Bkc3R2VnMxeExUanJGY0E1ZjdjWjV1YWJQck9NMHo1MnhTb0gwQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1728638197);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_book_id_foreign` (`book_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
