-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 11:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `url_img` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `create_date` varchar(50) DEFAULT NULL,
  `update_date` varchar(50) DEFAULT NULL,
  `del` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `url_img`, `description`, `rank`, `create_date`, `update_date`, `del`) VALUES
(1, 'banner 1', 'banner1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '1', '11-05', '11-05', '0'),
(2, 'banner 2', 'banner2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '2', '11-05', '11-05', '0'),
(3, 'banner 3', 'banner3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '3', '11-05', '11-05', '0'),
(4, 'banner 4', 'banner4.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '4', '11-05', '11-05', '0'),
(5, 'Deal of the week', 'bannerDeal.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec nisi id erat consectetur tincid', '5', '11-05', '11-05', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

CREATE TABLE `cart_products` (
  `id` int(6) UNSIGNED NOT NULL,
  `product_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(6) UNSIGNED NOT NULL,
  `logo` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `title`) VALUES
(1, 'logo.jpg', 'Fruit In');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `del` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `rank`, `del`) VALUES
(1, 'Home', '1', '0'),
(2, 'All fruits', '2', '0'),
(3, 'News', '3', '0'),
(4, 'About us', '4', '0'),
(5, 'Contact us', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(6) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price_first` varchar(50) DEFAULT NULL,
  `price_second` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `img`, `name`, `price_first`, `price_second`, `size`, `description`) VALUES
(1, 'product1.jpg', 'Broccoli', '22.000', '18.000', 'Large', 'Trong các loại trái cây tốt cho sức khỏe thì dứa là một loại quả ngon ngọt rất giàu kali. Theo các nghiên cứu, kali trong chế độ ăn uống có tác dụng trung hòa lượng axit và do đó làm giảm sự mất canxi'),
(2, 'product2.jpg', 'Carot', '22.000', '20.000', 'Large', 'Đu đủ chính là một loại quả ngọt, mềm làm cho mùa hè trở nên dễ chịu hơn. Thêm vào đó, trong đu đủ rất giàu vitamin C giúp làm nên điều kỳ diệu cho xương, da và khả năng miễn'),
(3, 'product3.jpg', 'Susu', '20.000', '12.000', 'Medium', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ratione quo, voluptate quidem mollitia, earum molestias error beatae tempore minus ea officia odit accusantium nihil? Suscipit, natus? D'),
(4, 'product4.jpg', 'Tomato', '20.000', '18.000', 'Small', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ratione quo, voluptate quidem mollitia, earum molestias error beatae tempore minus ea officia odit accusantium nihil? Suscipit, natus? D'),
(5, 'product5.jpg', 'BeetRoot', '19.000', '12.000', 'Small', 'Trong các loại trái cây tốt cho sức khỏe thì dứa là một loại quả ngon ngọt rất giàu kali. Theo các nghiên cứu, kali trong chế độ ăn uống có tác dụng trung hòa lượng axit và do đó làm giảm sự mất canxi'),
(6, 'product6.jpg', 'Corn', '22.000', '17.000', 'Large', 'Trong các loại trái cây tốt cho sức khỏe thì dứa là một loại quả ngon ngọt rất giàu kali. Theo các nghiên cứu, kali trong chế độ ăn uống có tác dụng trung hòa lượng axit và do đó làm giảm sự mất canxi'),
(7, 'product7.jpg', 'Muraze', '16.000', '12.000', 'Medium', 'Trong các loại trái cây tốt cho sức khỏe thì dứa là một loại quả ngon ngọt rất giàu kali. Theo các nghiên cứu, kali trong chế độ ăn uống có tác dụng trung hòa lượng axit và do đó làm giảm sự mất canxi'),
(8, 'product8.jpg', 'Lemon', '19.000', '17.000', 'Small', 'Trong các loại trái cây tốt cho sức khỏe thì dứa là một loại quả ngon ngọt rất giàu kali. Theo các nghiên cứu, kali trong chế độ ăn uống có tác dụng trung hòa lượng axit và do đó làm giảm sự mất canxi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD CONSTRAINT `cart_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_detail` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
