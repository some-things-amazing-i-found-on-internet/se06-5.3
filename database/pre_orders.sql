-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 05:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `pre_orders`
--

CREATE TABLE `pre_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity_order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pre_orders`
--

INSERT INTO `pre_orders` (`id`, `order_id`, `customer_id`, `food_id`, `quantity_order`, `status`) VALUES
(23, 0, 8, 10679993, 2, 0),
(24, 0, 8, 10679999, 1, 0),
(25, 2, 8, 10751831, 1, 0),
(26, 2, 8, 10751832, 1, 0),
(27, 2, 8, 10751834, 2, 0),
(28, 5, 8, 2322066, 1, 0),
(29, 5, 8, 2322078, 2, 0),
(30, 7, 8, 10717380, 2, 0),
(31, 7, 8, 10717381, 1, 0),
(32, 9, 8, 10717380, 2, 0),
(33, 9, 8, 10717381, 1, 0),
(34, 11, 8, 10680003, 1, 0),
(35, 11, 8, 10680010, 1, 0),
(36, 11, 8, 10680015, 4, 0),
(37, 14, 8, 10679993, 1, 0),
(38, 14, 8, 10679999, 1, 0),
(39, 14, 8, 10680003, 1, 0),
(40, 17, 8, 10680019, 4, 0),
(41, 18, 8, 10751831, 4, 0),
(42, 19, 8, 12669712, 1, 0),
(43, 19, 8, 5936544, 3, 0),
(44, 21, 8, 2322209, 1, 0),
(45, 21, 8, 2322197, 1, 0),
(46, 21, 8, 2322194, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pre_orders`
--
ALTER TABLE `pre_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pre_orders`
--
ALTER TABLE `pre_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
