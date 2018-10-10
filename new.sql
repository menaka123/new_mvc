-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2018 at 09:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `telephone` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `street` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `house_number` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `zip` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `account_number` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `iban` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `payment_id` varchar(500) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `telephone`, `street`, `house_number`, `zip`, `city`, `account_number`, `iban`, `payment_id`) VALUES
(1, 'sad', 'asd', 'ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'sad 3', 'asd', 'ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'sad 5', 'asd', 'ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'sad 6', 'asd', 'ad', '284/4/B/5/A base line road, daluwakotuwa', 'vy', '11540', 'kochchikade', 'yvyv', NULL, NULL),
(5, 'menaka', 'fernando', 'rr', NULL, NULL, NULL, NULL, 'ef', 'dsf', NULL),
(6, 'menaka', 'fernando', 'qwe', NULL, NULL, NULL, NULL, 'yvyv', 'vy', NULL),
(7, 'menaka', 'fernando', 'qwe', '284/4/B/5/A base line road, daluwakotuwa', 'sdsd', '11540', 'kochchikade', 'yvyv', 'sad', NULL),
(8, 'menaka', 'fernando', 'adas', '284/4/B/5/A base line road, daluwakotuwa', 'sdsd', '11540', 'kochchikade', 'yvyv', 'vy', NULL),
(9, 'menaka', 'fernando', 'qwe', '284/4/B/5/A base line road, daluwakotuwa', 'sdsd', '11540', 'kochchikade', 'yvyv', 'dsf', NULL),
(10, 'menaka', 'fernando', '2432', '284/4/B/5/A base line road, daluwakotuwa', 'sdsd', '11540', 'kochchikade', 'yvyv', 'vy', NULL),
(11, NULL, NULL, NULL, '', '', '', '', 'yvyv', 'vy', NULL),
(12, 'menaka', 'fernando', 'qwe', '284/4/B/5/A base line road, daluwakotuwa', 'sdsd', '11540', 'kochchikade', 'yvyv', 'vy', NULL),
(13, 'menaka', 'fernando', 'qwe', '284/4/B/5/A base line road, daluwakotuwa', 'sdsd', '11540', 'kochchikade', 'yvyv', 'vy', NULL),
(14, 'menaka', 'fernando', 'qwe', '', '', '', '', '', '', NULL),
(15, 'menaka', 'fernando', 'qwe', '284/4/B/5/A base line road, daluwakotuwa', 'sdsd', '11540', 'kochchikade', 'yvyv', 'vy', NULL),
(16, 'asda', 'asd', 'asd', 'asda', 'asd', 'asd', 'asd', 'asd', 'ads', NULL),
(17, 'adasd12', 'asd', 'asd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', NULL),
(18, 'asdasd', 'asd', 'asd', '284/4/B/5/A base line road, daluwakotuwa', 'aad', '11540', 'kochchikade', 'yvyv', 'vy', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
