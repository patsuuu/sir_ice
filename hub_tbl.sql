-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 02:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hub_tbl`
--

CREATE TABLE `hub_tbl` (
  `id` int(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hub_tbl`
--

INSERT INTO `hub_tbl` (`id`, `name`, `password`, `user_type`, `time`) VALUES
(19, 'simon', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2023-11-30 00:00:00'),
(20, 'anne', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2023-11-30 00:00:00'),
(22, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '2023-11-30 00:00:00'),
(23, 'yaw', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2023-11-30 20:51:10'),
(24, 'awaw', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2023-11-30 20:52:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hub_tbl`
--
ALTER TABLE `hub_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl` (`time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hub_tbl`
--
ALTER TABLE `hub_tbl`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
