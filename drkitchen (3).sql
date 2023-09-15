-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 07:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drkitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_status`) VALUES
(1, 'Naresh', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `billing_address1`
--

CREATE TABLE `billing_address1` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_email` varchar(255) NOT NULL,
  `b_address` varchar(255) NOT NULL,
  `b_phone` varchar(13) NOT NULL,
  `user` varchar(255) NOT NULL,
  `order_pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cart_qty` int(11) NOT NULL DEFAULT 1,
  `cart_price` float NOT NULL,
  `cart_user` varchar(255) NOT NULL,
  `cart_total` float NOT NULL,
  `cart_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`, `product`) VALUES
(1, 'Thali', 1),
(2, 'Normal Thali', 4),
(3, 'Snacks', 18),
(4, 'Summer Special', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `order_product` varchar(255) NOT NULL,
  `order_qty` varchar(255) NOT NULL,
  `order_price` varchar(255) NOT NULL,
  `order_payment_id` varchar(255) NOT NULL,
  `order_total` varchar(255) NOT NULL,
  `order_status` tinyint(1) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL,
  `order_user` varchar(255) NOT NULL,
  `order_pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_price` float NOT NULL,
  `p_qty` int(11) NOT NULL DEFAULT 1,
  `p_cate` int(11) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_desc`, `p_price`, `p_qty`, `p_cate`, `p_image`, `p_status`) VALUES
(1, 'Special Thali', 'Dal, Jeera Rice, Sahi Paneer, Papad, Achar, 4 Butter Roti, Bundi, Bundi Raita', 95, 1, 1, 'thali.jpg', 1),
(2, 'Normal Thali', 'Dal, Rice, 4 Roti, Salad', 69, 1, 2, 'dal,rice,roti,salad.jpg', 1),
(3, 'Dal Rice', '', 69, 1, 2, 'Dal and rice.jpg', 1),
(4, 'Chhole Rice', '', 79, 1, 2, 'chole and rice.jpg', 1),
(5, 'Kadi Rice', '', 69, 1, 2, 'kadi and Rice.jpg', 1),
(6, 'POHA', '', 49, 1, 3, 'Poha.jpg', 1),
(7, 'UPMA', '', 99, 1, 3, 'Upma.jpg', 1),
(8, 'SAMOSA', '', 10, 1, 3, 'samosa.jpg', 1),
(9, 'KACHODI', '', 20, 1, 3, 'kachori.jpg', 1),
(10, 'BREAD PAKODA', '', 20, 1, 3, 'bread pakoda.jpg', 1),
(11, 'BREAD ROLL', '', 35, 1, 3, 'Bread roll.jpg', 1),
(12, 'WHITE SAUCE PASTA', '', 70, 1, 3, 'white sauce pasta.jpg', 1),
(13, 'VEG GRILLED SANDWICH', '', 45, 1, 3, 'veg-grilled-sandwich.jpg', 1),
(14, 'VEG CHEESE SANDWICH', '', 45, 1, 3, 'veg chesse sandwich.jpg', 1),
(15, 'PANEER SANDWICH', '', 49, 1, 3, 'paneer sandwich.jpg', 1),
(16, 'PANEER PIZZA', '', 99, 1, 3, 'Paneer pizza.jpg', 1),
(17, 'COURN PIZZA', '', 97, 1, 3, 'corn pizza.jpg', 1),
(18, 'VEG PIZZA', '', 89, 1, 3, 'veg pizza.jpg', 1),
(19, 'MOMOS', '', 69, 1, 3, 'momos.jpg', 1),
(20, 'CHOUMIN', '', 49, 1, 3, 'chowmin.jpg', 1),
(21, 'MIX PAKODA', '', 59, 1, 3, 'Mix pakoda.jpg', 1),
(22, 'PANEER PAKODA', '', 89, 1, 3, 'Paneer Pakoda.jpg', 1),
(23, 'IDLI SAMBAR', '', 99, 1, 3, 'Idli sambhar.jpg', 1),
(24, 'PLAN LASSI', '', 20, 1, 4, 'plan lassi.jpg', 1),
(25, 'KULLAD LASSI', '', 20, 1, 4, 'kullad lassi.jpg', 1),
(27, 'Lemon water', '', 10, 1, 4, 'lemon water.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_address1`
--
ALTER TABLE `billing_address1`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_address1`
--
ALTER TABLE `billing_address1`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
