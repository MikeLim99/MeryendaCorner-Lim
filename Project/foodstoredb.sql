-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 04:12 PM
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
-- Database: `foodstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `userName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`userName`, `email`, `message`) VALUES
('awd', 'awdawd@gmailc.om', 'awdawdawd'),
('michael', 'mike@gmail.com', 'new message has been sent please verify'),
('adw', 'adw@awd', 'awd'),
('adw', 'adw@awd', 'awd'),
('awdwa', 'dawdawd', 'dawdaw'),
('awdwa', 'dawdawd', 'dawdaw'),
('awdawd', 'awdawd', 'awdaw'),
('awdawd', 'awdawd', 'awdaw'),
('awdawd', 'awdawd', 'awdaw'),
('awdawd', 'awdawd', 'awdaw'),
('awdawd', 'awdawd', 'awdaw'),
('awdawd', 'awdawd', 'awdaw'),
('adwad', 'awdawd', 'awdawd'),
('adwad', 'awdawd', 'awdawd'),
('bago', 'bagoBA', 'bago'),
('bago', 'bagoBA', 'bago'),
('bago', 'bagoBA', 'bago'),
('bago', 'bagoBA', 'bago'),
('bago', 'bagoBA', 'bago'),
('bago', 'bagoBA', 'bago'),
('dwadaw', 'awdaw', 'awdawda'),
('dwadaw', 'awdaw', 'awdawda'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago'),
('newadd', 'newadd', 'bago');

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
(47, 'Mike lim', 'mikel@gmail.com', 99186463, 'Friednoodles', 'Squidballs', 50),
(48, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(49, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(50, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(51, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(52, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(53, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(54, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(55, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(56, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(57, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(58, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(59, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(60, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(61, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(62, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(63, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(64, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(65, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(66, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(67, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(68, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(69, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(70, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(71, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(72, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(73, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(74, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(75, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(76, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(77, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'QuarterPounder', 'Fries, Kikiam, Veggieballs', 80),
(78, 'Michael Angelo Lim', 'Michael@gmail.com', 2147483647, 'Friednoodles', 'Squidballs', 50);

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
(1, 'admin', '$2y$10$hjdj3gTkCVi839jm0OMEs.Ke9hQkWOI7ysb/V.c47zRew.ooWhrgO', 1),
(2, 'admin2', '$2y$10$3wx/iBY/r8fT6WYPSM1Ix..k4V63nmz3rotd3FmNOVkBOoW9kHDy2', NULL),
(3, 'admin1', '$2y$10$L3A.lD4QhzSq6LZvrtN7Ae4gT6wTQePGgaA3hAQsWRso5oE2PTKiu', NULL),
(4, 'bea', '$2y$10$bSF0N5E8vFR/0p1DbbRbrea3EZLVmc6VNjlZHE.SJtls3dmsEKuoq', NULL),
(5, 'superadmin', '$2y$10$uTL.dumCZXXHEfNvUMUogehvWcTzkaAXD17fScin6787frU9A89uK', 1),
(6, 'user', '$2y$10$HZBknLq8JoXi35CYRH7wced7qPBNGNPRyMTQWoRYBaC7C9hFPPPGu', NULL);

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
