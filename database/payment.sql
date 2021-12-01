-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 03:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `vaild` varchar(255) DEFAULT NULL,
  `method` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `id_user`, `type`, `number`, `vaild`, `method`) VALUES
(1, 8, 'VISA', '4567000000000000', '23/6/2025', 3),
(2, 8, 'MASTER', '5315136541239547', '10/02/2025', 3),
(3, 8, 'BIDV', '22210003863607', '', 5),
(4, 8, 'Ví ShopeePay', '0823544435', '', 1),
(5, 8, 'Tiền mặt', '', '', 2),
(8, 8, 'Ví ShopeePay', '0123456789', '', 1),
(9, 8, 'Ví ShopeePay', '0123456712', '', 1),
(10, 8, 'Ví ShopeePay', '0123456123', '', 1),
(11, 8, 'VISA', '4929094122143244', '6/2021', 3),
(12, 8, 'TECHCOMBANK', '0823544435', '', 5),
(14, 7, 'Tiền mặt', '', '', 2),
(15, 8, 'Ví ShopeePay', '0123236712', '', 1),
(16, 8, 'Ví ShopeePay', '0175356712', '', 1),
(17, 8, 'AGRIBANK', '9704325145697413', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
