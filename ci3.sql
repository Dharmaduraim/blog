-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 10:39 AM
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
-- Database: `ci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `bloguserid` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `shortcontant` varchar(200) NOT NULL,
  `longcontant` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `bloguserid`, `image`, `shortcontant`, `longcontant`, `date`) VALUES
(22, 'flower design', '5', 'download1.jpg', 'flower consists of a floral axis upon which are borne the essential organs', 'flower consists of a floral axis upon which are borne the essential organs of reproduction (stamens and pistils) and usually accessory organs (sepals and petals); the latter may serve to both attract ', '2024-03-27'),
(23, 'Event planning.', '3', 'download2.jpg', 'As a leading event management platform, we are dedicated', 'As a leading event management platform, we are dedicated to delivering the latest industry news, trends, and tips to our readers!       As a leading event management platform, we are dedicated to deli', '2024-03-29'),
(24, 'Flower Descryption1', '3', '6.jpg', '1The principal purpose of a flower is the reproduction of the individual and the species', '1The principal purpose of a flower is the reproduction of the individual and the species. All flowering plants are heterosporous, that is, every individual plant', '2024-03-28'),
(25, 'Test', '6', 'download.jpg', 'test', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '2024-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `bloguserdata`
--

CREATE TABLE `bloguserdata` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloguserdata`
--

INSERT INTO `bloguserdata` (`id`, `name`, `email`, `password`, `phone`, `date`) VALUES
(3, 'Thiru', 't@gmail.com', 'qwe', '12345', '2024-03-26'),
(4, 'tamil', 'tamil@gmail.com', 'tamil', '234567', '2024-03-26'),
(5, 'durai', 'durai@gmail.com', 'asd', '8428720224', '2024-03-27'),
(6, 'Dharma', 'dharma@gmail.com', 'asd', '12345678', '2024-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'aaaa', 'a', 'as@gmai.co'),
(2, 'aaaa', 'a', 'as@gmai.co');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(100) NOT NULL,
  `task` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `task`, `date`, `status`) VALUES
(37, 'ddgg', '2024-03-18', 'active'),
(38, '  hhh', '2024-03-18', 'pending'),
(40, 'sgsdsjshd', '2024-03-26', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(9, 'ajun', 'ajun@gmail.com', 'arjun'),
(10, 'arjun', 'ajh@gmail.com', 'asd'),
(11, 'DHARMADURAI', 'dharma@gmail.com', 'dharma'),
(12, 'dharma', 'durai@gmail.com', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloguserdata`
--
ALTER TABLE `bloguserdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bloguserdata`
--
ALTER TABLE `bloguserdata`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
