-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2020 at 12:32 AM
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
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `value` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `user_id`, `name`, `value`) VALUES
(1, 6, 'address', 'liepaja'),
(2, 6, 'sex', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'menaka fernando', 'project.menaka@gmail.com', '$2y$10$wIDmFYgNkhKfIaQFTzca/.fvwY.z6T6luK1oFxlOOLiYIqS0qrqei'),
(2, 'menaka fernando', 'project1.menaka@gmail.com', '$2y$10$n7OCaG7CzuEn0VVipDI7Yu9i7tPc6oUeuFnu9CkDRO.EyFJs4s86G'),
(3, 'menaka fernando', 'project2.menaka@gmail.com', '$2y$10$CTWLcoZLoGCf6Q6gZ4Tjveyeu5DZkO6G2N659/x70vpqHAkcNVm1i'),
(4, 'menaka fernando', 'project4.menaka@gmail.com', '$2y$10$EOaCuxB4PXhMQ8ayDn1nvOe3WcrSDEzd6PxO6xYepRsolavvNcAU2'),
(5, 'menaka fernando', 'project5.menaka@gmail.com', '$2y$10$DNvqPlViqcifsH8MDfTHKuXXHcx2wG.FeA09aOKXa1OgcavvhTejy'),
(6, 'menaka fernando', 'abc@a.com', '$2y$10$GIrgrhReHE6xX.PHBROO7eA.m12T7AUYKU6Jd83ODAG2UsbZEgVKu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
