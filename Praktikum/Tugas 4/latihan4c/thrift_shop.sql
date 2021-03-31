-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 10:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040115`
--

-- --------------------------------------------------------

--
-- Table structure for table `thrift_shop`
--

CREATE TABLE `thrift_shop` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thrift_shop`
--

INSERT INTO `thrift_shop` (`id`, `picture`, `nama`, `description`, `price`, `category`) VALUES
(1, 'p1.png', 'Kemeja Flanel', 'Kemeja Flanel kualitas dan kondisi 100% new', 'Rp 100.000', 'Kemeja'),
(2, 'p2.png', 'Knitwear', 'Knitwear kualitas dan kondisi 85%', 'Rp 100.000', 'Knitwear'),
(3, 'p3.png', 'Crewneck H&M', 'Crewneck H&M kualitas dan kondisi 100% new', 'Rp 200.000', 'Crewneck'),
(4, 'p4.png', 'Knitwear Spesial Edi', 'Knitwear Spesial Edition kualitan dan kondisi 90% new', 'Rp 150.000', 'Knitwear'),
(5, 'p5.png', 'Jaket Bomber', 'Jaket Bomber kualitas dan kondisi 100% new', 'Rp 150.000', 'Jaket'),
(6, 'p6.jpg', 'Air Jordan Gravity R', '100% Brand New in Box', 'Rp 500.000', 'Waist Bag'),
(7, 'p7.jpg', 'Kenzo Tiger Parody T', 'Kenzo Tiger Parody Tee 90% Kondisi New', 'Rp 250.000', 'Kaos'),
(8, 'p8.jpg', 'Adidas Cload Foam Re', 'Adidas Cload Foam Red 100% Brand New in Box', 'Rp 500.000', 'Sepatu'),
(9, 'p9.jpg', 'Bape Shark Grey Camo', 'Bape Shark Grey Camo Parody Tee Kondisi 90% New', 'Rp 250.000', 'Kaos'),
(10, 'p10.jpg', 'Bape 1993 Japan Paro', 'Bape 1993 Japan Parody Hoodie Kondisi 90% New', 'Rp 250.000', 'Kaos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thrift_shop`
--
ALTER TABLE `thrift_shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thrift_shop`
--
ALTER TABLE `thrift_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
