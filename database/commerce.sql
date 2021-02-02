-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 03:17 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(21, 1, 12),
(22, 1, 2),
(23, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(5) NOT NULL,
  `id_pendaftar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `id_pendaftar`, `nama`) VALUES
(1, 'syahrul', 'syahrul'),
(2, 'syahrul', 'syahrul');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 152.00, './assets/products/1.png', '2020-03-28 11:08:57'),
(2, 'Redmi', 'Redmi Note 7', 122.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Redmi', 'Redmi Note 6', 122.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Redmi', 'Redmi Note 5', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Redmi', 'Redmi Note 4', 122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Redmi', 'Redmi Note 8', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'Redmi', 'Redmi Note 9', 122.00, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'Redmi', 'Redmi Note', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Samsung', 'Samsung Galaxy S6', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'Samsung', 'Samsung Galaxy S7', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Apple', 'Apple iPhone 5', 152.00, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Apple', 'Apple iPhone 6', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'Apple', 'Apple iPhone 7', 152.00, './assets/products/15.png', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `kode_pendaftar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `kode_pendaftar`) VALUES
(1, 'syahrul', 'syahrul', 'admin', 'syahrul'),
(2, 'syahrul', 'syahrul15', 'user', 'syahrul');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
