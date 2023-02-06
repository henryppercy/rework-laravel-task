-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Feb 06, 2023 at 08:57 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reworklaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Phone'),
(2, 'Laptop'),
(3, 'Earbuds'),
(4, 'Google'),
(5, 'Samsung'),
(6, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(3, 1),
(6, 1),
(1, 2),
(6, 2),
(1, 3),
(4, 3),
(2, 4),
(5, 4),
(2, 5),
(4, 5),
(1, 6),
(5, 6),
(1, 7),
(2, 7),
(5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `description`) VALUES
(1, 'AirPods', '179.00', 83, 'Personalised Spatial Audio with dynamic head tracking places sounds all around you to create a three-dimensional listening experience for music, TV shows, movies and more.'),
(2, 'iPhone 14', '799.00', 68, 'A15 Bionic, with a 5‑core GPU, powers all the latest features and makes graphically intense games and AR apps feel ultra fluid.'),
(3, 'Pixel 7', '599.99', 54, 'The fast and secure Pixel 7, with amazing battery life and advanced camera features.'),
(4, 'Galaxy Book2', '699.00', 120, 'Galaxy Book2 offers a wide 15-inch display with plenty of productivity-boosting space. Neatly framed in a sleek full aluminium body, it delivers style and durability.'),
(5, 'Chromebook', '299.00', 17, 'Chromebooks are designed to help you get things done quickly, securely and easily. Go from working hard to winding down with instant access to your files and favourite apps.'),
(6, 'Galaxy Z Fold4', '1649.99', 23, 'It\'s basically two phones in one. Slimmed down everywhere but the screen, minimised bezels and lightweight materials make Galaxy Z Fold4 even more pocket-friendly.'),
(7, 'Galaxy Book2 Pro 360', '1549.00', 25, 'Galaxy Book2 Pro 360 is the device you’ve been waiting for. Thin and light, this 2-in-1 laptop works perfectly with S Pen and with the enhanced low latency, you can write and draw smoothly like you would with a real pen.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
