-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 12:11 PM
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
-- Table structure for table `anh_san_pham`
--

CREATE TABLE `anh_san_pham` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `san_pham_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(11) NOT NULL,
  `don_hang_id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id`, `don_hang_id`, `san_pham_id`, `so_luong`, `don_gia`) VALUES
(1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `tong_tien` double NOT NULL,
  `ho_ten` varchar(60) NOT NULL,
  `dien_thoai` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dia_chi_giao_hang` varchar(200) NOT NULL,
  `ghi_chu` varchar(500) DEFAULT NULL,
  `ship` double NOT NULL,
  `thanh_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `ngay_dat`, `tong_tien`, `ho_ten`, `dien_thoai`, `email`, `dia_chi_giao_hang`, `ghi_chu`, `ship`, `thanh_tien`) VALUES
(1, '2021-06-01 04:13:08', 0, '', '', NULL, '', NULL, 0, 0);

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
-- Table structure for table `phan_loai`
--

CREATE TABLE `phan_loai` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL COMMENT 'tem nhom san pham\n',
  `code` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phan_loai`
--

INSERT INTO `phan_loai` (`id`, `name`, `code`) VALUES
(1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phan_loai_san_pham`
--

CREATE TABLE `phan_loai_san_pham` (
  `id` int(11) NOT NULL,
  `phan_loai_id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL COMMENT 'ten san pham',
  `code` varchar(150) DEFAULT NULL,
  `mo_ta ngan_gon` varchar(500) DEFAULT NULL,
  `mo_ta_chi_tiet` text CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `ban_chay` tinyint(4) NOT NULL DEFAULT 0,
  `noi_bat` tinyint(4) NOT NULL DEFAULT 0,
  `moi_ve` tinyint(4) NOT NULL DEFAULT 0,
  `gia_ban` double NOT NULL,
  `gia_canh_tranh` varchar(45) NOT NULL,
  `anh_dai_dien` varchar(100) NOT NULL DEFAULT 'no-image.jpg',
  `ngay_dang` datetime NOT NULL,
  `ngay_sua` datetime DEFAULT NULL,
  `thuong_hieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `code`, `mo_ta ngan_gon`, `mo_ta_chi_tiet`, `ban_chay`, `noi_bat`, `moi_ve`, `gia_ban`, `gia_canh_tranh`, `anh_dai_dien`, `ngay_dang`, `ngay_sua`, `thuong_hieu_id`) VALUES
(1, 'Brocoli', NULL, 'trái Brocoli', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product1.jpg', '2021-06-01 04:24:58', '2021-06-01 04:24:58', 1),
(2, 'Carot', NULL, 'C? Carot', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product2.jpg', '2021-06-01 09:34:17', '2021-06-01 09:34:17', 1),
(3, 'Susu', NULL, 'C? Susu', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product3.jpg', '2021-06-01 09:34:17', '2021-06-01 09:34:17', 1),
(4, 'Tomato', NULL, 'Trái Cà chua', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product4.jpg', '2021-06-01 09:37:40', '2021-06-01 09:37:40', 1),
(5, 'BeeRoot', NULL, 'Trái BeeRoot', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product5.jpg', '2021-06-01 09:37:40', '2021-06-01 09:37:40', 1),
(6, 'Corn', NULL, 'Trái B?p', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product6.jpg', '2021-06-01 09:39:08', '2021-06-01 09:39:08', 1),
(7, 'Muraze', NULL, 'Trái Muraze', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product7.jpg', '2021-06-01 09:39:08', '2021-06-01 09:39:08', 1),
(8, 'Lemon', NULL, 'Trái Chanh', 'B?n có bi?t b?n c?ng có th? gi?m cân b?ng cách ?n trái cây th??ng xuyên? Trái cây có hàm l??ng Natri th?p; do ?ó giúp gi?m thi?u nguy c? t?ng cân n??c c?a c? th?. N?u \" th?c ??n gi?m cân hàng ngày\" chia làm 3 b?a và có m?t b?a ch? toàn hoa qu? và rau c?, b?n s? th?y s? cân c?a b?n gi?m ?i nhanh chóng. ?ó là b?i vì khi b?n ?n nhi?u trái cây s? khuy?n khích c? th? ít tiêu th? các th?c ?n giàu kalo. H?n n?a, b?n có th? làm gi?m l??ng kalo trong c? th? khi ?n hóa qu? b?i có r?t nhi?u lo?i hoa qu? và rau c? không ch?a kalo và giúp c? th? ki?m soát vi?c t?ng cân không c?n thi?t.', 0, 0, 0, 22, '18.000', 'product8.jpg', '2021-06-01 09:40:59', '2021-06-01 09:40:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'tieu de',
  `url_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL,
  `del` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `url_img`, `description`, `rank`, `create_date`, `update_date`, `del`) VALUES
