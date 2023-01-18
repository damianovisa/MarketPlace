-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 04:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`) VALUES
(1, 4, 2),
(2, 9, 2),
(4, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` double(20,2) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `seller_id`, `name`, `manufacturer`, `description`, `price`, `image`) VALUES
(4, 1, 'Mouse', 'Razer', 'Green themed wired gaming mouse', 49.99, 'razerMouse.webp'),
(5, 1, 'Chair', 'Secret Lab', 'High quality Titan gaming chair', 539.99, 'secretChair.webp'),
(6, 1, 'Keyboard', 'Razer', 'RGB gaming keyboard', 169.99, 'razerKeyboard.jpeg'),
(7, 1, 'Microphone', 'Blue Yeti', 'Black microphone for PC', 119.99, 'micYeti.jpg'),
(8, 1, 'Headset', 'SteelSeries', 'Arctis Pro Gaming Headset with Microphone - Black', 230.49, 'steelseriesHeadset.jpg'),
(9, 1, 'Modern Warfare 2', 'Infinity Ward', '2022 Modern Warfare 2 Video Game PS5', 89.99, 'mw2.jpg'),
(10, 1, 'Xbox Series X', 'Microsoft', 'Xbox Series X 1TB console', 599.99, 'xboxSeriesX.png'),
(11, 1, 'Ps5 controller', 'Sony', 'Ps5 constroller- White', 89.99, 'ps5Controller.webp'),
(12, 1, 'Samsung TV', 'Samsung', 'Samsung QLED Display 4K UltraHD Smart TV - Q60B', 898.00, 'samsungTv.webp');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password_hash` varchar(72) NOT NULL,
  `profile_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `email`, `fname`, `lname`, `password_hash`, `profile_pic`) VALUES
(1, 'sel@gmail.com', 'Sel', 'er', '$2y$10$QDdAuCR07vZsTYOJKGsm2OT3U4AZRU2NNWK9MyU6tt7u6i/4f/ULK', ''),
(2, 'tester@gmail.com', 'Test', 'tes', '$2y$10$kVK/knXy.GNyJqhw8wA6/usSRZP7aeij0nw7/mwxPeHnAkKMIw.Xq', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password_hash` varchar(72) NOT NULL,
  `profile_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `fname`, `lname`, `password_hash`, `profile_pic`) VALUES
(1, 'a@gmail.com', 'a', 'a', '$2y$10$55.X15pEPlP2K0TwbfXq.um7z/fycjSJOTli65flg9YiOVZJssAMK', ''),
(2, 'dami@gmail.com', 'Damiano', 'Visa', '$2y$10$1e9lNExAN32AbVzgnqo1tuZA7ez5VHkYQil32bXrAFiRTRexNxqIO', ''),
(4, 'test@test.com', 'Tester', 'test', '$2y$10$i/W4fur3gHzSI/u.lh8TIO90OiqmvD4DpwnilD/zv4YJY5ML.PHaW', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_productId_fk` (`product_id`),
  ADD KEY `cart_userId_fk` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_sellerID_fk` (`seller_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_productId_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_userId_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_sellerID_fk` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
