-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2023 at 10:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
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
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(222) DEFAULT NULL,
  `login_ip` varchar(255) DEFAULT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `phone`, `password`, `login_ip`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sofar Solar Admin', 'mikkynoble@gmail.com', '08135324241', '$2y$10$0fFwVtSNEFnE6j8/MfiMjOWueukCGNNQJmr4VO1AQmQR7QY0wWs6i', NULL, NULL, NULL, '2022-11-05 18:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifies`
--

CREATE TABLE `admin_notifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_read` int(11) DEFAULT 0,
  `message` varchar(255) DEFAULT NULL,
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
(7, 0, 'New customer order completed Order No109252548', '2022-10-17 18:01:48', '2022-10-17 18:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(222) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Residential Inverter', 'e6ac4fbd617a2978410c66abea0d8f0d.jpeg', NULL, '2022-09-12 02:01:14', '2022-10-19 16:18:37'),
(2, 'Storage Inverters', '3e6672b31d5546ef6cee037cdf47f43d.jpeg', NULL, '2022-09-12 02:01:57', '2022-09-29 05:38:35'),
(11, 'Utility Inverters', '1f56fc3075d3341335657773ad7694fb.png', NULL, '2022-09-29 05:34:04', '2022-09-29 05:38:11'),
(12, 'Accessories', '06f25ac4f9eabf3f38271a2e2e972687.png', NULL, '2022-09-29 05:41:14', '2022-09-29 05:41:14'),
(13, 'Battery', 'b6df632a5be577f9a504df11cda6d5f3.png', NULL, '2022-09-29 05:42:08', '2022-09-29 05:42:08'),
(15, 'Solar Panel', '5ae5f18688bed4769864cbc81462b6b8.png', NULL, '2022-09-29 14:31:23', '2022-09-29 14:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `content`, `created_at`, `updated_at`, `phone`, `email`, `address`) VALUES
(1, 'contacts Us', 'Get in touch with us, we will reply you as soon as possible', NULL, NULL, '2348135324241, 2349069454452', 'support@sofarsolar.ng', 'Block C12 shop 02 & 09, Arena Shopping Complex, Bolade-oshodi, Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `currency_exchanges`
--

CREATE TABLE `currency_exchanges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
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
  `delivery_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `delivery_fee` double DEFAULT NULL,
  `distance` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dispatchers`
--

