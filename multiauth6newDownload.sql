-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 08:09 PM
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
-- Database: `multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `category`, `coupon`, `product`, `blog`, `order`, `other`, `report`, `role`, `return`, `contact`, `comment`, `setting`, `stock`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '01961363543', 'sohidulislam@gmail.com', NULL, '$2y$10$BdmZPWWiRmDaiIoqpB.FQuR2uh6b6ZtMIcywmF43upYdO6OdBm7Ga', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, NULL, '2019-10-10 07:29:53'),
(4, 'Imran Khan', '01961363546', 'imrankhan@gmail.com', NULL, '$2y$10$2Hgy7PMf3xCkd9yS8H5JZeXjY8duHqLAvYMmcGximDAOKSE5OLS..', NULL, '1', NULL, '1', '1', NULL, '1', NULL, NULL, '1', '1', '1', '1', '1', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'public/media/brand/12_10_19_48.png', NULL, NULL),
(4, 'Sony', 'public/media/brand/121019_15_06_56.jpg', NULL, NULL),
(5, 'Huawei', 'public/media/brand/121019_16_29_06.jpg', NULL, NULL),
(6, 'Rado', 'public/media/brand/171019_14_37_17.png', NULL, NULL),
(7, 'Lenovo', 'public/media/brand/231019_15_14_36.jpg', NULL, NULL),
(8, 'Assus', 'public/media/brand/231019_15_25_36.png', NULL, NULL),
(9, 'Canon', 'public/media/brand/231019_15_42_36.png', NULL, NULL),
(10, 'Cats eye', 'public/media/brand/231019_15_55_36.png', NULL, NULL),
(11, 'DELL', 'public/media/brand/231019_15_10_37.png', NULL, NULL),
(12, 'Pluspoint', 'public/media/brand/231019_15_29_37.jpg', NULL, NULL),
(13, 'Mens World', 'public/media/brand/231019_15_40_37.png', NULL, NULL),
(14, 'Jamuna', 'public/media/brand/231019_15_51_37.jpg', NULL, NULL),
(15, 'Kelvinator', 'public/media/brand/231019_15_06_38.png', NULL, NULL),
(16, 'Walton', 'public/media/brand/231019_15_16_38.png', NULL, NULL),
(17, 'Xiaomi', 'public/media/brand/231019_15_09_39.png', NULL, NULL),
(18, 'Apple', 'public/media/brand/231019_15_52_39.png', NULL, NULL),
(19, 'Otobi', 'public/media/brand/291019_15_31_58.png', NULL, NULL),
(20, 'Unknown', 'public/media/brand/291019_15_56_58.png', NULL, NULL),
(21, 'Bloom', 'public/media/brand/291019_17_18_02.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Fashion', NULL, NULL),
(2, 'Women\'s Fashion', '2019-10-11 06:12:45', '2019-10-11 06:12:45'),
(4, 'Child\'s', '2019-10-11 06:24:19', '2019-10-11 06:24:19'),
(5, 'Watch', '2019-10-17 08:16:00', '2019-10-17 08:16:00'),
(6, 'Furniture', '2019-10-20 10:18:30', '2019-10-20 10:18:30'),
(7, 'Electronics', '2019-10-20 10:18:40', '2019-10-20 10:18:40'),
(8, 'Health', '2019-10-20 10:19:43', '2019-10-20 10:19:43'),
(9, 'Beauty', '2019-10-20 10:19:51', '2019-10-20 10:19:51'),
(10, 'Sports & Outdoor', '2019-10-20 10:20:33', '2019-10-20 10:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'learnhunter5', '5', NULL, NULL),
(2, 'learnhunter10', '10', NULL, NULL),
(3, 'learnhunter15', '15', NULL, NULL),
(4, 'learnhunter20', '20', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2019_10_10_135206_create_categories_table', 2),
(6, '2019_10_10_135221_create_subcategories_table', 2),
(7, '2019_10_10_135236_create_brands_table', 2),
(8, '2019_10_15_152304_create_coupons_table', 3),
(9, '2019_10_15_154357_create_newslaters_table', 4),
(10, '2019_10_16_054617_create_products_table', 5),
(11, '2019_10_21_153355_create_post_category_table', 6),
(12, '2019_10_21_153417_create_posts_table', 6),
(13, '2019_10_25_140504_create_wishlists_table', 7),
(14, '2019_11_19_144943_create_settings_table', 8),
(15, '2016_06_01_000001_create_oauth_auth_codes_table', 9),
(16, '2016_06_01_000002_create_oauth_access_tokens_table', 9),
(17, '2016_06_01_000003_create_oauth_refresh_tokens_table', 9),
(18, '2016_06_01_000004_create_oauth_clients_table', 9),
(19, '2016_06_01_000005_create_oauth_personal_access_clients_table', 9),
(20, '2019_11_28_124814_create_orders_table', 10),
(21, '2019_11_28_124827_create_order_details_table', 10),
(22, '2019_11_28_124843_create_shipping_table', 10),
(23, '2019_12_10_145038_create_subscribers_table', 11),
(24, '2019_12_10_145333_create_seo_table', 12),
(25, '2019_12_12_144824_create_sitesetting_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sohidulislam353@gmail.com', '2019-10-15 06:50:03', NULL),
(2, 'sohidulislam@gmail.com', '2019-10-15 15:51:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'SDrHy9raVskWZ2SKC9rzPQWLl7OBSuRH2Itplvss', 'http://localhost', 1, 0, 0, '2019-11-20 01:17:41', '2019-11-20 01:17:41'),
(2, NULL, 'Laravel Password Grant Client', 'hWD1ovG64xGFLKy6VsFc58ngKu4DVu8PFxJzrNKA', 'http://localhost', 0, 1, 0, '2019-11-20 01:17:41', '2019-11-20 01:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-20 01:17:41', '2019-11-20 01:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blnc_transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `return_order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_type`, `payment_id`, `paying_amount`, `blnc_transection`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `return_order`, `month`, `date`, `year`, `status_code`, `created_at`, `updated_at`) VALUES
(2, '1', 'stripe', 'card_1FjnCRElDWEjvc0dveBreDLT', '20700', 'txn_1FjnCSElDWEjvc0dcrZuHTJk', '5ddfcdd5cc496', '200', '7', '0', '207', '3', '0', 'November', '28-11-19', '2019', '1378831', NULL, NULL),
(3, '5', 'stripe', 'card_1FkWm7ElDWEjvc0d6xkq4zBi', '24700', 'txn_1FkWmAElDWEjvc0dbwukZ6P3', '5de27a2e2ab28', '220', '7', '0', '247', '3', '2', 'November', '30-11-19', '2019', '273121', NULL, NULL),
(4, '4', 'stripe', 'card_1ForWPElDWEjvc0dE06wAcpP', '487', 'txn_1ForWRElDWEjvc0djexIeIrz', '5df23d962dd21', '480.00', '7', '0', '487', '3', '0', 'December', '12-12-19', '2019', '2347112', NULL, NULL),
(5, '4', 'stripe', 'card_1FordHElDWEjvc0dtSiwT4jP', '407', 'txn_1FordJElDWEjvc0dVJJBtYUu', '5df23f40871e5', '400.00', '7', '0', '407', '0', '0', 'December', '12-12-19', '2019', '414640', NULL, NULL),
(6, '5', 'stripe', 'card_1FsO0AElDWEjvc0d8ohmsx8y', '67', 'txn_1FsO0DElDWEjvc0d3LODtSUP', '5dff0e3288e97', '60.00', '7', '0', '67', '0', '0', 'December', '22-12-19', '2019', '111001', NULL, NULL),
(7, '5', 'stripe', 'card_1FsO0AElDWEjvc0dCFfEib3U', '67', 'txn_1FsO0DElDWEjvc0dQFKZfBgA', '5dff0e3288e97', '60.00', '7', '0', '67', '3', '0', 'December', '22-12-19', '2019', '130471', NULL, NULL),
(8, '5', 'stripe', 'card_1FsUZAElDWEjvc0dbKzIzpDv', '157', 'txn_1FsUZCElDWEjvc0dcYLARsk0', '5dff70c054773', '130', '7', '0', '157', '0', '0', 'December', '22-12-19', '2019', '592522', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singleprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `singleprice`, `totalprice`, `created_at`, `updated_at`) VALUES
(1, 2, '21', 'Yellow Smart Watch', 'Yellow', NULL, '2', '70', '140', NULL, NULL),
(2, 2, '18', 'Women Jacket', 'Blue', 'Sm', '2', '30', '60', NULL, NULL),
(3, 3, '23', 'JBl Speaker', 'Black', NULL, '2', '100', '200', NULL, NULL),
(4, 3, '20', 'Men Smart Watch', 'Black', NULL, '1', '40', '40', NULL, NULL),
(5, 4, '23', 'JBl Speaker', 'Black', NULL, '1', '100', '100', NULL, NULL),
(6, 4, '21', 'Yellow Smart Watch', 'Yellow', NULL, '2', '70', '140', NULL, NULL),
(7, 4, '16', 'Computer Desk', 'Black', NULL, '1', '240', '240', NULL, NULL),
(8, 5, '22', 'Canon 1100D', 'Black', NULL, '1', '400', '400', NULL, NULL),
(9, 6, '18', 'Women Jacket', 'yellow', 'Xl', '2', '30', '60', NULL, NULL),
(10, 7, '18', 'Women Jacket', 'yellow', 'Xl', '2', '30', '60', NULL, NULL),
(11, 8, '21', 'Yellow Smart Watch', 'Yellow', NULL, '1', '70', '70', NULL, NULL),
(12, 8, '20', 'Men Smart Watch', 'Black', NULL, '2', '40', '80', NULL, NULL);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `post_title_en`, `post_title_bn`, `post_image`, `details_en`, `details_bn`, `created_at`, `updated_at`) VALUES
(3, 2, 'hello learn hunter', 'হ্যালো শিকারী শিখুন', 'public/media/post/1648020855193806.jpg', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span>', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্যরূপে রয়েছেন, যখন কোনও অজানা প্রিন্টার একটি প্রকারের গ্যালি নেন এবং কোনও ধরণের নমুনার বই তৈরি করতে স্ক্র্যাম্বল করে bled এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সহ লেটারসেট শীট প্রকাশের সাথে জনপ্রিয় হয়েছিল এবং আরও সম্প্রতি এলডাস', NULL, NULL),
(4, 2, 'This is the second post of ecommerce', 'এটি ইকমার্সের দ্বিতীয় পোস্ট', 'public/media/post/1650702364583191.png', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span>', '<div><br></div><div><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 24px; white-space: pre-wrap; background-color: rgb(248, 249, 250);\">এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে কোনও পৃষ্ঠার বিন্যাসটি দেখার সময় পাঠকের পাঠযোগ্য সামগ্রী দ্বারা বিভ্রান্ত হবে racted লরেম ইপসাম ব্যবহারের বিষয়টি হ\'ল এটিতে চিঠিপত্রের কম-বেশি স্বাভাবিক বিতরণ থাকে, যেমন \'এখানে সামগ্রী, এখানে সামগ্রী\' ব্যবহার করার বিপরীতে, এটি পড়ার মতো ইংরাজির মতো দেখায়। অনেক ডেস্কটপ প্রকাশনা প্যাকেজ এবং ওয়েব পৃষ্ঠার সম্পাদক এখন লোরেম ইপসামকে তাদের ডিফল্ট মডেল পাঠ্য হিসাবে ব্যবহার করেন এবং \'লরেম ইপসাম\' অনুসন্ধানের ফলে তাদের শৈশবকালীন অনেকগুলি ওয়েবসাইট উন্মোচিত হবে। বিভিন্ন সংস্করণ কয়েক বছর ধরে বিকশিত হয়েছে, কখনও দুর্ঘটনার দ্বারা, কখনও কখনও উদ্দেশ্য (ইনজেকশনের হাস্যরস এবং এর মতো</span><br></div>', NULL, NULL),
(5, 3, 'This is the third post of ecommerce', 'এটি ইকমার্সের তৃতীয় পোস্ট', 'public/media/post/1650702829671403.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 24px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 283px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span tabindex=\"0\" lang=\"bn\">এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে কোনও পৃষ্ঠার বিন্যাসটি দেখার সময় পাঠকের পাঠযোগ্য সামগ্রী দ্বারা বিভ্রান্ত হবে racted লরেম ইপসাম ব্যবহারের বিষয়টি হ\'ল এটিতে চিঠিপত্রের কম-বেশি স্বাভাবিক বিতরণ থাকে, যেমন \'এখানে সামগ্রী, এখানে সামগ্রী\' ব্যবহার করার বিপরীতে, এটি পড়ার মতো ইংরাজির মতো দেখায়। অনেক ডেস্কটপ প্রকাশনা প্যাকেজ এবং ওয়েব পৃষ্ঠার সম্পাদক এখন লোরেম ইপসামকে তাদের ডিফল্ট মডেল পাঠ্য হিসাবে ব্যবহার করেন এবং \'লরেম ইপসাম\' অনুসন্ধানের ফলে তাদের শৈশবকালীন অনেকগুলি ওয়েবসাইট উন্মোচিত হবে। বিভিন্ন সংস্করণ কয়েক বছর ধরে বিকশিত হয়েছে, কখনও দুর্ঘটনার দ্বারা, কখনও কখনও উদ্দেশ্য </span></pre>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `category_name_en`, `category_name_bn`, `created_at`, `updated_at`) VALUES
(1, 'Offer', 'অফার ', NULL, NULL),
(2, 'Service', 'সার্ভিস ', NULL, NULL),
(3, 'Event', 'ইভেন্ট ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` int(11) DEFAULT NULL,
  `hot_deal` int(11) DEFAULT NULL,
  `best_rated` int(11) DEFAULT NULL,
  `mid_slider` int(11) DEFAULT NULL,
  `hot_new` int(11) DEFAULT NULL,
  `buyone_getone` int(11) DEFAULT NULL,
  `trend` int(11) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `buyone_getone`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(2, 5, 7, 6, 'Men\'s Black Watch', 'Rado-1243', '80', '<p><span style=\"color: rgb(68, 81, 96); font-family: &quot;Open sans&quot;, Arial, sans-serif; background-color: rgb(239, 240, 244);\">By default Intervention Image uses PHP\'s GD library extension to process all images. If you want to switch to Imagick, you can pull a configuration file into your application by running one of the following artisan command.</span></p><p><span style=\"color: rgb(68, 81, 96); font-family: &quot;Open sans&quot;, Arial, sans-serif; background-color: rgb(239, 240, 244);\">Medium : age 12-20</span></p><p><span style=\"color: rgb(68, 81, 96); font-family: &quot;Open sans&quot;, Arial, sans-serif; background-color: rgb(239, 240, 244);\">Big: 24-above</span></p>', 'Blue,Black,White', 'Medium,Big,Small', '240', '200', 'https://www.youtube.com/watch?v=mvuNCZjdSNI', NULL, NULL, 1, NULL, 1, NULL, 1, 'public/media/product/1648201463628646.png', 'public/media/product/1648201474260535.png', 'public/media/product/1648201486662797.png', 1, NULL, NULL),
