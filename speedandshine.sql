-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 10:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speedandshine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topwallpaper` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottomwallpaper` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `topwallpaper`, `bottomwallpaper`, `created_at`, `updated_at`) VALUES
(1, 'mgzsred-1551116656-1552468698_1554920797.jpg', 'mgzsred-1551116656-1552468698_1554920797.jpg', NULL, '2019-04-10 12:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Caar Brand', 'This is new brand in this area', 'mgzsblue-1551116752-1554906945.JPG', '2019-04-10 08:50:45', '2019-04-11 00:53:38'),
(3, 'Hari Ale', 'Describe your image here. Click me and then “Organize Images” to change my text.', 'black-1554907068.jpg', '2019-04-10 08:52:48', '2019-04-10 08:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `footer_settings`
--

CREATE TABLE `footer_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `googlemap` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_settings`
--

INSERT INTO `footer_settings` (`id`, `address`, `phno`, `googlemap`, `facebook`, `instagram`, `gmail`, `linkin`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'Butwal Nepal 1', '+97775250798,522965', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113060.50299444137!2d83.36249576257954!3d27.682045338460938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996864275d9755f%3A0x2b1e92d89d4bb3ae!2sButwal!5e0!3m2!1sen!2snp!4v1554883340345!5m2!1sen!2snp', 'http://www.facebook.com', 'http://www.instagram.com', 'http://abc@gmail.com', 'http://www.linked.in', 'http://www.twitter.com', NULL, '2019-04-10 14:04:16');

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
(3, '2019_04_10_064917_create_cars_table', 1),
(4, '2019_04_10_071419_create_admin_profiles_table', 2),
(5, '2019_04_10_072051_create_footer_settings_table', 3),
(6, '2019_04_10_174116_create_wallpapers_table', 4),
(7, '2019_04_11_053558_create_services_table', 5);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'milan tarami=======', 'mgzsblack-1551116698-1552411093-1554965176.jpg', '2019-04-11 01:01:16', '2019-04-11 01:11:59'),
(3, 'Deveplopment Service', 'car1-1554833447-1554965858.png', '2019-04-11 01:12:38', '2019-04-11 01:12:38');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hari AleMagar', 'admin@gmail.com', NULL, '$2y$10$DrWyclYtaxVO3/KQRISC4.x/gEn8oEWSpuYFJlMv/zCSkOw/JMbqK', NULL, '2019-04-10 01:21:24', '2019-04-10 01:21:24'),
(2, 'Hari AleMagar', 'adminhari@gmail.com', NULL, '$2y$10$WgAnQdSPmo2LfFGwh3LIS.yW0hbPB0OC222OXS5e5TddTt/w5Bjh.', 'ShkJ0Df28asfpq3S86gKMIv0GDU79ilSS6HaDKLifolepJIFHdNgQiVgTvTy', '2019-04-10 08:07:58', '2019-04-10 08:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `wallpapers`
--

CREATE TABLE `wallpapers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallpapers`
--

INSERT INTO `wallpapers` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'picture', 'mgzsred-1551116656-1552468698_1554920797.jpg', '2019-04-10 12:41:38', '2019-04-10 12:41:38'),
(2, 'wallpaper', 'mgzsblue-1551116752-1552468745_1554920951.JPG', '2019-04-10 12:44:11', '2019-04-10 12:44:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_settings`
--
ALTER TABLE `footer_settings`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallpapers`
--
ALTER TABLE `wallpapers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_settings`
--
ALTER TABLE `footer_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallpapers`
--
ALTER TABLE `wallpapers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
