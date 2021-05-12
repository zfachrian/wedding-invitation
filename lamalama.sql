-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 08:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamalama`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_description`, `banner_image`, `banner_link`, `created_at`, `updated_at`) VALUES
(1, 'Banner Pertama', 'Description Banner Pertama', 'banner/0NHKGVM2FsmoipDWda7nRCqj7dnglJeOZpGHv6Hh.jpg', NULL, '2021-05-11 19:26:23', '2021-05-11 19:26:23'),
(2, 'Banner Kedua', 'Description Banner Kedua', 'banner/BAmWH8vYU2cCpBt1nueHoMCG6jJFIwslDiGz1yqG.jpg', NULL, '2021-05-11 19:26:41', '2021-05-11 19:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_img`, `category_detail`, `created_at`, `updated_at`) VALUES
(1, 'Long Dress', NULL, 'Dress panjang', '2021-05-11 18:48:59', '2021-05-11 18:48:59'),
(2, 'Jeans', NULL, 'Celana berbahan dasar jeans', '2021-05-11 18:58:44', '2021-05-11 18:58:44'),
(3, 'Jaket', NULL, NULL, '2021-05-11 18:58:56', '2021-05-11 18:58:56');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_05_08_030306_create_banners_table', 1),
(4, '2021_05_08_030521_create_categories_table', 1),
(5, '2021_05_08_030658_create_products_table', 1),
(6, '2021_05_09_031819_create_stores_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` bigint(20) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_store` date DEFAULT NULL,
  `product_exp` date DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_img`, `product_price`, `product_description`, `product_store`, `product_exp`, `categories_id`, `created_at`, `updated_at`) VALUES
(1, 'L0010', 'Kaos polos lengan panjang', 'product/8G5L767TxUoViY443DTp5upIc7cD0Syeh0C6Cjzz.jpg', 30000, 'Hai teman Lama, bagus ga harus mahal. Semua produk kami sudah di kurasi dengan baik ya. Kami memastikan bahwa pakaian dalam kondisi bagus dan layak pakai👌\r\n.\r\n📄Keterangan :\r\nKaos polos lengan panjang\r\nKODE: A0040\r\n*Warna : Merah\r\n*Panjang Baju : 83 cm\r\n*Lingkar Dada : 97 cm\r\n*Kondisi : preloved - bagus\r\n*Harga : Rp 30.000\r\n*bisa ditukar dan dibeli\r\n*Warna bisa berbeda karena pengaruh cahaya\r\n\r\n📢Sebagian hasil penjualan, penukaran/transaksi akan didonasikan kepada saudara-saudara kita yang membutuhkan ya, Teman Lama✨\r\n📢Yuk sembari mengurangi limbah fesyen, Teman Lama juga bisa sekalian berdonasi kepada saudara-saudara kita yang membutuhkan✨\r\n.\r\n📦Order\r\n📞 0895-397-095-179 (Alama - Admin Lamalama)', NULL, NULL, 1, '2021-05-11 19:02:59', '2021-05-11 19:22:37'),
(2, 'L0020', 'Dress Merah Uniqlo', 'product/IA6NL1e1yEYAkosZlMYzIrZq55JEFXb9z6hKPVvJ.png', 50000, NULL, NULL, NULL, 1, '2021-05-11 19:07:38', '2021-05-11 19:07:38'),
(3, 'L0030', 'Dress Zahra Merah Cerah', 'product/GpnLETgcac8p43JuFMVc9SxYRcnENYgSElAob6JT.png', 80000, NULL, NULL, NULL, 1, '2021-05-11 19:09:14', '2021-05-11 19:09:14'),
(4, 'L0040', 'Snow Dress', 'product/URhVaU0pHOUWQAZ4tYPuxR4NZs948HOA3TlzJ453.png', 75000, NULL, NULL, NULL, 1, '2021-05-11 19:10:26', '2021-05-11 19:10:26'),
(5, 'J0010', 'Jeasn Wanita Uniqlo', 'product/cDdkan0omAFq5KkE6NfrHEddIHRGw0pobeA8ElA7.png', 130000, NULL, NULL, NULL, 2, '2021-05-11 19:11:53', '2021-05-11 19:11:53'),
(6, 'J0020', 'Jeans Brand OWL', 'product/WbNYwBJSJpWCWQwlOq2auxaBRUqzFHKNexIlotOL.png', 90000, NULL, NULL, NULL, 2, '2021-05-11 19:12:59', '2021-05-11 19:12:59'),
(7, 'J0030', 'Jeans Abu Abu', 'product/Bc0Rjga1p9bp3l8q2STmoZeRVyTFxIzdO0g8pSmu.png', 65000, NULL, NULL, NULL, 2, '2021-05-11 19:15:31', '2021-05-11 19:15:31'),
(8, 'JK0010', 'Jaket Hijau Tua', 'product/v99AtzEg6BdpP4CplkgpTeJSWrnbFisdB692LZqM.png', 100000, NULL, NULL, NULL, 3, '2021-05-11 19:16:41', '2021-05-11 19:16:41'),
(9, 'JK0020', 'Jaket Jeans', 'product/kdCE5dVY1sJIy5N9nGl0qiS2Qfe0GrM8T1rxB5cd.png', 110000, NULL, NULL, NULL, 3, '2021-05-11 19:17:45', '2021-05-11 19:17:45'),
(10, 'JK0030', 'Jaket Bomber Hitam', 'product/CQJGHPYVt4AIqFLStRpsS2oKPO2CUiRCcywEbWOj.png', 70000, NULL, NULL, NULL, 3, '2021-05-11 19:18:58', '2021-05-11 19:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_text_buy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_text_trade` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_bank_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `store_email`, `store_wa`, `store_phone`, `store_address`, `store_about`, `store_text_buy`, `store_text_trade`, `store_bank_account`, `created_at`, `updated_at`) VALUES
(1, 'Lama Lama Id', 'lamalama@gmail.com', '62812345723', '0812345723', 'Jl Jawa', 'Hai teman Lama, bagus ga harus mahal. Semua produk kami sudah di kurasi dengan baik ya. Kami memastikan bahwa pakaian dalam kondisi bagus dan layak pakai👌', 'Halo saya mau beli nih', 'Halo saya mau tukar nih', 'BCA: 758203951 An Lama Lama', '2021-05-11 18:09:22', '2021-05-11 23:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$3thevPeFTYun9g0JIjqHyu5yRpMgvdyZYA3YQFwRRL1Y68xzP/Uci', '$2y$10$kLpHwDCVF/Lh3CtdAskYw.tgimkj4zJSpYaCJgN.8UGyHbwaOEyP.', '2021-05-11 18:09:22', '2021-05-11 18:38:54'),
(2, 'sapu jagat', 'sapujagat@gmail.com', NULL, '$2y$10$puTfZHT0Z9x2XCGJ/QybJuo0bKJkzJF2fwu0pEaRqmwF1kyFm0XaS', '$2y$10$igv7hsYC/LEmmNwfzwUiUu7700jnx1VI.RJ2IocguAvhUGyUyeM/i', '2021-05-11 18:09:22', '2021-05-11 18:09:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
