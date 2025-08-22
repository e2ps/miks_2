-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2025 at 07:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intro_php_mysql_db`
--
DROP DATABASE IF EXISTS `intro_php_mysql_db`;
CREATE DATABASE IF NOT EXISTS `intro_php_mysql_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `intro_php_mysql_db`;

-- --------------------------------------------------------

--
-- Table structure for table `card_tb`
--

CREATE TABLE `card_tb` (
  `card_id` int(11) NOT NULL,
  `card_title` varchar(50) NOT NULL,
  `card_prg` varchar(5000) NOT NULL,
  `card_img` varchar(500) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_tb`
--

INSERT INTO `card_tb` (`card_id`, `card_title`, `card_prg`, `card_img`, `Time`) VALUES
(1, 'Kawasan Falls', 'Kawasan Falls is a multi-tiered waterfall system known for its vibrant turquoise waters and is a popular tourist destination in Badian, Cebu, Philippines. It features three main cascades, with the first being the most popular and developed, offering amenities like bamboo rafts and dining areas. The falls are part of the Kawasan River and are nestled at the foot of the Mantalongon Mountain Range. ', 'https://cdn1.matadornetwork.com/blogs/1/2017/07/kawasan-falls-restaurants.jpg', '2025-08-01 09:08:51'),
(2, 'Fort Santiago', 'Fort Santiago is a historical citadel located in Intramuros, Manila, Philippines. \r\nOriginally built in 1593 by the Spanish, it served as a defense fortress, a prison, \r\nand a key location during World War II. Today, it stands as a well-preserved cultural \r\ndestination, a National Historical Landmark, and a memorial to the sacrifices of the Filipino people. ', '../images/unnamed_2.webp', '2025-07-31 14:25:47'),
(3, 'Puerto Princesa Subterranean River National Park', 'Puerto Princesa Subterranean River National Park, also known as the Underground River, is a protected area in Palawan, Philippines, renowned for its impressive limestone karst landscape and a navigable 8.2-kilometer (5.1 mi) underground river that flows directly into the sea. It is a UNESCO World Heritage Site and one of the New 7 Wonders of Nature, highlighting its global significance for biodiversity conservation and natural beauty.', '../images/unnamed_3.webp', '2025-07-31 09:35:39'),
(4, 'Batad Rice Terraces', 'The Batad Rice Terraces, a UNESCO World Heritage site, are a stunning example of traditional Ifugao engineering and agriculture in the Philippines. Located in a remote village in Banaue, these terraces are carved into the mountainside by hand, forming a dramatic amphitheater-like landscape. They are known for their impressive age, unique construction, and cultural significance.', '../images/unnamed_4.webp', '2025-07-31 15:06:42'),
(5, 'Chocolate Hills', 'The Chocolate Hills in Bohol, Philippines, are a geological formation characterized by numerous, almost identical, cone-shaped hills, primarily found in the towns of Carmen, Batuan, and Sagbayan. These hills, numbering over 1,200, are covered in grass and turn a chocolate brown color during the dry season, hence their name. The hills are believed to have formed from the uplift of coral reefs and subsequent erosion by rainwater and streams. They are a popular tourist destination, with designated viewpoints offering panoramic views of the landscape.', '../images/unnamed_5.webp', '2025-07-31 15:08:11'),
(6, 'Boracay', 'Boracay is a small island in the Philippines, renowned for its stunning white sand beaches, crystal-clear waters, and vibrant atmosphere. It is a popular destination for both relaxation and adventure, offering a wide range of activities from swimming and sunbathing to water sports and lively nightlife.', 'https://static1.detourista.com/wp/wp-content/uploads/Unorganized/Boracay-Featured.jpg', '2025-07-31 15:09:33'),
(7, 'Rizal Park', 'Rizal Park, also known as Luneta Park or simply Luneta, is a historic urban park along Roxas Boulevard in Manila. Adjacent to the walled city of Intramuros, it is one of the largest urban parks in Asia and a popular leisure spot, especially on Sundays and national holidays.', '../images/unnamed_7.webp', '2025-07-31 15:11:03'),
(8, 'Greenbelt', 'Greenbelt is a popular shopping mall in the Ayala Center, Makati. Known for upscale retail, dining, and open-air spaces, it’s a flagship Ayala Malls project. “Greenbelt” also refers to undeveloped land encircling urban zones to help control sprawl.', '../images/unnamed_8.webp', '2025-07-31 15:11:55'),
(9, 'Manila Ocean Park', 'Manila Ocean Park is a marine theme park in Manila, Philippines, offering a blend of entertainment and education with various attractions and exhibits focused on marine life. It is known for its Oceanarium, featuring a 25-meter underwater tunnel and a wide array of marine species. Other highlights include the Trails to Antarctica penguin park, sea lion shows, and the World of Creepy Crawlies exhibit. ', 'https://www.shoreexcursions.asia/wp-content/uploads/2017/06/Manila-Ocean-Park-2.jpg', '2025-08-14 11:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_tb`
--

CREATE TABLE `carousel_tb` (
  `carousel_id` int(11) NOT NULL,
  `carousel_img` varchar(10000) NOT NULL,
  `carousel_title` varchar(255) NOT NULL,
  `carousel_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel_tb`
--

INSERT INTO `carousel_tb` (`carousel_id`, `carousel_img`, `carousel_title`, `carousel_desc`) VALUES
(1, 'https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrLj75k1kS6uRi1e5LNwedmweQ63ljYteY2LRmAnpX4JKZI_x7Zmb_RiK1pA1grWiyXzr6B9YvXSovqMP5L2V2AhvMgMG_FjbhsG1JodYnEiYzasi3AkJXTXX7BPhOdYWX8p8paXw=s680-w680-h510-rw', 'Calle Crisologo', 'Calle Crisologo in Vigan City, \r\nIlocos Sur Province, is one of\r\n the most iconic heritage streets in \r\nthe Philippines. A cobblestone pathway\r\n flanked by Spanish-era ancestral homes, \r\nvintage lamps, and horse-drawn carriages, this charming road offers a glimpse into the country\'s colonial past.'),
(2, 'https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1200,h_674/w_74,x_13,y_13,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/xdhymrbgad6qg4e1xecs/6D5NMalapascuaIslandDiveTripfromSingapore.jpg', 'Malapascua Island', 'Malapascua is a Philippine island situated in the Visayan Sea, 6.8 kilometres across a shallow strait from the northernmost tip of Cebu Island. Administratively, it is part of the peninsular barangay of Logon, Daanbantayan, Cebu. Malapascua is a small island, only about 2.5 by 1 kilometre, and has eight hamlets.'),
(3, 'https://sitecore-cd.shangri-la.com/-/media/Shangri-La/boracay_boracayresort/about/2023_SLBO_Explore-Boracay.jpg', 'Boracay', 'Boracay is a tropical island in the Philippines, renowned for its stunning white-sand beaches, crystal-clear waters, and vibrant nightlife. It offers a mix of relaxation and adventure, making it a popular destination for tourists. The island is located about 315 kilometers south of Manila, off the northwest coast of Panay Island. '),
(4, 'https://lh3.googleusercontent.com/gps-cs-s/AC9h4npjM_14rxYMUNy8g3LbFj1dUgDanS7LhCDfGWxI4SL7ND-anAIX9V-HiMY57F8AmWjoWjtK__Xb8fAqogCwB4YoubPCc54xvFX9DlXlc8xO9gNJJPiESB6dgSrcucq0vXWWsafT=s680-w680-h510-rw', 'Maria Cristina Falls', 'Maria Cristina Falls is a waterfall of the Agus River in the Northern Mindanao region of the Philippines. It is sometimes called the \"twin falls\" as the flow is separated by a rock at the brink of the waterfall. The name come from the Spanish queen, Maria Christina of Austria.');

-- --------------------------------------------------------

--
-- Table structure for table `msg_tb`
--

CREATE TABLE `msg_tb` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `txtPhone` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msg_tb`
--

INSERT INTO `msg_tb` (`id`, `fullname`, `Email`, `message`, `txtPhone`, `Time`) VALUES
(56, '', 'example@gmail.com', 'another test type', 2147483647, '2025-08-12 01:45:35'),
(57, '', 'a@gamil.com', 'test 2 type', 2147483647, '2025-08-12 01:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `id` int(11) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`id`, `img`, `fullname`, `email`, `phone`, `password`) VALUES
(31, 'https://i.etsystatic.com/43898517/r/il/460c24/5740772116/il_fullxfull.5740772116_m47v.jpg', 'Mikko B. Sabillo                       ', 'example@gmail.com', 9685690087, '$2y$10$TDReecvgvXM6WAwmhq02/OSaVzGXarkjJ07hGpKxcjhJql4YoIjHi');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `user_FName` varchar(50) NOT NULL,
  `user_MName` varchar(50) NOT NULL,
  `user_LName` varchar(50) NOT NULL,
  `user_Email` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL,
  `user_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_tb`
--
ALTER TABLE `card_tb`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `carousel_tb`
--
ALTER TABLE `carousel_tb`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `msg_tb`
--
ALTER TABLE `msg_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_tb`
--
ALTER TABLE `card_tb`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carousel_tb`
--
ALTER TABLE `carousel_tb`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msg_tb`
--
ALTER TABLE `msg_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
