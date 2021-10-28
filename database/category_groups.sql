-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 05:05 PM
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
-- Table structure for table `category_groups`
--

CREATE TABLE `category_groups` (
  `_id` varchar(24) NOT NULL,
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(12) DEFAULT NULL,
  `display_order` varchar(13) DEFAULT NULL,
  `tab_icon` varchar(106) DEFAULT NULL,
  `url_rewrite_name` varchar(18) DEFAULT NULL,
  `parent_category_id` varchar(18) DEFAULT NULL,
  `id` varchar(7) DEFAULT NULL,
  `icon` varchar(89) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_groups`
--

INSERT INTO `category_groups` (`_id`, `code`, `name`, `display_order`, `tab_icon`, `url_rewrite_name`, `parent_category_id`, `id`, `icon`) VALUES
('6047364d61c6f75994bc395d', 'food', 'Đồ ăn', '1', 'https://images.foody.vn/dcat/s270x270/foody-128x128_mainmenuicon-foods-636283959755084729.png', 'food', '1', '1000000', 'https://images.foody.vn/dcat/s270x270/image-dcat-b9833eb4-ea4f-4084-9bca-cbae5d703ce0.png'),
('6047364d61c6f75994bc395e', 'drink', 'Đồ uống', '3', 'https://images.foody.vn/dcat/s270x270/foody-128x128_mainmenuicon-drink-636283959939303052.png', 'drink', '1', '1000001', 'https://images.foody.vn/dcat/s270x270/image-dcat-0bb497b7-056b-4c1f-aeb3-d044a6a50e8c.png'),
('6047364d61c6f75994bc395f', 'vegetarian', 'Đồ chay', '4', 'https://images.foody.vn/dcat/s270x270/foody-128-vegetable-636631843602565271.png', 'vegetarian', '1', '1000002', 'https://images.foody.vn/dcat/s270x270/image-dcat-6150866b-c7ba-48e8-9bf9-2d542db05448.png'),
('6047364d61c6f75994bc3960', 'cake-pastry', 'Bánh kem', '5', 'https://images.foody.vn/dcat/s270x270/foody-128-birthdaycake-636670156042763092.png', 'cake-pastry', '1', '1000003', 'https://images.foody.vn/dcat/s270x270/image-dcat-8883d968-30e5-4fa7-8c86-f3804efc1be9.png'),
('6047364d61c6f75994bc3961', 'desserts', 'Tráng miệng', '6', 'https://images.foody.vn/dcat/s270x270/foody-22016233_10156651988754689_89179361_n-636419580119233712.png', 'desserts', '1', '1000004', 'https://images.foody.vn/dcat/s270x270/image-dcat-c814c52b-b123-4858-8bd8-2a45006a4621.png'),
('6047364d61c6f75994bc3962', 'home-made', 'Homemade', '7', 'https://images.foody.vn/dcat/s270x270/foody-22014863_10156651988764689_12719170_n-636419580253721442.png', 'home-made', '1', '1000005', 'https://images.foody.vn/dcat/s270x270/image-dcat-6bc14e39-46b5-4226-8e8e-a52dca105031.png'),
('6047364d61c6f75994bc3963', 'streetfood', 'Vỉa hè', '8', 'https://images.foody.vn/dcat/s270x270/foody-22054230_10156652510379689_1774230285_n-636419741281681355.png', 'streetfood', '1', '1000006', 'https://images.foody.vn/dcat/s270x270/image-dcat-85ee9c2f-a4f7-4e4e-b87d-e24a68e942ff.png'),
('6047364d61c6f75994bc3964', 'pizza-pasta-burger', 'Pizza/Burger', '9', 'https://images.foody.vn/dcat/s270x270/foody-128-pizza%25255b1%25255d-636631206768116884.png', 'pizza-pasta-burger', '1', '1000007', 'https://images.foody.vn/dcat/s270x270/image-dcat-fd9f2973-58dc-4ec3-bad5-67c80d3a5432.png'),
('6047364d61c6f75994bc3965', 'chicken', 'Món gà', '10', 'https://images.foody.vn/dcat/s270x270/foody-128-chicken%25255b1%25255d-636631206208425869.png', 'chicken', '1', '1000008', 'https://images.foody.vn/dcat/s270x270/image-dcat-e3128d1e-078f-4874-a725-79aedb438370.png'),
('6047364d61c6f75994bc3966', 'hotpot', 'Món lẩu', '11', 'https://images.foody.vn/dcat/s270x270/foody-128-hotpot%25255b1%25255d-636631205342753069.png', 'hotpot', '1', '1000009', 'https://images.foody.vn/dcat/s270x270/image-dcat-72633019-6b41-41d2-8103-d9c52d6567fb.png'),
('6047364d61c6f75994bc3967', 'sushi', 'Sushi', '12', 'https://images.foody.vn/dcat/s270x270/foody-128-sushi%25255b1%25255d-636631207174485711.png', 'sushi', '1', '1000010', 'https://images.foody.vn/dcat/s270x270/image-dcat-087f16f3-b615-4928-a489-5941bdaf9a32.png'),
('6047364d61c6f75994bc3968', 'soup-based', 'Mì phở', '13', 'https://images.foody.vn/dcat/s270x270/foody-128-noodles%25255b1%25255d-636631206572755034.png', 'soup-based', '1', '1000011', 'https://images.foody.vn/dcat/s270x270/image-dcat-47152737-566d-473c-afe4-ca40b85a476c.png'),
('6047364d61c6f75994bc3969', 'rice', 'Cơm hộp', '14', 'https://images.foody.vn/dcat/s270x270/foody-128-bento%2525255b1%2525255d-636631204863197393.png', 'rice', '1', '1000012', 'https://images.foody.vn/dcat/s270x270/image-dcat-7514259e-9f2e-473e-b329-543c6ec4b430.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_groups`
--
ALTER TABLE `category_groups`
  ADD PRIMARY KEY (`_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
