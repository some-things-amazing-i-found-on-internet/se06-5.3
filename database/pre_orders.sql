-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 12:20 PM
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
  `delivery_fee` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pre_orders`
--

INSERT INTO `pre_orders` (`id`, `order_id`, `customer_id`, `food_id`, `quantity_order`, `delivery_fee`, `order_status`) VALUES
(94, 0, 8, 10751832, 5, 27000, 0),
(95, 0, 8, 10751831, 1, 27000, 0),
(96, 0, 8, 10751834, 1, 27000, 0),
(97, 3, 8, 10679993, 1, 13000, 0),
(98, 3, 8, 10679999, 2, 13000, 0),
(99, 5, 8, 11120157, 4, 17000, 0),
(100, 5, 8, 11120160, 4, 17000, 0),
(101, 7, 8, 12669712, 1, 10000, 0),
(102, 7, 8, 12669729, 2, 10000, 0),
(103, 9, 8, 2322066, 1, 28000, 0),
(104, 9, 8, 2322078, 3, 28000, 0),
(105, 11, 8, 11325505, 1, 27000, 0),
(106, 11, 8, 11325516, 4, 27000, 0),
(107, 13, 8, 7822254, 1, 29000, 0),
(108, 13, 8, 7822276, 1, 29000, 0),
(109, 13, 8, 7822285, 1, 29000, 0),
(110, 13, 8, 10762734, 2, 29000, 0),
(111, 17, 8, 2322078, 1, 11000, 0),
(112, 17, 8, 2322080, 2, 11000, 0),
(113, 17, 8, 2322066, 1, 11000, 0),
(114, 17, 8, 2322212, 1, 11000, 0),
(115, 17, 8, 2322285, 2, 11000, 0),
(116, 22, 8, 10762734, 1, 26000, 0),
(117, 22, 8, 10762735, 1, 26000, 0),
(118, 22, 8, 7822230, 1, 26000, 0),
(119, 22, 8, 7822254, 1, 26000, 0),
(120, 26, 8, 10679999, 1, 12000, 0),
(121, 26, 8, 10679993, 2, 12000, 0),
(122, 28, 8, 11325505, 2, 10000, 0),
(123, 28, 8, 11325516, 4, 10000, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