(3, 1, 3, 1, 'Mens Wood Watch', 'w-782311', '80', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</span>', 'white,black,blue,red', NULL, '200', NULL, 'https://www.youtube.com/watch?v=mvuNCZjdSNI', 1, NULL, NULL, NULL, 1, NULL, 1, 'public/media/product/1648201652140559.jpg', 'public/media/product/1648201662726431.jpg', 'public/media/product/1648201674482276.jpg', 1, NULL, NULL),
(4, 7, 12, 1, 'Samsung galaxy S9', 'samsung-101', '40', '<div><br></div><div><div class=\"for_list_icon for_list_width top_ostype\" style=\"float: left; display: inline-block; width: 636px; color: rgb(38, 38, 38); font-family: Roboto, &quot;Myriad Pro&quot;, Tahoma, sans-serif; font-size: 13px; margin: 11px 0px 14px !important;\"><div class=\"for_list_li\" title=\"Android v8.0 (Oreo), upgradable to v9.0 (Pie)\" style=\"width: 636px;\">Android v8.0 (Oreo), upgradable to v9.0 (Pie)</div></div><div class=\"key_specs_box\" style=\"color: rgb(38, 38, 38); font-family: Roboto, &quot;Myriad Pro&quot;, Tahoma, sans-serif; font-size: 13px;\"><table class=\"specsTable\" style=\"clear: both; display: block;\"><tbody><tr><td class=\"specstd\" style=\"vertical-align: top; width: 144px; border-right: 1px solid rgb(224, 224, 224); padding-left: 0px;\"><ul class=\"specs_ul\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 14px 0px 0px; list-style-type: none; display: inline-block; min-width: 114px; box-sizing: border-box; min-height: 50px; vertical-align: top;\"><li style=\"margin: 0px; padding: 0px; background-repeat: no-repeat; list-style-type: none; width: 129px;\"><div class=\"hd_tlt spcedHead\" style=\"font-size: 14px; color: rgba(51, 51, 51, 0.87); display: inline-block; width: 129px; position: relative; margin: 3px 5px 7px 0px !important;\">Performance</div><div class=\"mtr_bar_div expand\" style=\"width: 100px; margin-bottom: 10px; position: relative; background: rgb(204, 204, 204);\"><div class=\"verygood\" style=\"background: rgb(169, 197, 58); height: 4px; width: 82px;\"><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 16px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 37px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 58px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 79px;\"></span></div></div><label class=\"specs_txt positive_value\" title=\"Octa core (2.7 GHz, Quad Core + 1.7 GHz, Quad core)\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">Octa core (2.7 GHz, Quad Core + 1.7 GHz, Quad core)</label><label class=\"specs_txt positive_value\" title=\"Samsung Exynos 9 Octa\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">Samsung Exynos 9 Octa</label><label class=\"specs_txt positive_value\" title=\"4 GB RAM\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">4 GB RAM</label></li></ul></td><td class=\"specstd\" style=\"vertical-align: top; width: 144px; border-right: 1px solid rgb(224, 224, 224); padding-left: 15px;\"><ul class=\"specs_ul\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 14px 0px 0px; list-style-type: none; display: inline-block; min-width: 114px; box-sizing: border-box; min-height: 50px; vertical-align: top;\"><li style=\"margin: 0px; padding: 0px; background-repeat: no-repeat; list-style-type: none; width: 129px;\"><div class=\"hd_tlt spcedHead\" style=\"font-size: 14px; color: rgba(51, 51, 51, 0.87); display: inline-block; width: 129px; position: relative; margin: 3px 5px 7px 0px !important;\">Display</div><div class=\"mtr_bar_div expand\" style=\"width: 100px; margin-bottom: 10px; position: relative; background: rgb(204, 204, 204);\"><div class=\"excellent\" style=\"background: rgb(114, 160, 43); height: 4px; width: 93px;\"><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 16px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 37px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 58px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 79px;\"></span></div></div><label class=\"specs_txt positive_value\" title=\"5.8 inches (14.73 cm)\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">5.8 inches (14.73 cm)</label><label class=\"specs_txt positive_value\" title=\"1440x2960 px, 568 PPI\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">1440x2960 px, 568 PPI</label><label class=\"specs_txt positive_value\" title=\"Super AMOLED\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">Super AMOLED</label></li></ul></td><td class=\"specstd\" style=\"vertical-align: top; width: 144px; border-right: 1px solid rgb(224, 224, 224); padding-left: 15px;\"><ul class=\"specs_ul\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 14px 0px 0px; list-style-type: none; display: inline-block; min-width: 114px; box-sizing: border-box; min-height: 50px; vertical-align: top;\"><li style=\"margin: 0px; padding: 0px; background-repeat: no-repeat; list-style-type: none; width: 129px;\"><div class=\"hd_tlt spcedHead\" style=\"font-size: 14px; color: rgba(51, 51, 51, 0.87); display: inline-block; width: 129px; position: relative; margin: 3px 5px 7px 0px !important;\">Camera</div><div class=\"mtr_bar_div expand\" style=\"width: 100px; margin-bottom: 10px; position: relative; background: rgb(204, 204, 204);\"><div class=\"excellent\" style=\"background: rgb(114, 160, 43); height: 4px; width: 95px;\"><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 16px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 37px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 58px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 79px;\"></span></div></div><label class=\"specs_txt positive_value\" title=\"12 MP Primary Camera\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">12 MP Primary Camera</label><label class=\"specs_txt positive_value\" title=\"LED Flash\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">LED Flash</label><label class=\"specs_txt positive_value\" title=\"8 MP Front Camera\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">8 MP Front Camera</label></li></ul></td><td class=\"specstd\" style=\"vertical-align: top; width: 144px; border-right: none; padding-left: 15px;\"><ul class=\"specs_ul\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 14px 0px 0px; list-style-type: none; display: inline-block; min-width: 114px; box-sizing: border-box; min-height: 50px; vertical-align: top;\"><li style=\"margin: 0px; padding: 0px; background-repeat: no-repeat; list-style-type: none; width: 129px;\"><div class=\"hd_tlt spcedHead\" style=\"font-size: 14px; color: rgba(51, 51, 51, 0.87); display: inline-block; width: 129px; position: relative; margin: 3px 5px 7px 0px !important;\">Battery</div><div class=\"mtr_bar_div expand\" style=\"width: 100px; margin-bottom: 10px; position: relative; background: rgb(204, 204, 204);\"><div class=\"verygood\" style=\"background: rgb(169, 197, 58); height: 4px; width: 71px;\"><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 16px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 37px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 58px;\"></span><span class=\"mtr_bar\" style=\"background: rgb(255, 255, 255); width: 5px; height: 4px; display: inline-block; position: absolute; left: 79px;\"></span></div></div><label class=\"specs_txt positive_value\" title=\"3000 mAh\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">3000 mAh</label><label class=\"specs_txt positive_value\" title=\"Fast Charging\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">Fast Charging</label><label class=\"specs_txt positive_value\" title=\"USB Type-C port\" style=\"float: left; clear: both; color: rgba(51, 51, 51, 0.87); font-size: 12px; line-height: 24px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 130px;\">USB Type-C port</label></li></ul></td></tr></tbody></table></div><div class=\"keySpce_bot_pnl\" style=\"width: 636px; display: inline-block; color: rgb(38, 38, 38); font-family: Roboto, &quot;Myriad Pro&quot;, Tahoma, sans-serif; font-size: 13px;\"><div class=\"nw_featur_box\" style=\"border-top: 1px solid rgb(224, 224, 224); margin-top: 10px;\"><ul class=\"for_list_icon for_list_width\" style=\"margin: 11px 0px 0px; padding: 0px; list-style-type: none; float: left; display: inline-block;\"><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87); clear: left;\"><span data-title=\"Supports Indian bands\" alt=\"Supports Indian bands\" class=\"tooltip_false fourg_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 5px; margin-top: 5px; width: 18px; height: 12px; background-position: -121px -29px;\"></span>Supports Indian bands</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87);\"><span data-title=\"VoLTE\" alt=\"VoLTE\" class=\"tooltip_false volte\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 5px !important; margin-top: 1px; width: 20px; height: 20px; background-position: -224px -106px; margin-left: 1px;\"></span>VoLTE</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87);\"><span data-title=\"64 GB + 400 GB Expandable\" alt=\"64 GB + 400 GB Expandable\" class=\"tooltip_false gb_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 5px; margin-top: 2px; width: 13px; height: 15px; background-position: -205px -47px;\"></span>64 GB + 400 GB Expandable</li><li title=\"Dual SIM: Nano + Nano (Hybrid)\" style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87); clear: left;\"><span data-title=\"Dual SIM: Nano + Nano (Hybrid)\" alt=\"Dual SIM: Nano + Nano (Hybrid)\" class=\"tooltip_false dualsim_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 6px; margin-top: 2px; width: 15px; height: 17px; background-position: -4px -3px; margin-left: 2px;\"></span>Dual SIM: Nano + Nano (Hybr...</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87);\"><span data-title=\"Fingerprint sensor\" alt=\"Fingerprint sensor\" class=\"tooltip_false finger_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 6px; margin-top: 1px; width: 13px; height: 16px; background-position: -227px -4px; margin-left: 2px;\"></span>Fingerprint sensor</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87);\"><span data-title=\"Gorilla Glass 5\" alt=\"Gorilla Glass 5\" class=\"tooltip_false gorilla_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 10px !important; margin-top: 1px; background-position: -349px -78px; margin-left: 2px; width: 12px; height: 19px;\"></span>Gorilla Glass 5</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87); clear: left;\"><span data-title=\"USB OTG Support\" alt=\"USB OTG Support\" class=\"tooltip_false icn_otg\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 10px !important; margin-top: 1px; background-position: -202px -76px; width: 19px; height: 19px; margin-left: 0px;\"></span>USB OTG Support</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87);\"><span data-title=\"Waterproof, IP68\" alt=\"Waterproof, IP68\" class=\"tooltip_false water_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 5px; margin-top: 3px; width: 10px; height: 15px; background-position: -118px -5px; margin-left: 4px;\"></span>Waterproof, IP68</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: red;\"><span data-title=\"No FM Radio\" alt=\"No FM Radio\" class=\"tooltip_false nofm_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 5px; margin-top: 1px; width: 17px; height: 17px; background-position: -313px -2px;\"></span>No FM Radio</li><li style=\"margin: 0px; padding: 9px 0px 0px; background-repeat: no-repeat; list-style-type: none; display: block; float: left; line-height: 20px; width: 212px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color: rgba(102, 102, 102, 0.87); clear: left;\"><span data-title=\"Wireless Charging\" alt=\"Wireless Charging\" class=\"tooltip_false wireless_charging_icon\" style=\"background-image: url(&quot;/images/finder-sprite.png?v=20&quot;); float: left; display: block; margin-right: 3px; margin-top: 1px; width: 25px; height: 20px; background-position: -311px -79px; margin-left: 1px;\"></span>Wireless Charging</li><div><br></div></ul><div class=\"clearfix\" style=\"clear: both;\"></div></div></div><span style=\"color: rgb(38, 38, 38); font-family: Roboto, &quot;Myriad Pro&quot;, Tahoma, sans-serif; font-size: 13px;\"></span></div>', 'Blue ,Black,Red', NULL, '400', NULL, 'https://www.91mobiles.com/samsung-galaxy-s9-price-in-india', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'public/media/product/1648199437289721.jpg', 'public/media/product/1648199437733265.jpg', 'public/media/product/1648199437771003.jpg', 1, NULL, NULL),
(5, 7, 12, 1, 'Samsung Galaxy S10', 'samsung-102', '30', '<span style=\"color: rgb(136, 136, 136); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 15px; font-style: italic;\">Samsung Galaxy S10 G973 8GB / 128GB Blue Dual SIM - 6.1 \"Infinity-O Screen AMOLED- Triple Camera: 12 MP +12 MP + 16MP- Exynos 9820 Processor- 8GB / 128GB Memory- Battery: 3,400 mAh with fast charge and Wireless PowerShare</span>', 'Red,Bule,Black,White', NULL, '700', NULL, 'https://greatecno.com/', NULL, NULL, NULL, NULL, 1, NULL, NULL, 'public/media/product/1648199709862764.jpg', 'public/media/product/1648199710294692.jpg', 'public/media/product/1648199710400627.jpg', 1, NULL, NULL),
(6, 5, 7, 6, 'Men\'s leather Watch', 'w-31234', '100', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Raleway; color: rgb(64, 64, 64);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit;\">The VT108 is a watch made with just the right blend of sophistication and playful frivolity. The bold black face with its intricacies in design gives the watch a dynamic style whereas its rose gold body and black rubber band give it a touch of youthful inhibition.</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Raleway; color: rgb(64, 64, 64);\">&nbsp;</p><table border=\"0\" cellspacing=\"3\" cellpadding=\"3\" style=\"margin: 0px 0px 20px; padding: 0px; border: 1px solid rgb(204, 204, 204); font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Raleway; border-spacing: 0px; color: rgb(102, 102, 102); text-shadow: rgb(255, 255, 255) 1px 1px 0px; background: rgb(234, 235, 236); border-radius: 2px; width: 363px;\"><tbody style=\"margin: 0px; padding: 0px; border: 0px; font: inherit;\"><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Model no:</td><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\">VT108</td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Movement:</td><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\"><span class=\"mediumtext\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit;\">Automatic</span></td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Display:</td><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\">Analogue</td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Functions:&nbsp;</td><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\">Second, Minute, Hour, Date</td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Dial:</td><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\">Black dial with rose&nbsp;case</td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Band:</td><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\">Black Rubber&nbsp;</td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Case Diameter:&nbsp;</td><td class=\"tab_row1\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\">46 MM</td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; width: 119px;\">Glass:</td><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); width: 221px;\">Mineral Glass</td></tr><tr style=\"margin: 0px; padding: 0px 0px 0px 12px; border: 0px; font: inherit; text-align: center;\"><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: initial; border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); text-align: left; border-bottom-left-radius: 3px; width: 119px;\">Water Resistant:&nbsp;</td><td class=\"tab_row2\" style=\"margin: 0px; padding: 12px; border-width: 0px 0px 1px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(224, 224, 224); border-left-color: rgb(224, 224, 224); border-image: initial; font: inherit; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(251, 251, 251)), to(rgb(250, 250, 250))); border-bottom-right-radius: 3px; width: 221px;\">3 ATM</td></tr></tbody></table>', 'Black,Brown', 'Medium,Big', '30', NULL, 'https://www.vaulttimepieces.com/products/vault-vt108', 1, NULL, NULL, NULL, NULL, 1, NULL, 'public/media/product/1648201496952694.png', 'public/media/product/1648201508977632.png', 'public/media/product/1648201520376293.png', 1, NULL, NULL),
(7, 7, 12, 18, 'iPhone Xr', 'Iphone-111', '10', '<ul style=\"margin: 5px 0px 0px; padding: 0px; list-style: none; max-width: 350px; font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: -0.374px;\"><li style=\"margin: 0px; padding: 0px;\">Liquid Retina HD display 64 GB</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">6.1-inch (diagonal) all-screen LCD Multi-Touch display with IPS technology</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">1792-by-828-pixel resolution at 326 ppi</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">1400:1 contrast ratio (typical)</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">True Tone display</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Wide color display (P3)</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Haptic Touch</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">625 nits max brightness (typical)</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Fingerprint-resistant oleophobic coating</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Support for display of multiple languages and characters&nbsp;simultaneously</li></ul>', 'Red,Black,Orange,White', NULL, '599', '500', 'https://www.apple.com/iphone-xr/specs/', 1, NULL, 1, NULL, NULL, NULL, NULL, 'public/media/product/1648276707352783.png', 'public/media/product/1648276707973534.png', 'public/media/product/1648276708138010.png', 1, NULL, NULL),
(8, 7, 12, 18, 'Iphone 11', 'iphone-113', '10', '<div role=\"row\" class=\"techspecs-row techspecs-section section-display\" style=\"margin-top: 0.4em; margin-bottom: 0.4em; padding-top: 3.58824em; padding-bottom: 3.29412em; border-top: 1px solid rgb(68, 68, 68); border-right-color: rgb(68, 68, 68); border-bottom-color: rgb(68, 68, 68); border-left-color: rgb(68, 68, 68); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: -0.374px;\"><div role=\"cell gridcell\" class=\"techspecs-column\" aria-colspan=\"2\" style=\"float: left; margin-left: 29.3906px; margin-bottom: 0px; width: 735px;\"><ul style=\"margin: 5px 0px 0px; padding: 0px; list-style: none; max-width: 350px;\"><li style=\"margin: 0px; padding: 0px;\">Liquid Retina HD display (256 GB)</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">6.1-inch (diagonal) all-screen LCD Multi-Touch display with IPS technology</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">1792-by-828-pixel resolution at 326 ppi</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">1400:1 contrast ratio (typical)</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">True Tone display</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Wide color display (P3)</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Haptic Touch</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">625 nits max brightness (typical)</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Fingerprint-resistant oleophobic coating</li><li style=\"margin: 0.4em 0px 0px; padding: 0px;\">Support for display of multiple languages and characters&nbsp;simultaneously</li></ul></div></div><div role=\"row\" class=\"techspecs-row row-paddingbottom\" style=\"margin-top: 0.4em; margin-bottom: 0.4em; padding-bottom: 3.29412em; font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: -0.374px;\"><div role=\"cell gridcell\" class=\"techspecs-column\" aria-colspan=\"2\" style=\"float: left; margin-left: 245px; width: 735px;\"><p class=\"typography-caption large-7 medium-12\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; width: 428.734px; font-size: 12px; line-height: 1.33341; letter-spacing: -0.01em;\">The iPhone X<span class=\"small-caps\" style=\"font-variant-caps: all-small-caps;\">R</span>&nbsp;display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 6.06 inches diagonally (actual viewable area is less).</p></div></div>', 'Black,White,Blue', NULL, '700', NULL, 'https://www.apple.com/iphone-xr/specs/', NULL, 1, NULL, NULL, 1, NULL, NULL, 'public/media/product/1648276802564700.jpg', 'public/media/product/1648276802776385.jpg', 'public/media/product/1648276802935391.jpg', 1, NULL, NULL);
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `buyone_getone`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(9, 7, 12, 17, 'Xiaomi Redmi Note 7S', 'xiaomi-111', '20', '<ul class=\"aps-specs-list\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; width: 651px; color: rgb(114, 115, 116); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 13px; background-color: rgb(247, 248, 249);\"><p><span style=\"background-color: rgb(255, 255, 255);\">Launched 2019, May</span></p><div class=\"aps-group\" style=\"padding: 0px; margin: 0px 0px 20px; list-style: none; border: 1px solid rgb(232, 233, 234); outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 813px; overflow: hidden; background: rgb(255, 255, 255); border-radius: 5px;\"><h3 class=\"aps-group-title\" style=\"padding: 5px 10px; margin-bottom: 10px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; font-weight: 600; font-size: 20px; font-family: Poppins; margin-right: 0px !important; margin-left: 0px !important;\">Network<span class=\"alignright aps-icon-signal\" style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: right; color: rgb(134, 135, 136);\"></span></h3><div class=\"aps-specs-table\" style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 811px; position: relative; background: rgb(247, 248, 249);\"><div class=\"aps-specs-scroller\" style=\"padding: 0px; margin: 0px 0px 0px 160px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; overflow-y: hidden;\"><ul class=\"aps-specs-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px;\"><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; display: block;\">Technology</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">GSM / HSPA / LTE</span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">2G bands</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">GSM 850 / 900 / 1800 / 1900 - SIM 1 &amp; SIM 2<br style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5;\"></span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">3G bands</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">HSDPA 850 / 900 / 1900 / 2100<br style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5;\"></span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">4G bands</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">LTE band 1(2100), 3(1800), 5(850), 8(900), 40(2300), 41(2500)<br style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5;\"></span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; display: block;\">Speed</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">HSPA 42.2/5.76 Mbps, LTE-A (2CA) Cat12 600/150 Mbps<br style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5;\"></span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 35px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 35px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">GPRS</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\"><i class=\"aps-icon-check\" style=\"padding: 2px 3px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1; color: rgb(255, 255, 255); font-size: 15px; display: inline-block; border-radius: 50%; background: rgb(138, 198, 60);\"></i></span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 35px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 35px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">EDGE</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\"><i class=\"aps-icon-check\" style=\"padding: 2px 3px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1; color: rgb(255, 255, 255); font-size: 15px; display: inline-block; border-radius: 50%; background: rgb(138, 198, 60);\"></i></span></div></li></ul></div></div></div><div class=\"aps-group\" style=\"padding: 0px; margin: 0px 0px 20px; list-style: none; border: 1px solid rgb(232, 233, 234); outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 813px; overflow: hidden; background: rgb(255, 255, 255); border-radius: 5px;\"><h3 class=\"aps-group-title\" style=\"padding: 5px 10px; margin-bottom: 10px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; font-weight: 600; font-size: 20px; font-family: Poppins; margin-right: 0px !important; margin-left: 0px !important;\">Body<span class=\"alignright aps-icon-mobile\" style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: right; color: rgb(134, 135, 136);\"></span></h3><div class=\"aps-specs-table\" style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 811px; position: relative; background: rgb(247, 248, 249);\"><div class=\"aps-specs-scroller\" style=\"padding: 0px; margin: 0px 0px 0px 160px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; overflow-y: hidden;\"><ul class=\"aps-specs-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px;\"><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">Dimensions</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">159.2 x 75.2 x 8.1 mm (6.27 x 2.96 x 0.32 in)</span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; display: block;\">Weight</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">186 g (6.56 oz)</span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 255); height: 34px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background: rgb(247, 248, 249); position: absolute; left: 0px; top: auto; z-index: 81; height: 34px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">Build</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">Front/back glass (Gorilla Glass 5), plastic frame</span></div></li><li style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5; float: left; width: 651px; background: rgb(255, 255, 230); height: 52px;\"><div class=\"aps-attr-title\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 1px 0px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: rgb(241, 242, 243); border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 1.5; width: 160px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; position: absolute; left: 0px; top: auto; z-index: 81; height: 52px;\"><span class=\"aps-term aps-tooltip\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; font-weight: 600; line-height: 1.5; cursor: help; display: block;\">SIM</span></div><div class=\"aps-attr-value\" style=\"padding: 0px; margin: 0px; list-style: none; border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgb(241, 242, 243); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; outline: none; box-sizing: border-box; line-height: 20px; display: flex;\"><span class=\"aps-1co\" style=\"padding: 7px 10px; margin: 0px; list-style: none; border: none; outline: none; box-sizing: border-box; line-height: 1.5; float: left; min-height: 34px; display: inline-block; width: 651px;\">Hybrid Dual SIM (Nano-SIM, dual stand-by)<br style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; box-sizing: border-box; line-height: 1.5;\">Splash resistant</span></div></li></ul></div></div></div><p><span style=\"background-color: rgb(255, 255, 255);\"></span><br></p></ul>', 'Red,Black,White', NULL, '300', NULL, 'https://www.mobiledokan.co/product/xiaomi-redmi-note-7s/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1648277107186134.jpg', 'public/media/product/1648277107337838.jpg', 'public/media/product/1648277107408252.jpg', 1, NULL, NULL),
(10, 7, 12, 5, 'Huawei Mate 20 pro', 'Huawei-111', '20', '<ul class=\"a-unordered-list a-vertical a-spacing-none\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(17, 17, 17); padding: 0px; font-family: Arial, sans-serif; font-size: 13px;\"><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">GSM 850 / 900 / 1800 / 1900 - SIM 1 &amp; SIM 2 3G bands: 800 / 850 / 900 / 1700(AWS) / 1900 / 2100 4G bands: 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 6(900), 7(2600), 8(900), 9(1800), 12(700), 17(700), 18(800), 19(800), 20(800), 26(850), 28(700), 32(1500), 34(2000), 38(2600), 39(1900), 40(2300)</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">AMOLED 6.39\", 1440 x 3120 pixels</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">HiSilicon Kirin 980 (7 nm), Octa-core (2x2.6 GHz Cortex-A76 &amp; 2x1.92 GHz Cortex-A76 &amp; 4x1.8 GHz Cortex-A55), Mali-G76 MP10</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">128GB + 6GB + Nano Memory (takes up the SIM 2 slot)</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">International version with no warranty. Will work on most GSM networks, but not on CDMA (Sprint, Verizon, etc.)</span></li></ul>', 'Blue,Black', NULL, '400', NULL, 'https://www.amazon.com/Huawei-Mate-LYA-L29-128GB-International/dp/B07JZ64BWC', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'public/media/product/1648277307640424.jpg', 'public/media/product/1648277307692796.jpg', 'public/media/product/1648277307736143.jpg', 1, NULL, NULL),
(11, 1, 2, 13, 'Mens Slive Tshirt', 'M-23923', '80', '<h3 class=\"h-text-bs h-margin-b-default\" tabindex=\"-1\" style=\"margin-right: 0px; margin-left: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px !important; margin-bottom: 15px !important;\">Specifications</h3><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Sizing:</b>&nbsp;Men</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Material:</b>&nbsp;60% Cotton, 40% Polyester</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Length:</b>&nbsp;Below waist</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Features:</b>&nbsp;Short sleeve, Pullover</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Neckline:</b>&nbsp;Crew</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Item Style:</b>&nbsp;Graphic tees</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Garment sleeve style:</b>&nbsp;Basic sleeve</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Care and Cleaning:</b>&nbsp;Machine wash &amp; Tumble dry</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">TCIN</b>:&nbsp;54664612<hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">UPC</b>:&nbsp;490450208598<hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">Item Number (DPCI)</b>:&nbsp;045-02-0859<hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">Origin</b>:&nbsp;Imported</div>', 'Blue,green,black,white,purple', 'xl,xxl,M,L', '10', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, 'public/media/product/1648277661725100.jpg', 'public/media/product/1648277661766007.jpg', 'public/media/product/1648277661800884.jpg', 1, NULL, NULL),
(12, 1, 2, 10, 'Simple T-shirt', 'M-28433', '80', '<h3 class=\"h-text-bs h-margin-b-default\" tabindex=\"-1\" style=\"margin-right: 0px; margin-left: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px !important; margin-bottom: 15px !important;\">Specifications</h3><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Sizing:</b>&nbsp;Men</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Material:</b>&nbsp;60% Cotton, 40% Polyester</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Length:</b>&nbsp;Below waist</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Features:</b>&nbsp;Short sleeve, Pullover</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Neckline:</b>&nbsp;Crew</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Item Style:</b>&nbsp;Graphic tees</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Garment sleeve style:</b>&nbsp;Basic sleeve</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div style=\"outline: 0px;\"><b style=\"font-weight: bold;\">Care and Cleaning:</b>&nbsp;Machine wash &amp; Tumble dry</div><hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">TCIN</b>:&nbsp;54664612<hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">UPC</b>:&nbsp;490450208598<hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">Item Number (DPCI)</b>:&nbsp;045-02-0859<hr style=\"margin-top: 15px; margin-bottom: 15px; border-top-color: rgb(214, 214, 214);\"></div><div style=\"outline: 0px; color: rgb(51, 51, 51); font-family: Targetica, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><b style=\"font-weight: bold;\">Origin</b>:&nbsp;Imported</div>', 'Black,Red,White,Blue,Orange', 'L,M,Sm,Xsm', '18', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1648277743427663.jpg', 'public/media/product/1648277743484332.jpg', 'public/media/product/1648277743534608.jpg', 1, NULL, NULL),
(13, 7, 13, 7, 'Lenovo Ideapad 700 , 15Psk', 'Len-423894', '40', '<span style=\"font-family: Arial, Helvetica, sans-serif;\">54050731 - &gt;&gt; - Lenovo Ideapad 700 15isk 80ru00clmh is a very creative transparent PNG image(786x587), which is uploaded by our user. Whether you are a graphic designer, an educator, or an advertising planner, the png picture material will benefit your project. Sccpre.cat are recruiting more designers to participate in the maintenance of this image community, which expects to create more copyright-free original artworks for users. If you like design, feel free to contact us.</span>', 'Black,Blue', NULL, '300', NULL, 'https://www.sccpre.cat/show/ihiTomx_54050731-lenovo-ideapad-700-15isk-80ru00clmh/', NULL, NULL, NULL, 1, NULL, NULL, NULL, 'public/media/product/1648277981563615.png', 'public/media/product/1648277981675333.png', 'public/media/product/1648277981774714.png', 1, NULL, NULL),
(14, 7, 13, 8, 'Assus laptop Folio 2018', 'Hp-4823', '20', '<strong style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 75, 76);\">Title:</strong><span style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\">&nbsp;Assus Laptop Folio 2019</span><br style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\"><strong style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 75, 76);\">PNG Image Dimension:</strong><span style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\">&nbsp;1872x1487</span><br style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\"><strong style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 75, 76);\">File Size:</strong><span style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\">&nbsp;1000 GB</span><br style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\"><strong style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 75, 76);\">Screen Type:</strong><span style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\">&nbsp;Full HD</span><br style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\"><strong style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 75, 76);\">Posted on:</strong><span style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\">&nbsp;Apr 28th, 2018</span><br style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\"><strong style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 75, 76);\">Category:</strong><span style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\">&nbsp;</span><a href=\"http://www.pngmart.com/image/category/electronics\" rel=\"category tag\" style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(255, 66, 42); background-color: rgb(255, 255, 255);\">Electronics</a><br style=\"color: rgb(75, 75, 76); font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px;\"><strong style=\"border: 0px; font-family: Lato, Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 75, 76);\">Tags:&nbsp;<a href=\"http://www.pngmart.com/image/tag/laptop\" rel=\"tag\" style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(255, 66, 42);\">Laptop</a></strong>', 'Black,White,Silver,Blue', NULL, '400', NULL, 'http://www.pngmart.com/image/87108', NULL, NULL, NULL, 1, NULL, NULL, NULL, 'public/media/product/1648278182312863.png', 'public/media/product/1648278182504692.png', 'public/media/product/1648278182726560.png', 1, NULL, NULL),
(15, 7, 13, 11, 'Dell Inspiron  Laptop', 'Del-2347', '80', '<ul class=\"a-unordered-list a-vertical a-spacing-none\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(17, 17, 17); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;\"><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Fun and functional 2 in 1 laptop</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Windows 10S operating System</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">14.0-Inch HD (1366 x 768) LED-backlit Touch Display</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">8th Generation Intel Core i3-8145u Processor (4MB Cache, up to 3.9 GHz)</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">4GB (4Gx1) DDR4, 2666MHz</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">Intel UHD Graphics 620 with Shared Graphics memory</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">128GB M.2 PCIe Solid State Drive</span></li></ul><div aria-live=\"polite\" class=\"a-row a-expander-container a-expander-inline-container\" style=\"box-sizing: border-box; width: 366.813px; color: rgb(17, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;\"><div aria-expanded=\"true\" class=\"a-expander-content a-expander-extend-content a-expander-content-expanded\" style=\"box-sizing: border-box; overflow: hidden;\"><ul class=\"a-unordered-list a-vertical a-spacing-none\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 18px; padding: 0px;\"><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">No Optical Drive</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">3-In1 media card Reader, USB 3.0, USB 2.0</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"box-sizing: border-box;\">3-Cell 42Whr Battery (integrated)</span></li></ul></div></div>', 'Black,Maroon,Blue', NULL, '430', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 'public/media/product/1648278335168430.png', 'public/media/product/1648278335251359.png', 'public/media/product/1648278335320435.png', 1, NULL, NULL),
(16, 6, 19, 19, 'Computer Desk', 'C-13222', '40', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Computer Desk / Table is an elegant study computer table that ensures heightened efficiency for users, particularly on account of its well finished surface and stylish design. Agaba integrates a below storage drawer in addition to a pull-out keyboard &amp; mouse shelf and also includes a spacious CPU stand where you can place any standard sized CPU unit with great convenience &amp; accessibility, at the same time compact design insures less space coverage by this table.</p><ul style=\"box-sizing: border-box; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\"><li style=\"box-sizing: border-box;\">Compact and space saving computer table.</li><li style=\"box-sizing: border-box;\">keyboard drawer.</li><li style=\"box-sizing: border-box;\">Tower compartment for CPU and UPS</li><li style=\"box-sizing: border-box;\">Drawer</li><li style=\"box-sizing: border-box;\">Material: HDF</li></ul><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\"><strong style=\"box-sizing: border-box;\">Approximate Dimensions:</strong></p><ul style=\"box-sizing: border-box; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\"><li style=\"box-sizing: border-box;\">Width: 80 cm</li><li style=\"box-sizing: border-box;\">Depth: 50 cm</li><li style=\"box-sizing: border-box;\">Height: 76 cm</li></ul>', 'Wood,Black', NULL, '240', NULL, 'https://www.konga.com/product/computer-desk-with-single-drawer-key-board-casing-cpu-and-ups-3984944', NULL, NULL, 1, NULL, NULL, NULL, 1, 'public/media/product/1648744107939176.jpg', 'public/media/product/1648744108402274.png', 'public/media/product/1648744108501526.jpg', 1, NULL, NULL);
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `buyone_getone`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(17, 6, 19, 20, 'White Computer Desk', 'C-2377', '40', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Whether you work at home a lot or just want a stylish accent piece, this computer desk offers modern function and style. Constructed from wood and finished in a beautiful white color with chrome finish hardware. The desk features a floating top, with a keyboard drawer, storage drawer, file cabinet and a storage cabinet, giving it an endless design and plenty of storage space. The file cabinet can hold both legal and letter size files and will be perfect for keeping your home office space neat and clean of clutter while holding supplies right within reach. There will be so much to like with this desk in your home.&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\"><br style=\"box-sizing: border-box;\">&nbsp;Desk dimensions: 29.5 inches High x 55 inches Wide x 23.5 inches Deep</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Product Features: Keyboard Tray</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Style: Modern, Contemporary, Traditional, Casual, Transitional</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Material: Wood, Metal, MDF</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Assembly: product already assembled</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Desk Type: Student Desks, Computer Desks, Writing Desks, Workstation Desks</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Furniture Frame Material: Wood</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Exact Color: White</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Finish: Chrome Finish, White Finish</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(143, 143, 143); font-family: &quot;Helvetica Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, sans-serif; font-size: 15px;\">Color: White</p>', 'Black,White', NULL, '300', NULL, 'https://www.konga.com/product/home-and-office-white-computer-desk-with-drawers-and-cabinets-3870660', NULL, NULL, 1, NULL, 1, NULL, 1, 'public/media/product/1648744264789592.jpg', 'public/media/product/1648744264861293.jpg', 'public/media/product/1648744264909071.jpg', 1, NULL, NULL),
(18, 2, 21, 21, 'Women Jacket', 'w-2742', '36', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', 'yellow,Orange,Red,Blue,Black', 'Xl,M,Sm,L', '30', NULL, 'https://www.lipsum.com/', NULL, NULL, NULL, NULL, 1, NULL, 1, 'public/media/product/1648748114065249.jpg', 'public/media/product/1648748114368581.jpg', 'public/media/product/1648748114529065.jpg', 1, NULL, NULL),
(19, 2, 11, 21, 'Pakistani Kurtis', 'w-2308948', '40', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', 'Pink,Orange,Blue,Black,White', 'M,L,Sm', '34', NULL, 'https://www.lipsum.com/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1648748241780266.jpg', 'public/media/product/1648748241838502.jpg', 'public/media/product/1648748241897737.jpg', 1, NULL, NULL),
(20, 5, 7, 17, 'Men Smart Watch', 'W-238', '80', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', 'Black,Blue,White', NULL, '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'public/media/product/1648832711385910.jpg', 'public/media/product/1648832711898914.jpg', 'public/media/product/1648832711944646.jpg', 1, NULL, NULL),
(21, 5, 7, 18, 'Yellow Smart Watch', 'w-1111', '80', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', 'Yellow,Black,red', NULL, '70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'public/media/product/1648832767555680.jpg', 'public/media/product/1648832767590602.jpg', 'public/media/product/1648832767617316.jpg', 1, NULL, NULL),
(22, 7, 15, 9, 'Canon 1100D', 'C-7813', '20', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', 'Black ,Blue', NULL, '400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1648833406423733.png', 'public/media/product/1648833406523338.png', 'public/media/product/1648833406600824.png', 1, NULL, NULL),
(23, 7, 12, 20, 'JBl Speaker', 'Jbl-101', '20', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', 'Black,White', NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'public/media/product/1648833583349976.jpg', 'public/media/product/1648833583405052.jpg', 'public/media/product/1648833583443808.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `bing_analytics` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `meta_author`, `meta_tag`, `meta_description`, `google_analytics`, `bing_analytics`, `created_at`, `updated_at`) VALUES
(1, 'LH Ecommerce', 'Learn Hunter', 'Ecommerce,Online Store', 'lorem ipsum etc etce ect ;learn hunter is one of the best youtibe channle .....', '112d12812891', '217312381', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `vat`, `shipping_charge`, `shopname`, `email`, `phone`, `address`, `logo`, `created_at`, `updated_at`) VALUES
(1, '0', '7', 'Echovel', 'echovel18@gmail.com', '01900000000', 'Dhaka mirpur 1204 muktobangla', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `ship_city`, `created_at`, `updated_at`) VALUES
(1, '2', 'Sohidul Islam', '01961363543', 'sohidulislam353@gmail.com', 'Dhaka gandaria sadhona', 'Dhaka', NULL, NULL),
(2, '3', 'Masud Khan', '01961363543', 'sohidulislam353@gmail.com', 'Dhaka Dhanmondi 32 Kalabagan math', 'Dhaka', NULL, NULL),
(3, '4', 'Sohidul Islam', '01961363543', 'sohidulislam343@gmail.com', 'Dhaka Dhanmondi 32 Kalabagan math', 'Dhaka', NULL, NULL),
(4, '5', 'Masud Khan', '01961363543', 'sohidulislam@gmail.com', 'sadas', 'sdas', NULL, NULL),
(5, '6', 'Sohidul Islam', '01961363543', 'sohidulislam353@gmail.com', 'sadas', 'sdas', NULL, NULL),
(6, '7', 'Sohidul Islam', '01961363543', 'sohidulislam353@gmail.com', 'sadas', 'sdas', NULL, NULL),
(7, '8', 'Sohidul Islam', '01961363543', 'sohidulislam@gmail.com', 'sadas', 'sdas', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `youtube`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '01961363543', '01961363543', 'sohidulislam353@gmail.com', 'EchoStore', 'Dhaka Mirpur Hazir Biriyanispani', 'https://www.facebook.com/pie24', 'https://www.facebook.com/pie24', 'https://www.facebook.com/pie24', 'https://www.facebook.com/pie24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pants', NULL, NULL),
(2, 1, 'Shirt & T-shirt', NULL, NULL),
(3, 1, 'Shoes', NULL, NULL),
(4, 2, 'Hijab and Scarf', NULL, NULL),
(5, 2, 'Three piece', NULL, NULL),
(6, 2, 'Shoes', NULL, NULL),
(7, 5, 'Men\'s Watch', NULL, NULL),
(8, 5, 'Women\'s watch', NULL, NULL),
(9, 5, 'Child Watch', NULL, NULL),
(10, 1, 'Punjabi & Pajama', NULL, NULL),
(11, 2, 'Kurtis', NULL, NULL),
(12, 7, 'Mobile & Tablet', NULL, NULL),
(13, 7, 'Laptop', NULL, NULL),
(14, 7, 'Desktop', NULL, NULL),
(15, 7, 'Camera', NULL, NULL),
(16, 7, 'Television', NULL, NULL),
(17, 7, 'Refrigerator', NULL, NULL),
(18, 6, 'Bed Room', NULL, NULL),
(19, 6, 'Official', NULL, NULL),
(20, 6, 'Dining', NULL, NULL),
(21, 2, 'Jacket', NULL, NULL),
(22, 1, 'Jacket', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `avatar`, `provider`, `provider_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohidul Islam', NULL, 'sohidulislam@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$AXmPJQ.tg/8z5VJr6Z9Ar.XJzte2Ytw058vRAes3CxI7CXwAr/CT6', NULL, '2019-10-04 23:27:57', '2019-10-04 23:27:57'),
(2, 'Jahidul Islam', NULL, 'jahidulislam@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$t58WdGEyeKN5e/80mbWoRev4WSW8ANTJugJW.NfosJx31W0qxbjEq', NULL, '2019-10-05 04:47:42', '2019-10-05 04:47:42'),
(4, 'SI Sohel', '01938242329', 'sohidulislam353@gmail.com', NULL, 'google', '109254826656088542444', NULL, NULL, NULL, '2019-11-06 09:50:11', '2019-11-06 09:50:11'),
(5, 'Learn Hunter', '01938242329', 'sanjidakhan459@gmail.com', NULL, 'google', '100321672557195433473', NULL, NULL, NULL, '2019-11-30 08:16:19', '2019-11-30 08:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 3, 15, NULL, NULL),
(7, 3, 13, NULL, NULL),
(8, 3, 17, NULL, NULL),
(9, 4, 23, NULL, NULL),
(10, 4, 21, NULL, NULL),
(11, 4, 20, NULL, NULL),
(12, 5, 17, NULL, NULL),
(13, 5, 22, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
