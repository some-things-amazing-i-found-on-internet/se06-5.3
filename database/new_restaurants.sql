-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 05:33 AM
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
-- Table structure for table `new_restaurants`
--

CREATE TABLE `new_restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_phone` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `manager_phone` varchar(255) NOT NULL,
  `restaurant_email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `restaurant_address` varchar(255) NOT NULL,
  `restaurant_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_restaurants`
--

INSERT INTO `new_restaurants` (`restaurant_id`, `restaurant_name`, `restaurant_phone`, `manager`, `manager_phone`, `restaurant_email`, `city`, `district`, `restaurant_address`, `restaurant_status`) VALUES
(2, 'jhgj', 'jghj', 'jghj', 'jghj', 'dfdf@hghg', 'gdf', 'gdfg', 'gdfg', 2),
(3, 'fsdfsd', '0132234564', 'fsdfsd', '01321324564', 'mnvhgmghm@gmail.com', 'dasda', 'gdfgdf', 'dsadasdasd', 2),
(4, 'bla', '0123456789', 'hieu', '0987654321', 'xyz@gmail', 'ha loi', 'thanh xuan', '334.5 Nguyen Trai', 2),
(5, 'hfg', 'hfgh', 'h', 'kjkj', 'hfgh@jhg', 'khj', 'khj', 'khj', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_restaurants`
--
ALTER TABLE `new_restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_restaurants`
--
ALTER TABLE `new_restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
