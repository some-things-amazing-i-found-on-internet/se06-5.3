-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 09:21 AM
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
-- Table structure for table `new_food`
--

CREATE TABLE `new_food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_unit` varchar(255) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_image` varchar(255) NOT NULL,
  `restaurant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_food`
--

INSERT INTO `new_food` (`food_id`, `food_name`, `food_price`, `food_unit`, `food_description`, `food_image`, `restaurant_id`) VALUES
(7, 'burger', 30000, 'đ', 'Là một cái bánh burger', 'https://bukethuy.s3.ap-southeast-1.amazonaws.com/php/chup-anh-thuc-an-1.jpg', 10),
(8, 'pizza', 120000, 'đ', 'Là một chiếc bánh pizza', 'https://bukethuy.s3.ap-southeast-1.amazonaws.com/php/Veggie-mania.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_food`
--
ALTER TABLE `new_food`
  ADD PRIMARY KEY (`food_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_food`
--
ALTER TABLE `new_food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
