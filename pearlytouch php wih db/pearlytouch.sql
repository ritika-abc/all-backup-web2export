-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 08:58 AM
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
-- Database: `pearlytouch`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `pro_id` int(100) NOT NULL,
  `pro_name` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pro_id`, `pro_name`, `image`) VALUES
(11, 'almond milk', 'upload/almond milk.jpg'),
(12, 'coffee', 'upload/coffee.jpg'),
(13, 'dead sea mud', 'upload/dead sea mud.jpg'),
(14, 'donkey milk', 'upload/donkey milk.jpg'),
(16, 'Redwine', 'upload/redwine.jpg'),
(17, 'jasmine', 'upload/jasmine.jpg'),
(18, 'Kuppaimeni', 'upload/kuppaimeni.jpg'),
(19, 'lemon grass', 'upload/lemon grass.jpg'),
(20, 'mahilampoo', 'upload/magilam poo.jpg'),
(21, 'Turmeric', 'upload/turmeric.jpg'),
(23, 'Goat milk', 'upload/goat.jpg'),
(24, 'camel milk', 'upload/camel milk.jpg'),
(25, 'shea butter', 'upload/sea butter.jpg'),
(26, 'coco butter', 'upload/coco butter.jpg'),
(27, 'basil', 'upload/basil.jpg'),
(28, 'lavender', 'upload/levinder.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