CREATE TABLE `dispatchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `company_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(221) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`, `slug`) VALUES
(5, 'Home', '2021-04-17 01:11:42', '2021-04-17 01:11:42', 'home'),
(7, 'Products', '2021-04-17 01:11:42', '2022-09-12 20:33:33', 'products'),
(10, 'Projects', '2022-09-10 21:07:17', '2022-09-10 21:52:31', 'projects'),
(13, 'News', '2022-09-10 22:03:12', '2022-09-10 22:03:26', 'news'),
(16, 'Contact Us', '2022-09-12 01:01:54', '2022-09-12 01:01:54', 'contacts');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_06_02_131037_create_deliveries_table', 1),
(2, '2022_09_09_165946_create_sub_categories_table', 2),
(3, '2022_09_09_170533_add_field_to_products', 2),
(4, '2022_09_09_171644_create_news_table', 2),
(5, '2022_09_09_172534_create_projects_table', 2),
(6, '2022_09_09_172852_create_companies_table', 2),
(7, '2022_09_10_134628_create_sliders_table', 3),
(8, '2022_09_11_162156_add_field_to_news', 4),
(9, '2022_09_13_123719_create_news_table', 5),
(10, '2022_09_13_143859_create_about_us_table', 5),
(11, '2022_09_13_145439_create_contact_us_table', 5),
(12, '2022_09_15_012006_add_field_to_shipping', 6),
(14, '2022_09_23_232930_add_field_to_menus', 7),
(15, '2022_09_24_021333_add_field_to_reviews', 8),
(16, '2022_09_26_114516_add_field_to_contacts', 9),
(17, '2022_09_28_131041_add_new_field_to_products', 10),
(18, '2022_11_11_130859_add_fielsd_to_products', 11),
(19, '2023_03_24_123421_create_currency_exchanges_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `images`, `admin_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SofarSolar Open office in Lagos', '<p>Sofar solar opens office in Arena Oshodi Lagos</p>', '1663980689.jpeg', '[\"1663980689.jpeg\",\"1663980689.jpeg\",\"1663980689.jpeg\"]', 1, NULL, '2022-09-23 23:51:29', '2022-09-23 23:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
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
(4, 56, 'welcome to Kenabprints', 'Dear MICHAEL, <br>We are glad to have you with us, do enjoy our services', NULL, '2022-09-26 19:34:16', '2022-09-26 19:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_No` varchar(222) DEFAULT NULL,
  `external_ref` varchar(255) DEFAULT NULL,
  `payment_ref` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
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
(47, 55, '106453169', NULL, NULL, 'card', 4000000, 6, 0, 0, NULL, '2022-11-06 03:02:09', '2022-11-06 03:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_No` double DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `payable` double DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `design_image` text DEFAULT NULL,
  `design_fee` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `order_No`, `product_name`, `price`, `qty`, `payable`, `image`, `design_image`, `design_fee`, `description`, `created_at`, `updated_at`) VALUES
(2, 55, 1663890777, 'SOFAR 7KTLM-G3', 420000, 1, 420000, '16630288492-20210705072625105.jpeg', NULL, NULL, NULL, '2022-09-22 22:52:57', '2022-09-22 22:52:57'),
(3, 55, 1663890718, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-22 22:51:58', '2022-09-22 22:51:58'),
(4, 55, 1663890620, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-22 22:50:20', '2022-09-22 22:50:20'),
(5, 55, 1007235, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:24:06', '2022-09-26 08:24:06'),
(6, 55, 1028438, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:25:24', '2022-09-26 08:25:24'),
(7, 55, 1029730, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:25:33', '2022-09-26 08:25:33'),
(8, 55, 1049520, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 08:26:00', '2022-09-26 08:26:00'),
(9, 55, 1041066, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 10:29:04', '2022-09-26 10:29:04'),
(10, 55, 1084126, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 10:32:12', '2022-09-26 10:32:12'),
(11, 55, 1084126, 'AMASSTORE BATTERY', 2500000, 1, 2500000, '16630290242-20201030074847997.jpeg', NULL, NULL, NULL, '2022-09-26 10:32:12', '2022-09-26 10:32:12'),
(12, 55, 1084126, 'SOFAR 1100TL-G3', 150000, 1, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-26 10:32:12', '2022-09-26 10:32:12'),
(13, 55, 103220697, 'SOFAR 17KTLX-G3', 1100000, 1, 1100000, '16644406332-20191125074911754.jpeg', NULL, NULL, NULL, '2022-09-29 20:46:43', '2022-09-29 20:46:43'),
(14, 55, 103220697, 'SOFAR 1100TL-G3', 150000, 1, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-29 20:46:43', '2022-09-29 20:46:43'),
(15, 55, 104731560, 'SOFAR 1100TL-G3', 150000, 1, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-09-29 20:47:57', '2022-09-29 20:47:57'),
(16, 55, 103781227, 'SOFAR 3KTLM-G3', 230000, 4, 920000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-17 13:43:34', '2022-10-17 13:43:34'),
(17, 55, 103109102, 'SOFAR 3KTLM-G3', 230000, 4, 920000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-17 13:43:54', '2022-10-17 13:43:54'),
(18, 55, 108961730, 'AMASSTORE BATTERY', 2500000, 1, 2500000, '16630290242-20201030074847997.jpeg', NULL, NULL, NULL, '2022-10-17 13:45:37', '2022-10-17 13:45:37'),
(19, 55, 109252548, 'SOFAR 1100TL-G3', 150000, 1, 150000, '16630279022-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-17 18:01:30', '2022-10-17 18:01:30'),
(20, 55, 110258421, '6.5kva Sofar Solar', 4500000, 1, 4500000, '1666015572WhatsApp Image 2022-09-18 at 3.10.39 PM.jpeg', NULL, NULL, NULL, '2022-10-19 16:26:39', '2022-10-19 16:26:39'),
(21, 55, 103085707, 'SOFAR 3KTLM-G3', 230000, 1, 230000, '16630286772-20190222034045237.jpeg', NULL, NULL, NULL, '2022-10-24 05:16:09', '2022-10-24 05:16:09'),
(22, 55, 102716697, 'BTS E5~E20-DS5', 4000000, 1, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-05 21:09:24', '2022-11-05 21:09:24'),
(23, 55, 103867084, 'BTS E5~E20-DS5', 4000000, 1, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-05 21:09:30', '2022-11-05 21:09:30'),
(24, 55, 106246619, 'BTS E5~E20-DS5', 4000000, 1, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-06 03:00:27', '2022-11-06 03:00:27'),
(25, 55, 106453169, 'BTS E5~E20-DS5', 4000000, 1, 4000000, '16676594872-20220928014234703.png', NULL, NULL, NULL, '2022-11-06 03:02:01', '2022-11-06 03:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `percentage` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `design_fee` double DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `order_count` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `specification` text DEFAULT NULL,
  `exchange_rate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `sale_price`, `admin_id`, `image`, `gallery`, `status`, `percentage`, `description`, `design_fee`, `views`, `order_count`, `deleted_at`, `created_at`, `updated_at`, `sub_category_id`, `specification`, `exchange_rate`) VALUES
(23, 2, 'SOFAR 3KTLM-G3', 2500000, 2300000, '1', '16630286772-20190222034045237.jpeg', '[\"1e03c99e9bac9d0b1a91958f9778477d.jpeg\"]', 1, 8, '<ul class=\"sort-destination isotope no-transition fadeIn\" data-sort-id=\"isotope-list-product-parts\" style=\"margin-top: 12px; animation-name: fadeIn; transition: all 0s ease 0s; list-style: none; opacity: 1; color: rgb(46, 54, 63); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; position: relative; overflow: hidden; height: 238px;\"><li class=\"isotope-item col-sm-12 col-md-12 Features\" style=\"color: rgb(126, 137, 152); position: absolute; min-height: 1px; float: left; width: 877.5px; z-index: 2; transition-duration: 0s; transition-property: transform, opacity; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);\"><ul class=\" list-paddingleft-2\" style=\"list-style-type: disc;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Built-in zero export function</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Optional AFCI function</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Compact design,light in weight</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Natural cooling,no fans,low noise</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Max.efficiency 98.4%</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Two MPP trackers with 1.5*DC overload</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Smart monitoring,remote firmware upgrade</p></li></ul></li><li class=\"isotope-item col-sm-12 col-md-12 Data isotope-hidden\" style=\"color: rgb(126, 137, 152); position: absolute; min-height: 1px; float: left; width: 877.5px; z-index: 1; pointer-events: none; transition-duration: 0s; transition-property: transform, opacity; left: 0px; top: 0px; opacity: 0; transform: scale3d(0.001, 0.001, 1);\"></li></ul>', NULL, 152, NULL, NULL, '2022-09-12 23:24:37', '2023-03-24 20:16:33', 2, NULL, '3194.4444444444'),
(24, 2, 'SOFAR 7KTLM-G3', 2500000, 2200000, '1', '16630288492-20210705072625105.jpeg', '[\"beda75bb4f338edd4e972c452c2216be.jpeg\"]', 1, 16, '<ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 847.391px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Longtime 110% AC overload ability</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Max. efficiency up to 98.1%</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Lower start voltage, wide MPPT voltage range</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Three MPP trackers with 1.5*DC overload</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Smart I/V curve scanning</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Optional AFCI protection</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Natural cooling, no fans, low noise</span><br></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-size: 13px; font-family: ArialMT; color: rgb(87, 88, 90);\">Compatible with 500W+ PV modules</span></p></li></ul>', NULL, 104, NULL, NULL, '2022-09-12 23:27:29', '2023-03-24 13:07:35', 2, NULL, '3055.5555555556'),
(25, 13, 'AMASSTORE BATTERY', 300000, 2500000, '1', '16630290242-20201030074847997.jpeg', '[\"2a51a84db6f2ea879d54d085d7efc763.jpeg\"]', NULL, -733.33333333333, '<ul class=\" list-paddingleft-2\" style=\"width: 847.391px;\"><li style=\"\"><ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 847.391px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Compatible with multi-brand storage inverters</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Remote diagnosis and real-time data monitoring</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Supports parallel expansion,supports up to 8 parallels</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Certification of IEC62619,UN38.3,IEC62040-I,SAA etc</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Long cycle life energy storage battery(6000 times)</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Simple stack installation,time and cost saving</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Han\'s Laser automated PACK production line,stable and reliable production quality</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">One-button automatic assignment battery module ID,simple and convenient operation</p></li></ul></li></ul>', NULL, 34, NULL, NULL, '2022-09-12 23:30:24', '2023-03-24 13:07:35', 3, NULL, '3472.2222222222'),
(26, 1, 'ME 3000SP', 140000, 130000, '1', '16630293422-20180705014249707.jpeg', '[\"e80fb8113147d76fc4f08132e555ba91.jpeg\"]', NULL, 7.1428571428571, '<p style=\"margin: 10px 0px; margin-block: 1em; color: rgb(34, 34, 34); line-height: 22px; font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Simple and Reliable</span></p><ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Exchanges energy via the electrical grid, no coupling with the PV inverter, mature technology, simple and reliable.</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Can integrate with all grid-tied renewable systems, including solar, wind, fuel cell etc.</p></li></ul><p style=\"margin: 10px 0px; margin-block: 1em; color: rgb(34, 34, 34); line-height: 22px; font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Easy installation</span></p><ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Compatible with existing grid-tied PV inverters.&nbsp;</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">No need to upgrade the distribution system.&nbsp;</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Uses a split-core CT, no need to disconnect the electrical grid at all.</p></li></ul><p style=\"margin: 10px 0px; margin-block: 1em; color: rgb(34, 34, 34); line-height: 22px; font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Multiple modes</span></p><ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Supports stand alone mode (like UPS),Ensures the safe operation of the critical load.</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Programmable multiple operations modes:Grid tie,Off grid,and grid-tie with backup.<br></p></li></ul><p style=\"margin: 10px 0px; margin-block: 1em; color: rgb(34, 34, 34); line-height: 22px; font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Flexible solution</span></p><ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\">Provides a full solution for enerfy consumers to maximize the use of their generated solar energy.</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\">Increases self-consumption rate(from 20% to 70%).</span></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">User-adjustable battery charging current suits different types of batteries.</p></li></ul>', NULL, 85, NULL, NULL, '2022-09-12 23:35:42', '2023-03-24 13:07:35', 3, NULL, '180.55555555556'),
(27, 2, '25kva sofar solar with  550w mono crystal panels', 18500000, 18100000, '1', '1664439385img.png', '[\"4f6bd885b027788dbe16d945f9fda95f.png\"]', NULL, 2.1621621621622, '<p><span style=\"font-size: 13.36px;\">This is&nbsp; 25kva system it comes with 30pcs of 550w mono crystal panels and it can power:7 units of 1-1.5hp inverter Ac’s,freezer,fridge,tvs,fans,washing machine,microwave,water pumping machine 1,5hp,laptops,lighting points etc.</span></p><p><span style=\"font-size: 13.36px;\">The battery capacity is 2.5kwh 50Ah 51.2v x10 plus battery controller = 25kwh 500AH.</span></p><p><span style=\"font-size: 13.36px;\">And the inverter is 25kva 3phase hybrid on/off grid with 180v and the inverter is also stackable up to volume of about 10pcs&nbsp; when you need to power more heavier loads.</span></p>', NULL, 18, NULL, NULL, '2022-09-29 14:16:26', '2023-03-24 13:07:35', 1, '', '25138.888888889'),
(28, 15, 'Solar panels half cells 500w', 180000, 160000, '1', '1664440420Untitled.png', '[\"c6c5c0b76559ab2b33da023261970972.png\"]', NULL, 22.222222222222, '<p><span style=\"font-size: 13.36px;\">400w half cells solar panels Agrade</span><br></p>', NULL, 10, NULL, NULL, '2022-09-29 14:33:40', '2023-03-24 13:07:35', 13, NULL, '222.22222222222'),
(29, 1, 'SOFAR 17KTLX-G3', 1200000, 1100000, '1', '16644406332-20191125074911754.jpeg', '[\"86c4706a1fcdc78a06256920e3877c47.jpeg\"]', NULL, 8.3333333333333, '<ul class=\" list-paddingleft-2\" style=\"font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 847.391px;\"><li style=\"\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><font color=\"#000000\" style=\"\">Remote firmware upgrade</font></p></li><li style=\"\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><font color=\"#000000\" style=\"\">Maximum efficiency 98.75%</font></p></li><li style=\"\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><font color=\"#000000\" style=\"\">Smart string level monitoring</font></p></li><li style=\"\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><font color=\"#000000\" style=\"\">Type II SPD for both DC and AC</font></p></li><li style=\"\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><font color=\"#000000\" style=\"\">Maximum DC input voltage 1100V</font></p></li><li style=\"\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><font color=\"#000000\" style=\"\">110% long-time overload ability</font></p></li><li style=\"\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><font color=\"#000000\" style=\"\">Low start-up voltage,wide MPPT voltage</font></p></li></ul>', NULL, 19, NULL, NULL, '2022-09-29 14:37:13', '2023-03-24 13:07:35', 3, '', '1527.7777777778'),
(31, 1, '6.5kva Sofar Solar', 1700000, 1500000, '1', '1666015572WhatsApp Image 2022-09-18 at 3.10.39 PM.jpeg', '[\"4cda044afc93c83f76dce36530dabba4.jpeg\",\"9580436604a4f22b625f469bc8fd1032.jpeg\"]', NULL, 11.764705882353, '<p><span style=\"font-size: 13.36px;\">6.5kva system, it as one full package and it comes with 10pcs of 550w mono crystal Solar panels.the system can power :2pcs of inverter Ac’s,freezer,tv’s,laptop,washing machine,fans,lighting points,water pumping machine 1hp,etc.</span></p><p><span style=\"font-size: 13.36px;\">The battery capacity is 51.2v 100Ah 5kwh and the inverter is hybrid 48v on/off grid single phase.</span></p><p><span style=\"font-size: 13.36px;\">With also 5yrs warranty.</span></p>', NULL, 22, NULL, NULL, '2022-10-17 20:06:12', '2023-03-24 13:07:35', 1, NULL, '2083.3333333333'),
(32, 2, '17.5kva Sofar Solar Inverter', 2800000, 2400000, '1', '1666016037WhatsApp Image 2022-10-17 at 3.13.26 PM.jpeg', '[\"0b6494f4fc476724e5de48ad15770353.jpeg\"]', NULL, 14.285714285714, '<p><span style=\"font-size: 13.36px;\">The inverter is transformer-less hybrid with 3phase On/off grid And comes with a very large solar PV input “22,500w” perfect for heavy duty loads.it can also be Parallel upto 10pcs(start up voltage 180v) with 5yrs warranty</span><br></p>', NULL, 29, NULL, NULL, '2022-10-17 20:13:57', '2023-03-24 13:07:35', 1, '', '3333.3333333333'),
(34, 13, 'BTS E5~E20-DS5', 4200000, 3000000, '1', '16676594872-20220928014234703.png', '[\"8afa4af586247c0477d58cc718041467.png\"]', NULL, 28.571428571429, '<ul><li><ul class=\"sort-destination isotope no-transition fadeIn\" data-sort-id=\"isotope-list-product-parts\" style=\"margin-top: 12px; animation-name: fadeIn; transition: all 0s ease 0s; list-style: none; opacity: 1; font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; position: relative; overflow: hidden; height: 135px;\"><ul><li class=\"isotope-item col-sm-12 col-md-12 Features\" style=\"color: rgb(126, 137, 152); position: absolute; min-height: 1px; float: left; width: 877.5px; z-index: 2; transition-duration: 0s; transition-property: transform, opacity; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);\"><ul class=\" list-paddingleft-2\" style=\"width: 847.391px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Modular and integrated design for easy transportation and installation</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Flexible battery capacity expansion</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">User-friendly one-button battery operation</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Maximal battery energy with pack optimization</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Extremely low battery selfconsumption in sleep mode</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Energy storage specially for ME / HYD 5K~20KTL-3PH inverters</p></li></ul></li><li class=\"isotope-item col-sm-12 col-md-12 Downloads isotope-hidden\" style=\"color: rgb(126, 137, 152); position: absolute; min-height: 1px; float: left; width: 877.5px; z-index: 1; pointer-events: none; transition-duration: 0s; transition-property: transform, opacity; left: 0px; top: 0px; opacity: 0; transform: scale3d(0.001, 0.001, 1);\"></li><li class=\"isotope-item col-sm-12 col-md-12 Features\" style=\"position: absolute; min-height: 1px; float: left; width: 877.5px; z-index: 2; transition-duration: 0s; transition-property: transform, opacity; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);\"><br><br></li></ul></ul></li></ul>', NULL, 16, NULL, NULL, '2022-11-05 20:23:06', '2023-03-24 13:07:35', 1, '1667658186BTS E5_E20-DS5 Datasheet_EN_202209_V1.pdf', '4166.6666666667'),
(35, 13, 'GTX5000-PRO', 2500000, 1500000, '1', '16676599022-20220928015214812 (1).png', '[\"fccf8ae5d91eef2734e112c6330e002b.png\"]', NULL, 40, '<ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 847.391px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">CATL battery cells, extensive cycle life (6000 cycles)</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Supports parallel operation (up to 4 units)</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Efficient automated production line, achieving optimum production quality</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Wall-or floor-mounted installation, saving time and costs</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">User-friendly one-button operation, automatic module ID assignment process</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Extensive range of certifications, including IEC62619, UN38.3, IEC62040-1, SAA, etc.</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Remote diagnosis and real-time data monitoring</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Compatible with multiple hybrid inverter brands</p></li></ul>', NULL, 16, NULL, NULL, '2022-11-05 20:51:42', '2023-03-24 13:07:35', 1, '1667659902GTX5000-PRO Datasheet_EN_202209_V1.pdf', '2083.3333333333'),
(36, 15, 'Poly Used Panel 250w', 80000, 65000, '1', '1668177994WhatsApp Image 2022-11-11 at 3.44.56 PM.jpeg', '[\"bc1f38ba44ec271403ebf18f9ac4a06a.jpeg\"]', NULL, 18.75, '<p>Poly Panel 250</p>', NULL, 14, NULL, NULL, '2022-11-03 20:46:35', '2023-03-24 13:07:35', 1, NULL, '90.277777777778'),
(37, 12, 'HYD 5K~20KTL-3PH', 4200000, 4100000, '1', '16676853222-20220928034213130.png', '[\"ea95d5b8ee8947ef9c655f06089bb330.png\"]', NULL, 2.3809523809524, '<ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 846.938px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Various operational modes for optimal perfomance</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Up to 2 MPPTs, allowing a flexible configuration</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Maximum two battery inputs</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Off-grid output can be connected to unbalanced load, three-phase separate output is supported</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Multiple parallel systems, more flexible system solutions</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Fully digital operation, enabling higher control accuracy</p></li></ul>', NULL, 16, NULL, NULL, '2022-11-06 03:55:22', '2023-03-24 13:07:35', 1, '1667685322HYD 5K_20KTL-3PH Datasheet_EN_202209_V1.pdf', '5694.4444444444'),
(38, 13, 'GTX3000-H4~H10', 850000, 800000, '1', '16676907742-20220928020140646.png', '[\"7fbef612d3fb367808e0b9db23ec0986.png\"]', NULL, 5.8823529411765, '<ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 847.391px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Extensive cycle life (6000 cycles)<br></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Supports parallel operation (up to 4 units)</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Supports soft startup</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Supports charging activation from AC</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Efficient automated production line, achieving optimum production quality</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">User-friendly one-button operation, automatic module ID assignment process</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Extensive range of certifications, including IEC62619, UN38.3, IEC62040-1, SAA, etc.</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Remote diagnosis and real-time data monitoring</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Simple stack design, saving time and costs</p></li></ul>', NULL, 16, NULL, NULL, '2022-11-06 05:26:14', '2023-03-24 13:07:35', 1, '1667690774GTX3000 Datasheet_EN_202209_V1.pdf', '1111.1111111111'),
(39, 1, '12.5kva Sofar Solar inverter', 2500000, 2200000, '1', '1668171608WhatsApp Image 2022-11-11 at 1.53.17 PM.jpeg', '[\"fa27326ebbac6906d867ea0caff81b5d.jpeg\"]', NULL, 12, '<p><span style=\"font-size: 13.36px;\">The inverter is transformer-less hybrid with 3phase On/off grid And comes with a very large solar PV input “15,000w” perfect for heavy duty loads.it can also be Parallel up to 10pcs.(start up voltage 180v)&nbsp;</span>with 5yrs warranty</p><ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 847.391px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\">Maximum effificiency 98.6%</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Maximum DC input voltage 1100 V</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Remote fifirmware upgrade</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Type II SPD for both DC and AC side</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\"></p><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">Low start-up voltage, wide MPPT &nbsp;voltage</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\"></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\"></p><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">Smart string level monitoring</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\"></p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\"></p><p style=\"margin: 10px 0px; margin-block: 1em; line-height: 22px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">Natural cooling, no fans, low noise</span></p></li></ul>', NULL, 18, NULL, NULL, '2022-11-11 20:00:08', '2023-03-24 13:07:35', 1, '1668171608SOFAR 3.3K_12KTLX-G3 Datasheet_EN_202209_V1.pdf', '3055.5555555556'),
(40, 1, '3.5kva Sofar Solar inverter', 950000, 850000, '1', '1668172015WhatsApp Image 2022-11-11 at 2.02.28 PM.jpeg', '[\"9589b853f8027ae859b77d40a7b594db.jpeg\"]', NULL, 10.526315789474, '<p><span style=\"font-size: 13.36px;\">The inverter is transformer-less hybrid single phase with inbuilt solar controller, it has up to 4000w PV input and also on/off grid (</span>48v) with 5yrs warranty.</p><p><br></p>', NULL, 14, NULL, NULL, '2022-11-11 20:06:55', '2023-03-24 20:16:40', 1, '1668172015SOFAR 3.3K_12KTLX-G3 Datasheet_EN_202209_V1.pdf', '1180.5555555556'),
(41, 2, 'HYD 3000~6000-EP', 2500000, 2100000, '1', '16676850132-20220928033938115.png', '[\"0be82eda5d1cf12443eb9e20ecb1f224.png\"]', NULL, 16, '<ul class=\" list-paddingleft-2\" style=\"color: rgb(126, 137, 152); font-family: &quot;Microsoft YaHei&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; width: 847.391px;\"><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Various operational modes available</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Flexible configuration, allowing both lead-acid and lithium batteries</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Built-in zero export function</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">IP65 design for outdoor</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Smart fanless cooling design</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">EPS function (switchover time less than 10 ms)</p></li><li style=\"color: rgb(34, 34, 34);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-block: 1em; line-height: 22px;\">Supports both on- and off-grid operation</p></li></ul>', NULL, 20, NULL, NULL, '2022-11-06 03:50:13', '2023-03-24 13:07:35', 1, '1667685013HYD 3000_6000-EP Datasheet_EN_202209_V1.pdf', '2916.6666666667'),
(42, 11, 'Solar Street light 200w', 25000, 23000, '1', '1668178207WhatsApp Image 2022-11-11 at 3.48.22 PM.jpeg', '[\"3a980ee48e0915fe81571d613083f5e1.jpeg\"]', NULL, 8, '<p>200w solar light</p>', NULL, 11, NULL, NULL, '2022-11-03 20:50:08', '2023-03-24 13:07:35', 1, NULL, '31.944444444444'),
(43, 11, 'Solar Street light 200w', 25000, 23000, '1', '1668178284WhatsApp Image 2022-11-11 at 3.48.22 PM (2).jpeg', '[\"f9552c5bbf0b9c065d3c38cb0b8016c2.jpeg\"]', NULL, 8, '<p><span style=\"font-size: 13.36px;\">200w solar light</span><br></p>', NULL, 12, NULL, NULL, '2022-11-03 20:51:24', '2023-03-24 13:07:35', 1, NULL, '31.944444444444'),
(44, 12, 'Solar Street light 250w', 50000, 45000, '1', '1668178356WhatsApp Image 2022-11-11 at 3.51.39 PM.jpeg', '[\"ca89ebfb4f810641c4c850d95e380dd3.jpeg\"]', NULL, 10, '<p><span style=\"font-size: 13.36px;\">solar light 250w</span><br></p>', NULL, 10, NULL, NULL, '2022-11-03 20:52:37', '2023-03-24 13:07:35', 1, NULL, '62.5'),
(45, 1, 'Solar Street light 40w', 55000, 45000, '1', '1668179303Untitled.png', '[\"4617c67088322e5513e99b31d996e922.png\"]', NULL, 18.181818181818, '<p><span style=\"font-size: 13.36px;\">solar light 40w</span><br></p>', NULL, 12, NULL, NULL, '2022-11-03 20:56:15', '2023-03-24 13:07:35', 1, NULL, '62.5'),
(46, 12, 'solar Garden lamp 30w', 60000, 50000, '1', '1668178654WhatsApp Image 2022-11-11 at 3.53.40 PM.jpeg', '[\"d2c74b69bdbd990cab050ae67d7d200d.jpeg\"]', NULL, 16.666666666667, '<p><span style=\"font-size: 13.36px;\">solar Garden lamp 30w&nbsp;</span><br></p>', NULL, 9, NULL, NULL, '2022-11-03 20:57:34', '2023-03-24 13:07:35', 1, NULL, '69.444444444444'),
(47, 12, 'solar street light 40w', 65000, 50000, '1', '1668178721WhatsApp Image 2022-11-11 at 3.53.40 PM (1).jpeg', '[\"9dd6630767644b838dbdeb24d5418230.jpeg\"]', NULL, 23.076923076923, '<p><span style=\"font-size: 13.36px;\">solar street light 40w&nbsp;</span><br></p>', NULL, 11, NULL, NULL, '2022-11-03 20:58:41', '2023-03-24 13:07:35', 1, NULL, '69.444444444444'),
(48, 12, 'solar Garden lamp 30w', 55000, 45000, '1', '1668178874Untitled.png', '[\"10d86fca68524dcd34e59d4b679ec1d9.png\"]', NULL, 18.181818181818, '<p><span style=\"font-size: 13.36px;\">solar Garden lamp 30w&nbsp;</span><br></p>', NULL, 14, NULL, NULL, '2022-11-03 21:01:14', '2023-03-24 13:07:35', 1, NULL, '62.5'),
(49, 2, 'michael kachi', 1200000, 1100000, '1', '1679663332Screenshot 2023-03-08 at 21.44.40.png', '[\"2aaff7030cb5969b25e70120e6c6905d.png\"]', NULL, 8.3333333333333, '<p>dsdsdd</p>', NULL, NULL, NULL, NULL, '2023-03-24 12:08:52', '2023-03-24 13:07:35', 1, '1679663332Screenshot 2023-03-13 at 13.12.32.png', '1527.7777777778'),
(50, 1, 'Daniel James', 300000, 300000, '1', '1679663404Screenshot 2023-03-14 at 15.04.46.png', '[\"747fab77cb0c536fdfb2efbfc91e734d.png\"]', NULL, 8.5714285714286, '<p>djksfsfsfd</p>', NULL, NULL, NULL, NULL, '2023-03-24 12:10:05', '2023-03-24 13:07:35', 1, NULL, '416.66666666667');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `content`, `image`, `images`, `created_at`, `updated_at`) VALUES
(9, 'Solar installation Ikeja', '<p><span style=\"font-size: 13.36px;\">Lagos Solar energy installation done in az company in ikeja, lagos. this solar can power up to 5.1kva equipments</span><br></p>', '1664414039.jpeg', '[\"1664414039.jpeg\",\"1664414041.jpeg\"]', '2022-09-29 07:14:02', '2022-09-29 07:14:02'),
(10, 'Solar installation Ikeja', '<p><span style=\"font-size: 13.36px;\">Lagos Solar energy installation done in az company in ikeja, lagos. this solar can power up to 5.1kva equipments</span><br></p>', '1664414105.jpeg', '[\"1664414105.jpeg\",\"1664414106.jpeg\"]', '2022-09-29 07:15:07', '2022-09-29 07:15:07'),
(11, 'Solar Installation in Lagos Nigeria', '<p><span style=\"font-size: 13.36px;\">&nbsp;Solar energy generating system install in client site in lagos nigeria. This solar energy can power up to 3.1kva equipments. A fully charged system can last more than 48hrs</span><br></p>', '1664414137.jpeg', '[\"1664414137.jpeg\",\"1664414138.jpeg\",\"1664414139.jpeg\"]', '2022-09-29 07:15:40', '2022-09-29 07:15:40'),
(12, 'Solar installation in ibadan', '<p><span style=\"font-size: 13.36px;\">This 5.1kva solar energy was installed in clients site in Ibadan. It power up to 5.1kva company equipements</span><br></p>', '1664414178.jpeg', '[\"1664414178.jpeg\",\"1664414179.jpeg\",\"1664414180.jpeg\"]', '2022-09-29 07:16:21', '2022-09-29 07:16:21'),
(13, 'Solar installation in ibadan', '<p><span style=\"color: rgb(116, 116, 116); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.144px; font-size: 0.835rem;\">Lagos Solar energy installation done in az company in ikeja, lagos. this solar can power up to 5.1kva equipments</span><br></p>', '1664414294.jpeg', '[\"1664414294.jpeg\",\"1664414295.jpeg\",\"1664414296.jpeg\"]', '2022-09-29 07:18:18', '2022-09-29 07:18:18'),
(14, 'Diorama Filling Station Umuahia Solar Installation', '<p>Sofarsolar enegery powers the system in Diorama filling station umuahia, Abia state. it powers 7 pumps, gas cylinder refilling dispenser </p>', '1667652299.jpeg', '[\"1667652299.jpeg\",\"1667652300.jpeg\",\"1667652301.jpeg\"]', '2022-11-05 18:45:02', '2022-11-05 18:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `name`, `email`, `rating`, `created_at`, `updated_at`, `description`) VALUES
(1, 26, 'dfdg', 'danniejames1984@gmail.com', 5, '2022-09-24 01:14:33', '2022-09-24 01:14:33', 'fgf');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_No` varchar(222) DEFAULT NULL,
  `receiver_name` varchar(255) DEFAULT NULL,
  `receiver_email` varchar(255) DEFAULT NULL,
  `receiver_phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `lat` varchar(222) DEFAULT NULL,
  `lng` varchar(222) DEFAULT NULL,
  `zip_code` varchar(222) DEFAULT NULL,
  `delivery_method` varchar(222) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_default` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `order_No`, `receiver_name`, `receiver_email`, `receiver_phone`, `address`, `city`, `state`, `country`, `lat`, `lng`, `zip_code`, `delivery_method`, `created_at`, `updated_at`, `is_default`) VALUES
(1, 54, NULL, 'mikky', 'yuyuyuuy@mgail.com', '08039366207', '2111w West Churchill Street', 'sdfsd', 'uyxdyu', NULL, NULL, NULL, 'duusdu', 'on', '2022-09-14 21:23:49', '2022-09-14 21:23:49', 0),
(2, 55, NULL, 'yuuyouyyunew defual', 'yuyuyuuy@mgail.comdd', '08039366207', '10 Razeem adabayo street, igando', 'sdfsd', 'ksdjfsk', NULL, '6.535889', '3.2483058', NULL, 'home_delivery', '2022-09-14 22:43:11', '2022-09-23 02:55:42', 0),
(5, 55, NULL, 'MICHAEL', 'michaelozoudeh@gmail.com', '2340987676567', 'lagos', 'lagos', 'ksdjfsk', NULL, NULL, NULL, NULL, NULL, '2022-09-23 02:37:43', '2022-09-23 02:55:52', 0),
(6, 55, NULL, NULL, 'jesmikky@gmail.com', 'user@email.com', '2111w West Churchill Street', 'lagos', 'ksdjfsk', NULL, NULL, NULL, NULL, NULL, '2022-10-17 13:43:53', '2022-10-17 13:43:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(25, 'k', '1664421242.jpg', '2022-09-29 09:14:03', '2022-09-29 09:14:03'),
(29, 'Company', '1666014586.jpeg', '2022-10-17 19:49:46', '2022-10-17 19:49:46'),
(30, 'Companyn', '1666014607.jpeg', '2022-10-17 19:50:07', '2022-10-17 19:50:07'),
(31, 'dsfsdl', '1666014655.jpeg', '2022-10-17 19:50:55', '2022-10-17 19:50:55'),
(32, 'c', '1667651219.JPG', '2022-11-05 18:26:59', '2022-11-05 18:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'On/Off-Grid Inverter', NULL, '2022-09-12 03:06:06', '2022-11-12 16:27:01'),
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
  `payment_ref` varchar(255) DEFAULT NULL,
  `external_ref` varchar(222) DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `order_No` varchar(255) DEFAULT NULL,
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
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `wallet` double DEFAULT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `notifyCount` int(11) DEFAULT NULL,
  `login_ip` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
(56, 'MICHAEL', 'mikkynoble12@gmail.com', '234098s7676567', NULL, '$2y$10$wqHbbqidvqPag/XCiPMC0.i2oT4ler3IIVJc85r93gPX5.ALGCmUG', NULL, NULL, NULL, NULL, NULL, '2022-09-26 19:34:16', '2022-09-26 19:34:16');

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
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
