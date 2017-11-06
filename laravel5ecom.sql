-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 06:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel5ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'umar', 'umar@gmail.com', '$2y$10$PMD.Bxw2YPpfPB3fc2bbY.cUWiW3bkC9tU8glQJ4Dsho1L8OMG1Pu', 'V3sfA89YazjtxuwHYskz1hBKtO1OuoRQnFS5ddjeFvANRPz3Yk0uzvIE23QU', '2017-10-19 22:18:27', '2017-10-19 22:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, '0', '2017-11-01 07:00:17', '2017-11-01 07:12:33'),
(3, '2', '2017-11-01 07:04:09', '2017-11-01 07:04:09'),
(5, '2', '2017-11-01 07:05:22', '2017-11-01 07:05:22'),
(6, '2', '2017-11-01 07:07:00', '2017-11-01 07:07:00'),
(7, '2', '2017-11-01 07:09:04', '2017-11-01 07:09:04'),
(8, '0', '2017-11-01 07:15:34', '2017-11-01 07:15:34'),
(9, '8', '2017-11-01 07:16:04', '2017-11-01 07:16:04'),
(10, '8', '2017-11-01 07:17:05', '2017-11-01 07:17:05'),
(11, '8', '2017-11-01 07:17:36', '2017-11-01 07:17:36'),
(12, '8', '2017-11-01 07:18:25', '2017-11-01 07:18:25'),
(13, '0', '2017-11-01 07:20:01', '2017-11-01 07:20:01'),
(14, '13', '2017-11-01 07:20:42', '2017-11-01 07:20:42'),
(15, '13', '2017-11-01 07:21:43', '2017-11-01 07:21:43'),
(16, '13', '2017-11-01 07:22:31', '2017-11-01 07:22:31'),
(17, '13', '2017-11-01 07:23:22', '2017-11-01 07:23:22'),
(18, '0', '2017-11-01 07:24:15', '2017-11-01 07:24:15'),
(19, '18', '2017-11-01 07:25:27', '2017-11-01 07:25:27'),
(20, '18', '2017-11-01 07:26:02', '2017-11-01 07:26:02'),
(21, '18', '2017-11-01 07:26:37', '2017-11-01 07:26:37'),
(22, '18', '2017-11-01 07:27:03', '2017-11-01 07:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `name`) VALUES
(1, 2, 'en', 'Medicine & Health'),
(2, 2, 'ur', 'میڈیسن & ہیلتھ'),
(3, 3, 'en', 'Allergy & Sinus'),
(4, 3, 'ur', 'الرجی & سی نس'),
(5, 5, 'en', 'Cough, Cold , Flu'),
(6, 5, 'ur', 'نزلہ ، زکام ، کھانسی'),
(7, 6, 'en', 'Diabetes Managment'),
(8, 6, 'ur', 'زیابیطس'),
(9, 7, 'en', 'Digestion & Nausea'),
(10, 7, 'ur', 'معاونِ ہضم & متلی'),
(11, 8, 'en', 'Beauty'),
(12, 8, 'ur', 'خوبصورتی'),
(13, 9, 'en', 'Bath & Spa'),
(14, 9, 'ur', 'باتھ & سپاہ'),
(15, 10, 'en', 'Beauty Clearance'),
(16, 10, 'ur', 'خوبصورتی کلییرینس'),
(17, 11, 'en', 'Hair Care'),
(18, 11, 'ur', 'بالوں کی حفاظت'),
(19, 12, 'en', 'Skin Care'),
(20, 12, 'ur', 'جلد کی حفاظت'),
(21, 13, 'en', 'Personal Care'),
(22, 13, 'ur', 'پرسنل کیؑیر'),
(23, 14, 'en', 'Oral Care'),
(24, 14, 'ur', 'اورل کییؑر'),
(25, 15, 'en', 'Men\'s Care'),
(26, 15, 'ur', 'مینز کیؑر'),
(27, 16, 'en', 'Feminine Care'),
(28, 16, 'ur', 'خواتیں کییر'),
(29, 17, 'en', 'Foot Care'),
(30, 17, 'ur', 'پیروں کی خفاظت'),
(31, 18, 'en', 'Vitamins & Supplements'),
(32, 18, 'ur', 'وٹامینز & سپلیمینٹز'),
(33, 19, 'en', 'Ache Pains'),
(34, 19, 'ur', 'ایچیز درد'),
(35, 20, 'en', 'Acne Solutions'),
(36, 20, 'ur', 'چہرے کے دانوں کا حل'),
(37, 21, 'en', 'Allergy & Sinus'),
(38, 21, 'ur', 'الرجی & سی نس'),
(39, 22, 'en', 'Aloe Vera'),
(40, 22, 'ur', 'ایلو ویرا');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'umar', 'mughal', 'umar@gmail.com', '$2y$10$WMevZ.SfpQVsXXmvsDEvgeSV4CAj8dqnf25lEhV0Y6s5YDlfZQBDm', 'c2qzs3OJMDLqHvM58ihvfUlX1svAJbgFgvYQyjx9knn0CoRFTduCT0YwVRTU', '2017-11-02 01:45:24', '2017-11-02 01:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_addresses`
--

INSERT INTO `customer_addresses` (`id`, `customer_id`, `first_name`, `last_name`, `phone`, `email`, `address`, `city`, `state`, `postal_code`, `address_type`, `created_at`, `updated_at`) VALUES
(1, 5, 'Umar', 'Mughal', '03436085438', 'umar@gmail.com', 'Wazirabad, Abu-al-fateh wali . P.O.B: pathanwali', 'Wazirabad', 'Punjab', '52000', 2, '2017-11-06 10:58:44', '2017-11-06 10:58:44');

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
(3, '2017_10_12_145354_create_admins_table', 1),
(4, '2017_10_12_145624_create_sliders_table', 1),
(5, '2017_10_14_083047_create_pages_table', 1),
(7, '2017_10_21_131613_create_products_table', 3),
(8, '2014_10_12_000000_create_customers_table', 4),
(13, '2017_11_01_071329_create_product_translations_table', 6),
(15, '2017_10_20_082318_create_categories_table', 7),
(16, '2017_11_01_113124_create_category_translations_table', 7),
(19, '2017_11_02_122602_create_record_types_table', 9),
(23, '2017_11_05_100503_create_customer_addresses_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `price`, `quantity`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(83, '35', 95, 85, 3, 'product_img_1.jpg', '2017-11-01 07:44:30', '2017-11-01 07:44:30'),
(84, '65', 565, 81, 3, 'product_img_2.jpg', '2017-11-01 07:44:30', '2017-11-01 07:44:30'),
(85, '51', 457, 18, 3, 'product_img_3.jpg', '2017-11-01 07:44:30', '2017-11-01 07:44:30'),
(86, '35', 973, 11, 3, 'product_img_4.jpg', '2017-11-01 07:44:30', '2017-11-01 07:44:30'),
(87, '32', 217, 35, 5, 'product_img_5.jpg', '2017-11-01 07:44:54', '2017-11-01 07:44:54'),
(88, '33', 325, 82, 5, 'product_img_6.jpg', '2017-11-01 07:44:55', '2017-11-01 07:44:55'),
(89, '78', 72, 63, 5, 'product_img_7.jpg', '2017-11-01 07:44:55', '2017-11-01 07:44:55'),
(90, '63', 81, 0, 5, 'product_img_8.jpg', '2017-11-01 07:44:55', '2017-11-01 07:44:55'),
(91, '13', 832, 61, 9, 'product_img_9.jpg', '2017-11-01 07:45:52', '2017-11-01 07:45:52'),
(92, '89', 285, 20, 9, 'product_img_10.jpg', '2017-11-01 07:45:52', '2017-11-01 07:45:52'),
(93, '21', 61, 97, 9, 'product_img_11.jpg', '2017-11-01 07:45:52', '2017-11-01 07:45:52'),
(94, '54', 144, 77, 9, 'product_img_12.jpg', '2017-11-01 07:45:52', '2017-11-01 07:45:52'),
(95, '52', 622, 58, 14, 'product_img_13.jpg', '2017-11-01 07:46:35', '2017-11-01 07:46:35'),
(96, '38', 894, 17, 14, 'product_img_14.jpg', '2017-11-01 07:46:35', '2017-11-01 07:46:35'),
(97, '33', 992, 9, 14, 'product_img_15.jpg', '2017-11-01 07:46:35', '2017-11-01 07:46:35'),
(98, '68', 96, 65, 14, 'product_img_16.jpg', '2017-11-01 07:46:36', '2017-11-01 07:46:36'),
(99, '7', 259, 22, 19, 'product_img_17.jpg', '2017-11-01 07:54:53', '2017-11-01 07:54:53'),
(100, '61', 788, 80, 19, 'product_img_18.jpg', '2017-11-01 07:54:53', '2017-11-01 07:54:53'),
(101, '94', 526, 19, 19, 'product_img_19.jpg', '2017-11-01 07:54:53', '2017-11-01 07:54:53'),
(102, '34', 835, 2, 19, 'product_img_20.jpg', '2017-11-01 07:54:53', '2017-11-01 07:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`) VALUES
(93, 83, 'en', 'Distinctio natus quia nemo est.', 'Hic sint fugiat vitae sequi officia. Totam alias et natus dolor sunt placeat laudantium illum. Mollitia alias aspernatur quos repudiandae consequatur similique molestiae quis. Est sit earum qui sed eum.'),
(94, 83, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(95, 84, 'en', 'Enim voluptates deserunt laudantium dignissimos qui.', 'Nesciunt aperiam harum delectus quasi et debitis. Dolor accusantium laborum qui necessitatibus quos hic. Eaque libero commodi nihil voluptas repudiandae inventore alias. Impedit quia incidunt vero corporis nobis id odio.'),
(96, 84, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(97, 85, 'en', 'Voluptatem et asperiores velit et numquam labore perferendis.', 'Doloremque rem similique hic debitis at et dolorum ad. Tempore qui aspernatur totam architecto itaque qui laborum. Numquam placeat et et est quis quia architecto porro. Qui est labore sed.'),
(98, 85, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(99, 86, 'en', 'Eum sint possimus quod enim eum sed.', 'Blanditiis nihil ea iusto qui voluptate. Harum sint tenetur ipsum non veritatis praesentium corrupti. Ea veniam facere magni ad excepturi mollitia culpa.'),
(100, 86, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(101, 87, 'en', 'Voluptatum ut vel omnis est eum qui.', 'Eveniet tempore sed ratione quisquam. Nostrum quis et voluptatem nobis nesciunt corrupti tenetur. In alias vitae consequatur nesciunt nam sit. Dicta atque perspiciatis quaerat quibusdam.'),
(102, 87, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(103, 88, 'en', 'Aspernatur et tempora praesentium natus voluptatem voluptatem.', 'Vel at consequatur beatae minima. Quibusdam et voluptatem voluptas doloremque atque quasi. Occaecati quia ut eum incidunt. Minus voluptatem non nostrum et sapiente numquam.'),
(104, 88, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(105, 89, 'en', 'Aut tenetur deserunt minima a sint est accusamus.', 'Sunt aliquid eum iste suscipit doloremque sunt. Nesciunt dolor delectus qui et. Mollitia voluptates quia voluptatem ipsa voluptatem aliquam omnis sunt.'),
(106, 89, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(107, 90, 'en', 'Quo accusantium asperiores quia numquam.', 'Velit et aliquam nostrum aliquid rem molestiae totam. Qui enim voluptate sint est aliquid quisquam ex. Occaecati provident tempora dolores. Est libero corrupti et.'),
(108, 90, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(109, 91, 'en', 'Sit aperiam nam esse voluptatum porro quisquam.', 'Quasi necessitatibus quos earum nam. Facilis quo eum laudantium reiciendis beatae vitae. Odit consectetur rem fugit dolorem ea reiciendis placeat.'),
(110, 91, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(111, 92, 'en', 'Illo voluptatem architecto sit et laboriosam rem et.', 'Qui occaecati eos laudantium modi sed quaerat et. Ipsam odio id porro neque reprehenderit alias qui. Blanditiis earum ut et quia alias. Ut repellat sint aut et quia non earum suscipit.'),
(112, 92, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(113, 93, 'en', 'Quia dolorum ea et error.', 'Adipisci fuga illum fuga quaerat natus. Dolore facilis commodi sed doloremque voluptas veniam et. Numquam error occaecati pariatur. Earum sed aut temporibus itaque voluptatem atque.'),
(114, 93, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(115, 94, 'en', 'Nisi perferendis vel perspiciatis error saepe.', 'Enim minus officia minus enim alias sit nostrum. Harum sed quasi delectus est culpa. Maiores omnis voluptas ut. Animi quo cupiditate aperiam mollitia et.'),
(116, 94, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(117, 95, 'en', 'Velit ut ea ea officia magnam non sint.', 'Optio eum omnis est. Et sunt expedita et aliquam repudiandae qui.'),
(118, 95, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(119, 96, 'en', 'At modi consequatur rerum voluptates.', 'Velit dolor vitae qui non. Pariatur qui harum quia ut placeat. Eos quisquam quo aspernatur sit. Et et quasi unde qui voluptatem.'),
(120, 96, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(121, 97, 'en', 'Cupiditate id ea quae minima autem qui.', 'Expedita possimus eveniet beatae qui unde est. Debitis sapiente facere ut autem sit consequuntur. Soluta est recusandae rerum velit. Odio blanditiis voluptates sit nobis unde.'),
(122, 97, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(123, 98, 'en', 'Perspiciatis ea rerum dolores.', 'Itaque officia sit earum ab magni. A rerum optio aperiam placeat.'),
(124, 98, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(125, 99, 'en', 'Et id rerum suscipit deleniti id odit qui.', 'Rem sint voluptates est voluptatum ad tenetur. Totam accusantium sit voluptate fuga deleniti distinctio consectetur. Dicta eveniet necessitatibus qui est qui eos. Quae ea ut et quo sit quia mollitia. Laborum dolor sit odio porro maxime inventore molestiae rem.'),
(126, 99, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(127, 100, 'en', 'Provident non sed ut qui aut voluptatibus.', 'Quae natus similique esse animi molestias. Voluptatum enim debitis qui possimus rerum ut delectus. Accusamus qui minima corporis praesentium. Sapiente sit et aspernatur fuga enim est.'),
(128, 100, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(129, 101, 'en', 'Dolorem ut ipsum quis enim dolores velit animi.', 'Ut numquam doloribus odit exercitationem reiciendis. Ut saepe suscipit quidem consectetur ducimus officia officiis est. Natus in est quam cum.'),
(130, 101, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'),
(131, 102, 'en', 'Ipsa corporis dolorem cum veritatis rem voluptatem quasi.', 'Error voluptatem in ut et quisquam. Illo non et deserunt est sit non. Totam iusto ullam molestiae animi rerum id.'),
(132, 102, 'ur', ' شاپ می پراڈکٹ', 'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے \"متن وہاں موجود مواد ہے، یہاں متن کے مواد\" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر');

-- --------------------------------------------------------

--
-- Table structure for table `record_types`
--

CREATE TABLE `record_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `record_types`
--

INSERT INTO `record_types` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Addresses', '0', NULL, NULL),
(2, 'Default Billing Address', '1', NULL, NULL),
(3, 'Default Shipping Address', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shop Now!', 'Best Quality Medications at Low Prices', 'home_slide_4.jpg', NULL, NULL),
(2, 'Have A Question?', 'Our Pharmacists Are Ready to Help You!', 'home_slide_5.jpg', NULL, NULL),
(3, 'Contact Us Now!', 'Get 10% Off For Reorders Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.', 'home_slide_6.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `record_types`
--
ALTER TABLE `record_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `record_types`
--
ALTER TABLE `record_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
