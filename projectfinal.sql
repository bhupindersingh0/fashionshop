-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 01:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sno`, `name`, `photo`, `price`) VALUES
(30, 'Striped Regular Fit Polo', 'us polo t.jpg', '1134'),
(31, 'Regular Fit T-Shirt', 'us polo tt.jpg', '1257');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `profilepic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`sno`, `name`, `email`, `contact`, `password`, `address`, `gender`, `profilepic`) VALUES
(9, 'fashion shop', 'fashionstore@domain.com', '+54 83716566', 'fashion123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `sno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`sno`, `name`, `email`, `contact`, `message`) VALUES
(7, 'ABC', 'abc@gmail.com', '+93 44566675', 'abcdefghijklmnopqrstuvwxyz');

-- --------------------------------------------------------

--
-- Table structure for table `shoping`
--

CREATE TABLE `shoping` (
  `sno` int(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand_name` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `orgianlprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoping`
--

INSERT INTO `shoping` (`sno`, `category`, `brand_name`, `name`, `image`, `detail`, `price`, `orgianlprice`) VALUES
(1, 'Shirt', 'U.S.Polo Assn.', 'Slim Button Down', 'us polo2.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '1579', 1678),
(2, 'Shirt', 'U.S.Polo Assn.', 'Casual', 'us polo1.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '1394', 1456),
(3, 'T-shirt', 'U.S.Polo Assn.', 'Striped Regular Fit Polo', 'us polo t.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '1134', 1256),
(4, 'T-shirt', 'U.S.Polo Assn.', 'Regular Fit T-Shirt', 'us polo tt.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '1257', 1367),
(5, 'Jean', 'U.S.Polo Assn.', 'Skinny Casual Pants', 'us polo pant.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '1299', 1489),
(6, 'Jean', 'U.S.Polo Assn.', 'Regular Pants', 'us polo pant2.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '1150', 1267),
(7, 'Jacket', 'U.S.Polo Assn.', 'Jacket', 'us polo jacket.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '1456', 1678),
(8, 'Jacket', 'U.S.Polo Assn.', 'Trench Jacket', 'us polo jacket2.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '2298', 2567),
(9, 'shoes', 'U.S.Polo Assn.', 'Off White Snakers', 'new.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '2569', 2856),
(10, 'shoes', 'U.S.Polo Assn.', 'Lebron 3.0 Snakers', 'shoes2.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '2479', 2678),
(11, 'watch', 'U.S.Polo Assn.', 'Black Dial Watch', 'watch1.jpg', '<ul></ul><li> Size : L,XL</li><li>Color : White</li><li>Cotton</li></ul>', '4786', 5178),
(12, 'watch', 'U.S.Polo Assn.', 'Analog Silver Watch', 'watch2.jpg', '<ul><li></li><li></li><li></li></ul>', '3756', 3974),
(13, 'Shirt', 'Levis', 'Slim Shirt', 'levis shirt.jpg', '<ul><li></li><li></li><li></li></ul>', '1786', 1945),
(14, 'Shirt', 'Levis', 'Slim Shirt', 'levis shirt2.jpg', '<ul><li></li><li></li><li></li></ul>', '1999', 2564),
(15, 'T-shirt', 'Levis', 'Fitted Polo Shirt', 'levis t shirt 2.jpg', '<ul><li></li><li></li><li></li></ul>', '2389', 2678),
(16, 'T-shirt', 'Levis', 'Polo Shirt', 'levis t shirt.jpg', '<ul><li></li><li></li><li></li></ul>', '1759', 1894),
(17, 'Jacket', 'Levis', 'Jacket', 'levis jacket.jpg', '<ul><li></li><li></li><li></li></ul>', '5463', 5678),
(18, 'Jacket', 'Levis', 'Jacket', 'levis jacket2.jpg', '<ul><li></li><li></li><li></li></ul>', '2789', 3098),
(19, 'shoes', 'Levis', 'Woodward Sneakers', 'shoes22.jpg', '<ul><li></li><li></li><li></li></ul>', '2369', 2784),
(20, 'shoes', 'Levis', 'Black Tab Runner Sneakers', 'shoes222.jpg', '<ul><li></li><li></li><li></li></ul>', '2200', 2456),
(21, 'Jean', 'Levis', 'Straight Fit Jeans', 'levis pant.jpg', '<ul><li></li><li></li><li></li></ul>', '2349', 2634),
(22, 'Jean', 'Levis', 'Skinny Tapered Fit Jeans', 'levis pant2.jpg', '<ul><li></li><li></li><li></li></ul>', '2389', 2578),
(23, 'Shirt', 'Redtape', 'Navy White Shirt', 'redtape shirt2.jpg', '<ul><li></li><li></li><li></li></ul>', '1279', 1278),
(24, 'Shirt', 'Redtape', 'Regular Shirt', 'redtape shirt.jpg', '<ul><li></li><li></li><li></li></ul>', '1489', 1567),
(25, 'T-shirt', 'Redtape', 'Soild Regular Fit Polo', 'redtape t shirt2.jpg', '<ul><li></li><li></li><li></li></ul>', '1249', 1567),
(26, 'T-shirt', 'Redtape', 'Regular Fit Polo', 'redtape t shirt.jpg', '<ul><li></li><li></li><li></li></ul>', '1299', 1456),
(27, 'Jacket', 'Redtape', 'Mens Jacket', 'redtape jacket.jpg', '<ul><li></li><li></li><li></li></ul>', '3519', 3768),
(28, 'Jacket', 'Redtape', 'Casual Jacket', 'redtape jacket2.jpg', '<ul><li></li><li></li><li></li></ul>', '2723', 2978),
(29, 'Jean', 'Redtape', 'Skinny Jeans', 'redtape pant.jpg', '<ul><li></li><li></li><li></li></ul>', '1765', 1978),
(30, 'Jean', 'Redtape', 'White Jean', 'redtape pant2.jpg', '<ul><li></li><li></li><li></li></ul>', '1567', 1789),
(31, 'shoes', 'Redtape', 'Walking Shoes', 'redtape shoes2.jpg', '<ul><li></li><li></li><li></li></ul>', '1764', 1989),
(32, 'Shirt', 'Tommy', 'Regular fit Shirt', 'tommy shirt.jpg', '<ul><li></li><li></li><li></li></ul>', '4566', 5213),
(33, 'Shirt', 'Tommy', 'Regular Shirt', 'tommy shirt2.jpg', '<ul><li></li><li></li><li></li></ul>', '3467', 3456),
(34, 'T-shirt', 'Tommy', 'Regular Polo Shirt', 'tommy t shirt.jpg', '<ul><li></li><li></li><li></li></ul>', '3999', 4367),
(35, 'T-shirt', 'Tommy', 'Regular Polo Shirt', 'tommy t shirt2.jpg', '<ul><li></li><li></li><li></li></ul>', '4589', 4678),
(36, 'Jacket', 'Tommy', 'Casual Regular Jacket', 'tommy jacket.jpg', '<ul><li></li><li></li><li></li></ul>', '7869', 7899),
(37, 'Jacket', 'Tommy', 'Casual Regular Jacket', 'tommyjacket2.jpg', '<ul><li></li><li></li><li></li></ul>', '8797', 9319),
(38, 'Jean', 'Tommy', 'Slim Jeans', 'tommy pant.jpg', '<ul><li></li><li></li><li></li></ul>', '5647', 5834),
(39, 'Jean', 'Tommy', 'Slim Jeans', 'tommy pant2.jpg', '<ul><li></li><li></li><li></li></ul>', '6785', 7193),
(40, 'shoes', 'Tommy', 'Lenard Snakers ', 'tommyshoes copy.jpg', '<ul><li></li><li></li><li></li></ul>', '8769', 9254),
(41, 'shoes', 'Tommy', 'Mainer Snakers', 'tommy t shirtfgfd2 copy.jpg', '<ul><li></li><li></li><li></li></ul>', '7999', 8219),
(42, 'watch', 'Tommy', 'Analog Blue Dial Watch', 'tommy t sdfgfdhirt2 copy.jpg', '<ul><li></li><li></li><li></li></ul>', '8999', 9213),
(43, 'watch', 'Tommy', 'Analog Grey Dial Watch', 'dsfdsfds.jpg', '<ul><li></li><li></li><li></li></ul>', '7658', 7923),
(44, 'shoes', 'Redtape', 'Sneaker', 'redtape shoes22.jpg', '<ul><li></li><li></li><li></li></ul>', '1455', 1783),
(45, 'T-shirt', 'Puma', 'Regular T-Shirt', 'puma t shirt2.jpg', '<ul><li></li><li></li><li></li></ul>', '1499', 1783),
(46, 'T-shirt', 'Puma', 'Polo', 'puma t shirt.jpg', '<ul><li></li><li></li><li></li></ul>', '1769', 1892),
(47, 'Jacket', 'Puma', 'Jacket', 'puma jackets.jpg', '<ul><li></li><li></li><li></li></ul>', '2749', 2956),
(48, 'Jacket', 'Puma', 'Jacket', 'puma jackets2.jpg', '<ul><li></li><li></li><li></li></ul>', '4518', 5190),
(49, 'shoes', 'Puma', 'BMW MMS Roma Via Snakers', 'puma shoes.jpg', '<ul><li></li><li></li><li></li></ul>', '5999', 6478),
(50, 'shoes', 'Puma', 'Adult Easy Rider Li Sneaker', 'puma shoes2.jpg', '<ul><li></li><li></li><li></li></ul>', '4416', 4932),
(51, 'watch', 'Puma', 'Watch', 'puma watch .jpg', '<ul><li></li><li></li><li></li></ul>', '5674', 5840),
(52, 'watch', 'Puma', 'Black Watch', 'puma watch2 .jpg', '<ul><li></li><li></li><li></li></ul>', '4566', 4759);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `shoping`
--
ALTER TABLE `shoping`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shoping`
--
ALTER TABLE `shoping`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
