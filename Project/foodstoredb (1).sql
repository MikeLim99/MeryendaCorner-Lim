-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 04:24 PM
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
-- Database: `foodstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cx_name` varchar(255) DEFAULT NULL,
  `cx_email` varchar(255) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `main_menu` varchar(255) DEFAULT NULL,
  `side_menu` varchar(255) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cx_name`, `cx_email`, `contact_number`, `main_menu`, `side_menu`, `total_price`) VALUES
(19, 'Mike', 'm.lim271999@gmail.com', 994851336, 'Overload', 'Squidballs, Veggieballs', 51),
(26, 'Michael Angelo Lim', 'm.lim271999@gmail.com', 994851336, 'QuarterPounder', 'KwekKwek, Squidballs, Kikiam', 90),
(29, 'Bea', 'bea@gmail.com', 995612, 'Friednoodles', 'Fries, KwekKwek, Squidballs, Fishballs, Veggieballs', 100),
(30, 'mike', 'mike@gmail.com', 9995566, 'Overload', 'Squidballs, Veggieballs', 51),
(33, 'mike', 'mike@gmail.com', 9995566, 'Overload', 'Squidballs, Veggieballs', 51),
(34, 'mike', 'mike@gmail.com', 9995566, 'Overload', 'Squidballs, Veggieballs', 51),
(35, 'mike', 'mike@gmail.com', 9995566, 'Overload', 'Squidballs, Veggieballs', 51),
(36, 'mike', 'mike@gmail.com', 9995566, 'Overload', 'Squidballs, Veggieballs', 51),
(37, 'mike', 'mike@gmail.com', 9995566, 'Overload', 'Squidballs, Veggieballs', 51),
(38, 'agshards@gmail.com', 'agshards@gmail.com', 995612, 'QuarterPounder', 'KwekKwek', 70),
(39, 'agshards@gmail.com', 'agshards@gmail.com', 995612, 'QuarterPounder', 'KwekKwek', 70),
(40, 'bea', 'agshards@gmail.com', 995612, 'Cheeseburger', 'Squidballs, Veggieballs', 41),
(41, 'agshards@gmail.com', 'agshards@gmail.com', 995612, 'QuarterPounder', 'KwekKwek', 70),
(42, 'agshards@gmail.com', 'agshards@gmail.com', 995612, 'QuarterPounder', 'KwekKwek', 70),
(43, 'agshards@gmail.com', 'agshards@gmail.com', 995612, 'QuarterPounder', 'KwekKwek', 70),
(44, 'agshards@gmail.com', 'agshards@gmail.com', 995612, 'QuarterPounder', 'KwekKwek', 70),
(45, 'mike', 'mike@gmail.com', 9995566, 'QuarterPounder', 'Squidballs', NULL),
(46, 'bea', 'mike@gmail.com', 9995566, 'QuarterPounder', 'Squidballs', NULL),
(47, 'Mike lim', 'mikel@gmail.com', 99186463, 'Friednoodles', 'Squidballs', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `isAdmin`) VALUES
(1, 'admin', '$2y$10$hjdj3gTkCVi839jm0OMEs.Ke9hQkWOI7ysb/V.c47zRew.ooWhrgO', NULL),
(2, 'admin2', '$2y$10$3wx/iBY/r8fT6WYPSM1Ix..k4V63nmz3rotd3FmNOVkBOoW9kHDy2', NULL),
(3, 'admin1', '$2y$10$L3A.lD4QhzSq6LZvrtN7Ae4gT6wTQePGgaA3hAQsWRso5oE2PTKiu', NULL),
(4, 'bea', '$2y$10$bSF0N5E8vFR/0p1DbbRbrea3EZLVmc6VNjlZHE.SJtls3dmsEKuoq', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
