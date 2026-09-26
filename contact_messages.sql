-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2026 at 03:20 AM
-- Server version: 10.5.29-MariaDB
-- PHP Version: 8.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bctcom_bct_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(3, '5tt4ttt', 'a@gmail.com', '01631112475', 'ffffffff', 'efwfffff e fwfef', 0, '2026-09-23 13:52:27', '2026-09-23 13:52:27'),
(4, 'Davidexowl', 'genzprotecton@gmail.com', '83385366483', 'UK Breaking News24x7', 'et the latest UK breaking news and global headlines with UK Breaking News24x7. Stay updated on politics, business, technology, sports, entertainment, and more—24/7 - ukbreakingnews24x7.com', 0, '2026-09-24 01:49:28', '2026-09-24 01:49:28'),
(5, 'Adelaida Annand', 'info@freeb2bdata.org', '92473177', 'FreeB2BData.org Shutting Down', 'Hello,\r\n\r\nI am Adelaida Annand from FreeB2BData\r\n\r\nIt is with sad regret to inform you that we are shutting down\r\n\r\nWe have over 252 countries and over 33 million companies available in our database with phone numbers, industries, emails, etc.\r\n\r\nPlease come and download your data in the next 24 hours. \r\n\r\nhttps://Adelaida.freeb2bdata.org\r\n\r\nRegards,\r\nAdelaida Annand', 0, '2026-09-24 12:23:49', '2026-09-24 12:23:49'),
(6, 'RobertRen', 'gregoryj8tl2g@gmail.com', '82651914628', 'Hi, i am write about   the price', 'Hi, ego volo scire vestri pretium.', 0, '2026-09-25 01:13:50', '2026-09-25 01:13:50'),
(7, 'RobertRen', 'gregoryj8tl2g@gmail.com', '84782315662', 'Hallo  i am writing about your   prices', 'Kaixo, zure prezioa jakin nahi nuen.', 0, '2026-09-25 19:57:09', '2026-09-25 19:57:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
