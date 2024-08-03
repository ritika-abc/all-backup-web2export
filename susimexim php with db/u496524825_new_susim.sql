-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2024 at 12:42 PM
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
-- Database: `u496524825_new_susim`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(256) NOT NULL,
  `kw` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `name`, `image`, `kw`, `des`, `title`) VALUES
(3, 'Onion', 'img/products_image/onion.jpg', '', '', ''),
(6, 'Pumpkin', 'img/products_image/7.jpg', 'Pumpkin Exporters in Sri Lanka , Pumpkin Exporters in  Dubai  , Pumpkin  Exporters in Bangladesh ', 'Do Want purchase fresh Pumpkin fruits in your country Susilexim  Pumpkin Exporters in Sri Lanka is best fruit supply in your country in time so don\'t worry worldwide', 'Pumpkin Exporters in Sri Lanka || Susilexim Best Product '),
(9, 'Potato', 'img/products_image/potato.jpg', '', '', ''),
(11, 'Small Onion', 'img/products_image/small.jpg', 'Small Onion Exporters in Germany , Small Onion Exporters in Nepal , Small Onion Exporters in Dubai', 'Discover top-rated Small Onion Exporters in Germany We ensure premium quality, fresh produce, and reliable supply chains. Partner with us for your onion needs', 'Small Onion Exporters in Germany || Susil Exim is Best'),
(12, 'lady\'s finger', 'img/products_image/lady.jpg', 'Lady\'s Finger exporters in Ethiopia , Lady\'s Finger exporters in Turkey , ady\'s Finger exporters in Nepal', 'Discover premium Lady\'s Finger exporters in Ethiopia. Top-quality produce, reliable supply, and excellent service for global markets. Connect with the best,', 'Lady\'s Finger Exporters in Ethiopia || Susil Exim High'),
(13, 'beetroot', 'img/products_image/55.jpg', 'Bitter Gourd Suppliers in Vietnam , Bitter Gourd Suppliers in Canada, Bitter Gourd Suppliers in Dubai', 'Discover High level-quality Bitter Gourd Suppliers in Vietnam. Fresh, organic produce guaranteed. Partner with us for reliable and consistent supply you can', 'Bitter Gourd Suppliers in Vietnam || Susilexim is Good'),
(14, 'drumstick', 'img/products_image/66.jpg', 'Drumstick Exporters in Singapore , Drumstick Exporters in UAE, Drumstick Exporters in France', 'Reliable Drumstick Exporters in Singapore Susilexim Drumstick, quality is best in markets. they supply drumstick  is fresh and high quality you van eat smoothly', 'Drumstick Exporters in Singapore || With Susilexim ,'),
(15, 'bottle gourd', ' img/products_image/16.jpg', 'Bottle Gourd Suppliers in Sri Lanka , Bottle Gourd Suppliers in United Kingdom, Bottle Gourd Suppliers in Nepal', 'Discover top-quality Bottle Gourd suppliers in Sri Lanka ,Fresh & reliable, and sustainable produce for all your needs. Contact us for the best deals today!', 'Bottle Gourd Suppliers in Sri Lanka || Susilexim Supplier '),
(17, 'bitter gourd', 'img/products_image/8.jpg', 'Bitter Gourd Supplier in Vietnam , Bitter Gourd Supplier in US ,', 'Looking for a Bitter Gourd supplier in Vietnam? Discover top-quality produce and reliable service. Choose the best supplier for all your needs in Vietnam city!', 'Bitter Gourd Supplier in Vietnam || With Susilexim,'),
(18, 'raw mango', 'img/products_image/9.jpg', 'Raw Mango Exporters in Turkey , Raw Mango Exporters in Canada ', 'Searching for reliable Raw Mango exporters in Turkey Get premium quality mangoes and exceptional service for all your needs. Trust the best exporters in Turkey', 'Raw Mango Exporters in Turkey || With Best Susilexim'),
(19, 'beans', 'img/products_image/10.jpg', 'Beans Suppliers in Ethiopia , Beans Suppliers in Kuwait ', 'Discover reliable beans suppliers in Ethiopia. Premium quality, timely delivery, and competitive prices for all your bean sourcing needs. Contact us today! ', 'Beans Suppliers in Ethiopia || Susilexim Offer Fresh '),
(20, 'coconut', 'img/products_image/11.jpg', 'Coconut Suppliers In Bangladesh , Coconut Suppliers In Kuwit , Coconut Suppliers In qatar ', 'Are You looking for Best Suppliers in Your City who is Who is Exports Coconut in huge of Amount on time Coconut Suppliers In Bangladesh Susilexim Available, ', 'Coconut Suppliers In Bangladesh || & Susilexim Suppliers '),
(23, 'broad beans', 'img/products_image/13.jpg', 'Broad Beans Supplier in United Kingdom , Broad Beans Supplier in UAE ', 'Searching for a Broad Beans supplier in the United Kingdom Discover high-quality produce and dependable service. Choose the best supplier Service in the UK! ', 'Broad Beans Supplier in United Kingdom || Susilexim'),
(24, 'scarlet gourd', 'img/products_image/14.jpg', 'Scarlet Gourd  Exporters in Qatar , Scarlet Gourd  Exporters in Kuwait , Scarlet Gourd  Exporters in Qatar ', 'Find the best Scarlet Gourd Exporters in Qatar High Top-quality produce and exceptional service for all your needs. Your trusted source for excellence for us ', 'Scarlet Gourd  Exporters in Qatar || Best Susilexim'),
(25, 'elephant yam', 'img/products_image/15.jpg', ' Elephant Yam Suppliers in US  , Elephant Yam Suppliers in kuwait , Elephant Yam Suppliers in Nepal ', 'Looking for reliable Elephant Yam Suppliers in the US Get top-quality produce sourced from trusted farmers, ensuring freshness and superior taste. susilexim', 'Elephant Yam Suppliers in US || With Supplier Susilexim');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
