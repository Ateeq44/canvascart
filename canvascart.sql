-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 01:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canvascart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `created_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HP', 'hp', '1', '1', '2024-03-12 19:00:00', '2024-03-25 02:27:28'),
(2, 'Dell', 'dell', '1', '1', '2024-03-07 19:00:00', NULL),
(5, 'Samsung', 'samsung', '1', '1', '2024-03-25 02:15:04', '2024-03-25 02:15:04'),
(6, 'Huawei', 'huawei', '1', '1', '2024-03-25 02:28:24', '2024-03-25 02:52:46'),
(7, 'Redmi', 'redmi', '1', '1', '2024-03-24 19:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `category_description`, `image`, `status`, `top`, `parent_id`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Kids and Baby', 'kids-and-baby', 'Test Description', '[\"171091516795.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-03-20 01:12:47', '2024-03-20 01:12:47'),
(2, 'Mobiles & Tablets', 'mobiles-tablets', 'Test Description', '[\"171136088448.webp\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:31:23', '2024-03-25 05:01:24'),
(3, 'Computers & Laptops', 'computers-laptops', 'Test Description', '[\"171091508844.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:31:49', '2024-03-20 01:11:28'),
(4, 'TV, Audio / Video, Gaming & Wearables', 'tv-audio-video-gaming-wearables', 'Test Description', '[\"171091510448.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:32:21', '2024-03-20 01:11:44'),
(5, 'Cameras', 'cameras', 'Test Description', '[\"171091511568.png\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:33:01', '2024-03-20 01:11:55'),
(6, 'Home and Kitchen', 'home-and-kitchen', 'Test Description', '[\"170473880681.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:33:26', '2024-01-09 02:33:26'),
(7, 'Beauty & Personal Care', 'beauty-personal-care', 'Test Description', '[\"170473884678.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:34:06', '2024-01-09 02:34:06'),
(8, 'Home Appliances', 'home-appliances', 'Test Description', '[\"170904836241.jpg\"]', NULL, '0', NULL, 1, NULL, '2024-02-27 10:39:23', '2024-02-27 10:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'User', 'test@test.com', '012345678', 'How are you?', '2024-02-05 04:17:36', '2024-02-05 04:17:36'),
(10, 'Ateeq Ur', 'Rehman', 'ateeqrehman4344@gmail.com', '+923060434479', 'fdsaaaaaa', '2024-02-05 04:36:00', '2024-02-05 04:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `color`, `size`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Red', 'S', 1, NULL, NULL, NULL),
(2, 'Blue', 'M', 1, NULL, NULL, NULL),
(3, 'Green', 'L', 1, NULL, NULL, NULL),
(4, 'Yellow', 'XL', 1, NULL, NULL, NULL),
(5, 'Gray', 'XXL', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_01_06_142141_create_categories_table', 1),
(5, '2024_01_06_142308_create_products_table', 1),
(6, '2024_01_06_142342_create_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_memory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_cpus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_cable_length` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_memory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hard_disk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu_speed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_offering` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `touch_pad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processor_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_system` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery_life` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processpr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wireless_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_adapter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_camera` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battert_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera_pixel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cam_front_pixel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_warranty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camra_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_cores` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screen_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_slot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty_policy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty_period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wranty_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkg_Weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dang_goods` text COLLATE utf8mb4_unicode_ci,
  `mobile_feature` text COLLATE utf8mb4_unicode_ci,
  `network_conn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `admin_approval` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `is_feature` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `color` text COLLATE utf8mb4_unicode_ci,
  `size` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `slug`, `cat_id`, `subcat_id`, `brand`, `g_memory`, `barcode`, `model`, `num_cpus`, `ci_cable_length`, `system_memory`, `hard_disk`, `cpu_speed`, `soft_offering`, `touch_pad`, `processor_type`, `operating_system`, `dis_size`, `g_card`, `battery_life`, `processpr`, `wireless_type`, `ac_adapter`, `protection`, `model_year`, `no_camera`, `battert_capacity`, `camera_pixel`, `sim_type`, `cam_front_pixel`, `ram`, `body_type`, `e_warranty`, `camra_back`, `number_of_cores`, `screen_type`, `sim_slot`, `resolution`, `quantity`, `seller_sku`, `warranty_policy`, `warranty_period`, `wranty_type`, `pkg_Weight`, `length`, `width`, `height`, `dang_goods`, `mobile_feature`, `network_conn`, `short_description`, `long_description`, `admin_approval`, `price`, `special_price`, `discount_start_date`, `discount_end_date`, `images`, `is_feature`, `status`, `color`, `size`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Apple iPhone 15 Pro Max - 6.7\" Inch Display', 'apple-iphone-15-pro-max-67-inch-display', 2, 5, 'No Brand', '2GB', NULL, NULL, NULL, NULL, '16GB', '3.5TB', '2-3GHz', 'Windows', 'Yes', 'Tri Core', 'iOS', '4.1 - 4.5 Inch', 'AMD', 'Not Specified', 'Black', 'Bluetooth', 'Yes', 'Not Specified', 'Not Specified', '3', 'Under 1000 mAh', '300-400 PPI', '3.6 - 4 Inch', '2-3MP', 'Other', 'Not Specified', 'Yes', '21MP and up', 'Dual Core', 'AMOLED', '2', 'HD', '746', '4d5sd45s4d5', 'Ut optio eos conse', '6', 'Adipisicing deserunt', '2.0', '10', '5', '2', '[\"Battery\",\"Flammable\",\"Liquid\",\"None\"]', '[\"Dustproof \\/ Waterproof\",\"Expandable Memory\",\"Fingerprint Sensor\",\"Touchscreen\",\"GPS\",\"Compass\",\"WiFi\",\"NFC\",\"Always-on Display\",\"Fingerprint\",\"Face Recognition\",\"Accelerometer\",\"Proximity\",\"Barometer\"]', '[\"2G\",\"3G\",\"4G\",\"5G\",\"GSM\"]', 'Apple iPhone 15 Pro Max - 6.7\" Inch Display', 'Display\r\nSuper Retina XDR display\r\n6.1‑inch (diagonal) all‑screen OLED display\r\n2556‑by‑1179-pixel resolution at 460 ppi\r\n\r\n\r\nDynamic Island\r\nAlways-On display\r\nProMotion technology with adaptive refresh rates up to 120Hz\r\nHDR display\r\nTrue Tone\r\nWide color (P3)\r\n\r\n\r\nChip\r\nA17 Pro chip\r\nNew 6‑core CPU with 2 performance and 4 efficiency cores\r\nNew 6‑core GPU\r\nNew 16‑core Neural Engine\r\n\r\n\r\n\r\n\r\nCamera\r\nPro camera system\r\n48MP Main: 24 mm, ƒ/1.78 aperture \r\n12MP Ultra Wide: 13 mm, ƒ/2.2 aperture \r\n12MP 2x Telephoto (enabled by quad‑pixel sensor) \r\n12MP 5x Telephoto: 120 mm, ƒ/2.8 aperture\r\n5x optical zoom in, 2x optical zoom out; 10x optical zoom range\r\n\r\n\r\n\r\n\r\nVideo Recording\r\n4K video recording at 24 fps, 25 fps, 30 fps, or 60 fps\r\n1080p HD video recording at 25 fps, 30 fps, or 60 fps\r\n720p HD video recording at 30 fps\r\nCinematic mode up to 4K HDR at 30 fps\r\nAction mode up to 2.8K at 60 fps', '1', '262,990', '262,990', NULL, NULL, '[\"171136020632.webp\",\"171136020664.webp\",\"171136020620.webp\"]', '0', '1', '[\"Black\"]', '[\"Black\"]', 4, NULL, '2024-03-25 04:50:06', '2024-03-25 04:50:06'),
