-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 09:15 AM
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
-- Database: `dbshoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`ID`, `username`, `email`, `password`) VALUES
(1, 'gwen', 'arnelgwenn@gmail.com', '123'),
(2, 'progwen', 'linggaming121@gmail.com', '12345'),
(3, 'arnel', 'arnelgwen0701@gmail.com', 'arnel123');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`ID`, `name`, `price`, `image`) VALUES
(1, 'Helios Pro', '45500', 'helios1.webp'),
(2, 'Helios 20s', '59500', 'helios2.webp'),
(3, 'HP 12', '35000', 'hp1.png'),
(4, 'HP 20 pro', '67999', 'hp2.png'),
(5, 'HP 19', '43999', 'hp3.png'),
(6, 'HP 21s', '89500', 'hp4.png'),
(7, 'Nitros', '34800', 'nitros.webp'),
(8, 'Predator 7', '65000', 'predator1.webp'),
(9, 'Predator 8', '67900', 'predator2.webp'),
(10, 'Predator 10', '69500', 'predator3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `usercart_id1`
--

CREATE TABLE `usercart_id1` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercart_id1`
--

INSERT INTO `usercart_id1` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(1, 'Predator 8', '67900', 'predator2.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercart_id2`
--

CREATE TABLE `usercart_id2` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercart_id2`
--

INSERT INTO `usercart_id2` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(1, 'Predator 7', '65000', 'predator1.webp', 1),
(2, 'HP 21s', '89500', 'hp4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercart_id3`
--

CREATE TABLE `usercart_id3` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usercart_id1`
--
ALTER TABLE `usercart_id1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercart_id2`
--
ALTER TABLE `usercart_id2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercart_id3`
--
ALTER TABLE `usercart_id3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usercart_id1`
--
ALTER TABLE `usercart_id1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usercart_id2`
--
ALTER TABLE `usercart_id2`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usercart_id3`
--
ALTER TABLE `usercart_id3`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
