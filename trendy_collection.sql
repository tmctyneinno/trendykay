-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 03:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendy_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `phone`, `password`, `login_ip`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 2, 'Trendy Key Collection', 'admin@gmail.com', '08135324241', '$2y$10$0fFwVtSNEFnE6j8/MfiMjOWueukCGNNQJmr4VO1AQmQR7QY0wWs6i', NULL, NULL, NULL, '2022-11-05 18:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifies`
--

CREATE TABLE `admin_notifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_read` int(11) DEFAULT '0',
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notifies`
--

INSERT INTO `admin_notifies` (`id`, `is_read`, `message`, `created_at`, `updated_at`) VALUES
(4, 0, 'New Customer Registered', '2022-09-26 19:34:16', '2022-09-26 19:34:16'),
(5, 0, 'New customer order completed Order No: 103109102', '2022-10-17 13:44:06', '2022-10-17 13:44:06'),
(6, 0, 'New customer order completed Order No: 108961730', '2022-10-17 13:45:41', '2022-10-17 13:45:41'),
(7, 0, 'New customer order completed Order No109252548', '2022-10-17 18:01:48', '2022-10-17 18:01:48'),
(8, 0, 'New Customer Registered', '2023-09-17 14:37:46', '2023-09-17 14:37:46'),
(9, 0, 'New customer order completed Order No: 108230422', '2023-09-17 17:58:44', '2023-09-17 17:58:44'),
(10, 0, 'New customer order completed Order No: 104505712', '2023-09-17 19:11:29', '2023-09-17 19:11:29'),
(11, 0, 'New customer order completed Order No: 104414305', '2023-09-17 19:26:16', '2023-09-17 19:26:16'),
(12, 0, 'New customer order completed Order No: 107065476', '2023-09-17 19:41:43', '2023-09-17 19:41:43'),
(13, 0, 'New customer order completed Order No: 105107496', '2023-09-17 19:44:52', '2023-09-17 19:44:52'),
(14, 0, 'New customer order completed Order No: 102597630', '2023-09-18 11:34:38', '2023-09-18 11:34:38'),
(15, 0, 'New customer order completed Order No: 103792578', '2023-09-18 21:25:33', '2023-09-18 21:25:33'),
(16, 0, 'New customer order completed Order No: 105732403', '2023-09-18 21:27:36', '2023-09-18 21:27:36'),
(17, 0, 'New customer order completed Order No: 108823575', '2023-09-18 21:30:06', '2023-09-18 21:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'New Arrivals', '67eb0e68a59bff3b30acaf5b738fd626.jpg', NULL, '2022-09-12 02:01:14', '2023-10-03 10:31:34'),
(2, 'Best Sellers', '6d759ac2f95a15f0c869c407b7967db2.jpg', NULL, '2022-09-12 02:01:57', '2023-10-03 10:33:08'),
(11, 'Graphic', 'abdecc02946ceac0b1ea05f636121999.jpg', NULL, '2022-09-29 05:34:04', '2023-09-14 22:04:56'),
(12, 'Dresses', 'b950b5cfe40eec86e7fff159528aa807.jfif', NULL, '2022-09-29 05:41:14', '2023-10-03 10:42:08'),
(13, 'Floral', 'ccf5ee304098f788311cb86d8fe9d75b.jfif', NULL, '2022-09-29 05:42:08', '2023-10-03 10:50:29'),
(15, 'Jumpsuit', 'a3207ffd47c2836d69a6dc13c4b12efa.jpg', NULL, '2022-09-29 14:31:23', '2023-10-03 10:51:33'),
(16, 'Denim', '5d601b112173c41c0f50f4fafc955a56.jfif', NULL, '2023-09-14 22:28:05', '2023-10-03 10:52:25'),
(17, 'Clothing', 'f918ad23f94d9afa540e71e101ff2fdf.jpg', NULL, '2023-09-14 22:30:49', '2023-10-03 10:53:12'),
(18, 'Swinwear', 'a41c0f50d420f21bdde7d32c9603d2b0.jpg', NULL, '2023-09-14 22:33:10', '2023-10-03 10:54:25'),
(19, 'Shoes&Acc', 'e60c901ec6b4500e1e239646b933ef17.jfif', NULL, '2023-09-14 22:34:26', '2023-10-10 03:04:17'),
(20, 'My Design', '61a275f65898d311745641a957e59ca8.jpg', NULL, '2023-09-14 22:37:46', '2023-10-10 03:06:46'),
(21, 'Sale', '6f1467fc05ec924e6fe639d658dec49e.jfif', NULL, '2023-09-14 22:39:23', '2023-10-03 10:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `product_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wine', '2023-10-09 08:08:10', '2023-10-09 08:08:10'),
(2, 2, 'Green', '2023-10-09 08:11:49', '2023-10-09 08:11:49'),
(7, 2, 'Wine', '2023-10-09 08:39:06', '2023-10-09 08:39:06'),
(8, 3, 'Blue', '2023-10-09 08:43:31', '2023-10-09 08:43:31'),
(9, 4, 'Blue', '2023-10-09 08:55:20', '2023-10-09 08:55:20'),
(10, 5, 'Blue', '2023-10-09 09:04:16', '2023-10-09 09:04:16'),
(11, 6, 'Green', '2023-10-09 09:09:16', '2023-10-09 09:09:16'),
(12, 7, 'Green', '2023-10-09 09:20:25', '2023-10-09 09:20:25'),
(13, 8, 'Wine', '2023-10-09 09:24:49', '2023-10-09 09:24:49'),
(14, 9, 'Blue', '2023-10-09 09:32:47', '2023-10-09 09:32:47'),
(15, 10, 'Blue', '2023-10-09 09:36:27', '2023-10-09 09:36:27'),
(16, 11, 'Green', '2023-10-09 09:45:58', '2023-10-09 09:45:58'),
(17, 12, 'Red', '2023-10-09 09:57:59', '2023-10-09 09:57:59'),
(18, 13, 'Black', '2023-10-09 10:09:27', '2023-10-09 10:09:27'),
(19, 14, 'White', '2023-10-09 10:25:03', '2023-10-09 10:25:03'),
(20, 15, 'Black', '2023-10-09 10:46:52', '2023-10-09 10:46:52'),
(21, 16, 'Black', '2023-10-09 12:00:05', '2023-10-09 12:00:05'),
(22, 17, 'Black', '2023-10-09 12:09:02', '2023-10-09 12:09:02'),
(23, 18, 'Green', '2023-10-09 12:25:53', '2023-10-09 12:25:53'),
(24, 19, 'Black', '2023-10-09 12:39:35', '2023-10-09 12:39:35'),
(25, 20, 'Black', '2023-10-09 12:55:00', '2023-10-09 12:55:00'),
(26, 21, 'Black', '2023-10-09 12:55:03', '2023-10-09 12:55:03'),
(27, 22, 'Black', '2023-10-09 12:55:08', '2023-10-09 12:55:08'),
(28, 23, 'Olive Green', '2023-10-09 13:18:41', '2023-10-09 13:18:41'),
(29, 24, 'Pink', '2023-10-09 13:28:05', '2023-10-09 13:28:05'),
(30, 25, 'Wine', '2023-10-09 13:48:20', '2023-10-09 13:48:20'),
(31, 26, 'Black', '2023-10-09 13:58:01', '2023-10-09 13:58:01'),
(32, 27, 'Blue', '2023-10-09 14:05:05', '2023-10-09 14:05:05'),
(33, 28, 'Blue', '2023-10-09 14:13:46', '2023-10-09 14:13:46'),
(34, 29, 'Blue', '2023-10-09 16:41:19', '2023-10-09 16:41:19'),
(35, 30, 'Black', '2023-10-09 16:49:11', '2023-10-09 16:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Red', '2023-10-08 23:00:00', '2023-07-03 13:03:09'),
(2, 'Blue', '2023-10-08 23:00:00', '2023-10-08 23:00:00'),
(3, 'White', '2023-10-08 23:00:00', '2023-10-08 23:00:00'),
(4, 'Green', '2023-10-08 23:00:00', '2023-10-08 23:00:00'),
(5, 'Wine', '2023-10-08 23:00:00', '2023-10-08 23:00:00'),
(6, 'Black', '2023-10-08 23:00:00', '2023-10-08 23:00:00'),
(7, 'Champagne', '2023-10-08 23:00:00', '2023-10-08 23:00:00'),
(8, 'Olive Green', '2023-10-08 23:00:00', '2023-10-08 23:00:00'),
(9, 'Pink\r\n', '2023-10-08 23:00:00', '2023-10-08 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `content`, `created_at`, `updated_at`, `phone`, `email`, `address`) VALUES
(1, 'contacts Us', 'Get in touch with us, we will reply you as soon as possible', NULL, NULL, '+14317777816', 'trendykaycollections@gmail.com', 'Winnipeg, Manitoba, Canada');

-- --------------------------------------------------------

--
-- Table structure for table `currency_exchanges`
--

CREATE TABLE `currency_exchanges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_exchanges`
--

INSERT INTO `currency_exchanges` (`id`, `currency`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'USD', 720, '2023-03-24 12:35:54', '2023-03-24 13:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `delivery_fee` double DEFAULT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dispatchers`
--

CREATE TABLE `dispatchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(221) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`, `slug`) VALUES
(5, 'Home', '2021-04-17 01:11:42', '2021-04-17 01:11:42', 'home'),
(7, 'Products', '2021-04-17 01:11:42', '2022-09-12 20:33:33', 'products'),
(13, 'Blog', '2022-09-10 22:03:12', '2022-09-10 22:03:26', 'news'),
(16, 'Contact Us', '2022-09-12 01:01:54', '2022-09-12 01:01:54', 'contacts');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_10_10_042646_create_size_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_read` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(2, 54, 'New Customer Registered', 'Dear MICHAEL, <br>Thanks for registrating on our system, do enjoy our services.', NULL, '2022-09-14 21:14:50', '2022-09-14 21:14:50'),
(3, 55, 'New Customer Registered', 'Dear MICHAEL, <br>Thanks for registrating on our system, do enjoy our services.', NULL, '2022-09-14 22:42:58', '2022-09-14 22:42:58'),
(4, 56, 'welcome to Kenabprints', 'Dear MICHAEL, <br>We are glad to have you with us, do enjoy our services', NULL, '2022-09-26 19:34:16', '2022-09-26 19:34:16'),
(5, 57, 'welcome to sofarsolar', 'Dear name, <br>We are glad to have you with us, do enjoy our services', NULL, '2023-09-17 14:37:46', '2023-09-17 14:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_No` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `is_delivered` int(11) DEFAULT NULL,
  `is_paid` int(11) DEFAULT NULL,
  `dispatch_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_No`, `external_ref`, `payment_ref`, `payment_method`, `amount`, `shipping_id`, `is_delivered`, `is_paid`, `dispatch_status`, `created_at`, `updated_at`) VALUES
