-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2024 at 12:18 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_hrb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `slug`, `image`, `name`, `des`) VALUES
(1, 'turmeric', 'image/product/1.jpg', 'turmeric raw   ', ''),
(2, 'red-chili', 'image/product/2.jpg', 'red chili raw  ', ''),
(3, 'black-pepper', 'image/product/black.jpg', 'black pepper row ', ''),
(4, 'ashwagandha', 'image/product/ashwagandha.jpg', 'ashwagandha raw  ', ''),
(5, 'shaitawar', 'image/product/shaitawar raw.jpg', 'shaitawar  raw  ', ''),
(6, 'psyllium', 'image/product/psyllium.jpg\r\n\r\n', 'psyllium  ', ''),
(7, 'cardamon', 'image/product/cardamon.jpg', 'cardamon  ', ''),
(8, 'onion-powder', 'image/product/onion powder.jpg', 'onion powder ', ''),
(9, 'pumpkin-seeds', 'image/product/pumpkin seeds.jpg', 'pumpkin seeds  ', ''),
(10, 'coconut-powder', 'image/product/coconut powder.jpg', 'coconut powder  ', ''),
(11, '', 'image/product/yoga.jpg', 'yoga mat  ', ''),
(12, '', 'image/product/tissue paper.jpg', 'tissue paper  ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
