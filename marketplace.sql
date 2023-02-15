-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 06:04 PM
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
(42, 21, 5),
(43, 18, 5),
(44, 15, 5),
(45, 20, 6),
(46, 22, 5);

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
  `image` varchar(75) NOT NULL,
  `qty` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `seller_id`, `name`, `manufacturer`, `description`, `price`, `image`, `qty`) VALUES
(13, 3, 'Gaming Headset', 'SteelSeries', 'SteelSeries Arctis Pro PC Gaming Headset', 229.99, 'steelseriesHeadset.jpg', 0),
(15, 4, 'Playstation 5', 'Sony', 'Playstation 5 Console -Digital Edition with Dual Sense Controller', 499.99, 'ps5Digital.webp', 0),
(16, 4, 'Xbox Series X', 'Microsoft', 'Xbox Series X 1TB Console', 599.99, 'xboxSeriesX.png', 0),
(17, 3, 'Samsung TV', 'Samsung', 'Samsung QLED Display 4K UltraHD Smart TV 50\" - Q60B', 699.99, 'samsungTv.webp', 0),
(18, 3, 'Gaming Chair', 'Secret Lab', 'Secretlab TITAN XL 2020 Series Gaming Chair', 539.99, 'secretLabChair.jpg', 0),
(19, 3, 'Mouse', 'Razer', 'Razer DeathAdder V2 Gaming Mouse', 49.99, 'razerMouse.webp', 0),
(20, 5, 'Microphone', 'Yeti', 'Yeti Microphone - Black', 499.99, 'micYeti.jpg', 0),
(21, 3, 'Modern Warfare II', 'Activision', 'Call Of Duty Modern Warfare II - PS5', 89.99, 'mw2.jpg', 0),
(22, 3, 'Nintendo Switch', 'Nintendo', 'Nintendo Switch Console with Neon Red/Blue Joy-Con ', 400.59, 'switch.jpg', 0);

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
(3, 'batman@gmail.com', 'Pruce', 'Blayne', '$2y$10$kgqjZ4rSVNFoLidBJnOL2upp49Razq6VqdJhuwLcUR6k8LbnqoHSC', ''),
(4, 'sel@gmail.com', 'Sel', 'Er', '$2y$10$PhuOLrldh/EcEQyLqNAlBuByAYNJZZb2HdBy2sTMZdyeS8wENbbSS', ''),
(5, 'capece@gmail.com', 'Enrique', 'Capece', '$2y$10$znKNpUoT8sJX89c4PCw2JOmJnaPkRD2WM22kTXAxysmCkCF/I2Sta', '');

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
(5, 'dami@gmail.com', 'Dami', 'Visa', '$2y$10$/9Gy7nvPvz31QQsSZxoplu2HuARcDx7q3q40ZDPokRjybcUGzpuQ2', ''),
(6, 'tim@hotmail.com', 'Timmy', 'Turner', '$2y$10$xKN8JWjuKbVBgaSez1SWCerO2/jPzRlIjrD3XG3s.LD6M6iIYZdYu', '');

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