(32, 55, '1663889377', 'FLW-M03K-11f7b75f9a8db5cf9550f005a19efd41', 'TNE627500', 'card', 1000, 3, 0, 1, NULL, '2022-09-22 22:29:41', '2022-09-22 22:29:50'),
(33, 55, '1663890620', NULL, NULL, 'cash_delivery', 230000, 3, 0, 0, NULL, '2022-09-22 22:50:36', '2022-09-22 22:50:36'),
(34, 55, '1663890718', NULL, NULL, 'cash_delivery', 230000, 3, 0, 0, NULL, '2022-09-22 22:52:03', '2022-09-22 22:52:03'),
(35, 55, '1663890777', NULL, NULL, 'cash_delivery', 420000, 3, 2, 0, 0, '2022-09-22 22:53:01', '2022-09-29 14:02:12'),
(36, 55, '1029730', NULL, NULL, 'card', 230000, 5, 1, 1, 1, '2022-09-26 08:25:40', '2022-09-29 08:08:24'),
(37, 55, '1049520', NULL, 'SFSL791139', 'cash_delivery', 230000, 5, 2, 1, 2, '2022-09-26 08:26:11', '2022-09-29 14:01:04'),
(38, 55, '1041066', 'FLW-M03K-fff624786f0dbf9c70ea20a2ca14ea2b', 'SFSL752670', 'card', 1000, 5, 0, 1, 0, '2022-09-26 10:29:10', '2022-09-29 14:01:28'),
(39, 55, '1084126', 'FLW-M03K-128fb70ee2e8b422b3ce8a1292e1c68e', 'SFSL958694', 'card', 1000, 5, 2, 1, 2, '2022-09-26 10:32:16', '2022-09-29 14:01:51'),
(40, 55, '103220697', NULL, 'SFSL417144', 'cash_delivery', 1250000, 5, 2, 1, 0, '2022-09-29 20:46:50', '2022-09-29 20:49:00'),
(41, 55, '104731560', 'FLW-M03K-12894ca0321a368788873c26e514578f', 'SFSL451475', 'card', 1000, 5, 0, 1, NULL, '2022-09-29 20:48:05', '2022-09-29 20:48:18'),
(42, 55, '103109102', NULL, NULL, 'cash_delivery', 920000, 6, 0, 0, NULL, '2022-10-17 13:44:06', '2022-10-17 13:44:06'),
(43, 55, '108961730', NULL, NULL, 'cash_delivery', 2500000, 6, 0, 0, NULL, '2022-10-17 13:45:41', '2022-10-17 13:45:41'),
(44, 55, '109252548', 'FLW-M03K-a0b03489facab2ef38ce1c9e61024d33', 'SFSL336646', 'card', 1000, 6, 0, 1, NULL, '2022-10-17 18:01:37', '2022-10-17 18:01:48'),
(45, 55, '110258421', NULL, NULL, 'card', 4500000, 6, 0, 0, NULL, '2022-10-19 16:27:12', '2022-10-19 16:27:12'),
(46, 55, '103867084', NULL, NULL, 'card', 4000000, 6, 0, 0, NULL, '2022-11-05 21:09:39', '2022-11-05 21:09:39'),
(47, 55, '106453169', NULL, NULL, 'card', 4000000, 6, 0, 0, NULL, '2022-11-06 03:02:09', '2022-11-06 03:02:09'),
(48, 57, '108230422', NULL, NULL, 'cash_delivery', 480, 9, 0, 0, NULL, '2023-09-17 17:58:43', '2023-09-17 17:58:43'),
(49, 57, '104655878', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:05:47', '2023-09-17 18:05:47'),
(50, 57, '105662483', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:09:10', '2023-09-17 18:09:10'),
(51, 57, '104621152', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:09:55', '2023-09-17 18:09:55'),
(52, 57, '103812369', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:10:54', '2023-09-17 18:10:54'),
(53, 57, '101479946', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:29:33', '2023-09-17 18:29:33'),
(54, 57, '100109319', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:30:42', '2023-09-17 18:30:42'),
(55, 57, '100389424', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:32:38', '2023-09-17 18:32:38'),
(56, 57, '104929850', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:35:05', '2023-09-17 18:35:05'),
(57, 57, '106762402', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:37:11', '2023-09-17 18:37:11'),
(58, 57, '100754022', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:38:00', '2023-09-17 18:38:00'),
(59, 57, '104653313', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:38:20', '2023-09-17 18:38:20'),
(60, 57, '100945713', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:39:41', '2023-09-17 18:39:41'),
(61, 57, '110445858', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:40:14', '2023-09-17 18:40:14'),
(62, 57, '100548984', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:40:21', '2023-09-17 18:40:21'),
(63, 57, '105632719', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:41:06', '2023-09-17 18:41:06'),
(64, 57, '107765920', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:42:17', '2023-09-17 18:42:17'),
(65, 57, '104768347', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:43:35', '2023-09-17 18:43:35'),
(66, 57, '108213691', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:45:00', '2023-09-17 18:45:00'),
(67, 57, '107709174', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:45:51', '2023-09-17 18:45:51'),
(68, 57, '101202229', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 18:49:40', '2023-09-17 18:49:40'),
(69, 57, '104933897', NULL, NULL, 'card', 110, 9, 0, 0, NULL, '2023-09-17 19:04:28', '2023-09-17 19:04:28'),
(70, 57, '104505712', NULL, NULL, 'cash_delivery', 110, 9, 0, 0, NULL, '2023-09-17 19:11:29', '2023-09-17 19:11:29'),
(71, 57, '104414305', NULL, NULL, 'cash_delivery', 50, 9, 0, 0, NULL, '2023-09-17 19:26:16', '2023-09-17 19:26:16'),
(72, 57, '107065476', NULL, NULL, 'cash_delivery', 50, 9, 0, 0, NULL, '2023-09-17 19:41:43', '2023-09-17 19:41:43'),
(73, 57, '105107496', NULL, NULL, 'cash_delivery', 80, 9, 0, 0, NULL, '2023-09-17 19:44:52', '2023-09-17 19:44:52'),
(74, 57, '102597630', NULL, NULL, 'cash_delivery', 240, 9, 0, 0, NULL, '2023-09-18 11:34:37', '2023-09-18 11:34:37'),
(75, 57, '103792578', NULL, NULL, 'cash_delivery', 50, 9, 0, 0, NULL, '2023-09-18 21:25:33', '2023-09-18 21:25:33'),
(76, 57, '105732403', NULL, NULL, 'cash_delivery', 80, 9, 0, 0, NULL, '2023-09-18 21:27:34', '2023-09-18 21:27:34'),
(77, 57, '108641597', NULL, NULL, 'card', 0, 9, 0, 0, NULL, '2023-09-18 21:27:42', '2023-09-18 21:27:42'),
(78, 57, '108823575', NULL, NULL, 'cash_delivery', 60, 9, 0, 0, NULL, '2023-09-18 21:30:06', '2023-09-18 21:30:06'),
(79, 57, '105564131', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-18 21:32:58', '2023-09-18 21:32:58'),
(80, 57, '100328707', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-18 21:33:58', '2023-09-18 21:33:58'),
(81, 57, '103515507', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-18 21:34:44', '2023-09-18 21:34:44'),
(82, 57, '107812614', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-18 21:35:37', '2023-09-18 21:35:37'),
(83, 57, '100155184', NULL, NULL, 'card', 60, 9, 0, 0, NULL, '2023-09-21 03:22:24', '2023-09-21 03:22:24'),
(84, 57, '102521299', NULL, NULL, 'card', 60, 9, 0, 0, NULL, '2023-09-21 03:23:25', '2023-09-21 03:23:25'),
(85, 57, '107398323', NULL, NULL, 'card', 60, 9, 0, 0, NULL, '2023-09-21 04:28:01', '2023-09-21 04:28:01'),
(86, 57, '105245022', NULL, NULL, 'card', 60, 9, 0, 0, NULL, '2023-09-21 05:11:28', '2023-09-21 05:11:28'),
(87, 57, '106182477', NULL, NULL, 'card', 60, 9, 0, 0, NULL, '2023-09-21 05:25:58', '2023-09-21 05:25:58'),
(88, 57, '105043037', NULL, NULL, 'card', 80, 9, 0, 0, NULL, '2023-09-21 11:16:35', '2023-09-21 11:16:35'),
(89, 57, '100166626', NULL, NULL, 'card', 80, 9, 0, 0, NULL, '2023-09-21 11:23:22', '2023-09-21 11:23:22'),
(90, 57, '106864063', NULL, NULL, 'card', 80, 9, 0, 0, NULL, '2023-09-21 11:27:20', '2023-09-21 11:27:20'),
(91, 57, '110890742', NULL, NULL, 'card', 80, 9, 0, 0, NULL, '2023-09-21 11:44:24', '2023-09-21 11:44:24'),
(92, 57, '109241938', NULL, NULL, 'card', 80, 9, 0, 0, NULL, '2023-09-21 11:44:39', '2023-09-21 11:44:39'),
(93, 57, '103431773', NULL, NULL, 'card', 80, 9, 0, 0, NULL, '2023-09-21 11:50:45', '2023-09-21 11:50:45'),
(94, 57, '103458839', NULL, NULL, 'card', 160, 9, 0, 0, NULL, '2023-09-21 13:12:37', '2023-09-21 13:12:37'),
(95, 57, '110403103', NULL, NULL, 'card', 160, 9, 0, 0, NULL, '2023-09-21 13:13:55', '2023-09-21 13:13:55'),
(96, 57, '101343509', NULL, NULL, 'card', 160, 9, 0, 0, NULL, '2023-09-21 13:25:53', '2023-09-21 13:25:53'),
(97, 57, '101502079', NULL, NULL, 'card', 160, 9, 0, 0, NULL, '2023-09-21 13:30:20', '2023-09-21 13:30:20'),
(98, 57, '107955869', NULL, NULL, 'card', 160, 9, 0, 0, NULL, '2023-09-21 13:33:51', '2023-09-21 13:33:51'),
(99, 57, '108395688', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-22 00:16:33', '2023-09-22 00:16:33'),
(100, 57, '109162698', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-22 00:20:27', '2023-09-22 00:20:27'),
(101, 57, '102978962', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-22 00:38:33', '2023-09-22 00:38:33'),
(102, 57, '105064841', NULL, NULL, 'card', 200, 9, 0, 0, NULL, '2023-09-22 00:50:16', '2023-09-22 00:50:16'),
(103, 57, '101736785', NULL, NULL, 'card', 260, 9, 0, 0, NULL, '2023-09-22 08:09:09', '2023-09-22 08:09:09'),
(104, 57, '102775271', NULL, NULL, 'card', 340, 9, 0, 0, NULL, '2023-09-22 08:55:47', '2023-09-22 08:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_No` double DEFAULT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `size` text COLLATE utf8mb4_unicode_ci,
  `payable` double DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_image` text COLLATE utf8mb4_unicode_ci,
  `design_fee` double DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `order_No`, `product_name`, `price`, `qty`, `size`, `payable`, `image`, `design_image`, `design_fee`, `description`, `created_at`, `updated_at`) VALUES
(2, 55, 1663890777, 'SOFAR 7KTLM-G3', 420000, 1, NULL, 420000, '16630288492-20210705072625105.jpeg', NULL, NULL, NULL, '2022-09-22 22:52:57', '2022-09-22 22:52:57'),
(3, 55, 1663890718, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-22 22:51:58', '2022-09-22 22:51:58'),
(4, 55, 1663890620, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-22 22:50:20', '2022-09-22 22:50:20'),
(5, 55, 1007235, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:24:06', '2022-09-26 08:24:06'),
(6, 55, 1028438, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:25:24', '2022-09-26 08:25:24'),
(7, 55, 1029730, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:25:33', '2022-09-26 08:25:33'),
(8, 55, 1049520, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:26:00', '2022-09-26 08:26:00'),
(9, 55, 1041066, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 10:29:04', '2022-09-26 10:29:04'),
(10, 55, 1084126, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 10:32:12', '2022-09-26 10:32:12'),
(11, 55, 1084126, 'AMASSTORE BATTERY', 2500000, 1, NULL, 2500000, '16630290242-20201030074847997.jpeg', NULL, NULL, NULL, '2022-09-26 10:32:12', '2022-09-26 10:32:12'),
(12, 55, 1084126, 'SOFAR 1100TL-G3', 150000, 1, NULL, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 10:32:12', '2022-09-26 10:32:12'),
(13, 55, 103220697, 'SOFAR 17KTLX-G3', 1100000, 1, NULL, 1100000, '16644406332-20191125074911754.jpeg', NULL, NULL, NULL, '2022-09-29 20:46:43', '2022-09-29 20:46:43'),
(14, 55, 103220697, 'SOFAR 1100TL-G3', 150000, 1, NULL, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-29 20:46:43', '2022-09-29 20:46:43'),
(15, 55, 104731560, 'SOFAR 1100TL-G3', 150000, 1, NULL, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-29 20:47:57', '2022-09-29 20:47:57'),
(16, 55, 103781227, 'SOFAR 3KTLM-G3', 230000, 4, NULL, 920000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-17 13:43:34', '2022-10-17 13:43:34'),
(17, 55, 103109102, 'SOFAR 3KTLM-G3', 230000, 4, NULL, 920000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-17 13:43:54', '2022-10-17 13:43:54'),
(18, 55, 108961730, 'AMASSTORE BATTERY', 2500000, 1, NULL, 2500000, '16630290242-20201030074847997.jpeg', NULL, NULL, NULL, '2022-10-17 13:45:37', '2022-10-17 13:45:37'),
(19, 55, 109252548, 'SOFAR 1100TL-G3', 150000, 1, NULL, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-17 18:01:30', '2022-10-17 18:01:30'),
(20, 55, 110258421, '6.5kva Sofar Solar', 4500000, 1, NULL, 4500000, '1666015572WhatsApp Image 2022-09-18 at 3.10.39 PM.jpeg', NULL, NULL, NULL, '2022-10-19 16:26:39', '2022-10-19 16:26:39'),
(21, 55, 103085707, 'SOFAR 3KTLM-G3', 230000, 1, NULL, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-24 05:16:09', '2022-10-24 05:16:09'),
(22, 55, 102716697, 'BTS E5~E20-DS5', 4000000, 1, NULL, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-05 21:09:24', '2022-11-05 21:09:24'),
(23, 55, 103867084, 'BTS E5~E20-DS5', 4000000, 1, NULL, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-05 21:09:30', '2022-11-05 21:09:30'),
(24, 55, 106246619, 'BTS E5~E20-DS5', 4000000, 1, NULL, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-06 03:00:27', '2022-11-06 03:00:27'),
(25, 55, 106453169, 'BTS E5~E20-DS5', 4000000, 1, NULL, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-06 03:02:01', '2022-11-06 03:02:01'),
(26, 57, 104236218, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 14:39:06', '2023-09-17 14:39:06'),
(27, 57, 100363721, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 14:43:15', '2023-09-17 14:43:15'),
(28, 57, 104452806, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 14:45:14', '2023-09-17 14:45:14'),
(29, 57, 104402361, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 14:45:57', '2023-09-17 14:45:57'),
(30, 57, 106646057, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 14:46:50', '2023-09-17 14:46:50'),
(31, 57, 107803917, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 14:47:17', '2023-09-17 14:47:17'),
(32, 57, 103442452, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 14:57:45', '2023-09-17 14:57:45'),
(33, 57, 100200334, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:02:02', '2023-09-17 15:02:02'),
(34, 57, 108142584, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:02:41', '2023-09-17 15:02:41'),
(35, 57, 103418631, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:04:50', '2023-09-17 15:04:50'),
(36, 57, 106308789, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:05:48', '2023-09-17 15:05:48'),
(37, 57, 102586116, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:08:01', '2023-09-17 15:08:01'),
(38, 57, 103164183, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:09:06', '2023-09-17 15:09:06'),
(39, 57, 107083793, 'Velvet Jumpsuit 2psc set', 80, 2, NULL, 160, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:10:52', '2023-09-17 15:10:52'),
(40, 57, 106448599, 'Velvet Jumpsuit 2psc set', 80, 2, NULL, 160, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:11:01', '2023-09-17 15:11:01'),
(41, 57, 110057964, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:22:59', '2023-09-17 15:22:59'),
(42, 57, 110057964, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:22:59', '2023-09-17 15:22:59'),
(43, 57, 108501677, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:24:13', '2023-09-17 15:24:13'),
(44, 57, 108501677, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:24:13', '2023-09-17 15:24:13'),
(45, 57, 101209948, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:26:38', '2023-09-17 15:26:38'),
(46, 57, 101209948, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:26:38', '2023-09-17 15:26:38'),
(47, 57, 104359477, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:27:29', '2023-09-17 15:27:29'),
(48, 57, 104359477, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:27:29', '2023-09-17 15:27:29'),
(49, 57, 104293357, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:30:40', '2023-09-17 15:30:40'),
(50, 57, 104293357, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:30:40', '2023-09-17 15:30:40'),
(51, 57, 103749837, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:32:53', '2023-09-17 15:32:53'),
(52, 57, 103749837, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:32:53', '2023-09-17 15:32:53'),
(53, 57, 110245658, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:34:58', '2023-09-17 15:34:58'),
(54, 57, 110245658, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:34:58', '2023-09-17 15:34:58'),
(55, 57, 106796050, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:35:25', '2023-09-17 15:35:25'),
(56, 57, 106796050, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:35:25', '2023-09-17 15:35:25'),
(57, 57, 105969380, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:36:14', '2023-09-17 15:36:14'),
(58, 57, 105969380, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:36:14', '2023-09-17 15:36:14'),
(59, 57, 105404151, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:36:35', '2023-09-17 15:36:35'),
(60, 57, 105404151, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753546produt_13_1.jpg', NULL, NULL, NULL, '2023-09-17 15:36:35', '2023-09-17 15:36:35'),
(61, 57, 107200141, 'Velvet Jumpsuit 2psc set', 80, 2, NULL, 160, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:47:08', '2023-09-17 15:47:08'),
(62, 57, 102035238, 'Velvet Jumpsuit 2psc set', 80, 2, NULL, 160, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 15:47:17', '2023-09-17 15:47:17'),
(63, 57, 104479541, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:11:33', '2023-09-17 16:11:33'),
(64, 57, 104479541, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:11:33', '2023-09-17 16:11:33'),
(65, 57, 107246260, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:13:48', '2023-09-17 16:13:48'),
(66, 57, 107246260, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:13:48', '2023-09-17 16:13:48'),
(67, 57, 109983749, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:15:41', '2023-09-17 16:15:41'),
(68, 57, 109983749, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:15:41', '2023-09-17 16:15:41'),
(69, 57, 103129475, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:16:00', '2023-09-17 16:16:00'),
(70, 57, 103129475, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:16:00', '2023-09-17 16:16:00'),
(71, 57, 105672237, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:16:32', '2023-09-17 16:16:32'),
(72, 57, 105672237, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:16:32', '2023-09-17 16:16:32'),
(73, 57, 109273042, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:16:50', '2023-09-17 16:16:50'),
(74, 57, 109273042, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:16:50', '2023-09-17 16:16:50'),
(75, 57, 106394960, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:19:44', '2023-09-17 16:19:44'),
(76, 57, 106394960, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:19:44', '2023-09-17 16:19:44'),
(77, 57, 104775310, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:20:44', '2023-09-17 16:20:44'),
(78, 57, 104775310, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:20:44', '2023-09-17 16:20:44'),
(79, 57, 108936530, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:23:01', '2023-09-17 16:23:01'),
(80, 57, 108936530, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:23:01', '2023-09-17 16:23:01'),
(81, 57, 107209589, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:23:49', '2023-09-17 16:23:49'),
(82, 57, 107209589, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:23:49', '2023-09-17 16:23:49'),
(83, 57, 102785696, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:28:37', '2023-09-17 16:28:37'),
(84, 57, 102785696, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:28:37', '2023-09-17 16:28:37'),
(85, 57, 106823539, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:34:31', '2023-09-17 16:34:31'),
(86, 57, 106823539, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:34:31', '2023-09-17 16:34:31'),
(87, 57, 106068877, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:35:28', '2023-09-17 16:35:28'),
(88, 57, 106068877, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:35:28', '2023-09-17 16:35:28'),
(89, 57, 103396735, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:35:59', '2023-09-17 16:35:59'),
(90, 57, 103396735, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:35:59', '2023-09-17 16:35:59'),
(91, 57, 108207794, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:36:14', '2023-09-17 16:36:14'),
(92, 57, 108207794, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:36:14', '2023-09-17 16:36:14'),
(93, 57, 105223732, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:39:55', '2023-09-17 16:39:55'),
(94, 57, 105223732, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:39:55', '2023-09-17 16:39:55'),
(95, 57, 106062626, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:40:26', '2023-09-17 16:40:26'),
(96, 57, 106062626, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:40:26', '2023-09-17 16:40:26'),
(97, 57, 109969233, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:41:13', '2023-09-17 16:41:13'),
(98, 57, 109969233, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:41:13', '2023-09-17 16:41:13'),
(99, 57, 104028734, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:42:20', '2023-09-17 16:42:20'),
(100, 57, 104028734, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:42:21', '2023-09-17 16:42:21'),
(101, 57, 105022468, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:45:33', '2023-09-17 16:45:33'),
(102, 57, 105022468, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:45:33', '2023-09-17 16:45:33'),
(103, 57, 105484010, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:45:55', '2023-09-17 16:45:55'),
(104, 57, 105484010, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:45:55', '2023-09-17 16:45:55'),
(105, 57, 109909218, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:46:34', '2023-09-17 16:46:34'),
(106, 57, 109909218, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:46:34', '2023-09-17 16:46:34'),
(107, 57, 103850567, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:48:35', '2023-09-17 16:48:35'),
(108, 57, 103850567, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:48:35', '2023-09-17 16:48:35'),
(109, 57, 103188565, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:52:11', '2023-09-17 16:52:11'),
(110, 57, 103188565, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:52:12', '2023-09-17 16:52:12'),
(111, 57, 106959034, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:52:39', '2023-09-17 16:52:39'),
(112, 57, 106959034, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:52:39', '2023-09-17 16:52:39'),
(113, 57, 100040883, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:53:04', '2023-09-17 16:53:04'),
(114, 57, 100040883, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:53:04', '2023-09-17 16:53:04'),
(115, 57, 101534079, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:53:49', '2023-09-17 16:53:49'),
(116, 57, 101534079, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:53:49', '2023-09-17 16:53:49'),
(117, 57, 106303966, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 16:54:54', '2023-09-17 16:54:54'),
(118, 57, 106303966, 'Velvet Hoodie and Pant set', 70, 1, NULL, 70, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:54:54', '2023-09-17 16:54:54'),
(119, 57, 103559666, 'Velvet Hoodie and Pant set', 70, 2, NULL, 140, '1694801358produt_18_2.jpg', NULL, NULL, NULL, '2023-09-17 16:56:08', '2023-09-17 16:56:08'),
(120, 57, 102167693, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:30', '2023-09-17 17:20:30'),
(121, 57, 102167693, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:20:30', '2023-09-17 17:20:30'),
(122, 57, 102167693, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:30', '2023-09-17 17:20:30'),
(123, 57, 102167693, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:20:30', '2023-09-17 17:20:30'),
(124, 57, 103583838, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:43', '2023-09-17 17:20:43'),
(125, 57, 103583838, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:20:43', '2023-09-17 17:20:43'),
(126, 57, 103583838, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:43', '2023-09-17 17:20:43'),
(127, 57, 103583838, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:20:43', '2023-09-17 17:20:43'),
(128, 57, 101675038, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:48', '2023-09-17 17:20:48'),
(129, 57, 101675038, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:20:48', '2023-09-17 17:20:48'),
(130, 57, 101675038, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:48', '2023-09-17 17:20:48'),
(131, 57, 101675038, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:20:48', '2023-09-17 17:20:48'),
(132, 57, 107786714, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:55', '2023-09-17 17:20:55'),
(133, 57, 107786714, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:20:55', '2023-09-17 17:20:55'),
(134, 57, 107786714, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:20:55', '2023-09-17 17:20:55'),
(135, 57, 107786714, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:20:55', '2023-09-17 17:20:55'),
(136, 57, 108674884, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:24:49', '2023-09-17 17:24:49'),
(137, 57, 108674884, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:24:49', '2023-09-17 17:24:49'),
(138, 57, 108674884, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:24:49', '2023-09-17 17:24:49'),
(139, 57, 108674884, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:24:49', '2023-09-17 17:24:49'),
(140, 57, 105580712, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:25:00', '2023-09-17 17:25:00'),
(141, 57, 105580712, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:25:00', '2023-09-17 17:25:00'),
(142, 57, 105580712, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:25:01', '2023-09-17 17:25:01'),
(143, 57, 105580712, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:25:01', '2023-09-17 17:25:01'),
(144, 57, 110852591, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:25:41', '2023-09-17 17:25:41'),
(145, 57, 110852591, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:25:41', '2023-09-17 17:25:41'),
(146, 57, 110852591, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:25:41', '2023-09-17 17:25:41'),
(147, 57, 110852591, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:25:41', '2023-09-17 17:25:41'),
(148, 57, 101107384, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:26:02', '2023-09-17 17:26:02'),
(149, 57, 101107384, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:26:02', '2023-09-17 17:26:02'),
(150, 57, 101107384, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:26:02', '2023-09-17 17:26:02'),
(151, 57, 101107384, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:26:02', '2023-09-17 17:26:02'),
(152, 57, 104753336, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:28:19', '2023-09-17 17:28:19'),
(153, 57, 104753336, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:28:19', '2023-09-17 17:28:19'),
(154, 57, 104753336, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:28:19', '2023-09-17 17:28:19'),
(155, 57, 104753336, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:28:19', '2023-09-17 17:28:19'),
(156, 57, 102187512, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:29:00', '2023-09-17 17:29:00'),
(157, 57, 102187512, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:29:00', '2023-09-17 17:29:00'),
(158, 57, 102187512, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:29:00', '2023-09-17 17:29:00'),
(159, 57, 102187512, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:29:00', '2023-09-17 17:29:00'),
(160, 57, 101915711, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:29:12', '2023-09-17 17:29:12'),
(161, 57, 101915711, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:29:12', '2023-09-17 17:29:12'),
(162, 57, 101915711, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:29:12', '2023-09-17 17:29:12'),
(163, 57, 101915711, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:29:12', '2023-09-17 17:29:12'),
(164, 57, 103522099, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:31:49', '2023-09-17 17:31:49'),
(165, 57, 103522099, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:31:49', '2023-09-17 17:31:49'),
(166, 57, 103522099, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:31:50', '2023-09-17 17:31:50'),
(167, 57, 103522099, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:31:50', '2023-09-17 17:31:50'),
(168, 57, 104477432, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:32:03', '2023-09-17 17:32:03'),
(169, 57, 104477432, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:32:03', '2023-09-17 17:32:03'),
(170, 57, 104477432, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:32:03', '2023-09-17 17:32:03'),
(171, 57, 104477432, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:32:03', '2023-09-17 17:32:03'),
(172, 57, 102255997, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:32:34', '2023-09-17 17:32:34'),
(173, 57, 102255997, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:32:34', '2023-09-17 17:32:34'),
(174, 57, 102255997, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:32:35', '2023-09-17 17:32:35'),
(175, 57, 102255997, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:32:35', '2023-09-17 17:32:35'),
(176, 57, 105457782, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:37:26', '2023-09-17 17:37:26'),
(177, 57, 105457782, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:37:26', '2023-09-17 17:37:26'),
(178, 57, 105457782, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:37:26', '2023-09-17 17:37:26'),
(179, 57, 105457782, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:37:26', '2023-09-17 17:37:26'),
(180, 57, 110431216, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:37:49', '2023-09-17 17:37:49'),
(181, 57, 110431216, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:37:49', '2023-09-17 17:37:49'),
(182, 57, 110431216, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:37:49', '2023-09-17 17:37:49'),
(183, 57, 110431216, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:37:49', '2023-09-17 17:37:49'),
(184, 57, 103315146, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:38:30', '2023-09-17 17:38:30'),
(185, 57, 103315146, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:38:30', '2023-09-17 17:38:30'),
(186, 57, 103315146, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:38:30', '2023-09-17 17:38:30'),
(187, 57, 103315146, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:38:30', '2023-09-17 17:38:30'),
(188, 57, 103038958, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:38:56', '2023-09-17 17:38:56'),
(189, 57, 103038958, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:38:56', '2023-09-17 17:38:56'),
(190, 57, 103038958, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:38:56', '2023-09-17 17:38:56'),
(191, 57, 103038958, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:38:56', '2023-09-17 17:38:56'),
(192, 57, 101447028, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:39:11', '2023-09-17 17:39:11'),
(193, 57, 101447028, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:39:11', '2023-09-17 17:39:11'),
(194, 57, 101447028, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:39:11', '2023-09-17 17:39:11'),
(195, 57, 101447028, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:39:11', '2023-09-17 17:39:11'),
(196, 57, 105584855, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:40:13', '2023-09-17 17:40:13'),
(197, 57, 105584855, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:40:13', '2023-09-17 17:40:13'),
(198, 57, 105584855, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:40:13', '2023-09-17 17:40:13'),
(199, 57, 105584855, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:40:13', '2023-09-17 17:40:13'),
(200, 57, 100087957, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:40:44', '2023-09-17 17:40:44'),
(201, 57, 100087957, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:40:44', '2023-09-17 17:40:44'),
(202, 57, 100087957, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:40:44', '2023-09-17 17:40:44'),
(203, 57, 100087957, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:40:44', '2023-09-17 17:40:44'),
(204, 57, 104657630, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:41:06', '2023-09-17 17:41:06'),
(205, 57, 104657630, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:41:06', '2023-09-17 17:41:06'),
(206, 57, 104657630, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:41:06', '2023-09-17 17:41:06'),
(207, 57, 104657630, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:41:06', '2023-09-17 17:41:06'),
(208, 57, 108235298, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:42:33', '2023-09-17 17:42:33'),
(209, 57, 108235298, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:42:33', '2023-09-17 17:42:33'),
(210, 57, 108235298, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:42:33', '2023-09-17 17:42:33'),
(211, 57, 108235298, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:42:33', '2023-09-17 17:42:33'),
(212, 57, 107999611, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:43:01', '2023-09-17 17:43:01'),
(213, 57, 107999611, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:43:01', '2023-09-17 17:43:01'),
(214, 57, 107999611, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:43:01', '2023-09-17 17:43:01'),
(215, 57, 107999611, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:43:01', '2023-09-17 17:43:01'),
(216, 57, 100651529, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:44:04', '2023-09-17 17:44:04'),
(217, 57, 100651529, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:44:04', '2023-09-17 17:44:04'),
(218, 57, 100651529, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:44:04', '2023-09-17 17:44:04'),
(219, 57, 100651529, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:44:04', '2023-09-17 17:44:04'),
(220, 57, 103358481, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:44:51', '2023-09-17 17:44:51'),
(221, 57, 103358481, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:44:51', '2023-09-17 17:44:51'),
(222, 57, 103358481, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:44:51', '2023-09-17 17:44:51'),
(223, 57, 103358481, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:44:51', '2023-09-17 17:44:51'),
(224, 57, 103152302, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:46:19', '2023-09-17 17:46:19'),
(225, 57, 103152302, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:46:19', '2023-09-17 17:46:19'),
(226, 57, 103152302, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:46:19', '2023-09-17 17:46:19'),
(227, 57, 103152302, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:46:19', '2023-09-17 17:46:19'),
(228, 57, 104731563, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:46:38', '2023-09-17 17:46:38'),
(229, 57, 104731563, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:46:38', '2023-09-17 17:46:38'),
(230, 57, 104731563, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:46:38', '2023-09-17 17:46:38'),
(231, 57, 104731563, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:46:38', '2023-09-17 17:46:38'),
(232, 57, 110203835, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:50:00', '2023-09-17 17:50:00'),
(233, 57, 110203835, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:50:00', '2023-09-17 17:50:00'),
(234, 57, 110203835, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:50:00', '2023-09-17 17:50:00'),
(235, 57, 110203835, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:50:00', '2023-09-17 17:50:00'),
(236, 57, 100470613, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:51:42', '2023-09-17 17:51:42'),
(237, 57, 100470613, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:51:42', '2023-09-17 17:51:42'),
(238, 57, 100470613, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:51:42', '2023-09-17 17:51:42'),
(239, 57, 100470613, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:51:42', '2023-09-17 17:51:42'),
(240, 57, 109927889, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:54:50', '2023-09-17 17:54:50'),
(241, 57, 109927889, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:54:50', '2023-09-17 17:54:50'),
(242, 57, 109927889, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:54:50', '2023-09-17 17:54:50'),
(243, 57, 109927889, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:54:50', '2023-09-17 17:54:50'),
(244, 57, 107466621, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:57:43', '2023-09-17 17:57:43'),
(245, 57, 107466621, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:57:44', '2023-09-17 17:57:44'),
(246, 57, 107466621, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:57:44', '2023-09-17 17:57:44'),
(247, 57, 107466621, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:57:44', '2023-09-17 17:57:44'),
(248, 57, 101243397, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:58:02', '2023-09-17 17:58:02'),
(249, 57, 101243397, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:58:02', '2023-09-17 17:58:02'),
(250, 57, 101243397, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:58:02', '2023-09-17 17:58:02'),
(251, 57, 101243397, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:58:02', '2023-09-17 17:58:02'),
(252, 57, 108230422, 'FORESEE Dress', 80, 4, NULL, 320, '1694751383produt_9_3.jpg', NULL, NULL, NULL, '2023-09-17 17:58:31', '2023-09-17 17:58:31'),
(253, 57, 108230422, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 17:58:31', '2023-09-17 17:58:31'),
(254, 57, 108230422, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 17:58:31', '2023-09-17 17:58:31'),
(255, 57, 108230422, 'Alevva Gold  Dress', 80, 1, NULL, 80, '1694751181produt_8_5.jpg', NULL, NULL, NULL, '2023-09-17 17:58:31', '2023-09-17 17:58:31'),
(256, 57, 104655878, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:05:36', '2023-09-17 18:05:36'),
(257, 57, 104655878, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:05:36', '2023-09-17 18:05:36'),
(258, 57, 105662483, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:08:59', '2023-09-17 18:08:59'),
(259, 57, 105662483, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:08:59', '2023-09-17 18:08:59'),
(260, 57, 104621152, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:09:42', '2023-09-17 18:09:42'),
(261, 57, 104621152, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:09:42', '2023-09-17 18:09:42'),
(262, 57, 103812369, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:10:29', '2023-09-17 18:10:29'),
(263, 57, 103812369, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:10:29', '2023-09-17 18:10:29'),
(264, 57, 101479946, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:29:26', '2023-09-17 18:29:26'),
(265, 57, 101479946, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:29:26', '2023-09-17 18:29:26'),
(266, 57, 100109319, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:30:35', '2023-09-17 18:30:35'),
(267, 57, 100109319, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:30:35', '2023-09-17 18:30:35'),
(268, 57, 100389424, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:32:33', '2023-09-17 18:32:33'),
(269, 57, 100389424, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:32:33', '2023-09-17 18:32:33'),
(270, 57, 104929850, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:34:56', '2023-09-17 18:34:56'),
(271, 57, 104929850, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:34:56', '2023-09-17 18:34:56'),
(272, 57, 106762402, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:37:02', '2023-09-17 18:37:02'),
(273, 57, 106762402, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:37:02', '2023-09-17 18:37:02'),
(274, 57, 100754022, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:37:55', '2023-09-17 18:37:55'),
(275, 57, 100754022, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:37:55', '2023-09-17 18:37:55'),
(276, 57, 104653313, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:38:16', '2023-09-17 18:38:16'),
(277, 57, 104653313, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:38:16', '2023-09-17 18:38:16'),
(278, 57, 100945713, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:39:35', '2023-09-17 18:39:35'),
(279, 57, 100945713, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:39:35', '2023-09-17 18:39:35'),
(280, 57, 110445858, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:40:08', '2023-09-17 18:40:08'),
(281, 57, 110445858, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:40:08', '2023-09-17 18:40:08'),
(282, 57, 100548984, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:40:15', '2023-09-17 18:40:15'),
(283, 57, 100548984, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:40:15', '2023-09-17 18:40:15'),
(284, 57, 105632719, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:40:59', '2023-09-17 18:40:59'),
(285, 57, 105632719, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:40:59', '2023-09-17 18:40:59'),
(286, 57, 107765920, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:41:48', '2023-09-17 18:41:48'),
(287, 57, 107765920, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:41:48', '2023-09-17 18:41:48'),
(288, 57, 104768347, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:43:30', '2023-09-17 18:43:30'),
(289, 57, 104768347, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:43:30', '2023-09-17 18:43:30'),
(290, 57, 108213691, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:44:47', '2023-09-17 18:44:47'),
(291, 57, 108213691, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:44:47', '2023-09-17 18:44:47'),
(292, 57, 107709174, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:45:47', '2023-09-17 18:45:47'),
(293, 57, 107709174, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:45:47', '2023-09-17 18:45:47'),
(294, 57, 101202229, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 18:49:36', '2023-09-17 18:49:36'),
(295, 57, 101202229, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 18:49:36', '2023-09-17 18:49:36'),
(296, 57, 104933897, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 19:04:23', '2023-09-17 19:04:23'),
(297, 57, 104933897, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 19:04:23', '2023-09-17 19:04:23'),
(298, 57, 104505712, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 19:11:21', '2023-09-17 19:11:21'),
(299, 57, 104505712, 'KAYLA Sweat Dress', 30, 1, NULL, 30, '1694755250produt_15_1.jpg', NULL, NULL, NULL, '2023-09-17 19:11:21', '2023-09-17 19:11:21'),
(300, 57, 104414305, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-17 19:26:09', '2023-09-17 19:26:09'),
(301, 57, 107065476, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1694753858produt_14_3.jpg', NULL, NULL, NULL, '2023-09-17 19:41:26', '2023-09-17 19:41:26'),
(302, 57, 105107496, 'Velvet Jumpsuit 2psc set', 80, 1, NULL, 80, '1694801584produt_17_2.jpg', NULL, NULL, NULL, '2023-09-17 19:44:42', '2023-09-17 19:44:42'),
(303, 57, 102597630, 'Tracksuit', 60, 4, NULL, 240, '1694734899Product_2.jpg', NULL, NULL, NULL, '2023-09-18 11:34:26', '2023-09-18 11:34:26'),
(304, 57, 107629510, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-18 21:23:15', '2023-09-18 21:23:15'),
(305, 57, 108218764, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-18 21:24:23', '2023-09-18 21:24:23'),
(306, 57, 103792578, 'Velvet Jumpsuit 2pcs set', 50, 1, NULL, 50, '1694755153produt_16_1.jpg', NULL, NULL, NULL, '2023-09-18 21:25:01', '2023-09-18 21:25:01'),
(307, 57, 105732403, 'user', 80, 1, NULL, 80, '1695032397Accessories.jfif', NULL, NULL, NULL, '2023-09-18 21:27:21', '2023-09-18 21:27:21'),
(308, 57, 108641597, 'user', 80, 1, NULL, 80, '1695032397Accessories.jfif', NULL, NULL, NULL, '2023-09-18 21:27:35', '2023-09-18 21:27:35'),
(309, 57, 108823575, 'user', 60, 1, NULL, 60, '1695037653Product_2.jpg', NULL, NULL, NULL, '2023-09-18 21:29:55', '2023-09-18 21:29:55'),
(310, 57, 105564131, 'name', 200, 1, NULL, 200, '1695032269Swinwear.jpg', NULL, NULL, NULL, '2023-09-18 21:32:48', '2023-09-18 21:32:48'),
(311, 57, 100328707, 'name', 200, 1, NULL, 200, '1695032269Swinwear.jpg', NULL, NULL, NULL, '2023-09-18 21:33:48', '2023-09-18 21:33:48'),
(312, 57, 103515507, 'name', 200, 1, NULL, 200, '1695032269Swinwear.jpg', NULL, NULL, NULL, '2023-09-18 21:34:36', '2023-09-18 21:34:36'),
(313, 57, 107812614, 'name', 200, 1, NULL, 200, '1695032269Swinwear.jpg', NULL, NULL, NULL, '2023-09-18 21:35:31', '2023-09-18 21:35:31'),
(314, 57, 100155184, 'user', 60, 1, NULL, 60, '1695037653Product_2.jpg', NULL, NULL, NULL, '2023-09-21 03:22:15', '2023-09-21 03:22:15'),
(315, 57, 102521299, 'user', 60, 1, NULL, 60, '1695037653Product_2.jpg', NULL, NULL, NULL, '2023-09-21 03:23:22', '2023-09-21 03:23:22'),
(316, 57, 107398323, 'user', 60, 1, NULL, 60, '1695037653Product_2.jpg', NULL, NULL, NULL, '2023-09-21 04:27:57', '2023-09-21 04:27:57'),
(317, 57, 105245022, 'user', 60, 1, NULL, 60, '1695037653Product_2.jpg', NULL, NULL, NULL, '2023-09-21 05:11:23', '2023-09-21 05:11:23'),
(318, 57, 106182477, 'user', 60, 1, NULL, 60, '1695037653Product_2.jpg', NULL, NULL, NULL, '2023-09-21 05:25:52', '2023-09-21 05:25:52'),
(319, 57, 108384706, 'user2', 80, 1, NULL, 80, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 11:16:27', '2023-09-21 11:16:27'),
(320, 57, 105043037, 'user2', 80, 1, NULL, 80, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 11:16:28', '2023-09-21 11:16:28'),
(321, 57, 100166626, 'user2', 80, 1, NULL, 80, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 11:23:17', '2023-09-21 11:23:17'),
(322, 57, 106864063, 'user2', 80, 1, NULL, 80, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 11:27:15', '2023-09-21 11:27:15'),
(323, 57, 110890742, 'user2', 80, 1, NULL, 80, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 11:40:02', '2023-09-21 11:40:02'),
(324, 57, 109241938, 'user2', 80, 1, NULL, 80, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 11:44:35', '2023-09-21 11:44:35'),
(325, 57, 103431773, 'user2', 80, 1, NULL, 80, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 11:45:23', '2023-09-21 11:45:23'),
(326, 57, 103458839, 'user2', 80, 2, NULL, 160, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 13:11:36', '2023-09-21 13:11:36');
INSERT INTO `order_items` (`id`, `user_id`, `order_No`, `product_name`, `price`, `qty`, `size`, `payable`, `image`, `design_image`, `design_fee`, `description`, `created_at`, `updated_at`) VALUES
(327, 57, 104114202, 'user2', 80, 2, NULL, 160, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 13:13:24', '2023-09-21 13:13:24'),
(328, 57, 110403103, 'user2', 80, 2, NULL, 160, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 13:13:51', '2023-09-21 13:13:51'),
(329, 57, 101343509, 'user2', 80, 2, NULL, 160, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 13:25:49', '2023-09-21 13:25:49'),
(330, 57, 101502079, 'user2', 80, 2, NULL, 160, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 13:30:14', '2023-09-21 13:30:14'),
(331, 57, 107955869, 'user2', 80, 2, NULL, 160, '1695039327Product_3_3.jpg', NULL, NULL, NULL, '2023-09-21 13:33:27', '2023-09-21 13:33:27'),
(332, 57, 108395688, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 00:16:29', '2023-09-22 00:16:29'),
(333, 57, 109162698, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 00:20:20', '2023-09-22 00:20:20'),
(334, 57, 102978962, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 00:38:04', '2023-09-22 00:38:04'),
(335, 57, 108031193, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 00:48:35', '2023-09-22 00:48:35'),
(336, 57, 104213844, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 00:48:35', '2023-09-22 00:48:35'),
(337, 57, 105064841, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 00:50:12', '2023-09-22 00:50:12'),
(338, 57, 101736785, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 08:09:02', '2023-09-22 08:09:02'),
(339, 57, 101736785, 'Botton Down Smocked Denim Dress', 60, 1, NULL, 60, '1695372681Product_3.jpg', NULL, NULL, NULL, '2023-09-22 08:09:02', '2023-09-22 08:09:02'),
(340, 57, 102775271, 'name', 200, 1, NULL, 200, '1695036237Dresses.jfif', NULL, NULL, NULL, '2023-09-22 08:55:39', '2023-09-22 08:55:39'),
(341, 57, 102775271, 'Botton Down Smocked Denim Dress', 60, 1, NULL, 60, '1695372681Product_3.jpg', NULL, NULL, NULL, '2023-09-22 08:55:39', '2023-09-22 08:55:39'),
(342, 57, 102775271, 'Alevva Sunray Dress', 80, 1, NULL, 80, '1695373124Product_4.jpg', NULL, NULL, NULL, '2023-09-22 08:55:39', '2023-09-22 08:55:39'),
(343, 57, 105441684, 'Botton Down Smocked Denim Dress', 60, 1, NULL, 60, '1695372681Product_3.jpg', NULL, NULL, NULL, '2023-10-05 09:48:00', '2023-10-05 09:48:00'),
(344, 57, 108697413, 'Botton Down Smocked Denim Dress', 60, 1, NULL, 60, '1695372681Product_3.jpg', NULL, NULL, NULL, '2023-10-05 09:48:33', '2023-10-05 09:48:33'),
(345, 57, 108868785, 'Botton Down Smocked Denim Dress', 60, 1, NULL, 60, '1695372681Product_3.jpg', NULL, NULL, NULL, '2023-10-05 10:16:13', '2023-10-05 10:16:13'),
(346, 57, 110078487, 'EYDIS Dress', 80, 1, NULL, 80, '1694750258Product_6.jpg', NULL, NULL, NULL, '2023-10-06 11:37:14', '2023-10-06 11:37:14'),
(347, 0, 101965028, 'Jeans  Dress', 90, 1, NULL, 90, '1696435951produt_19_3.jpg', NULL, NULL, NULL, '2023-10-06 12:25:11', '2023-10-06 12:25:11'),
(348, 0, 101054500, 'Jeans  Dress', 90, 1, NULL, 90, '1696435951produt_19_3.jpg', NULL, NULL, NULL, '2023-10-06 12:28:14', '2023-10-06 12:28:14'),
(349, 0, 110651802, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 02:49:08', '2023-10-13 02:49:08'),
(350, 0, 110651802, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 02:49:08', '2023-10-13 02:49:08'),
(351, 0, 102187979, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 02:52:23', '2023-10-13 02:52:23'),
(352, 0, 102187979, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 02:52:23', '2023-10-13 02:52:23'),
(353, 0, 101768110, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 02:52:43', '2023-10-13 02:52:43'),
(354, 0, 101768110, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 02:52:43', '2023-10-13 02:52:43'),
(355, 0, 108443813, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 02:52:54', '2023-10-13 02:52:54'),
(356, 0, 108443813, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 02:52:54', '2023-10-13 02:52:54'),
(357, 0, 103566444, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 02:56:28', '2023-10-13 02:56:28'),
(358, 0, 103566444, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 02:56:28', '2023-10-13 02:56:28'),
(359, 0, 106523768, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 02:56:52', '2023-10-13 02:56:52'),
(360, 0, 106523768, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 02:56:52', '2023-10-13 02:56:52'),
(361, 0, 103512557, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:05:12', '2023-10-13 03:05:12'),
(362, 0, 103512557, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:05:12', '2023-10-13 03:05:12'),
(363, 0, 110774099, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:06:13', '2023-10-13 03:06:13'),
(364, 0, 110774099, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:06:13', '2023-10-13 03:06:13'),
(365, 0, 102753312, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:07:50', '2023-10-13 03:07:50'),
(366, 0, 102753312, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:07:51', '2023-10-13 03:07:51'),
(367, 0, 108508520, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:08:53', '2023-10-13 03:08:53'),
(368, 0, 108508520, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:08:53', '2023-10-13 03:08:53'),
(369, 0, 108624653, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:09:27', '2023-10-13 03:09:27'),
(370, 0, 108624653, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:09:27', '2023-10-13 03:09:27'),
(371, 0, 100654457, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:12:21', '2023-10-13 03:12:21'),
(372, 0, 100654457, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:12:21', '2023-10-13 03:12:21'),
(373, 0, 101890529, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:23:13', '2023-10-13 03:23:13'),
(374, 0, 101890529, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:23:13', '2023-10-13 03:23:13'),
(375, 0, 104308000, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:24:01', '2023-10-13 03:24:01'),
(376, 0, 104308000, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:24:01', '2023-10-13 03:24:01'),
(377, 0, 102200494, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:26:02', '2023-10-13 03:26:02'),
(378, 0, 102200494, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:26:02', '2023-10-13 03:26:02'),
(379, 0, 103570334, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:26:28', '2023-10-13 03:26:28'),
(380, 0, 103570334, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:26:28', '2023-10-13 03:26:28'),
(381, 0, 101986065, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:27:00', '2023-10-13 03:27:00'),
(382, 0, 101986065, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:27:00', '2023-10-13 03:27:00'),
(383, 0, 109235938, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:27:23', '2023-10-13 03:27:23'),
(384, 0, 109235938, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:27:24', '2023-10-13 03:27:24'),
(385, 0, 102415208, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:29:06', '2023-10-13 03:29:06'),
(386, 0, 102415208, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:29:06', '2023-10-13 03:29:06'),
(387, 0, 102362967, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:30:44', '2023-10-13 03:30:44'),
(388, 0, 102362967, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:30:44', '2023-10-13 03:30:44'),
(389, 57, 109390481, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696861118product_15_1.jpg', NULL, NULL, NULL, '2023-10-13 03:31:21', '2023-10-13 03:31:21'),
(390, 57, 109390481, 'Jeans  Dress', 90, 1, NULL, 90, '1696864422product_20_1.jpg', NULL, NULL, NULL, '2023-10-13 03:31:21', '2023-10-13 03:31:21'),
(391, 0, 109944255, 'FORESEE Dress', 80, 1, NULL, 80, '1696856401product_9_1.jpg', NULL, NULL, NULL, '2023-10-13 04:04:43', '2023-10-13 04:04:43'),
(392, 0, 105726615, 'FORESEE Dress', 80, 1, NULL, 80, '1696856401product_9_1.jpg', NULL, NULL, NULL, '2023-10-13 04:05:20', '2023-10-13 04:05:20'),
(393, 0, 107212521, 'FORESEE Dress', 80, 1, NULL, 80, '1696856401product_9_1.jpg', NULL, NULL, NULL, '2023-10-13 04:05:55', '2023-10-13 04:05:55'),
(394, 0, 106546319, 'FORESEE Dress', 80, 1, NULL, 80, '1696856401product_9_1.jpg', NULL, NULL, NULL, '2023-10-13 04:24:49', '2023-10-13 04:24:49'),
(395, 0, 108245859, 'FORESEE Dress', 80, 1, NULL, 80, '1696856401product_9_1.jpg', NULL, NULL, NULL, '2023-10-13 04:25:32', '2023-10-13 04:25:32'),
(396, 0, 109317218, 'FORESEE Dress', 80, 1, NULL, 80, '1696856401product_9_1.jpg', NULL, NULL, NULL, '2023-10-13 04:28:40', '2023-10-13 04:28:40'),
(397, 0, 108870887, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:04:52', '2023-10-13 09:04:52'),
(398, 0, 102561850, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:14:49', '2023-10-13 09:14:49'),
(399, 0, 101272635, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:15:24', '2023-10-13 09:15:24'),
(400, 0, 105174199, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:16:16', '2023-10-13 09:16:16'),
(401, 0, 107626763, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:19:32', '2023-10-13 09:19:32'),
(402, 0, 100042135, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:19:55', '2023-10-13 09:19:55'),
(403, 0, 111073017, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:25:58', '2023-10-13 09:25:58'),
(404, 0, 102386166, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:27:12', '2023-10-13 09:27:12'),
(405, 0, 109270234, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:27:41', '2023-10-13 09:27:41'),
(406, 0, 110170540, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:29:48', '2023-10-13 09:29:48'),
(407, 0, 102761296, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:30:18', '2023-10-13 09:30:18'),
(408, 0, 108642083, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:30:49', '2023-10-13 09:30:49'),
(409, 0, 104195782, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:44:56', '2023-10-13 09:44:56'),
(410, 0, 110120965, 'KAYLA Sweat Dress', 50, 1, NULL, 50, '1696859704product_14_3.jpg', NULL, NULL, NULL, '2023-10-13 09:45:56', '2023-10-13 09:45:56'),
(430, 57, 16110064162634, 'Botton Down Smocked Denim ', 80, 3, '44', 240, '1696847786product_1.jpg', NULL, NULL, NULL, '2023-10-16 11:55:21', '2023-10-16 11:55:21'),
(431, 57, 22913092931814, 'Botton Down Smocked Denim ', 80, 3, '44', 240, '1696847786product_1.jpg', NULL, NULL, NULL, '2023-10-16 11:58:32', '2023-10-16 11:58:32'),
(432, 57, 42425964446924, 'Botton Down Smocked Denim ', 80, 3, '44', 240, '1696847786product_1.jpg', NULL, NULL, NULL, '2023-10-16 11:59:42', '2023-10-16 11:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` text COLLATE utf8mb4_unicode_ci,
  `size` text COLLATE utf8mb4_unicode_ci,
  `variation` text COLLATE utf8mb4_unicode_ci,
  `price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `discount` decimal(10,2) NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `percentage` double DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `design_fee` double DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `order_count` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci,
  `exchange_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `color`, `size`, `variation`, `price`, `sale_price`, `discount`, `admin_id`, `image`, `gallery`, `status`, `percentage`, `description`, `design_fee`, `views`, `order_count`, `deleted_at`, `created_at`, `updated_at`, `sub_category_id`, `specification`, `exchange_rate`) VALUES
(7, 2, 'Tracksuit', '[\"Green\"]', '[\"L\",\"XL\",\"XXL\",\"3XL\",\"4XL\",\"5XL\"]', 'null', 120, 60, '50.00', '1', '1696846824product_3_1.jpg', '[\"e50a7bce2a042b452ea03f6983c85c91.jpg\"]', NULL, 50, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">The original tracksuits and sweatsuits 2 piece set sports outfit Zipper and</span><br style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\"><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">pull-on closure shirt and a strip-line pant set\'s joggers. Made from</span><br style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\"><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">95% polyester and 5% elastane material, quite stylish and comfortable to</span><br style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\"><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">wear. Perfect for sports, and daily leisure,</span><br></p>', NULL, 2, NULL, NULL, '2023-10-09 09:20:25', '2023-10-09 10:52:13', 1, NULL, NULL),
(8, 21, 'Tracksuit', '[\"Wine\"]', '[\"L\",\"XL\",\"XXL\",\"3XL\",\"4XL\",\"5XL\"]', 'null', 120, 60, '50.00', '1', '1696847087product_2.jpg', '[\"b28feb247958b6071d39ce8f1870d724.jpg\"]', NULL, 50, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">The original Tracksuits/Sweatsuits 2-piece set sports outfit zipper and&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">pull-on closure shirt and a strip-line pant set\'s joggers Made from&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">95% polyester and 5% elastane material, it is quite stylish and comfortable to</span><br style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\"><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">wear. Perfect for sports, and daily leisure,</span><br></p>', NULL, NULL, NULL, NULL, '2023-10-09 09:24:49', '2023-10-09 09:24:49', 1, NULL, NULL),
(10, 2, 'Botton Down Smocked Denim ', '[\"Blue\"]', '[\"38\",\"44\",\"46\",\"48\",\"50\"]', 'null', 120, 80, '33.33', '1', '1696847786product_1.jpg', '[\"2067393e19d5a1448f6ec73589df7589.jpg\"]', NULL, 33.333333333333, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">The classic shirt dress meets new trends with a tiered Denim style.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Features buttons down the front, an A-line silhouette, and belt loops&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">attached. Made from 100% cotton material, it is quite healthy and comfortable&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">to wear. Perfect for daily leisure, date, party, beach, vacation, at&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">home, and other occasions.</span><br></p>', NULL, 13, NULL, NULL, '2023-10-09 09:36:27', '2023-10-16 10:37:56', 1, NULL, NULL),
(11, 11, 'Alevva Sunray Dress', '[\"Green\"]', '[\"38\",\"44\",\"46\",\"48\"]', 'null', 100, 80, '20.00', '1', '1696848355product_4.jpg', '[\"87e1eaf6dedbfd981e3eb642920a567a.jpg\"]', NULL, 20, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">The classic beaded chiffon dress is a unique style with skin-friendly</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">&nbsp;material. Features buttons up the front and a straight-line dress.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Made from 100% chiffon material, it is quite healthy and comfortable to wear.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Perfect for daily leisure, outings, dates, parties, dinner wear, and other&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">occasions</span><br></p>', NULL, 1, NULL, NULL, '2023-10-09 09:45:58', '2023-10-09 09:47:40', 1, NULL, NULL),
(12, 12, 'EYDIS Dress', '[\"Red\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 100, 80, '20.00', '1', '1696849077product_5_1.jpg', '[\"93354a9606d8b53f0e998829674a2c05.jpg\",\"38c00fdab540712c2f28f1d2079a3b75.jpg\",\"7cda5a43a027a071e445efc1a8572a1a.jpg\"]', NULL, 20, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">This elegant dress meets new trends and styles. Features designed arms in&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">off white and black</span><br></p>', NULL, 4, NULL, NULL, '2023-10-09 09:57:59', '2023-10-09 10:52:23', 1, NULL, NULL),
(13, 12, 'EYDIS Dress', '[\"Black\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 100, 80, '20.00', '1', '1696849765product_6_1.jpg', '[\"def9b10f54e5e07c100e40ec30df3641.jpg\",\"488a31146ad2f12701c2f20ed2c32f8e.jpg\",\"fcaf5983e6e41d1bafe2b76d1aa9e3fc.jpg\"]', NULL, 20, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">This elegant dress meets new trends and styles. Features designed arms in&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">off-white and black.</span><br></p>', NULL, 67, NULL, NULL, '2023-10-09 10:09:27', '2023-10-10 14:33:46', 1, NULL, NULL),
(14, 12, 'Nzambi Dress', '[\"White\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 140, 98, '30.00', '1', '1696850701product_7_1.jpg', '[\"9cd4af840fadb212231d32d26a42abc8.jpg\",\"1d99690780ccb99e151568f6a5977adb.jpg\",\"efd4957bb48890e5879f83161cf2d275.jpg\"]', NULL, 30, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">This gorgeously fitted dress meets new trends and styles. shaped with a belt&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">to fit.</span><br></p>', NULL, 26, NULL, NULL, '2023-10-09 10:25:03', '2023-10-13 14:14:06', 1, NULL, NULL),
(15, 1, 'Alevva Gold  Dress', '[\"Black\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 100, 80, '20.00', '1', '1696852008product_8_2.jpg', '[\"d90614f26755193d2056f9b336dfb1ad.jpg\",\"7022ad2153685210152ae55a1041ba16.jpg\",\"5887d90c25fa94b4ba16933e61b2fd43.jpg\",\"ce10dfa4c90845a854150813344f9b6d.jpg\",\"3030dbf665d09824e2ac7a02f5f1b5b1.jpg\"]', NULL, 20, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">The full length pleated chiffon dress meets new trends and styles.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Features the bling of a stoned neck front. &nbsp;Very stylish and easy to wear.</span><br></p>', NULL, 1, NULL, NULL, '2023-10-09 10:46:52', '2023-10-09 12:00:29', 1, NULL, NULL),
(16, 12, 'FORESEE Dress', '[\"Black\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 100, 80, '20.00', '1', '1696856401product_9_1.jpg', '[\"b580a60330913cd5372449aba69d4eac.jpg\",\"cc8e64dbc5ca6d2540b1c50cfed11171.jpg\",\"7f02ab7f2a712e5e5927126df18c767d.jpg\"]', NULL, 20, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">This elegant dress meets new trends and styles. Features two tiered A-line&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">designs with buttons and bling on the front chiffon dress.</span><br></p>', NULL, 4, NULL, NULL, '2023-10-09 12:00:05', '2023-10-13 04:03:52', 1, NULL, NULL),
(17, 1, 'Miss Iyall', '[\"Black\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 80, 60, '25.00', '1', '1696856937product_10_1.jpg', '[\"02482b4cafa4fab94e7d8088d478ee27.jpg\",\"66a1e2923eb6cd95b99927fcd64ab91a.jpg\"]', NULL, 25, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">This elegant 2-piece suit set is classy and multipurpose. Perfect for o</span><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">ffice, outings, and occasions with a rumpled side design.</span><br></p>', NULL, NULL, NULL, NULL, '2023-10-09 12:09:02', '2023-10-09 12:09:02', 1, NULL, NULL),
(18, 15, 'Miyakki Jumpsuit', '[\"Green\"]', '[\"44\",\"46\",\"48\",\"50\"]', 'null', 80, 60, '25.00', '1', '1696857944product_11_2.jpg', '[\"f55c3c41d48e5a673c611ef4efdea38b.jpg\",\"96be63a22c4dd895fe6dae3cc8097834.jpg\",\"687df60cdb5857724916e29cd3e9da45.jpg\",\"06d4048e5a02c2b6866d89799ce09196.jpg\",\"9b2c46fe5d27a5fa9f09495698bcf993.jpg\"]', NULL, 25, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Miyakki Jumpsuit</span><br></p>', NULL, 11, NULL, NULL, '2023-10-09 12:25:53', '2023-10-10 15:09:24', 1, NULL, NULL),
(22, 12, 'KAYLA Sweat Dress', '[\"Black\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 80, 50, '37.50', '1', '1696859704product_14_3.jpg', '[\"25b17fce66a46c1ee47c8492f2feff10.jpg\",\"91dd779421f73cc8829e227d7e690f01.jpg\",\"b303215521d72810a5c3a55cf3eea5f0.jpg\"]', NULL, 37.5, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">KAYLA Sweat Dress</span><br></p>', NULL, 4, NULL, NULL, '2023-10-09 12:55:08', '2023-10-13 09:04:21', 1, NULL, NULL),
(23, 12, 'KAYLA Sweat Dress', '[\"Olive Green\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 80, 50, '37.50', '1', '1696861118product_15_1.jpg', '[\"726618bb1acb15013ce5f718b1982ed0.jpg\",\"73ce3e21efd4d0c4465cd05763e85595.jpg\",\"2495d59a015245c69448705241131146.jpg\"]', NULL, 37.5, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">KAYLA Sweat Dress</span><br></p>', NULL, 107, NULL, NULL, '2023-10-09 13:18:41', '2023-10-13 02:46:41', 1, NULL, NULL),
(24, 12, 'KAYLA Sweat Dress', '[\"Pink\"]', '[\"44\",\"46\",\"48\",\"50\",\"52\"]', 'null', 80, 50, '37.50', '1', '1696861684product_16_1.jpg', '[\"5938f3ab379bdb946234e249f449d534.jpg\"]', NULL, 37.5, '<p>KAYLA Sweat Dress<br></p>', NULL, NULL, NULL, NULL, '2023-10-09 13:28:05', '2023-10-09 13:28:05', 1, NULL, NULL),
(25, 15, 'Velvet Jumpsuit 2pcs set', '[\"Wine\"]', '[\"44\",\"46\",\"48\",\"50\"]', 'null', 80, 50, '37.50', '1', '1696862890product_17_2.jpg', '[\"fdd29e35a4093b780839ae61af407db4.jpg\",\"e1ac4e3424fa21ed8cea34a0da97aa25.jpg\",\"ead9ec82999c973be0ff92ac639cce02.jpg\",\"29455736935ece9296896da5be108d82.jpg\",\"23b20bd4f0444f7a3ddc1273f7d94eac.jpg\",\"294cf74e9b4ef873693a89337f214e9c.jpg\"]', NULL, 37.5, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Velvet Jumpsuit 2 Piece Set</span><br></p>', NULL, 2, NULL, NULL, '2023-10-09 13:48:20', '2023-10-10 03:09:45', 1, NULL, NULL),
(26, 15, 'Velvet Jumpsuit 2psc set', '[\"Black\"]', '[\"44\",\"46\",\"48\",\"50\"]', 'null', 100, 80, '20.00', '1', '1696863478product_18_3.jpg', '[\"dcabe2377d0c3c54ed04359838b04fc6.jpg\",\"9dd752acd14d210279b126195caa150b.jpg\",\"a1ca8f5343285411a39e13cf8c19a73f.jpg\",\"57f4553d6358d9b7130d812d96c215c9.jpg\"]', NULL, 20, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Velvet Jumpsuit 2PC set</span><br></p>', NULL, NULL, NULL, NULL, '2023-10-09 13:58:01', '2023-10-09 13:58:01', 1, NULL, NULL),
(27, 2, 'Velvet Hoodie and Pant set', '[\"Blue\"]', '[\"44\",\"46\",\"48\",\"50\"]', 'null', 90, 70, '22.22', '1', '1696863902product_19_3.jpg', '[\"694ee823c65c2d715440900b48cdf017.jpg\",\"4b82dc78dab715ff9c4e61935a26bb9e.jpg\",\"d49e47a17a2c5119ef3cc4d0979e8cba.jpg\"]', NULL, 22.222222222222, '<p>Velvet Hoodie and Pant set<br></p>', NULL, NULL, NULL, NULL, '2023-10-09 14:05:05', '2023-10-09 14:05:05', 1, NULL, NULL),
(28, 16, 'Jeans  Dress', '[\"Blue\"]', '[\"44\",\"46\",\"48\",\"50\"]', 'null', 120, 90, '25.00', '1', '1696864422product_20_1.jpg', '[\"f54f07fd312fc835d44ed43009de99d7.jpg\",\"344550d1b4dbfb8d75f691449929623d.jpg\",\"c5975d27b6a97505de9dbf6cd0f750df.jpg\",\"5232083208ad760a91f695d779f1e016.jpg\",\"da7f10ae09742eeabdbdaff7e2397dda.jpg\"]', NULL, 25, '<p>Jeans&nbsp; Dress<br></p>', NULL, 3, NULL, NULL, '2023-10-09 14:13:46', '2023-10-13 02:48:12', 1, NULL, NULL),
(29, 16, 'Jeans, 2 2pcs set', '[\"Blue\"]', '[\"44\",\"46\",\"48\",\"50\"]', 'null', 150, 120, '20.00', '1', '1696873271product_21_2.jpg', '[\"3186f638f661b8ab6e9daf82ff85e0e4.jpg\",\"ffbf8ba445daff4b77a13d6e332ec801.jpg\",\"c18213e7a1951a3e50558c9c3438e904.jpg\",\"a2135d05f35f5b24af91f4fdbf2a9d2e.jpg\",\"1ca01b3d76d9cd2fb4a43b5f913c5555.jpg\",\"218cce80e8f0df3cd8121b95eccaf5f4.jpg\",\"70c4d99baf9dac20544facdd30e3bc59.jpg\",\"141368aa89ed1fc0f52eb77583354f92.jpg\"]', NULL, 20, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Jeans, 2 2pcs set</span><br></p>', NULL, 1, NULL, NULL, '2023-10-09 16:41:19', '2023-10-09 16:41:47', 1, NULL, NULL),
(30, 1, 'Blings short 2 pcs set', '[\"Black\"]', '[\"44\",\"46\",\"48\",\"50\"]', 'null', 80, 60, '25.00', '1', '1696873749product_22_1.jpg', '[\"0bda3724ef56668a68109da6ccda63f8.jpg\",\"32ff61402118c7e733b98ececbe17e6b.jpg\",\"e6ac9d72c82e7c69b700382155e6d0b1.jpg\"]', NULL, 25, '<p><span style=\"color: rgb(51, 51, 51); font-family: monospace; font-size: 12px;\">Blings short, 2 pieces set&nbsp;</span><br></p>', NULL, NULL, NULL, NULL, '2023-10-09 16:49:11', '2023-10-09 16:49:11', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `content`, `image`, `images`, `created_at`, `updated_at`) VALUES
(9, 'S', '<p><span style=\"font-size: 13.36px;\">Lagos Solar energy installation done in az company in ikeja, lagos. this solar can power up to 5.1kva equipments</span><br></p>', '1664414039.jpeg', '[\"1664414039.jpeg\",\"1664414041.jpeg\"]', '2022-09-29 07:14:02', '2022-09-29 07:14:02'),
(12, 'S', '<p><span style=\"font-size: 13.36px;\">This 5.1kva solar energy was installed in clients site in Ibadan. It power up to 5.1kva company equipements</span><br></p>', '1664414178.jpeg', '[\"1664414178.jpeg\",\"1664414179.jpeg\",\"1664414180.jpeg\"]', '2022-09-29 07:16:21', '2022-09-29 07:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `name`, `email`, `rating`, `created_at`, `updated_at`, `description`) VALUES
(1, 26, 'dfdg', 'danniejames1984@gmail.com', 1, '2022-09-24 01:14:33', '2022-09-24 01:14:33', 'fgf'),
(2, 57, 'Tester', 'israeljohn774@gmail.com', 2, '2023-09-15 17:21:16', '2023-09-15 17:21:16', 'Great'),
(3, 57, 'Review', 'review@gmail.com', 3, '2023-09-15 17:35:47', '2023-09-15 17:35:47', 'Review'),
(4, 57, 'Review', 'israeljohn774@gmail.com', 4, '2023-09-15 17:39:38', '2023-09-15 17:39:38', 'Review'),
(5, 57, 'main.py', 'kk@gmail.com', 5, '2023-09-15 17:48:13', '2023-09-15 17:48:13', 'rre');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_No` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_method` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_default` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `order_No`, `receiver_name`, `receiver_email`, `receiver_phone`, `address`, `phone`, `city`, `state`, `country`, `lat`, `lng`, `zip_code`, `delivery_method`, `created_at`, `updated_at`, `is_default`) VALUES
(1, 54, NULL, 'mikky', 'yuyuyuuy@mgail.com', '08039366207', '2111w West Churchill Street', NULL, 'sdfsd', 'uyxdyu', NULL, NULL, NULL, 'duusdu', 'on', '2022-09-14 21:23:49', '2022-09-14 21:23:49', 0),
(2, 55, NULL, 'yuuyouyyunew defual', 'yuyuyuuy@mgail.comdd', '08039366207', '10 Razeem adabayo street, igando', NULL, 'sdfsd', 'ksdjfsk', NULL, '6.535889', '3.2483058', NULL, 'home_delivery', '2022-09-14 22:43:11', '2022-09-23 02:55:42', 0),
(5, 55, NULL, 'MICHAEL', 'michaelozoudeh@gmail.com', '2340987676567', 'lagos', NULL, 'lagos', 'ksdjfsk', NULL, NULL, NULL, NULL, NULL, '2022-09-23 02:37:43', '2022-09-23 02:55:52', 0),
(6, 55, NULL, NULL, 'jesmikky@gmail.com', 'user@email.com', '2111w West Churchill Street', NULL, 'lagos', 'ksdjfsk', NULL, NULL, NULL, NULL, NULL, '2022-10-17 13:43:53', '2022-10-17 13:43:53', 1),
(9, 57, NULL, 'name', 'user@gmail.com', '08139267960', 'ikorodu, Lagos', NULL, 'Lagos', 'Delta', NULL, NULL, NULL, NULL, NULL, '2023-09-17 17:29:11', '2023-10-16 11:59:47', 1),
(10, 0, NULL, 'name', 'kk@gmail.com', '08139267960', 'ikorodu, Lagos', NULL, 'Lagos', 'Delta', NULL, NULL, NULL, '', NULL, '2023-10-13 03:12:21', '2023-10-13 03:12:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `product_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'L', '2023-10-09 08:08:10', '2023-10-09 08:08:10'),
(2, 1, 'XL', '2023-10-09 08:08:10', '2023-10-09 08:08:10'),
(3, 1, 'XXL', '2023-10-09 08:08:10', '2023-10-09 08:08:10'),
(4, 1, '3XL', '2023-10-09 08:08:10', '2023-10-09 08:08:10'),
(5, 1, '4XL', '2023-10-09 08:08:10', '2023-10-09 08:08:10'),
(6, 1, '5XL', '2023-10-09 08:08:10', '2023-10-09 08:08:10'),
(7, 2, 'L', '2023-10-09 08:11:49', '2023-10-09 08:11:49'),
(8, 2, 'XL', '2023-10-09 08:11:49', '2023-10-09 08:11:49'),
(9, 2, 'XXL', '2023-10-09 08:11:49', '2023-10-09 08:11:49'),
(10, 2, '3XL', '2023-10-09 08:11:49', '2023-10-09 08:11:49'),
(11, 2, '4XL', '2023-10-09 08:11:49', '2023-10-09 08:11:49'),
(26, 2, 'XL', '2023-10-09 08:18:44', '2023-10-09 08:18:44'),
(27, 2, 'XXL', '2023-10-09 08:18:44', '2023-10-09 08:18:44'),
(28, 2, 'L', '2023-10-09 08:39:06', '2023-10-09 08:39:06'),
(29, 2, 'XL', '2023-10-09 08:39:06', '2023-10-09 08:39:06'),
(30, 3, '44', '2023-10-09 08:43:31', '2023-10-09 08:43:31'),
(31, 3, '46', '2023-10-09 08:43:31', '2023-10-09 08:43:31'),
(32, 3, '48', '2023-10-09 08:43:31', '2023-10-09 08:43:31'),
(33, 4, '44', '2023-10-09 08:55:20', '2023-10-09 08:55:20'),
(34, 4, '46', '2023-10-09 08:55:20', '2023-10-09 08:55:20'),
(35, 4, '48', '2023-10-09 08:55:20', '2023-10-09 08:55:20'),
(36, 4, '50', '2023-10-09 08:55:20', '2023-10-09 08:55:20'),
(37, 5, '44', '2023-10-09 09:04:16', '2023-10-09 09:04:16'),
(38, 5, '46', '2023-10-09 09:04:16', '2023-10-09 09:04:16'),
(39, 5, '48', '2023-10-09 09:04:16', '2023-10-09 09:04:16'),
(40, 5, '50', '2023-10-09 09:04:16', '2023-10-09 09:04:16'),
(41, 5, '52', '2023-10-09 09:04:16', '2023-10-09 09:04:16'),
(42, 6, 'L', '2023-10-09 09:09:16', '2023-10-09 09:09:16'),
(43, 6, 'XL', '2023-10-09 09:09:16', '2023-10-09 09:09:16'),
(44, 6, 'XXL', '2023-10-09 09:09:16', '2023-10-09 09:09:16'),
(45, 6, '3XL', '2023-10-09 09:09:16', '2023-10-09 09:09:16'),
(46, 6, '4XL', '2023-10-09 09:09:16', '2023-10-09 09:09:16'),
(47, 6, '5XL', '2023-10-09 09:09:16', '2023-10-09 09:09:16'),
(48, 7, 'L', '2023-10-09 09:20:25', '2023-10-09 09:20:25'),
(49, 7, 'XL', '2023-10-09 09:20:25', '2023-10-09 09:20:25'),
(50, 7, 'XXL', '2023-10-09 09:20:25', '2023-10-09 09:20:25'),
(51, 7, '3XL', '2023-10-09 09:20:25', '2023-10-09 09:20:25'),
(52, 7, '4XL', '2023-10-09 09:20:25', '2023-10-09 09:20:25'),
(53, 7, '5XL', '2023-10-09 09:20:25', '2023-10-09 09:20:25'),
(54, 8, 'L', '2023-10-09 09:24:49', '2023-10-09 09:24:49'),
(55, 8, 'XL', '2023-10-09 09:24:49', '2023-10-09 09:24:49'),
(56, 8, 'XXL', '2023-10-09 09:24:49', '2023-10-09 09:24:49'),
(57, 8, '3XL', '2023-10-09 09:24:49', '2023-10-09 09:24:49'),
(58, 8, '4XL', '2023-10-09 09:24:49', '2023-10-09 09:24:49'),
(59, 8, '5XL', '2023-10-09 09:24:49', '2023-10-09 09:24:49'),
(60, 9, '44', '2023-10-09 09:32:47', '2023-10-09 09:32:47'),
(61, 9, '46', '2023-10-09 09:32:47', '2023-10-09 09:32:47'),
(62, 9, '48', '2023-10-09 09:32:47', '2023-10-09 09:32:47'),
(63, 9, '50', '2023-10-09 09:32:47', '2023-10-09 09:32:47'),
(64, 9, '52', '2023-10-09 09:32:47', '2023-10-09 09:32:47'),
(65, 10, '38', '2023-10-09 09:36:27', '2023-10-09 09:36:27'),
(66, 10, '44', '2023-10-09 09:36:27', '2023-10-09 09:36:27'),
(67, 10, '46', '2023-10-09 09:36:27', '2023-10-09 09:36:27'),
(68, 10, '48', '2023-10-09 09:36:27', '2023-10-09 09:36:27'),
(69, 10, '50', '2023-10-09 09:36:27', '2023-10-09 09:36:27'),
(70, 11, '38', '2023-10-09 09:45:58', '2023-10-09 09:45:58'),
(71, 11, '44', '2023-10-09 09:45:58', '2023-10-09 09:45:58'),
(72, 11, '46', '2023-10-09 09:45:58', '2023-10-09 09:45:58'),
(73, 11, '48', '2023-10-09 09:45:58', '2023-10-09 09:45:58'),
(74, 12, '44', '2023-10-09 09:57:59', '2023-10-09 09:57:59'),
(75, 12, '46', '2023-10-09 09:57:59', '2023-10-09 09:57:59'),
(76, 12, '48', '2023-10-09 09:57:59', '2023-10-09 09:57:59'),
(77, 12, '50', '2023-10-09 09:57:59', '2023-10-09 09:57:59'),
(78, 12, '52', '2023-10-09 09:57:59', '2023-10-09 09:57:59'),
(79, 13, '44', '2023-10-09 10:09:27', '2023-10-09 10:09:27'),
(80, 13, '46', '2023-10-09 10:09:27', '2023-10-09 10:09:27'),
(81, 13, '48', '2023-10-09 10:09:27', '2023-10-09 10:09:27'),
(82, 13, '50', '2023-10-09 10:09:27', '2023-10-09 10:09:27'),
(83, 13, '52', '2023-10-09 10:09:27', '2023-10-09 10:09:27'),
(84, 14, '44', '2023-10-09 10:25:03', '2023-10-09 10:25:03'),
(85, 14, '46', '2023-10-09 10:25:03', '2023-10-09 10:25:03'),
(86, 14, '48', '2023-10-09 10:25:03', '2023-10-09 10:25:03'),
(87, 14, '50', '2023-10-09 10:25:03', '2023-10-09 10:25:03'),
(88, 14, '52', '2023-10-09 10:25:03', '2023-10-09 10:25:03'),
(89, 15, '44', '2023-10-09 10:46:52', '2023-10-09 10:46:52'),
(90, 15, '46', '2023-10-09 10:46:52', '2023-10-09 10:46:52'),
(91, 15, '48', '2023-10-09 10:46:52', '2023-10-09 10:46:52'),
(92, 15, '50', '2023-10-09 10:46:52', '2023-10-09 10:46:52'),
(93, 15, '52', '2023-10-09 10:46:52', '2023-10-09 10:46:52'),
(94, 16, '44', '2023-10-09 12:00:05', '2023-10-09 12:00:05'),
(95, 16, '46', '2023-10-09 12:00:05', '2023-10-09 12:00:05'),
(96, 16, '48', '2023-10-09 12:00:05', '2023-10-09 12:00:05'),
(97, 16, '50', '2023-10-09 12:00:05', '2023-10-09 12:00:05'),
(98, 16, '52', '2023-10-09 12:00:05', '2023-10-09 12:00:05'),
(99, 17, '44', '2023-10-09 12:09:02', '2023-10-09 12:09:02'),
(100, 17, '46', '2023-10-09 12:09:02', '2023-10-09 12:09:02'),
(101, 17, '48', '2023-10-09 12:09:02', '2023-10-09 12:09:02'),
(102, 17, '50', '2023-10-09 12:09:02', '2023-10-09 12:09:02'),
(103, 17, '52', '2023-10-09 12:09:02', '2023-10-09 12:09:02'),
(104, 18, '44', '2023-10-09 12:25:53', '2023-10-09 12:25:53'),
(105, 18, '46', '2023-10-09 12:25:53', '2023-10-09 12:25:53'),
(106, 18, '48', '2023-10-09 12:25:53', '2023-10-09 12:25:53'),
(107, 18, '50', '2023-10-09 12:25:53', '2023-10-09 12:25:53'),
(108, 19, '44', '2023-10-09 12:39:35', '2023-10-09 12:39:35'),
(109, 19, '46', '2023-10-09 12:39:35', '2023-10-09 12:39:35'),
(110, 19, '48', '2023-10-09 12:39:35', '2023-10-09 12:39:35'),
(111, 19, '50', '2023-10-09 12:39:35', '2023-10-09 12:39:35'),
(112, 20, '44', '2023-10-09 12:55:00', '2023-10-09 12:55:00'),
(113, 20, '46', '2023-10-09 12:55:00', '2023-10-09 12:55:00'),
(114, 20, '48', '2023-10-09 12:55:00', '2023-10-09 12:55:00'),
(115, 20, '50', '2023-10-09 12:55:01', '2023-10-09 12:55:01'),
(116, 20, '52', '2023-10-09 12:55:01', '2023-10-09 12:55:01'),
(117, 21, '44', '2023-10-09 12:55:03', '2023-10-09 12:55:03'),
(118, 21, '46', '2023-10-09 12:55:04', '2023-10-09 12:55:04'),
(119, 21, '48', '2023-10-09 12:55:04', '2023-10-09 12:55:04'),
(120, 21, '50', '2023-10-09 12:55:04', '2023-10-09 12:55:04'),
(121, 21, '52', '2023-10-09 12:55:04', '2023-10-09 12:55:04'),
(122, 22, '44', '2023-10-09 12:55:08', '2023-10-09 12:55:08'),
(123, 22, '46', '2023-10-09 12:55:08', '2023-10-09 12:55:08'),
(124, 22, '48', '2023-10-09 12:55:08', '2023-10-09 12:55:08'),
(125, 22, '50', '2023-10-09 12:55:08', '2023-10-09 12:55:08'),
(126, 22, '52', '2023-10-09 12:55:08', '2023-10-09 12:55:08'),
(127, 23, '44', '2023-10-09 13:18:41', '2023-10-09 13:18:41'),
(128, 23, '46', '2023-10-09 13:18:41', '2023-10-09 13:18:41'),
(129, 23, '48', '2023-10-09 13:18:41', '2023-10-09 13:18:41'),
(130, 23, '50', '2023-10-09 13:18:41', '2023-10-09 13:18:41'),
(131, 23, '52', '2023-10-09 13:18:41', '2023-10-09 13:18:41'),
(132, 24, '44', '2023-10-09 13:28:05', '2023-10-09 13:28:05'),
(133, 24, '46', '2023-10-09 13:28:05', '2023-10-09 13:28:05'),
(134, 24, '48', '2023-10-09 13:28:05', '2023-10-09 13:28:05'),
(135, 24, '50', '2023-10-09 13:28:05', '2023-10-09 13:28:05'),
(136, 24, '52', '2023-10-09 13:28:05', '2023-10-09 13:28:05'),
(137, 25, '44', '2023-10-09 13:48:20', '2023-10-09 13:48:20'),
(138, 25, '46', '2023-10-09 13:48:20', '2023-10-09 13:48:20'),
(139, 25, '48', '2023-10-09 13:48:20', '2023-10-09 13:48:20'),
(140, 25, '50', '2023-10-09 13:48:20', '2023-10-09 13:48:20'),
(141, 26, '44', '2023-10-09 13:58:01', '2023-10-09 13:58:01'),
(142, 26, '46', '2023-10-09 13:58:01', '2023-10-09 13:58:01'),
(143, 26, '48', '2023-10-09 13:58:01', '2023-10-09 13:58:01'),
(144, 26, '50', '2023-10-09 13:58:01', '2023-10-09 13:58:01'),
(145, 27, '44', '2023-10-09 14:05:05', '2023-10-09 14:05:05'),
(146, 27, '46', '2023-10-09 14:05:05', '2023-10-09 14:05:05'),
(147, 27, '48', '2023-10-09 14:05:05', '2023-10-09 14:05:05'),
(148, 27, '50', '2023-10-09 14:05:05', '2023-10-09 14:05:05'),
(149, 28, '44', '2023-10-09 14:13:46', '2023-10-09 14:13:46'),
(150, 28, '46', '2023-10-09 14:13:46', '2023-10-09 14:13:46'),
(151, 28, '48', '2023-10-09 14:13:46', '2023-10-09 14:13:46'),
(152, 28, '50', '2023-10-09 14:13:46', '2023-10-09 14:13:46'),
(153, 29, '44', '2023-10-09 16:41:19', '2023-10-09 16:41:19'),
(154, 29, '46', '2023-10-09 16:41:19', '2023-10-09 16:41:19'),
(155, 29, '48', '2023-10-09 16:41:19', '2023-10-09 16:41:19'),
(156, 29, '50', '2023-10-09 16:41:19', '2023-10-09 16:41:19'),
(157, 30, '44', '2023-10-09 16:49:11', '2023-10-09 16:49:11'),
(158, 30, '46', '2023-10-09 16:49:11', '2023-10-09 16:49:11'),
(159, 30, '48', '2023-10-09 16:49:11', '2023-10-09 16:49:11'),
(160, 30, '50', '2023-10-09 16:49:11', '2023-10-09 16:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size_product`
--

INSERT INTO `size_product` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'M', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(3, 'L', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(4, 'XL', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(5, 'XXL', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(6, '3XL', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(7, '4XL', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(8, '5XL', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(9, '44', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(10, '46', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(11, '48', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(12, '50', '2023-10-09 23:00:00', '2023-10-09 23:00:00'),
(13, '52', '2023-10-09 23:00:00', '2023-10-09 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondname` text COLLATE utf8mb4_unicode_ci,
  `thirdname` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `secondname`, `thirdname`, `image`, `created_at`, `updated_at`) VALUES
(36, 'New Arrivals', 'Explore the latest and greatest', 'Shop customer favorites', '1696875823.png', '2023-10-09 17:23:44', '2023-10-09 17:23:44'),
(38, 'Limited-Time Deals', 'Hurry, special offers won\'t last!', 'Best Sellers', '1696909095.png', '2023-10-10 02:38:16', '2023-10-10 02:38:16'),
(39, 'Discover Our Latest Arrivals', 'Summer Vibes', 'Get ready for sunshine and fun', '1696909784.png', '2023-10-10 02:49:45', '2023-10-10 02:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, '2022-09-12 03:06:06', '2023-09-22 09:03:08'),
(2, 2, 'On-Grid Inverter', NULL, '2022-09-12 03:06:06', NULL),
(3, 1, 'On-Grid Inverter', NULL, '2022-09-12 17:06:43', '2022-09-12 17:06:43'),
(12, 13, 'Lithium Batteries', NULL, '2022-09-29 14:06:11', '2022-09-29 14:06:11'),
(13, 15, 'Solar Panel', NULL, '2022-09-29 14:31:51', '2022-09-29 14:31:51'),
(14, 11, 'On-Grid Inverter', NULL, '2022-11-12 16:28:45', '2022-11-12 16:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double DEFAULT NULL,
  `payment_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_ref` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_No` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_balance` int(11) DEFAULT NULL,
  `avail_balance` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `amount`, `payment_ref`, `external_ref`, `type`, `payment_method`, `order_No`, `prev_balance`, `avail_balance`, `created_at`, `updated_at`) VALUES
(1, 55, 1000, 'KBP-4457304', 'FLW-M03K-8244523525f0d9d1abd73594d70650cc', 'credit', 'card', NULL, NULL, 1000, '2022-09-22 15:14:12', '2022-09-22 15:14:12'),
(2, 55, 1000, 'KBP-3780493', 'FLW-M03K-8244523525f0d9d1abd73594d70650cc', 'credit', 'card', NULL, 1000, 2000, '2022-09-22 15:15:10', '2022-09-22 15:15:10'),
(3, 55, 1000, 'KBP-5035333', 'FLW-M03K-8244523525f0d9d1abd73594d70650cc', 'credit', 'card', NULL, 2000, 3000, '2022-09-22 21:04:32', '2022-09-22 21:04:32'),
(4, 55, 1000, 'KBP-1707286', 'FLW-M03K-8244523525f0d9d1abd73594d70650cc', 'credit', 'card', NULL, 3000, 4000, '2022-09-22 21:05:05', '2022-09-22 21:05:05'),
(5, 55, 1000, 'KBP-2737412', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'credit', 'card', NULL, 4000, 5000, '2022-09-22 21:06:33', '2022-09-22 21:06:33'),
(6, 55, 1000, 'KBP-3439731', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'credit', 'card', NULL, 5000, 6000, '2022-09-22 21:08:24', '2022-09-22 21:08:24'),
(7, 55, 1000, 'KBP-1651130', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'credit', 'card', NULL, 6000, 7000, '2022-09-22 21:08:59', '2022-09-22 21:08:59'),
(8, 55, 1000, 'KBP-2871642', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'credit', 'card', NULL, 7000, 8000, '2022-09-22 21:09:25', '2022-09-22 21:09:25'),
(9, 55, 1000, 'KBP-6689232', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'credit', 'card', NULL, 8000, 9000, '2022-09-22 21:09:42', '2022-09-22 21:09:42'),
(10, 55, 1000, 'KBP-7714267', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'credit', 'card', NULL, 9000, 10000, '2022-09-22 21:10:36', '2022-09-22 21:10:36'),
(11, 55, 1000, 'KBP-1145352', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:21:56', '2022-09-22 21:21:56'),
(12, 55, 1000, 'KBP-6677271', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:22:35', '2022-09-22 21:22:35'),
(13, 55, 1000, 'KBP-1401985', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:23:18', '2022-09-22 21:23:18'),
(14, 55, 1000, 'KBP-1342189', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:24:04', '2022-09-22 21:24:04'),
(15, 55, 1000, 'KBP-6116174', 'FLW-M03K-f7bfa7b974e0337ac0c466bd6f4c3826', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:24:20', '2022-09-22 21:24:20'),
(16, 55, 1000, 'KBP-2204091', 'FLW-M03K-010d2613fc785aa27ff6edf3621b1b14', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:25:06', '2022-09-22 21:25:06'),
(17, 55, 1000, 'KBP-8548483', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:47:53', '2022-09-22 21:47:53'),
(18, 55, 1000, 'KBP-5683546', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:49:44', '2022-09-22 21:49:44'),
(19, 55, 1000, 'KBP-4382546', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:50:15', '2022-09-22 21:50:15'),
(20, 55, 1000, 'KBP-5093390', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:50:53', '2022-09-22 21:50:53'),
(21, 55, 1000, 'KBP-4304626', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:51:44', '2022-09-22 21:51:44'),
(22, 55, 1000, 'KBP-6277338', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:52:07', '2022-09-22 21:52:07'),
(23, 55, 1000, 'KBP-6767990', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:54:39', '2022-09-22 21:54:39'),
(24, 55, 1000, 'KBP-9836679', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:56:07', '2022-09-22 21:56:07'),
(25, 55, 1000, 'KBP-5084805', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 21:59:53', '2022-09-22 21:59:53'),
(26, 55, 1000, 'KBP-1401866', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:00:26', '2022-09-22 22:00:26'),
(27, 55, 1000, 'KBP-9059581', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:00:41', '2022-09-22 22:00:41'),
(28, 55, 1000, 'KBP-2738083', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:01:32', '2022-09-22 22:01:32'),
(29, 55, 1000, 'KBP-2363914', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:02:13', '2022-09-22 22:02:13'),
(30, 55, 1000, 'KBP-8471926', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:02:46', '2022-09-22 22:02:46'),
(31, 55, 1000, 'KBP-7485415', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:03:01', '2022-09-22 22:03:01'),
(32, 55, 1000, 'KBP-5269926', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:04:19', '2022-09-22 22:04:19'),
(33, 55, 1000, 'KBP-9245652', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:05:19', '2022-09-22 22:05:19'),
(34, 55, 1000, 'KBP-7820505', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:05:37', '2022-09-22 22:05:37'),
(35, 55, 1000, 'KBP-6988637', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:06:02', '2022-09-22 22:06:02'),
(36, 55, 1000, 'KBP-9486313', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:06:23', '2022-09-22 22:06:23'),
(37, 55, 1000, 'KBP-5275508', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:07:08', '2022-09-22 22:07:08'),
(38, 55, 1000, 'KBP-8637029', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:07:30', '2022-09-22 22:07:30'),
(39, 55, 1000, 'KBP-8491053', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:08:42', '2022-09-22 22:08:42'),
(40, 55, 1000, 'KBP-3698992', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:09:02', '2022-09-22 22:09:02'),
(41, 55, 1000, 'KBP-6738400', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:13:56', '2022-09-22 22:13:56'),
(42, 55, 1000, 'KBP-5058464', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:15:36', '2022-09-22 22:15:36'),
(43, 55, 1000, 'KBP-7447621', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:16:45', '2022-09-22 22:16:45'),
(44, 55, 1000, 'KBP-8000933', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:17:13', '2022-09-22 22:17:13'),
(45, 55, 1000, 'KBP-5980477', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:17:56', '2022-09-22 22:17:56'),
(46, 55, 1000, 'KBP-5231639', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:18:24', '2022-09-22 22:18:24'),
(47, 55, 1000, 'KBP-5748527', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:19:17', '2022-09-22 22:19:17'),
(48, 55, 1000, 'KBP-3688412', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:19:27', '2022-09-22 22:19:27'),
(49, 55, 1000, 'KBP-2899112', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:19:47', '2022-09-22 22:19:47'),
(50, 55, 1000, 'KBP-5307079', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:21:11', '2022-09-22 22:21:11'),
(51, 55, 1000, 'KBP-5115928', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:21:54', '2022-09-22 22:21:54'),
(52, 55, 1000, 'KBP-8169776', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:22:09', '2022-09-22 22:22:09'),
(53, 55, 1000, 'KBP-6939687', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:22:56', '2022-09-22 22:22:56'),
(54, 55, 1000, 'KBP-7331093', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:23:24', '2022-09-22 22:23:24'),
(55, 55, 1000, 'KBP-6272993', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:23:45', '2022-09-22 22:23:45'),
(56, 55, 1000, 'KBP-1589261', 'FLW-M03K-03d00acade3792495607d8d2a429ec5a', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:23:54', '2022-09-22 22:23:54'),
(57, 55, 1000, 'KBP-9750704', 'FLW-M03K-11f7b75f9a8db5cf9550f005a19efd41', 'payment', 'card', NULL, NULL, NULL, '2022-09-22 22:29:50', '2022-09-22 22:29:50'),
(58, 55, 1000, 'TNE380556', 'FLW-M03K-fff624786f0dbf9c70ea20a2ca14ea2b', 'payment for', 'card', NULL, NULL, NULL, '2022-09-26 10:29:20', '2022-09-26 10:29:20'),
(59, 55, 1000, 'TNE648858', 'FLW-M03K-128fb70ee2e8b422b3ce8a1292e1c68e', 'payment for', 'card', NULL, NULL, NULL, '2022-09-26 10:32:26', '2022-09-26 10:32:26'),
(60, 55, 1000, 'SFSL451475', 'FLW-M03K-12894ca0321a368788873c26e514578f', 'payment for', 'card', NULL, NULL, NULL, '2022-09-29 20:48:18', '2022-09-29 20:48:18'),
(61, 55, 1000, 'SFSL336646', 'FLW-M03K-a0b03489facab2ef38ce1c9e61024d33', 'payment for', 'card', NULL, NULL, NULL, '2022-10-17 18:01:48', '2022-10-17 18:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` double DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notifyCount` int(11) DEFAULT NULL,
  `login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `wallet`, `last_login`, `notifyCount`, `login_ip`, `remember_token`, `created_at`, `updated_at`) VALUES
(29, 'michael kachi', 'michaelkachi2018@gmail.com', '08039366881', NULL, '$2y$10$r87cdLLIow.vUSo6XV6XVupjtiR7Fe2cWxoC2TwiOUFgFa6IKY/u2', NULL, NULL, 9, NULL, NULL, '2021-04-20 14:21:39', '2021-05-05 10:34:42'),
(54, 'MICHAEL', 'danniesjamie@gmail.com', '2340987676567', NULL, '$2y$10$QZFJUB.SFHNpu9gSb6/D.O36TRmqcLP4bQARtGkukIhDTSNjH7dS6', NULL, NULL, NULL, NULL, NULL, '2022-09-14 21:14:50', '2022-09-14 21:14:50'),
(55, 'Michael K', 'mikkynoble@gmail.com', '2340987676567', NULL, '$2y$10$QssgXa56CvAiln8wcRe5NOrOM1pZoDSsOJX6OlMvB9a32UJluH1pC', 10000, '2022-11-05 21:00:25', NULL, '102.89.34.124', NULL, '2022-09-14 22:42:58', '2022-11-06 03:00:25'),
(56, 'MICHAEL', 'mikkynoble12@gmail.com', '234098s7676567', NULL, '$2y$10$wqHbbqidvqPag/XCiPMC0.i2oT4ler3IIVJc85r93gPX5.ALGCmUG', NULL, NULL, NULL, NULL, NULL, '2022-09-26 19:34:16', '2022-09-26 19:34:16'),
(57, 'Name11', 'user@gmail.com', '08139267960', NULL, '$2y$10$xLt/3mrOP.ZujyABZrbao.1jT094WX.//NuW.mEn226RzdlryB9n2', NULL, '2023-10-16 12:55:02', NULL, '::1', NULL, '2023-09-17 14:37:45', '2023-10-16 11:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_notifies`
--
ALTER TABLE `admin_notifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_exchanges`
--
ALTER TABLE `currency_exchanges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatchers`
--
ALTER TABLE `dispatchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_notifies`
--
ALTER TABLE `admin_notifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currency_exchanges`
--
ALTER TABLE `currency_exchanges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dispatchers`
--
ALTER TABLE `dispatchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `size_product`
--
ALTER TABLE `size_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
