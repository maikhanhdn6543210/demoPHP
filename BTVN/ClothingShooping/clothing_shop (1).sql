-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2018 at 01:14 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothing_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'Shirt'),
(2, 'Jacket'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_des` text NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_reduce` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_dateCreate` date NOT NULL,
  `product_dateUpdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_des`, `product_cat`, `product_image`, `product_price`, `product_reduce`, `product_quantity`, `product_dateCreate`, `product_dateUpdate`) VALUES
(20, 'Chiffon Double Pocket Shirt', '   Chiffon Double Pocket Shirt   ', '1', '5baba9175cdc4_shirt.jpg', 490, 0, 5, '2018-09-26', '2018-09-26'),
(21, 'V-neck long-sleeved shirt', ' V-neck long-sleeved shirt - female ( Dark green -S)  ', '1', '5baba9d722beb_shirt_3739201_500.jpg', 590, 1.25, 5, '2018-09-26', '2018-09-26'),
(22, 'Black spots on white', '   Print Short Sleeve Shirt - Female   ', '1', '5babaae9777b5_blackDot3495301_500.jpg', 295, 0, 3, '2018-09-26', '2018-09-26'),
(23, 'Open collar cropped sleeve shirt', 'Open collar cropped sleeve shirt - female ( Tibetan- -M )', '1', '5babace695eb1_collar_3495604_500.jpg', 390, 0, 2, '2018-09-26', NULL),
(24, 'Linen Sleeveless Shirt', ' Linen Sleeveless Shirt - Female ( Shuilv -L )  ', '2', '5babad3506da3_LinenSleevelessShirt_3406204_500.jpg', 245, 0, 3, '2018-09-26', '2018-09-26'),
(25, 'Flannel Plaid Shirt', 'Flannel Plaid Shirt - Female ( Red Black - -S )', '1', '5bac3dcc76aef_redblack3734207_500.jpg', 350, 0, 5, '2018-09-27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
