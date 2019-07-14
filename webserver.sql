-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 06:53 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook_models`
--

CREATE TABLE `addbook_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_publisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_rack` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `trash` tinyint(1) NOT NULL DEFAULT '1',
  `book_image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addbook_models`
--

INSERT INTO `addbook_models` (`id`, `bookname`, `book_id`, `book_category`, `book_author`, `book_publisher`, `book_rack`, `status`, `trash`, `book_image`, `created_at`, `updated_at`) VALUES
(1, 'Spider Man home Coming', 'bi000001', 'Comic', 'Author 1', 'Marval', 'Rack 10', 1, 1, '1556957094.jpg', '2019-04-25 05:34:52', '2019-05-18 09:54:53'),
(2, 'Manamali', 'bi000002', 'Category 1', 'Author 1', 'Publisher 1', 'Rack 1', 0, 1, '1556957142.jpg', '2019-04-26 13:18:20', '2019-05-04 02:35:42'),
(3, 'When Sky meet Ocen', 'bi000003', 'Category 1', 'Author 1', 'Publisher 1', 'Rack 1', 1, 1, '1556311748.jpg', '2019-04-26 15:19:08', '2019-04-26 15:19:08'),
(4, 'Girls', 'bi000004', 'Category 1', 'Author 1', 'Publisher 1', 'Rack 1', 1, 1, '1556311833.jpg', '2019-04-26 15:20:34', '2019-04-26 15:20:34'),
(5, 'The Last Ship', 'bi000005', 'Category 1', 'Author 1', 'Publisher 1', 'Rack 1', 1, 1, '1556807697.jpg', '2019-04-26 15:53:06', '2019-05-02 09:04:57'),
(6, 'Avengers', 'bi000006', 'Category 1', 'Author 1', 'Publisher 1', 'Rack 1', 1, 1, '1556515094.jpg', '2019-04-28 23:48:14', '2019-04-28 23:48:14'),
(7, 'Cover image', 'Test id', 'Category 1', 'Author 1', 'Publisher 1', 'Rack 1', 1, 1, '1557079625.jpg', '2019-05-05 12:36:22', '2019-05-05 12:37:05'),
(8, 'Janadipathi Thaththa', 'aasx', 'Surangana Katha', 'Author 1', 'Publisher 1', 'Rack 1', 1, 1, '1557947502.png', '2019-05-05 12:51:14', '2019-05-15 13:41:42'),
(9, 'spider man', 'wew', 'Comic heshan', 'jjj', 'Publisher 2', 'Rack 1', 1, 1, '1557411534.jpg', '2019-05-09 08:48:54', '2019-05-09 08:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `authorname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `authorname`, `authorid`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Martin Wickramasinhe', 'Au0000001', 1, '2019-04-28 12:27:31', '2019-05-04 22:14:09'),
(3, 'Kumarathunga Mundasa', 'Au0000002', 1, '2019-04-28 12:35:54', '2019-05-18 10:04:56'),
(4, 'Dr.Rosa', 'Au0000003', 1, '2019-04-28 13:28:25', '2019-04-28 13:28:25'),
(5, 'William Shakespeare', NULL, 1, '2019-05-18 10:07:22', '2019-05-18 10:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iscompleted` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `category_id`, `iscompleted`, `created_at`, `updated_at`) VALUES
(1, 'Novel', 'Cat000001', 1, '2019-04-25 05:01:04', '2019-05-05 08:31:03'),
(2, 'Short Stories', 'Cat000002', 1, '2019-04-25 05:30:23', '2019-04-25 05:30:23'),
(3, 'Comic', 'Cat000003', 1, '2019-05-02 01:41:11', '2019-05-02 01:41:11');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_18_103108_create_addbook_models_table', 1),
(4, '2019_04_24_192007_category', 1),
(5, '2019_04_27_183722_create_authors_table', 2),
(6, '2019_04_29_064209_create_racks_table', 3),
(7, '2019_04_29_194709_create_publishers_table', 4),
(8, '2019_05_06_024751_create_readers_table', 5);

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
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(10) UNSIGNED NOT NULL,
  `Publisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `Publisher`, `pub_id`, `contact`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ranga Books publishers', 'p00001', '0114656665', 'rangabookspublishers@info.com', 'Gampaha, Sri Lanka.', '2019-04-29 19:38:53', '2019-05-05 09:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `racks`
--

CREATE TABLE `racks` (
  `id` int(10) UNSIGNED NOT NULL,
  `rack` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rackid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `racks`
--

INSERT INTO `racks` (`id`, `rack`, `rackid`, `created_at`, `updated_at`) VALUES
(1, 'Rack 0001', 'R001', '2019-04-29 01:55:20', '2019-05-05 10:51:30'),
(2, 'Rack 002', 'R002', '2019-04-29 01:56:50', '2019-04-29 01:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `readers`
--

CREATE TABLE `readers` (
  `id` int(10) UNSIGNED NOT NULL,
  `readername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reader_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reader_nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `readers`
--

INSERT INTO `readers` (`id`, `readername`, `reader_id`, `reader_nic`, `contact`, `email`, `job`, `address`, `book_image`, `created_at`, `updated_at`) VALUES
(1, 'INDIA', 'edwedew', 'QDEWE', 'EWDWW', 'rita@gmail.com', 'EDWE', 'Ccda', '1557120021.jpg', '2019-05-05 23:50:21', '2019-05-05 23:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook_models`
--
ALTER TABLE `addbook_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `racks`
--
ALTER TABLE `racks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
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
-- AUTO_INCREMENT for table `addbook_models`
--
ALTER TABLE `addbook_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `racks`
--
ALTER TABLE `racks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `readers`
--
ALTER TABLE `readers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
