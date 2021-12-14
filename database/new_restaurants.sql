-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 01:20 PM
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
  `restaurant_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_restaurants`
--

INSERT INTO `new_restaurants` (`restaurant_id`, `restaurant_name`, `restaurant_phone`, `manager`, `manager_phone`, `restaurant_email`, `city`, `district`, `restaurant_address`) VALUES
(2, 'jhgj', 'jghj', 'jghj', 'jghj', 'dfdf@hghg', 'gdf', 'gdfg', 'gdfg'),
(3, 'fsdfsd', '0132234564', 'fsdfsd', '01321324564', 'mnvhgmghm@gmail.com', 'dasda', 'gdfgdf', 'dsadasdasd');

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
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
