-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2024 at 12:33 PM
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
-- Database: `u496524825_vistara_enterp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `keyword` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `metadata` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `keyword`, `title`, `message`, `metadata`, `image`, `slug`) VALUES
(47, 'wholesale Turmeric Powder Supplier in India', 'best \n wholesale Turmeric Powder Supplier in India', '<p>India is renowned as one of the leading producers and exporters of turmeric, making it a prime destination for sourcing high-quality turmeric powder. As a  <a href=\"/\">  Wholesale turmeric Powder Suppliers in India </a> we are dedicated to providing top-grade turmeric powder that meets international standards. Our commitment to quality ensures that our turmeric powder retains its vibrant color, rich aroma, and potent medicinal properties. Turmeric, often referred to as the \"golden spice,\" is a staple in Indian cuisine and is highly valued for its health benefits. It contains Curcumin, a Bioactive compound with powerful anti-inflammatory and antioxidant properties. This makes turmeric powder not only a popular spice in culinary applications but also a significant ingredient in the pharmaceutical and cosmetic industries.</a>\n', 'India is renowned as one of the leading producers and exporters of turmeric, making it a prime destination for sourcing high-quality turmeric powder. As a     Wholesale turmeric Powder Suppliers in India  we are dedicated to providing top-grade turmeric powder that meets international standards. Our commitment to quality ensures that our turmeric powder retains its vibrant color, rich aroma, and potent medicinal properties. Turmeric, often referred to as the \"golden spice,\" is a staple in Indian cuisine and is highly valued for its health benefits. It contains Curcumin, a Bioactive compound with powerful anti-inflammatory and antioxidant properties. This makes turmeric powder not only a popular spice in culinary applications but also a significant ingredient in the pharmaceutical and cosmetic industries.', '', 'wholesale-Turmeric-Powder-Supplier-in-India'),
(48, ' Saffron Supplier in India', ' best Saffron Supplier in India', '<p>Discover the premier <a href=\"/\"> Saffron Suppliers in India </a> renowned for delivering the highest quality saffron. Our saffron is meticulously handpicked from the finest farms in Kashmir, ensuring purity and potency. Ideal for culinary, medicinal, and cosmetic applications, our saffron enhances flavor, offers health benefits, and adds a touch of luxury. Committed to excellence, we adhere to stringent quality standards, providing saffron that’s rich in aroma, color, and taste. Trust us for your saffron needs and experience the essence of India’s golden spice. Connect with us for reliable, premium saffron that meets your exacting standards.\n</a>', 'Discover the premier  Saffron Suppliers in India  renowned for delivering the highest quality saffron. Our saffron is meticulously handpicked from the finest farms in Kashmir, ensuring purity and potency. Ideal for culinary, medicinal, and cosmetic applications, our saffron enhances flavor, offers health benefits, and adds a touch of luxury. Committed to excellence, we adhere to stringent quality standards, providing saffron that’s rich in aroma, color, and taste. Trust us for your saffron needs and experience the essence of India’s golden spice. Connect with us for reliable, premium saffron that meets your exacting standards.', '', 'Saffron-Supplier-in-India'),
(49, 'wholesale Turmeric Powder Supplier in Tamil Nadu', 'best \n wholesale Turmeric Powder Supplier in Tamil Nadu', '<p>Looking for a reliable <a href=\"/\"> Wholesale Turmeric Powder Supplier in Tamil Nadu </a> Our premium quality turmeric powder is sourced from the finest farms in Tamil Nadu, ensuring purity and rich flavor in every batch. Ideal for culinary uses and medicinal purposes, our turmeric powder is 100% natural and free from additives. We cater to bulk orders, providing competitive prices and prompt delivery to meet your needs. Partner with us for top-notch turmeric powder and experience the authentic taste and health benefits of this golden spice. Contact us today to place your order and elevate your offerings with our superior turmeric powder.\n</p>', 'Looking for a reliable   Wholesale Turmeric Powder Supplier in Tamil Nadu   Our premium quality turmeric powder is sourced from the finest farms in Tamil Nadu, ensuring purity and rich flavor in every batch. Ideal for culinary uses and medicinal purposes, our turmeric powder is 100% natural and free from additives. We cater to bulk orders, providing competitive prices and prompt delivery to meet your needs. Partner with us for top-notch turmeric powder and experience the authentic taste and health benefits of this golden spice. Contact us today to place your order and elevate your offerings with our superior turmeric powder.', '', 'wholesale-Turmeric-Powder-Supplier-in-Tamil-Nadu'),
(50, 'Saffron  Supplier in Tamil Nadu  ', 'Saffron Supplier in Tamil Nadu || With Vistaraenterpris', '<p><a href=\"/\">Saffron Supplier in Tamil Nadu</a> comes from the stigma of the Crocus sativus flower, commonly known as the saffron crocus. Cultivating saffron is a labor-intensive process that requires meticulous care and attention to detail. The majority of the world\'s saffron production comes from regions with specific climatic conditions, such as Iran, Spain, and Kashmir. In these regions, saffron cultivation is deeply rooted in tradition, with generations of farmers passing down their knowledge and expertise. Beyond its culinary uses, saffron is revered for its numerous health benefits. Studies have shown that saffron possesses antioxidant, anti-inflammatory, and mood-enhancing properties. It has been used in traditional medicine for centuries to treat various ailments, including depression, anxiety, and insomnia. Saffron is also believed to aid digestion, improve memory, and boost immunity. Incorporating saffron into your diet can be a delicious way to enhance your overall well-being\n<p>', 'Saffron Supplier in Tamil Nadu  comes from the stigma of the Crocus sativus flower, commonly known as the saffron crocus. Cultivating saffron is a labor-intensive process that requires meticulous care and attention to detail. The majority of the world\'s saffron production comes from regions with specific climatic conditions, such as Iran, Spain, and Kashmir. In these regions, saffron cultivation is deeply rooted in tradition, with generations of farmers passing down their knowledge and expertise. Beyond its culinary uses, saffron is revered for its numerous health benefits. Studies have shown that saffron possesses antioxidant, anti-inflammatory, and mood-enhancing properties. It has been used in traditional medicine for centuries to treat various ailments, including depression, anxiety, and insomnia. Saffron is also believed to aid digestion, improve memory, and boost immunity. Incorporating saffron into your diet can be a delicious way to enhance your overall well-being', '', 'Saffron-Supplier-in-Tamil-Nadu'),
(51, 'wholesale Garlic Supplier in India', 'best wholesale Garlic Supplier in India', '<p>Discover the leading <a href=\"/\"> Wholesale Garlic Supplier in India </a> offering premium quality garlic at competitive prices. Our extensive network of farmers ensures fresh, organic garlic sourced directly from the best farms across the country. With a commitment to quality and timely delivery, we cater to bulk orders for businesses, restaurants, and exporters. Our garlic is known for its rich flavor, long shelf life, and health benefits. Partner with us for all your garlic needs and experience exceptional service and reliability. Trust the top wholesale garlic supplier in India to meet your demands efficiently. Contact us today for the best deals!\n</p>', 'Discover the leading   Wholesale Garlic Supplier in India  offering premium quality garlic at competitive prices. Our extensive network of farmers ensures fresh, organic garlic sourced directly from the best farms across the country. With a commitment to quality and timely delivery, we cater to bulk orders for businesses, restaurants, and exporters. Our garlic is known for its rich flavor, long shelf life, and health benefits. Partner with us for all your garlic needs and experience exceptional service and reliability. Trust the top wholesale garlic supplier in India to meet your demands efficiently. Contact us today for the best deals!', '', 'wholesale-Garlic-Supplier-in-India'),
(53, 'wholesale Green Cardamom Supplier in India', 'best wholesale Green Cardamom Supplier in India', '<p>Discover the finest <a href=\"/\"> Wholesale Green Cardamom Supplier in India </a>  , offering top-grade cardamom at unbeatable prices. Sourced from the best farms, our green cardamom is known for its rich aroma, vibrant color, and exceptional flavor. We ensure rigorous quality checks and adhere to international standards, making our cardamom ideal for culinary and medicinal use. Whether you need bulk supplies for restaurants, food processing, or exports, we guarantee timely delivery and unmatched quality. Partner with the leading wholesale green cardamom supplier in India and elevate your offerings. Contact us today for the best rates and reliable service!</p>', 'Looking for a reliable   wholesale rice supplier in Tamil Nadu   Look no further! Tamil Nadu is renowned for its high-quality rice, and our suppliers ensure you get the best at competitive prices. Whether you need premium Basmati, Sona Masoori, or Ponni rice, we offer a wide variety to meet your needs. Our suppliers are committed to quality, ensuring that every grain meets the highest standards. With prompt delivery and exceptional customer service, we are your go-to source for bulk rice purchases. Choose us for all your wholesale rice needs in Tamil Nadu and experience unmatched quality and reliability.\n', '', 'wholesale-Green-Cardamom-Supplier-in-India'),
(54, 'Wholesale Rice Supplier in Tamil Nadu', 'best Wholesale Rice Supplier in Tamil Nadu', '<p>Looking for a reliable <a href=\"/\"> wholesale rice supplier in Tamil Nadu </a> Look no further! Tamil Nadu is renowned for its high-quality rice, and our suppliers ensure you get the best at competitive prices. Whether you need premium Basmati, Sona Masoori, or Ponni rice, we offer a wide variety to meet your needs. Our suppliers are committed to quality, ensuring that every grain meets the highest standards. With prompt delivery and exceptional customer service, we are your go-to source for bulk rice purchases. Choose us for all your wholesale rice needs in Tamil Nadu and experience unmatched quality and reliability.\n</p>', 'Looking for a reliable wholesale rice supplier in Tamil Nadu Look no further! Tamil Nadu is renowned for its high-quality rice, and our suppliers ensure you get the best at competitive prices. Whether you need premium Basmati, Sona Masoori, or Ponni rice, we offer a wide variety to meet your needs. Our suppliers are committed to quality, ensuring that every grain meets the highest standards. With prompt delivery and exceptional customer service, we are your go-to source for bulk rice purchases. Choose us for all your wholesale rice needs in Tamil Nadu and experience unmatched quality and reliability.', '', 'wholesale-Green-Cardamom-Supplier-in-Tamil-Nadu'),
(56, 'wholesale Clove Seed Supplier in Tamil Nadu', 'best wholesale Clove Seed Supplier in Tamil Nadu', '<p>As a leading <a href=\"/\"> Wholesale Clove Seed Supplier in Tamil Nadu </a> we pride ourselves on delivering premium quality seeds at competitive prices. Our clove seeds are sourced from the finest farms in the region, ensuring rich aroma, robust flavor, and high germination rates. Ideal for culinary, medicinal, and agricultural purposes, our clove seeds meet stringent quality standards. We cater to bulk orders, ensuring timely delivery and exceptional service. Partner with the trusted wholesale clove seed supplier in Tamil Nadu and elevate your offerings with our superior products. Contact us today for the best deals and reliable supply!</p>', 'As a leading   Wholesale Clove Seed Supplier in Tamil Nadu   we pride ourselves on delivering premium quality seeds at competitive prices. Our clove seeds are sourced from the finest farms in the region, ensuring rich aroma, robust flavor, and high germination rates. Ideal for culinary, medicinal, and agricultural purposes, our clove seeds meet stringent quality standards. We cater to bulk orders, ensuring timely delivery and exceptional service. Partner with the trusted wholesale clove seed supplier in Tamil Nadu and elevate your offerings with our superior products. Contact us today for the best deals and reliable supply!', '', 'wholesale-Clove-Seed-Supplier-in-Tamil-Nadu'),
(57, 'wholesale Cumin Seed Supplier in India', 'best wholesale Cumin Seed Supplier in India', '<p>The English name Cumin comes from the Latin Cuminum, which was borrowed from the Greek kyminon. Cumin has many names, including Roman caraway and spice caraway, and is often mixed up with the unrelated black cumin.\r\n\r\nFAMILY ~ Apiaceae also includes Celery, Carrots, Parsley, Dill, Fennel, and some poisonous plants such as Poison Hemlock.</p>', 'The English name Cumin comes from the Latin Cuminum, which was borrowed from the Greek kyminon. Cumin has many names, including Roman caraway and spice caraway, and is often mixed up with the unrelated black cumin.\r\n\r\nFAMILY ~ Apiaceae also includes Celery, Carrots, Parsley, Dill, Fennel, and some poisonous plants such as Poison Hemlock.', '', 'wholesale-Cumin-Seed-Supplier-in-India'),
(58, 'wholesale Cumin Seed Supplier In Tamil Nadu', 'best wholesale Cumin Seed Supplier In Tamil Nadu', '<p>Looking for a reliable <a href=\"/\"> Wholesale Cumin Seed Supplier in Tamil Nadu </a>We offer top-quality cumin seeds at competitive prices, sourced from the best farms in the region. Our cumin seeds are known for their rich aroma, robust flavor, and high purity. Ideal for culinary, medicinal, and industrial use, our seeds undergo strict quality checks to ensure they meet the highest standards. We cater to bulk orders with a commitment to timely delivery and exceptional customer service. Choose the leading wholesale cumin seed supplier in Tamil Nadu for all your cumin needs. Contact us today for the best deals and a reliable supply!\n</p>', 'Looking for a reliable  Wholesale Cumin Seed Supplier in Tamil Nadu  We offer top-quality cumin seeds at competitive prices, sourced from the best farms in the region. Our cumin seeds are known for their rich aroma, robust flavor, and high purity. Ideal for culinary, medicinal, and industrial use, our seeds undergo strict quality checks to ensure they meet the highest standards. We cater to bulk orders with a commitment to timely delivery and exceptional customer service. Choose the leading wholesale cumin seed supplier in Tamil Nadu for all your cumin needs. Contact us today for the best deals and a reliable supply!\n', '', 'wholesale-Cumin-Seed-Supplier-In-Tamil-Nadu'),
(59, 'wholesale Black peppers Supplier In India', 'best wholesale Black peppers Supplier In India', '<p>Searching for a trustworthy <a href=\"/\"> wholesale black peppers supplier in India </a> ? Our company delivers premium quality black peppers, sourced from the finest farms to ensure superior flavor and aroma. We take pride in our rigorous selection and processing methods, guaranteeing only the best product for our customers. Catering to both domestic and international clients, we offer competitive pricing and prompt delivery services. Our black peppers are perfect for enhancing a variety of culinary dishes. Partner with us for a reliable supply of high-quality black peppers and elevate your culinary creations. Contact us today to place your order.\n\n</p>', 'Searching for a trustworthy   wholesale black peppers supplier in India   ? Our company delivers premium quality black peppers, sourced from the finest farms to ensure superior flavor and aroma. We take pride in our rigorous selection and processing methods, guaranteeing only the best product for our customers. Catering to both domestic and international clients, we offer competitive pricing and prompt delivery services. Our black peppers are perfect for enhancing a variety of culinary dishes. Partner with us for a reliable supply of high-quality black peppers and elevate your culinary creations. Contact us today to place your order.\n', '', 'wholesale-Black-peppers-Supplier-In-India'),
(60, 'wholesale Coriander Leaves Supplier in India', 'wholesale Coriander Leaves Supplier in India', '<p>Looking for a reliable <a href=\"/\"> wholesale coriander leaves supplier in India </a>  Our company offers the finest, freshest coriander leaves sourced directly from trusted farmers. Known for their vibrant color and aromatic flavor, our coriander leaves are perfect for enhancing the taste of any dish. We ensure high-quality standards through meticulous selection and packaging processes. Catering to both domestic and international markets, we provide competitive prices and efficient delivery services. Partner with us for your coriander leaves supply and experience exceptional quality and customer satisfaction. Contact us today to place your order and elevate your culinary creations.\n</p>', 'Looking for a reliable   wholesale coriander leaves supplier in India    Our company offers the finest, freshest coriander leaves sourced directly from trusted farmers. Known for their vibrant color and aromatic flavor, our coriander leaves are perfect for enhancing the taste of any dish. We ensure high-quality standards through meticulous selection and packaging processes. Catering to both domestic and international markets, we provide competitive prices and efficient delivery services. Partner with us for your coriander leaves supply and experience exceptional quality and customer satisfaction. Contact us today to place your order and elevate your culinary creations.\n', '', 'wholesale-Coriander-Leaves-Supplier-in-India'),
(61, 'wholesale Coriander Leaves Supplier in Tamil Nadu', 'best wholesale Coriander Leaves Supplier in Tamil Nadu', '<p>Coriander, the must-have ingredient in Indian cuisine, is scientifically termed Coriandrum sativum and belongs to the Apiaceae family, naturally being a powerhouse of nutrients. In India, it is commonly called “Dhaniya” in Hindi, “Malli” in Malayalam, “Kothimira” in Telugu and “Kothamalli” in Tamil.</p></p>the coriander plant is native to many countries across the world, being widely cultivated in Europe as well as parts of Africa and Asia. In recent times, there has been an emphasis on medicinal plants with potent nutritive values, for use in treating chronic conditions like diabetes and obesity. This has led to the naturalization and propagation of the coriander plant or cilantro in several western nations as well, including the warmer regions of North America and Australia.</p>', ' Coriander, the must-have ingredient in Indian cuisine, is scientifically termed Coriandrum sativum and belongs to the Apiaceae family, naturally being a powerhouse of nutrients.', '', 'wholesale-Coriander-Leaves-Supplier-in-Tamil-Nadu'),
(62, 'wholesale Soybeans Supplier in India', 'best wholesale Soybeans Supplier in India', '<p>Soybeans are complete proteins, they have all the essential amino acids present in it. Amino acids are the building blocks that generate protein. Protein is a macronutrient that the body <a href=\"/\">wholesale Soybeans Supplier in India </a> amounts for muscle growth, cell repair, immune function and various metabolic functions. 100 gm serving of soya chunks contains over 55 gm of protein. Which is more than the same serving size of eggs and meat. For the record, the recommended daily intake amount of protein is averaged to 56gm for men and 46gm for women. Regular meat is almost carbohydrate free, but soya chunks on the other hand, contain a high amount of carbs. This is because they are derived from soybeans, which are high in carbohydrates to begin with. Carbohydrates are a primary source of energy for the body. A 100 gm serving of soya chunks contains approximately 30 gm of carbohydrates. Comparatively, the recommended intake of carbs for the average person is approximately 130gm. Athletes who train rigorously for an extended period of time can consume 250 gm of carbs\n</p>', 'Soybeans are complete proteins, they have all the essential amino acids present in it. Amino acids are the building blocks that generate protein. Protein is a macronutrient that the body  wholesale Soybeans Supplier in India amounts for muscle growth, cell repair, immune function and various metabolic functions. 100 gm serving of soya chunks contains over 55 gm of protein. Which is more than the same serving size of eggs and meat. For the record, the recommended daily intake amount of protein is averaged to 56gm for men and 46gm for women. Regular meat is almost carbohydrate free, but soya chunks on the other hand, contain a high amount of carbs. This is because they are derived from soybeans, which are high in carbohydrates to begin with. Carbohydrates are a primary source of energy for the body. A 100 gm serving of soya chunks contains approximately 30 gm of carbohydrates. Comparatively, the recommended intake of carbs for the average person is approximately 130gm. Athletes who train rigorously for an extended period of time can consume 250 gm of carbs\n', '', 'wholesale-Soybeans-Supplier-in-India'),
(63, 'wholesale Soybeans Supplier in Tamil Nadu', 'wholesale Soybeans Supplier in Tamil Nadu', '<p>Searching for a dependable <a href=\"/\"> wholesale soybeans supplier in Tamil </a> Nadu? Look no further! Our suppliers offer high-quality soybeans sourced from the best farms in the region. Known for their nutritional value and versatility, our soybeans are perfect for various culinary and industrial applications. We ensure rigorous quality checks to deliver only the finest product, meeting all industry standards. With competitive pricing and prompt delivery, our suppliers cater to businesses of all sizes. Choose us for your wholesale soybean needs in Tamil Nadu and benefit from premium quality, reliability, and exceptional customer service.\n</p>', 'Searching for a dependable   wholesale soybeans supplier in Tamil   Nadu? Look no further! Our suppliers offer high-quality soybeans sourced from the best farms in the region. Known for their nutritional value and versatility, our soybeans are perfect for various culinary and industrial applications. We ensure rigorous quality checks to deliver only the finest product, meeting all industry standards. With competitive pricing and prompt delivery, our suppliers cater to businesses of all sizes. Choose us for your wholesale soybean needs in Tamil Nadu and benefit from premium quality, reliability, and exceptional customer service.\n', '', 'wholesale-Soybeans-Supplier-in-Tamil-Nadu'),
(64, 'wholesale Urad Dal Supplier in India', 'wholesale Urad Dal Supplier in India', '<p>Urad dal is also known as Black Split Gram in English. It is used for various medicinal purposes in the Ayurvedic system of <a href=\"/\">wholesale Urad Dal Supplier in India </a> rich source of nutrition and helps boost energy. Urad dal is rich in fibers which help improve digestion. It may also help manage constipation by promoting bowel movements due to its laxative property. Regular consumption of Urad dal improves sexual desire in men which in turn helps manage sexual dysfunction due to its aphrodisiac property. Urad dal is also considered to be good for diabetes as it improves insulin secretion and sensitivity.\n\n</p>', 'Urad dal is also known as Black Split Gram in English. It is used for various medicinal purposes in the Ayurvedic system of  wholesale Urad Dal Supplier in India  rich source of nutrition and helps boost energy. Urad dal is rich in fibers which help improve digestion. It may also help manage constipation by promoting bowel movements due to its laxative property. Regular consumption of Urad dal improves sexual desire in men which in turn helps manage sexual dysfunction due to its aphrodisiac property. Urad dal is also considered to be good for diabetes as it improves insulin secretion and sensitivity.\n\n', '', 'wholesale-Urad-Dal-Supplier-in-India'),
(65, 'wholesale Urad Dal Supplier in Tamil Nadu', 'wholesale Urad Dal Supplier in Tamil Nadu', '<p>Finding a reliable <a href=\"/\"> wholesale Urad Dal Supplier in Tamil Nadu </a>Our network of trusted suppliers provides premium quality Urad Dal to meet your bulk requirements. Tamil Nadu, known for its rich agricultural heritage, offers the best Urad Dal, known for its purity and superior taste. Our suppliers ensure strict quality control and adhere to industry standards to deliver only the finest product. With competitive pricing and timely delivery, we cater to businesses of all sizes. Partner with us for your wholesale Urad Dal needs in Tamil Nadu and enjoy the benefits of high-quality products and excellent customer service.\n</p>', 'Finding a reliable   wholesale Urad Dal Supplier in Tamil Nadu  Our network of trusted suppliers provides premium quality Urad Dal to meet your bulk requirements. Tamil Nadu, known for its rich agricultural heritage, offers the best Urad Dal, known for its purity and superior taste. Our suppliers ensure strict quality control and adhere to industry standards to deliver only the finest product. With competitive pricing and timely delivery, we cater to businesses of all sizes. Partner with us for your wholesale Urad Dal needs in Tamil Nadu and enjoy the benefits of high-quality products and excellent customer service.\n', '', 'wholesale-Urad-Dal-Supplier-in-Tamil-Nadu'),
(66, 'wholesale rice suppliers in india', 'wholesale rice suppliers in india', '<p>The Significance of Authenticity Quality Assurance: Authenticity testing is the cornerstone of maintaining the high-quality standards of Basmati rice. It ensures that each grain embodies the characteristic aroma, elongated shape, and delicate texture that consumers expect. Consumer Trust: When you purchase Basmati rice,<a href=\"/\"> Wholesale rice Suppliers in India </a>Authenticity testing helps preserve consumer trust by delivering the genuine product, reinforcing brand reputation. Preventing Fraud: Basmati rice is sometimes adulterated or mixed with other rice varieties, diluting its unique qualities. Authenticity testing is a shield against such fraudulent practices, protecting consumers from deceptive marketing. Allergen Safety: For individuals with food allergies or sensitivities, knowing the authenticity of Basmati rice is crucial. Allergen testing ensures that the rice is free from contaminants that could trigger adverse reactions. Cultural Heritage: Basmati rice holds cultural significance in many regions, woven into traditional recipes.\n</p>', 'The Significance of Authenticity Quality Assurance: Authenticity testing is the cornerstone of maintaining the high-quality standards of Basmati rice. It ensures that each grain embodies the characteristic aroma, elongated shape, and delicate texture that consumers expect. Consumer Trust: When you purchase Basmati rice,  Wholesale rice Suppliers in India  Authenticity testing helps preserve consumer trust by delivering the genuine product, reinforcing brand reputation. Preventing Fraud: Basmati rice is sometimes adulterated or mixed with other rice varieties, diluting its unique qualities. Authenticity testing is a shield against such fraudulent practices, protecting consumers from deceptive marketing. Allergen Safety: For individuals with food allergies or sensitivities, knowing the authenticity of Basmati rice is crucial. Allergen testing ensures that the rice is free from contaminants that could trigger adverse reactions. Cultural Heritage: Basmati rice holds cultural significance in many regions, woven into traditional recipes.\n', '', 'wholesale-rice-suppliers-in-india');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`) VALUES
(1, 'common spices'),
(2, 'Aromatic Spices'),
(3, 'Hot (Pungent) Spices'),
(4, 'Mild Flavored Spices'),
(5, 'Leaves'),
(6, 'Seed'),
(7, 'Fruits/Berries'),
(8, 'Masalas'),
(9, 'Pulses');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` int(19) NOT NULL,
  `message` varchar(256) NOT NULL,
  `user_address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `user_email`, `user_phone`, `message`, `user_address`) VALUES
