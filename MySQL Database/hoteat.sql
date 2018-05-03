-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 12:28 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteat`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(11) NOT NULL,
  `TableId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `TimeFrom` time NOT NULL,
  `DateFrom` date NOT NULL,
  `Reserved` tinyint(1) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `TableId`, `CustomerId`, `TimeFrom`, `DateFrom`, `Reserved`, `Status`) VALUES
(1, 1, 1, '11:00:00', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Location` text NOT NULL,
  `PhoneNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(30) DEFAULT NULL,
  `PassWord` varchar(30) DEFAULT NULL,
  `CreatedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Type` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `UserName`, `PassWord`, `CreatedOn`, `Type`) VALUES
(1, 'admin', 'admin', '2018-04-24 09:08:53', 0),
(2, 'manager', 'manager', '2018-04-24 09:09:23', 1),
(3, 'editor', 'editor', '2018-04-24 09:09:49', 2);

-- --------------------------------------------------------

--
-- Table structure for table `master_restaurant_tables`
--

CREATE TABLE `master_restaurant_tables` (
  `Id` int(11) NOT NULL,
  `TableNo` tinyint(4) NOT NULL,
  `Capacity` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_time_slots`
--

CREATE TABLE `master_time_slots` (
  `Id` int(11) NOT NULL,
  `TableId` int(11) NOT NULL,
  `TimeFrom` time NOT NULL,
  `TimeTo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_time_slots`
--

INSERT INTO `master_time_slots` (`Id`, `TableId`, `TimeFrom`, `TimeTo`) VALUES
(1, 1, '10:00:00', '14:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `master_restaurant_tables`
--
ALTER TABLE `master_restaurant_tables`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `master_time_slots`
--
ALTER TABLE `master_time_slots`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_restaurant_tables`
--
ALTER TABLE `master_restaurant_tables`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_time_slots`
--
ALTER TABLE `master_time_slots`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
