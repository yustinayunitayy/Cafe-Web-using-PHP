-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 12:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mooncafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_seatroom`
--

CREATE TABLE `booking_seatroom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `bsr` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_seatroom`
--

INSERT INTO `booking_seatroom` (`id`, `name`, `contact`, `bsr`, `quantity`, `note`) VALUES
(4, 'Yustina Yunita', '08123456789', 'seat', 1, 'i want to order the honey lavender latte 1 with normal ice and sugar'),
(5, 'Yustina Yunita', '08123456789', 'seat', 2, 'i want a seat next to the window'),
(6, 'Yustina Yunita', '08123456789', 'room', 7, '2222222222'),
(7, 'Yustina Yunita', '08123456789', 'seat', 2, 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'Yustina Yunita', 'yustinayunitayy@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'Yustina Yunita', 'yustinayunitayy@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'Yustina Yunita', 'gwenrosevyn@gmail.com', 'good'),
(4, 'Yustina Yunita', 'yustinayunitayy@gmail.com', 'hai'),
(5, 'Yustina Yunita', 'yustinayunitayy@gmail.com', 'good\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `online_orders`
--

CREATE TABLE `online_orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `order_name` char(100) NOT NULL,
  `note` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_orders`
--

INSERT INTO `online_orders` (`id`, `name`, `contact`, `address`, `order_name`, `note`) VALUES
(5, 'Yustina Yunita', '08123456789', 'sbh', 'americano 1', 'ice please and extra side sugar'),
(6, 'Yustina Yunita', '08123456789', 'sbh', 'choco croissant 1 and americano 1', 'ice please and extra side sugar'),
(7, 'aaaaaa', '08123456789', 'sbh', 'choco croissant 1 and americano 1', 'ice please and extra side sugar'),
(8, 'Yustina Yunita', '08123456789', 'sbh', 'americano 1', 'ice please and extra side sugar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'yuyus', 'yustinayunitayy@gmail.com', 'd42490b044da11a2b0945487c9700fc0'),
(10, 'lala@gmail.com', 'lala@gmail.com', '2e3817293fc275dbee74bd71ce6eb056');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_seatroom`
--
ALTER TABLE `booking_seatroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_orders`
--
ALTER TABLE `online_orders`
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
-- AUTO_INCREMENT for table `booking_seatroom`
--
ALTER TABLE `booking_seatroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `online_orders`
--
ALTER TABLE `online_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
