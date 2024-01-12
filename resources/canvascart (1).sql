-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 04:14 PM
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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `size`, `color`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'S', 'Red', '2024-01-11 11:16:06', '2024-01-11 11:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(7, 'Clothes for Mens', 'clothes-for-mens', 'Test Description', '[\"170473861733.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:30:17', '2024-01-09 02:30:17'),
(8, 'Footwear', 'footwear', 'Test Description', '[\"170473868362.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:31:23', '2024-01-09 02:31:23'),
(9, 'Bags', 'bags', 'Test Description', '[\"170473870984.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:31:49', '2024-01-09 02:31:49'),
(10, 'Watches', 'watches', 'Test Description', '[\"170473874152.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:32:21', '2024-01-09 02:32:21'),
(11, 'House Decorate', 'house-decorate', 'Test Description', '[\"170473878180.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:33:01', '2024-01-09 02:33:01'),
(12, 'Home and Kitchen', 'home-and-kitchen', 'Test Description', '[\"170473880681.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:33:26', '2024-01-09 02:33:26'),
(13, 'Beauty & Personal Care', 'beauty-personal-care', 'Test Description', '[\"170473884678.jpg\"]', NULL, '1', NULL, 1, NULL, '2024-01-09 02:34:06', '2024-01-09 02:34:06');

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
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `short_detail` text COLLATE utf8mb4_unicode_ci,
  `long_detail` longtext COLLATE utf8mb4_unicode_ci,
  `admin_approval` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_feature` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `slug`, `cat_id`, `short_detail`, `long_detail`, `admin_approval`, `price`, `selling_price`, `discount_start_date`, `discount_end_date`, `images`, `is_feature`, `status`, `size`, `color`, `sku`, `qty`, `dimension`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'T shirt For Men & Boys (Round Neck) -  Pack of 5', 't-shirt-for-men-boys-round-neck-pack-of-5', 7, 'T shirt For Men & Boys (Round Neck) -  Pack of 5 for mens pack of  t shirt', '<h2 class=\"pdp-mod-section-title outer-title\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(250, 250, 250);color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;height:52px;letter-spacing:normal;line-height:52px;margin:0px;orphans:2;overflow:hidden;padding:0px 24px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-overflow:ellipsis;text-transform:none;white-space:nowrap;widows:2;word-spacing:0px;\" data-spm-anchor-id=\"a2a0e.pdp.0.i9.330553e33WUxRW\">Product details of &nbsp;T&nbsp;shirt&nbsp;For&nbsp;Men&nbsp;&amp;&nbsp;Boys&nbsp;(Round&nbsp;Neck)&nbsp;-&nbsp;&nbsp;Pack&nbsp;of&nbsp;5</h2><div class=\"pdp-product-detail\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-size:12px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px;position:relative;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" data-spm=\"product_detail\" bis_skin_checked=\"1\"><div class=\"pdp-product-desc \" style=\"background-color:rgb(255, 255, 255);box-sizing:border-box;height:auto;margin:0px;overflow-y:hidden;padding:5px 14px 5px 24px;\" bis_skin_checked=\"1\"><div class=\"html-content pdp-product-highlights\" style=\"border-bottom:1px solid rgb(239, 240, 245);margin:0px;overflow:hidden;padding:11px 0px 16px;word-break:break-word;\" bis_skin_checked=\"1\"><ul><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Brand Name: Select by Daraz</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Gender: Male</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Material: 100% Chief Value Cotton</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Style: Casual</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Body Fit: Regular</li></ul></div><div class=\"html-content detail-content\" style=\"border-bottom:1px solid rgb(239, 240, 245);height:auto;line-height:19px;margin:16px 0px 0px;overflow-y:hidden;padding:0px 0px 16px;position:relative;word-break:break-word;\" bis_skin_checked=\"1\">Select by Daraz - Pack of 5 - Basic Round Neck T-Shirt For Men</div><div class=\"pdp-mod-specification\" style=\"border-bottom:1px solid rgb(239, 240, 245);font-size:14px;margin:16px 0px 0px;padding:0px 0px 10px;\" bis_skin_checked=\"1\"><h2 class=\"pdp-mod-section-title \" style=\"color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-weight:500;letter-spacing:0px;line-height:19px;margin:0px;overflow:hidden;padding:0px;text-overflow:ellipsis;white-space:nowrap;\">Specifications of &nbsp;T&nbsp;shirt&nbsp;For&nbsp;Men&nbsp;&amp;&nbsp;Boys&nbsp;(Round&nbsp;Neck)&nbsp;-&nbsp;&nbsp;Pack&nbsp;of&nbsp;5</h2><div class=\"pdp-general-features\" style=\"margin:0px;padding:0px;\" bis_skin_checked=\"1\"><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\">&nbsp;</li><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">SKU</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">282999660_PK-1523289390</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Apparel</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">Casual</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Age Range</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">28 to 35 Years</div></div></div></div></div>', '1', '2,800', '2400', '2024-01-10', '2024-01-19', '[\"1.webp\",\"2.webp\",\"3.webp\"]', '1', '1', '[\"S\",\"M\",\"L\"]', '[\"Red\",\"Blue\",\"Green\"]', '7878789', '203', NULL, 1, NULL, '2024-01-09 02:43:43', '2024-01-09 09:29:38'),
(2, 'Stylish Black Collar Design Full Sleeve T-shirt For Men\'s by HY Textile', 'stylish-black-collar-design-full-sleeve-t-shirt-for-men-s-by-hy-textile', 7, 'badgeStylish Black Collar Design Full Sleeve T-shirt For Men\'s by HY Textile', '<h2 class=\"pdp-mod-section-title outer-title\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(250, 250, 250);color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;height:52px;letter-spacing:normal;line-height:52px;margin:0px;orphans:2;overflow:hidden;padding:0px 24px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-overflow:ellipsis;text-transform:none;white-space:nowrap;widows:2;word-spacing:0px;\" data-spm-anchor-id=\"a2a0e.pdp.0.i10.6464150cQWEDSC\">Product details of Stylish Black Collar Design Full Sleeve T-shirt For Men\'s by HY Textile</h2><div class=\"pdp-product-detail\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-size:12px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px;position:relative;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" data-spm=\"product_detail\" bis_skin_checked=\"1\"><div class=\"pdp-product-desc height-limit\" style=\"background-color:rgb(255, 255, 255);box-sizing:border-box;height:780px;margin:0px;overflow-y:hidden;padding:5px 14px 5px 24px;\" bis_skin_checked=\"1\"><div class=\"html-content pdp-product-highlights\" style=\"border-bottom:1px solid rgb(239, 240, 245);margin:0px;overflow:hidden;padding:11px 0px 16px;word-break:break-word;\" bis_skin_checked=\"1\"><ul><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Brand Name HY textile</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Style Collar Design</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Article Full Sleeve T-shirt</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Fabric Cotton Tshirt</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Color Black</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Size small medium large XL</li><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Hand wash only</li></ul></div></div></div>', '1', '849', '688', '2024-01-19', '2024-01-26', '[\"170474016614.webp\",\"170474016693.webp\",\"170474016674.webp\"]', '1', '1', '[\"S\",\"M\"]', '[\"Green\",\"Yellow\"]', '77866', '406', NULL, 1, NULL, '2024-01-09 02:56:06', '2024-01-09 09:37:14'),
(3, '100% Pure TOP Quality BAG for Laptop', '100-pure-top-quality-bag-for-laptop', 9, '100% Pure TOP Quality BAG for Laptop, University, College school travel laptop business boy boys men', '<p><span style=\"background-color:rgb(248,250,252);color:rgb(15,23,42);font-family:&quot;Hanken Grotesk&quot;, system-ui, -apple-system, BlinkMacSystemFont, Ubuntu, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Laptop bags for men are designed to carry laptops, other electronic devices and accessories.&nbsp;</span></span></p><p><span style=\"background-color:rgb(248,250,252);color:rgb(15,23,42);font-family:&quot;Hanken Grotesk&quot;, system-ui, -apple-system, BlinkMacSystemFont, Ubuntu, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">They are available in various sizes, styles, and designs to meet the needs of men with different preferences and lifestyles. Some popular features of laptop bags for men include padded compartments, multiple pockets, durable materials, and ergonomic design for maximum comfort.&nbsp;</span></span></p><p><span style=\"background-color:rgb(248,250,252);color:rgb(15,23,42);font-family:&quot;Hanken Grotesk&quot;, system-ui, -apple-system, BlinkMacSystemFont, Ubuntu, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Popular brands that offer laptop bags for men include Samsonite, Dell, Herschel, and Fossil. When choosing a laptop bag for men, it\'s important to consider factors such as the size and weight of the bag, the type of laptop or device it will fit, and the intended use.</span></span></p>', '1', '950', '786', '2024-01-12', '2024-01-19', '[\"170474047775.webp\",\"170474047728.webp\",\"170474047770.webp\"]', '1', '1', '[]', '[\"Red\",\"Blue\"]', '788c78f8sdf8', '203', NULL, 1, NULL, '2024-01-09 03:01:17', '2024-01-09 09:37:32'),
(4, 'Bags for mens, Laptop bag', 'bags-for-mens-laptop-bag', 9, 'Product details of Laptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.\r\nLaptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.\r\nLaptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.\r\nSpecifications of Laptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.\r\nBrandNo BrandSKU417187029_PK-1979123643', '<h2 class=\"pdp-mod-section-title outer-title\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(250, 250, 250);color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;height:52px;letter-spacing:normal;line-height:52px;margin:0px;orphans:2;overflow:hidden;padding:0px 24px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-overflow:ellipsis;text-transform:none;white-space:nowrap;widows:2;word-spacing:0px;\" data-spm-anchor-id=\"a2a0e.pdp.0.i7.1a7562a0p8VOe6\">Product details of Laptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.</h2><div class=\"pdp-product-detail\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-size:12px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px;position:relative;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" data-spm=\"product_detail\" bis_skin_checked=\"1\"><div class=\"pdp-product-desc \" style=\"background-color:rgb(255, 255, 255);box-sizing:border-box;height:auto;margin:0px;overflow-y:hidden;padding:5px 14px 5px 24px;\" bis_skin_checked=\"1\"><div class=\"html-content pdp-product-highlights\" style=\"border-bottom:1px solid rgb(239, 240, 245);margin:0px;overflow:hidden;padding:11px 0px 16px;word-break:break-word;\" bis_skin_checked=\"1\"><ul><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;column-span:all;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Laptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.</li></ul></div><div class=\"html-content detail-content\" style=\"border-bottom:1px solid rgb(239, 240, 245);height:auto;line-height:19px;margin:16px 0px 0px;overflow-y:hidden;padding:0px 0px 16px;position:relative;word-break:break-word;\" bis_skin_checked=\"1\">Laptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.</div><div class=\"pdp-mod-specification\" style=\"border-bottom:1px solid rgb(239, 240, 245);font-size:14px;margin:16px 0px 0px;padding:0px 0px 10px;\" bis_skin_checked=\"1\"><h2 class=\"pdp-mod-section-title \" style=\"color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-weight:500;letter-spacing:0px;line-height:19px;margin:0px;overflow:hidden;padding:0px;text-overflow:ellipsis;white-space:nowrap;\">Specifications of Laptop bag, Dell laptop bag, Water Resistance, Water proof, Travelling bag, Laptop bags for men, Business purpose bag, office bag, dell bag, comfortable bag, Student bag, university bag.</h2><div class=\"pdp-general-features\" style=\"margin:0px;padding:0px;\" bis_skin_checked=\"1\"><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Brand</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">No Brand</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">SKU</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">417187029_PK-1979123643</div></div></div></div></div>', '1', '927', '898', NULL, NULL, '[\"170474072324.webp\",\"170474072386.webp\",\"170474072346.webp\"]', '1', '1', '[]', '[\"Blue\",\"Green\"]', '7897786df7s7f', '233', NULL, 1, NULL, '2024-01-09 03:05:23', '2024-01-09 09:38:01'),
(5, 'badgeBata - Northstar - Shoes for Men/ Sneakers for Men', 'badgebata-northstar-shoes-for-men-sneakers-for-men', 8, 'High quality footwear for all segments but has also been designing shoes in with the changing fashions and trends.', '<h2 class=\"pdp-mod-section-title outer-title\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(250, 250, 250);color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;height:52px;letter-spacing:normal;line-height:52px;margin:0px;orphans:2;overflow:hidden;padding:0px 24px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-overflow:ellipsis;text-transform:none;white-space:nowrap;widows:2;word-spacing:0px;\">Product details of Bata - Northstar - Shoes for Men/ Sneakers for Men</h2><div class=\"pdp-product-detail\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-size:12px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px;position:relative;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" data-spm=\"product_detail\" bis_skin_checked=\"1\"><div class=\"pdp-product-desc \" style=\"background-color:rgb(255, 255, 255);box-sizing:border-box;height:auto;margin:0px;overflow-y:hidden;padding:5px 14px 5px 24px;\" bis_skin_checked=\"1\"><div class=\"html-content pdp-product-highlights\" style=\"border-bottom:1px solid rgb(239, 240, 245);margin:0px;overflow:hidden;padding:11px 0px 16px;word-break:break-word;\" bis_skin_checked=\"1\"><ul><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;column-span:all;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Trendy and new designs Orignal brand products</li></ul></div><div class=\"html-content detail-content\" style=\"border-bottom:1px solid rgb(239, 240, 245);height:auto;line-height:19px;margin:16px 0px 0px;overflow-y:hidden;padding:0px 0px 16px;position:relative;word-break:break-word;\" bis_skin_checked=\"1\"><p style=\"display:block;font-size:14px;margin-block:1em;margin-inline:0px;margin:0px;padding:0px;\">High quality footwear for all segments but has also been designing shoes in with the changing fashions and trends.</p></div><div class=\"pdp-mod-specification\" style=\"border-bottom:1px solid rgb(239, 240, 245);font-size:14px;margin:16px 0px 0px;padding:0px 0px 10px;\" bis_skin_checked=\"1\"><h2 class=\"pdp-mod-section-title \" style=\"color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-weight:500;letter-spacing:0px;line-height:19px;margin:0px;overflow:hidden;padding:0px;text-overflow:ellipsis;white-space:nowrap;\">Specifications of Bata - Northstar - Shoes for Men/ Sneakers for Men</h2><div class=\"pdp-general-features\" style=\"margin:0px;padding:0px;\" bis_skin_checked=\"1\"><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Brand</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">Bata</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">SKU</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">365779715_PK-1818251303</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Apparel</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">Not Specified</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Age Range</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">Standard</div></div><div class=\"box-content\" style=\"margin:28px 0px 0px;padding:0px;\" bis_skin_checked=\"1\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.7b2c7593Ilr1ea\"><p style=\"margin-left:0px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:table-cell;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px;width:140px;word-break:break-word;\">What’s in the box</span></span></p><div class=\"html-content box-content-html\" style=\"display:table-cell;margin:0px;padding:0px 0px 0px 18px;word-break:break-word;\" bis_skin_checked=\"1\">High quality footwear for all segments but has also been designing shoes in with the changing fashions and trends.</div></div></div></div></div>', '1', '4400', '3340', '2024-01-12', '2024-01-27', '[\"170474122437.webp\",\"170474122440.webp\",\"170474122493.webp\"]', '1', '1', '[]', '[\"Blue\",\"Yellow\"]', 'yuu7878hj', '406', NULL, 1, NULL, '2024-01-09 03:13:44', '2024-01-09 09:38:23'),
(6, 'Bata Sneakers for Men', 'bata-sneakers-for-men', 8, 'High quality footwear for all segments but has also been designing shoes in with the changing fashions and trends.', '<h2 class=\"pdp-mod-section-title outer-title\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(250, 250, 250);color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;height:52px;letter-spacing:normal;line-height:52px;margin:0px;orphans:2;overflow:hidden;padding:0px 24px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-overflow:ellipsis;text-transform:none;white-space:nowrap;widows:2;word-spacing:0px;\" data-spm-anchor-id=\"a2a0e.pdp.0.i6.a4222760IoZG69\">Product details of Bata - Bata Sneakers for Men</h2><div class=\"pdp-product-detail\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-size:12px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px;position:relative;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" data-spm=\"product_detail\" bis_skin_checked=\"1\"><div class=\"pdp-product-desc \" style=\"background-color:rgb(255, 255, 255);box-sizing:border-box;height:auto;margin:0px;overflow-y:hidden;padding:5px 14px 5px 24px;\" bis_skin_checked=\"1\"><div class=\"html-content pdp-product-highlights\" style=\"border-bottom:1px solid rgb(239, 240, 245);margin:0px;overflow:hidden;padding:11px 0px 16px;word-break:break-word;\" bis_skin_checked=\"1\"><ul><li class=\"\" style=\"box-sizing:border-box;break-inside:avoid;column-span:all;font-size:14px;line-height:18px;list-style:none;margin:0px;padding:0px 0px 0px 15px;position:relative;text-align:left;word-break:break-word;\">Trendy and new designs Orignal brand products</li></ul></div><div class=\"html-content detail-content\" style=\"border-bottom:1px solid rgb(239, 240, 245);height:auto;line-height:19px;margin:16px 0px 0px;overflow-y:hidden;padding:0px 0px 16px;position:relative;word-break:break-word;\" bis_skin_checked=\"1\"><p style=\"display:block;font-size:14px;margin-block:1em;margin-inline:0px;margin:0px;padding:0px;\">High quality footwear for all segments but has also been designing shoes in with the changing fashions and trends.</p></div><div class=\"pdp-mod-specification\" style=\"border-bottom:1px solid rgb(239, 240, 245);font-size:14px;margin:16px 0px 0px;padding:0px 0px 10px;\" bis_skin_checked=\"1\"><h2 class=\"pdp-mod-section-title \" style=\"color:rgb(33, 33, 33);font-family:Roboto-Medium;font-size:14px;font-weight:500;letter-spacing:0px;line-height:19px;margin:0px;overflow:hidden;padding:0px;text-overflow:ellipsis;white-space:nowrap;\">Specifications of Bata - Bata Sneakers for Men</h2><div class=\"pdp-general-features\" style=\"margin:0px;padding:0px;\" bis_skin_checked=\"1\"><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Brand</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">Bata</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">SKU</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">387020683_PK-1909474169</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Apparel</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">Not Specified</div><ul><li class=\"key-li\" style=\"box-sizing:border-box;display:inline-block;line-height:18px;margin:0px 0px 8px;padding:0px 15px;vertical-align:top;width:490px;\"><span style=\"color:rgb(117,117,117);font-size:14px;\"><span class=\"key-title\" style=\"display:inline-block;margin:0px 18px 0px 0px;padding:0px;vertical-align:top;width:140px;word-break:break-word;\">Age Range</span></span></li></ul><div class=\"html-content key-value\" style=\"display:inline-block;margin:0px;padding:0px;width:306px;word-break:break-word;\" bis_skin_checked=\"1\">Standard</div></div></div></div></div>', '1', '2700', '2099', NULL, NULL, '[\"170474146723.webp\",\"1704741467100.webp\",\"170474146793.webp\",\"170474146766.webp\"]', '1', '1', '[]', '[\"Green\",\"Yellow\"]', 'hjkhj7677', '400', NULL, 1, NULL, '2024-01-09 03:17:47', '2024-01-09 03:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `address` text COLLATE utf8mb4_unicode_ci,
  `about_me` text COLLATE utf8mb4_unicode_ci,
  `employer_status` text COLLATE utf8mb4_unicode_ci,
  `exp_level` text COLLATE utf8mb4_unicode_ci,
  `current_employer` text COLLATE utf8mb4_unicode_ci,
  `highest_degree` text COLLATE utf8mb4_unicode_ci,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `instructor_degree` text COLLATE utf8mb4_unicode_ci,
  `login_sso_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_sso_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `image`, `email_verified_at`, `password`, `role`, `address`, `about_me`, `employer_status`, `exp_level`, `current_employer`, `highest_degree`, `gender`, `instructor_degree`, `login_sso_type`, `login_sso_secret`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, NULL, NULL, '$2y$10$NMYJQAjNGhx5X8Z.V6Inluy.YKOEWX4012BDGoaVpiIAxrltGc9Vq', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-07 02:02:53', '2024-01-07 02:02:53'),
(2, 'user', 'user@gmail.com', NULL, NULL, NULL, '$2y$10$6zFfdtm4p0V91qqbfAs7aOTHPq9tKryAkT7fGNEKUb/6onq83WCfG', '3', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, '2024-01-09 02:10:45', '2024-01-09 02:11:57');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_created_by_foreign` (`created_by`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
