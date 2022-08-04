-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2022 at 11:54 AM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jatinder2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `id` int NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Qualification` varchar(15) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `About Yourself` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`id`, `Name`, `Email`, `Phone`, `Qualification`, `Address`, `City`, `State`, `Country`, `About Yourself`) VALUES
(1, 'John', 'kartik@123.com', '9496921353', 'opel', 'test_address2', '<x', 'punjab', 'india', NULL),
(2, 'John', 'k@123.com', '9779778784', 'volvo', 'test_address3', 'ambala', '', '', NULL),
(3, 'bandage', 'kartik@123.com', '949692135', 'volvo', 'test_address', '<x', 'punjab', 'x<', NULL),
(4, 'abc', 'kjghshsghh@123.com', '9496921353', 'opel', 'test_address1z<s bfg bbbg', 'ambala', 'punjab', 'india', NULL),
(5, 'trw', 'ansh@123.com', '9496921353', 'audi', 'test_address3', '', '', '', NULL),
(6, 'John', 'johndoe@gmail.com', '9496921351', 'volvo', 'test_address', '', '', '', NULL),
(7, 'abc', 'kartik@123.com', '9496921351', 'volvo', 'test_address3', 'ambala', '', '', NULL),
(8, 'abc', 'kartik@123.com', '9496921351', 'volvo', 'test_address3', 'ambala', '', '', NULL),
(9, 'zebra', 'jatnder45343@gmail.com', '9496921351', 'audi', 'Arya samaj gali ', 'ambala', 'punjab', 'india', NULL),
(10, 'John', 'k@123.com', '9496921351', 'opel', 'test_address3', '<x', 'punjab', '', NULL),
(11, 'aaaa', 'zzzz@gmail.com', '9779778784', 'opel', 'test_address3', 'ambala', '<', 'india', NULL),
(12, 'zzzzzzzzzzzzzzzzzzzzz', 'k@123.com', '9496921351', 'volvo', 'test_address2', 'ambala', 'punjab', 'india', NULL),
(13, 'zzzzzzzzzzzzzzzzzzzzz', 'k@123.com', '9496921351', 'volvo', 'test_address2', 'ambala', 'punjab', 'india', NULL),
(14, 'zzzzzzzzzzzzzzzzzzzzz', 'k@123.com', '9496921351', 'volvo', 'test_address2', 'ambala', 'punjab', 'india', NULL),
(15, 'John', 'kartik@123.com', '9779778784', 'opel', 'test_address3', 'ambala', 'punjab', 'india', NULL),
(16, 'Johnadfwv ', 'kartik@123.com', '9779778784', 'opel', 'test_address1', 'ambala', 'punjab', 'india', NULL),
(17, 'trw', 'kartik@123.com', '9779778784', 'volvo', 'test_address', '<x', '', '', NULL),
(18, 'trw', 'kartik@123.com', '9779778784', 'volvo', 'test_address', '<x', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