(8, 'Tobiasexpor', 'no.reply.MartimLefevre@gmail.com', 0, '83418592278', 'Gliwice'),
(9, 'Tobiasexpor', 'no.reply.MartimLefevre@gmail.com', 0, '83418592278', 'Gliwice'),
(10, 'Roseanne Visconti', 'visconti.roseanne@gmail.com', 0, '33', 'Eybnerstrasse 33'),
(11, 'Roseanne Visconti', 'visconti.roseanne@gmail.com', 0, '33', 'Eybnerstrasse 33'),
(12, 'Mike Pearcy\r\n', 'mikearbit@gmail.com', 0, '85786796935', 'Willemstad'),
(13, 'Mike Pearcy\r\n', 'mikearbit@gmail.com', 0, '85786796935', 'Willemstad'),
(14, 'AmandaCruche3', 'amandadovaria@gmail.com', 0, '87411156899', 'Stung Treng'),
(15, 'AmandaCruche3', 'amandadovaria@gmail.com', 0, '87411156899', 'Stung Treng'),
(16, 'Mike Peterson\r\n', 'mikeNott@gmail.com', 0, '81128298722', 'Kaohsiung Municipality'),
(17, 'Mike Peterson\r\n', 'mikeNott@gmail.com', 0, '81128298722', 'Kaohsiung Municipality'),
(18, 'Mike Forster\r\n', 'peterNott@gmail.com', 0, '83373136736', 'Boston'),
(19, 'Mike Forster\r\n', 'peterNott@gmail.com', 0, '83373136736', 'Boston'),
(20, 'Phil Stewart', 'noreplyhere@aol.com', 0, '342-123-4456', 'Fortunastrasse 142'),
(21, 'Phil Stewart', 'noreplyhere@aol.com', 0, '342-123-4456', 'Fortunastrasse 142'),
(22, 'Thomasgusty', 'yasen.krasen.13+78558@mail.ru', 0, '83748847477', 'Freetown'),
(23, 'Thomasgusty', 'yasen.krasen.13+78558@mail.ru', 0, '83748847477', 'Freetown');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `pro_id` int(100) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `image` varchar(256) NOT NULL,
  `cat_id` varchar(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pro_id`, `pro_name`, `image`, `cat_id`, `cat_name`) VALUES
(24, ' Turmeric', ' upload/4c79e434-137c-41ff-a7d1-bd08c8d6ca70.jpg', '', 'common spices'),
(25, 'Saffron', ' upload/9a9b6d57-0675-40e3-8fc6-d18fdb12063d.jpg', '', 'common spices'),
(26, 'Ginger', ' upload/2f8863f2-412c-4bf3-a584-00d1b08a802f.jpg', '', 'common spices'),
(27, 'Cinnamon stick', ' upload/eabdd44d-7324-411c-b1fc-f507b15e52c1.jpg', '', 'common spices'),
(28, 'Tamarind', ' upload/871745f5-0f16-46b5-8fa7-dec0d9d56ff9.jpg', '', 'common spices'),
(29, 'Cardamom', ' upload/e2d2cf0e-2d53-4251-80cf-f56334ef6bcd.jpg', '', 'common spices'),
(30, 'Peppercorns', ' upload/5123e261-de92-48e7-91cb-e2ca65a0e414.jpg', '', 'common spices'),
(31, 'Malabar leaf/bay leaf', ' upload/2c10c778-f3dd-4ba1-b87e-88ffabf56798.jpg', '', 'common spices'),
(32, 'Coriander', ' upload/6d3c8b0a-3ebb-4c9e-b6c2-167da4afd9d9.jpg', '', 'common spices'),
(33, 'Nutmeg', ' upload/c499efed-a343-43a8-aec3-d1847bf1c445.jpg', '', 'common spices'),
(34, 'Fenugreek', ' upload/d39a8755-2c7a-4c82-aba4-5be928f5b39f.jpg', '', 'common spices'),
(35, 'Clove', ' upload/8a8e1a13-bdf8-485d-b6e2-1c82700efdfa.jpg', '', 'common spices'),
(36, 'Poppyseed', ' upload/11104a45-1ce3-49ae-a55d-2181653f310f.jpg', '', 'common spices'),
(37, 'Clove', ' upload/8a8e1a13-bdf8-485d-b6e2-1c82700efdfa.jpg', '', 'Aromatic Spices'),
(38, 'Cumin', ' upload/7f9d32fb-90f3-4715-a7e5-921dab497201.jpg', '', 'Aromatic Spices'),
(39, 'Dill seed', ' upload/ee3f6b6d-67e8-4d36-968a-418f3f3fb6d0.jpg', '', 'Aromatic Spices'),
(40, 'Fennel seed', ' upload/e2d2cf0e-2d53-4251-80cf-f56334ef6bcd.jpg', '', 'Aromatic Spices'),
(41, 'Nutmeg', ' upload/c499efed-a343-43a8-aec3-d1847bf1c445.jpg', '', 'Aromatic Spices'),
(42, 'Cinnamon', ' upload/eabdd44d-7324-411c-b1fc-f507b15e52c1.jpg', '', 'Aromatic Spices'),
(43, 'Black and white peppers', ' upload/90bec6ed-5f7e-4537-a630-d1de3f49e6ae.jpg', '', 'Hot (Pungent) Spices'),
(44, 'Mustard', ' upload/788e3976-314b-4bb3-9c46-b29a9a287a4a.jpg', '', 'Hot (Pungent) Spices'),
(45, 'Red pepper', ' upload/22ed9d2b-f289-41e2-ae7a-ef8096e1e9a9.jpg', '', 'Hot (Pungent) Spices'),
(46, 'Paprika', ' upload/22ed9d2b-f289-41e2-ae7a-ef8096e1e9a9.jpg', '', 'Mild Flavored Spices'),
(47, 'Coriander', ' upload/cd8595b9-9842-40a0-9ae9-85cbc77bb994.jpg', '', 'Mild Flavored Spices'),
(48, 'Basil', ' upload/63de64d9-b4f0-4d66-ac74-32a48e832041.jpg', '', 'Leaves'),
(49, 'Bay leaf', ' upload/2c10c778-f3dd-4ba1-b87e-88ffabf56798.jpg', '', 'Leaves'),
(50, 'Chive', ' upload/2ec5e2a6-dd03-498e-a3d5-f6cdffe2c75e.jpg', '', 'Leaves'),
(51, 'Cilantro', ' upload/cd8595b9-9842-40a0-9ae9-85cbc77bb994.jpg', '', 'Leaves'),
(52, 'Oregano', ' upload/9eda7ff1-061f-47e4-8ecc-9836431da609.jpg', '', 'Leaves'),
(53, 'Parsley', ' upload/6d3c8b0a-3ebb-4c9e-b6c2-167da4afd9d9.jpg', '', 'Leaves'),
(54, 'Rosemary', ' upload/a58827f3-f966-4009-b06f-f6a8edc63a4a.jpg', '', 'Leaves'),
(55, 'Sage', ' upload/9eda7ff1-061f-47e4-8ecc-9836431da609.jpg', '', 'Leaves'),
(56, 'Thyme', ' upload/9d1fff26-05b5-43b7-88e8-bbe7f5e0e278.jpg', '', 'Leaves'),
(57, 'Cardamom', ' upload/e2d2cf0e-2d53-4251-80cf-f56334ef6bcd.jpg', '', 'Seed'),
(58, 'Coriander', ' upload/6d3c8b0a-3ebb-4c9e-b6c2-167da4afd9d9.jpg', '', 'Seed'),
(59, 'Cumin', ' upload/7f9d32fb-90f3-4715-a7e5-921dab497201 (1).jpg', '', 'Seed'),
(60, 'Dill', ' upload/9d1fff26-05b5-43b7-88e8-bbe7f5e0e278.jpg', '', 'Seed'),
(61, 'Fennel', ' upload/57943dfd-a034-4685-8a8e-6b2a11406e1e.jpg', '', 'Seed'),
(62, 'Fenugreek', ' upload/788e3976-314b-4bb3-9c46-b29a9a287a4a.jpg', '', 'Seed'),
(63, 'Mustard', ' upload/0069f5e3-6aaa-4776-b6b8-a264a5825392.jpg', '', 'Seed'),
(64, 'Black pepper', ' upload/90bec6ed-5f7e-4537-a630-d1de3f49e6ae.jpg', '', 'Fruits/Berries'),
(65, 'Red pepper', ' upload/e0d472fd-70c0-43c4-adfb-a93fd8449b70.jpg', '', 'Fruits/Berries'),
(66, 'Paprika', ' upload/22ed9d2b-f289-41e2-ae7a-ef8096e1e9a9.jpg', '', 'Fruits/Berries'),
(67, 'Garam masala', ' upload/42ba5f0b-726b-45e1-aa18-7f4f3a7de1a9.jpg', '', 'Masalas'),
(68, 'Curry masala', ' upload/51f3648f-62cd-422c-a967-4511a07667fa.jpg', '', 'Masalas'),
(69, 'Tandoori masala', ' upload/e0d472fd-70c0-43c4-adfb-a93fd8449b70.jpg', '', 'Masalas'),
(70, 'Rasam and sambar powder', ' upload/0d0cc359-41b8-4f92-911e-e6525a7445fb.jpg', '', 'Masalas'),
(71, 'Lentils (All types)', ' upload/4d1fdee1-15b7-4f34-baeb-e8bbf8be9c6b.jpg', '', 'Pulses'),
(72, 'Chickpeas', ' upload/2c047015-af43-4378-b724-4c0c02f3718c.jpg', '', 'Pulses'),
(73, 'Black Eyed Peas', ' upload/1111111111.jpg', '', 'Pulses'),
(74, 'Mung Beans', ' upload/7e9bd695-2a11-4084-be79-f37c88cb9da5.jpg', '', 'Pulses'),
(75, 'Red Kidney Beans', ' upload/i.jpg', '', 'Pulses'),
(76, ' Pulses', ' upload/1.jpg', '', 'Pulses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