(1, 'Sider 1', 'banner1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '1', '0000-00-00', '0000-00-00', '0'),
(2, 'Sider 2', 'banner2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '2', '0000-00-00', '0000-00-00', '0'),
(3, 'Sider 3', 'banner3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '3', '0000-00-00', '0000-00-00', '0'),
(4, 'Sider 4', 'banner4.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus consequatur sed, totam alias er', '4', '0000-00-00', '0000-00-00', '0'),
(5, 'Deal of the week', 'bannerDeal.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec nisi id erat consectetur tincid', '5', '0000-00-00', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_tinh`
--

CREATE TABLE `thuoc_tinh` (
  `id` int(11) NOT NULL,
  `color` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thuoc_tinh`
--

INSERT INTO `thuoc_tinh` (`id`, `color`, `size`, `weight`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_tinh_san_pham`
--

CREATE TABLE `thuoc_tinh_san_pham` (
  `id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `thuoc_tinh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL COMMENT 'ten thuong hieu\n',
  `code` varchar(45) DEFAULT NULL,
  `logo` varchar(100) NOT NULL DEFAULT 'no-image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id`, `name`, `code`, `logo`) VALUES
(1, 'Khoa Trinh', NULL, 'no-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tu_khoa`
--

CREATE TABLE `tu_khoa` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL COMMENT 'tu khoa',
  `code` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tu_khoa_san_pham`
--

CREATE TABLE `tu_khoa_san_pham` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL COMMENT 'nhap tu khoa',
  `tu_khoa_id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh_san_pham`
--
ALTER TABLE `anh_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anh_san_pham_san_pham1` (`san_pham_id`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chi_tiet_don_hang_don_hang1` (`don_hang_id`),
  ADD KEY `fk_chi_tiet_don_hang_san_pham1` (`san_pham_id`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phan_loai`
--
ALTER TABLE `phan_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phan_loai_san_pham`
--
ALTER TABLE `phan_loai_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phan_loai_san_pham_phan_loai1` (`phan_loai_id`),
  ADD KEY `fk_phan_loai_san_pham_san_pham1` (`san_pham_id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_san_pham_thuong_hieu` (`thuong_hieu_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuoc_tinh_san_pham`
--
ALTER TABLE `thuoc_tinh_san_pham`
  ADD PRIMARY KEY (`id`,`san_pham_id`),
  ADD KEY `fk_thuoc_tinh_san_pham_san_pham1` (`san_pham_id`),
  ADD KEY `fk_thuoc_tinh_san_pham_thuoc_tinh1` (`thuoc_tinh_id`);

--
-- Indexes for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tu_khoa`
--
ALTER TABLE `tu_khoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tu_khoa_san_pham`
--
ALTER TABLE `tu_khoa_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tu_khoa_san_pham_tu_khoa1` (`tu_khoa_id`),
  ADD KEY `fk_tu_khoa_san_pham_san_pham1` (`san_pham_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh_san_pham`
--
ALTER TABLE `anh_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phan_loai`
--
ALTER TABLE `phan_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phan_loai_san_pham`
--
ALTER TABLE `phan_loai_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thuoc_tinh_san_pham`
--
ALTER TABLE `thuoc_tinh_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tu_khoa`
--
ALTER TABLE `tu_khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tu_khoa_san_pham`
--
ALTER TABLE `tu_khoa_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anh_san_pham`
--
ALTER TABLE `anh_san_pham`
  ADD CONSTRAINT `fk_anh_san_pham_san_pham1` FOREIGN KEY (`san_pham_id`) REFERENCES `san_pham` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `fk_chi_tiet_don_hang_don_hang1` FOREIGN KEY (`don_hang_id`) REFERENCES `don_hang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_chi_tiet_don_hang_san_pham1` FOREIGN KEY (`san_pham_id`) REFERENCES `san_pham` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `phan_loai_san_pham`
--
ALTER TABLE `phan_loai_san_pham`
  ADD CONSTRAINT `fk_phan_loai_san_pham_phan_loai1` FOREIGN KEY (`phan_loai_id`) REFERENCES `phan_loai` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_phan_loai_san_pham_san_pham1` FOREIGN KEY (`san_pham_id`) REFERENCES `san_pham` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_san_pham_thuong_hieu` FOREIGN KEY (`thuong_hieu_id`) REFERENCES `thuong_hieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thuoc_tinh_san_pham`
--
ALTER TABLE `thuoc_tinh_san_pham`
  ADD CONSTRAINT `fk_thuoc_tinh_san_pham_san_pham1` FOREIGN KEY (`san_pham_id`) REFERENCES `san_pham` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_thuoc_tinh_san_pham_thuoc_tinh1` FOREIGN KEY (`thuoc_tinh_id`) REFERENCES `thuoc_tinh` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tu_khoa_san_pham`
--
ALTER TABLE `tu_khoa_san_pham`
  ADD CONSTRAINT `fk_tu_khoa_san_pham_san_pham1` FOREIGN KEY (`san_pham_id`) REFERENCES `san_pham` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tu_khoa_san_pham_tu_khoa1` FOREIGN KEY (`tu_khoa_id`) REFERENCES `tu_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