(2, 'Oren Romero', 'oren-romero', 2, 5, 'Dell', '2GB', 'Ut et id odit dolore', NULL, 'Rerum voluptate fugi', 'Magnam quo quidem eo', '16GB', '3.5TB', '2-3GHz', 'Windows', 'Yes', 'Dual-core Cortex-A9, NovaThor U8500', 'Mac OS X 10.10 or 10.11', '4.6 - 5 Inch', 'AMD', 'Not Specified', 'Black', 'Bluetooth', 'Yes', 'Corning Gorilla Glass 2', '2009', '7', '30001 mAh to 50000 mAh', 'Below 200 PPI', '3.6 - 4 Inch', '23 MP', '8GB', 'Sedan', 'Yes', '9 MP', 'Single Core', 'AMOLED', 'Single', 'Full HD', '670', 'Adipisci cupiditate', 'Ut in ut et alias eo', 'Sed esse rem ab poss', 'Excepturi fugiat non', 'Corporis et delectus', 'Optio exercitatione', 'Sed laborum aliquid', 'Asperiores sit persp', '[\"Flammable\",\"Liquid\"]', 'null', 'null', 'Est aute minim faci', 'Ipsum amet asperna', '1', '737', '919', NULL, NULL, '[\"171154126955.webp\",\"171154126920.jpg\",\"171154126915.webp\"]', '0', '1', '[\"Blue\",\"Brown\",\"Amber Yellow\"]', 'null', 4, NULL, '2024-03-27 07:07:49', '2024-03-27 07:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `seller_centers`
--

CREATE TABLE `seller_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card_front` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` longtext COLLATE utf8mb4_unicode_ci,
  `bank_statement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acco_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iban_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_centers`
--

INSERT INTO `seller_centers` (`id`, `store_name`, `slug`, `email`, `phone`, `country`, `city`, `address`, `id_card_front`, `id_card_back`, `id_card_name`, `cnic`, `address1`, `bank_statement`, `acco_holder_name`, `iban_no`, `bank_name`, `branch_name`, `created_by`, `created_at`, `updated_at`) VALUES
(4, 'Lane Vincent', 'lane-vincent', NULL, '+1 (482) 721-8427', 'Qui deserunt distinc', 'Sequi elit elit co', 'Quaerat sapiente dol', '[\"170860677366.jpg\"]', '[\"170860677394.jpg\"]', 'Eagan Wong', '38403-5698454-8', '425 Fabien Freeway', '[\"170860677336.png\"]', 'Miranda Garrison', '5733333333333333348574379', 'WorldFirst', 'Anastasia Kramer', '4', '2024-02-22 07:59:33', '2024-02-22 07:59:33'),
(6, 'star-co', 'star-co', NULL, '03060434479', 'Pakistan', 'Sargodha', '760 Cowley Parkway\r\nReiciendis t', '[\"171151957560.jpg\"]', '[\"17115195757.jpg\"]', 'dsa dfsdj fksdj', '38403-5698454-8', '760 Cowley Parkway\r\nReiciendis rerum aut ea consequatur quis magnam fugiat voluptatibus nostrum est quae sint', '[\"171151957559.png\"]', 'Miranda Garrison', '5733333333333333348574379', 'ASKARI BANK LIMITED', 'Shad Crosby', '5', '2024-03-27 01:06:15', '2024-03-27 01:06:15'),
(7, 'Stat-flux', 'stat-flux', NULL, '454566466465465', 'pakisatan', 'Lahore', 'Vitae rem similique', '[\"171152018222.jpg\"]', '[\"171152018287.jpg\"]', 'Hu Marshall', '38403-5698454-8', 'quis magnam fugiat voluptatibus nostrum est quae sint', '[\"171152018273.png\"]', 'Dominique Kent', '85395509380953409509348', 'BANK AL FALAH LIMITED', 'Cailin Ford', '6', '2024-03-27 01:16:22', '2024-03-27 02:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(11) NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `cat_id`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'New Computer and Accessories', 'new_computer_accessories', 3, '1', '2024-02-29 19:00:00', NULL),
(2, 'Desktops Computers', 'desktops_computers', 3, '1', '2024-02-29 19:00:00', NULL),
(3, 'Shoes', 'shoes', 1, '1', '2024-02-29 19:00:00', NULL),
(4, 'Cloth', 'cloth', 1, '1', '2024-03-05 19:00:00', NULL),
(5, 'Mobile', 'mobile', 2, '1', '2024-03-10 19:00:00', NULL),
(6, 'Tablets', 'tablets', 2, '1', '2024-03-12 19:00:00', NULL),
(7, 'Tablet Accessories', 'tablet_accessories', 2, '1', '2024-03-12 19:00:00', NULL),
(8, 'Gadgets', 'gadgets', 2, '1', '2024-03-19 19:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `gender`, `role`, `status`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$NMYJQAjNGhx5X8Z.V6Inluy.YKOEWX4012BDGoaVpiIAxrltGc9Vq', NULL, NULL, '1', 0, NULL, NULL, '2024-01-07 02:02:53', '2024-03-27 02:55:12'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$6zFfdtm4p0V91qqbfAs7aOTHPq9tKryAkT7fGNEKUb/6onq83WCfG', NULL, NULL, '3', 0, NULL, NULL, '2024-01-09 02:10:45', '2024-01-22 06:04:35'),
(3, 'test', 'test@test.com', NULL, '$2y$10$XZ97nyC.aSNVl./HWIuJc.x.rij9Q1y2fwnDqbd5GDACmggYErDZS', NULL, NULL, '3', 0, NULL, NULL, '2024-02-01 08:18:17', '2024-02-01 08:18:17'),
(4, 'seller', 'test-seller@gmail.com', NULL, '$2y$10$Q05bGRSdwOyITvICXXVDbeCYYoW7uByEJy//MV/5xG/fpgFA9c69m', NULL, NULL, '2', 1, NULL, NULL, '2024-02-02 06:40:08', '2024-02-02 06:40:08'),
(5, 'seller1', 'test-seller1@gmail.com', NULL, '$2y$10$s2Zl16x1orpoNQh25vflSumiigwNqqe.vaKpYGr.UMOMDOTf8G5T2', NULL, NULL, '2', 1, NULL, NULL, '2024-02-15 07:10:45', '2024-02-15 07:10:45'),
(6, 'seller2', 'test-seller2@gmail.com', NULL, '$2y$10$XDPRB/gXBnq1igpOJ/ZdO.NKy6FAPGlpkN0n9QN0vJIMIbgZTJWwq', NULL, NULL, '2', 0, NULL, NULL, '2024-03-27 01:14:38', '2024-03-27 02:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_created_by_foreign` (`created_by`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_created_by_foreign` (`created_by`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_centers`
--
ALTER TABLE `seller_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller_centers`
--
ALTER TABLE `seller_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
