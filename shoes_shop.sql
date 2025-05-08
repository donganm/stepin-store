-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2025 at 07:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `SellerId` int(11) DEFAULT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` text DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `SellerId`, `ProductName`, `Description`, `Price`, `Quantity`, `CreatedDate`, `image_url`) VALUES
(6, 1, 'Sản phẩm 1', 'Mô tả sản phẩm 1', 42.00, 10, '2024-12-22 10:57:56', '../assets/img/product/product1.webp'),
(7, 2, 'Sản phẩm 2', 'Mô tả sản phẩm 2', 40.00, 2, '2024-12-22 10:57:56', '../assets/img/product2.webp'),
(8, 3, 'Sản phẩm 3', 'Mô tả sản phẩm 3', 35.00, 7, '2024-12-22 10:57:56', '../assets/img/product/product3.webp'),
(9, 1, 'Sản phẩm 4', 'Mô tả sản phẩm 4', 25.00, 3, '2024-12-22 10:57:56', '../assets/img/product/product4.webp'),
(10, 2, 'Sản phẩm 5', 'Mô tả sản phẩm 5', 51.00, 15, '2024-12-22 10:57:56', '../assets/img/product/product5.webp'),
(13, 3, 'Sản phẩm 6', 'Mô tả sản phẩm 6', 40.00, 6, '2024-12-24 00:00:00', '../assets/img/product/Pro_ALP2401_1.jpg'),
(14, 3, 'Sản phẩm 7', 'Mô tả sản phẩm 7', 40.00, 5, '2024-12-26 00:00:00', '../assets/img/product/Pro_AV00159_1.jpg'),
(15, 3, 'Sản phẩm 8', 'Mô tả sản phẩm 8', 24.00, 7, '2024-12-27 00:00:00', '../assets/img/product/Pro_AV00213_1.jpg'),
(16, 4, 'Sản phẩm 9', 'Mô tả sản phẩm 9', 49.00, 4, '2024-12-25 00:00:00', '../assets/img/product/1.webp'),
(17, 4, 'Sản phẩm 10', 'Mô tả sản phẩm 10', 60.00, 2, '2024-12-24 00:00:00', '../assets/img/product/2.webp'),
(18, 4, 'Sản phẩm 11', 'Mô tả sản phẩm 11', 62.00, 1, '2024-12-26 00:00:00', '../assets/img/product/3.webp'),
(19, 4, 'Sản phẩm 12', 'Mô tả sản phẩm 12', 54.00, 3, '2024-12-25 00:00:00', '../assets/img/product/4.webp'),
(20, 4, 'Sản phẩm 13', 'Mô tả sản phẩm 13', 65.00, 4, '2024-12-25 00:00:00', '../assets/img/product/5.webp'),
(21, 4, 'Sản phẩm 14', 'Mô tả sản phẩm 14', 39.00, 5, '2024-12-24 00:00:00', '../assets/img/product/6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `userrolerequests`
--

CREATE TABLE `userrolerequests` (
  `RequestId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `RequestDate` datetime DEFAULT current_timestamp(),
  `Status` enum('Pending','Approved','Rejected') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Role` enum('User','Seller','Admin') DEFAULT 'User',
  `Avatar` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `DateOfBirth` date DEFAULT '2000-01-01',
  `Gender` varchar(10) NOT NULL,
  `CartTotal` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Username`, `Password`, `Email`, `Role`, `Avatar`, `Address`, `FullName`, `DateOfBirth`, `Gender`, `CartTotal`) VALUES
(1, 'anhankhe', '123', 'admin@example.com', 'Seller', '../assets/img/avt/1.jpg', 'Thái Bình', 'Ngô Trọng Hoàng', '0000-00-00', 'Nam', 0),
(2, 'Seller 1', '123', 'seller1@example.com', 'Seller', '../assets/img/avt/2.jpg', 'Hà Nội', 'Người Bán 1', '2000-01-01', '', 0),
(3, 'Seller 2', '123', 'seller2@example.com', 'Seller', '../assets/img/avt/3.jpg', 'Ninh Bình', 'Người Bán 2', '2000-01-01', '', 0),
(4, 'Seller 3', '123', 'seller3@example.com', 'Seller', '../assets/img/avt/4.jpg', 'Bắc Giang', 'Người Bán 3', '2000-01-01', '', 0),
(5, 'anhankhe98', '123', 'admin@example.com', 'User', '../assets/img/avt/5.jpg', 'Thái Bình', 'Ngô Trọng Hoàng', '0000-00-00', 'Nam', 0),
(6, 'dta', '123', 'dtadonganh@gmail.com', 'Seller', '../assets/img/avt/6.jpg', 'Hà Nội', 'Dong Anh', '2024-09-11', 'Nữ', 0),
(7, 'admin_username', '123', 'admin_email@example.com', 'Admin', 'default_avatar.jpg', 'Admin Address', 'Admin Name', '1990-01-01', 'Male', 0),
(8, 'anhankhe', '123', 'hoang@gmail.com', 'User', NULL, 'thai binh', 'ngo trong hoang', '0000-00-00', 'Nam', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `SellerId` (`SellerId`);

--
-- Indexes for table `userrolerequests`
--
ALTER TABLE `userrolerequests`
  ADD PRIMARY KEY (`RequestId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userrolerequests`
--
ALTER TABLE `userrolerequests`
  MODIFY `RequestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`SellerId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `userrolerequests`
--
ALTER TABLE `userrolerequests`
  ADD CONSTRAINT `userrolerequests_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
