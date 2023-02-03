-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 07:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitor management`
--
CREATE DATABASE IF NOT EXISTS `visitor management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `visitor management`;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE `visitor` (
  `handler` varchar(255) NOT NULL,
  `Entry_Time` varchar(255) NOT NULL,
  `Out_Time` varchar(255) NOT NULL,
  `purpose_for_visiting` varchar(255) NOT NULL,
  `visitor_id` int(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `apartment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `searcher` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`handler`, `Entry_Time`, `Out_Time`, `purpose_for_visiting`, `visitor_id`, `Date`, `address`, `apartment`, `name`, `email`, `searcher`, `phone`) VALUES
('', '', '', '', 1, '', '', '', '', '', '', 0),
('', '', '', '', 2, '', '', '', '', '', '', 0),
('gateman', '9.30 am', '11 am', 'interview', 3, '1.1.2021', 'BD', 'khilgao', 'Adiba Anbar Ahona', 'ahona.vnsc@gmail.com', '', 1850405400),
('gateman', '9.30 am', '11 am', 'interview', 4, '1.1.2021', 'BD', 'khilgao', 'Adiba Anbar Ahona', 'mat120summer2020.slack.com', '', 1850405400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD UNIQUE KEY `visitor_id` (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
