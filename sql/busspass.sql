-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 05:12 PM
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
-- Database: `busspass`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `orderid` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `idtype` varchar(30) NOT NULL,
  `idno` varchar(50) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `validity` varchar(30) NOT NULL,
  `doc` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`orderid`, `passno`, `name`, `email`, `phone`, `gender`, `dob`, `idtype`, `idno`, `source`, `destination`, `validity`, `doc`) VALUES
('order_NuXFzHXJ8DkLI4', '178615286', 'Vibinraj Rajesh Kumar', 'vibinrajesh2005@gmail.com', '9653303855', 'Male', '2001-12-29', 'Adhaar Card', '619531257465', 'Vashi', 'Ulwe', '3 Month', '2024-04-04 17:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doj` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `dob`, `password`, `doj`) VALUES
(1, 'Vibinraj Rajesh Kumar', 'vibinrajesh2005@gmail.com', '9653303855', 'Male', '2001-12-29', '$2y$10$NntiQMpLk1VF4uc4tADPveak/Qts7bH5OSwCsOsTUJxL9gFFJgkYS', '2024-04-04 17:20:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
