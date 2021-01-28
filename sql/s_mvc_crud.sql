-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2021 at 06:20 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` tinyint NOT NULL,
  `salary` decimal(7,2) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `age`, `salary`, `notes`) VALUES
(1, 'Elizabeth Page', 'Non vel sint libero ', 59, '4311.00', ''),
(2, 'Velma Cardenas', 'Quos in architecto m', 37, '8708.00', ''),
(3, 'Indira Case', 'Autem ad iure incidu', 42, '1564.00', ''),
(4, 'Kendall Merrill', 'Qui illo aut tempora', 35, '3603.00', ''),
(5, 'Baxter Leach', 'Ratione facere incid', 26, '5064.00', ''),
(6, 'Molly Cunningham', 'Consequuntur molesti', 41, '2861.00', ''),
(7, 'Megan Montoya', 'Sit Nam esse repudia', 27, '2848.00', ''),
(8, 'Thomas Snyder', 'Accusantium qui exer', 35, '6767.00', ''),
(9, 'Nita Maxwell', 'Qui adipisicing amet', 43, '7609.00', ''),
(10, 'Inga Calderon', 'Quis et alias repreh', 35, '3925.00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
