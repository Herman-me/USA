-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 04:44 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st`
--

-- --------------------------------------------------------

--
-- Table structure for table `lessions`
--

CREATE TABLE `lessions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `ostad` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ostad`
--

CREATE TABLE `ostad` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `personalcode` text COLLATE utf8_persian_ci NOT NULL,
  `lessencode` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `ostad`
--

INSERT INTO `ostad` (`id`, `fname`, `personalcode`, `lessencode`) VALUES
(1, 'علی اصلانی', '245', 0),
(2, 'علی اصلانی', '245', 0),
(3, 'علی اصلانی', '245', 0),
(4, 'علی اصلانی', '245', 0),
(5, 'علی اصلانی', '245', 0),
(6, 'علی اصلانی', '245', 0),
(7, 'علی اصلانی', '245', 0),
(8, 'علی اصلانی', '245', 0),
(9, 'محسن موحدی', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `selected_lessen`
--

CREATE TABLE `selected_lessen` (
  `id` int(11) NOT NULL,
  `lessen` int(100) NOT NULL,
  `for_st` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `selected_lessen`
--

INSERT INTO `selected_lessen` (`id`, `lessen`, `for_st`, `score`) VALUES
(1, 4, 5, 0),
(2, 5, 5, 0),
(3, 3, 5, 19),
(4, 4, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `lessions` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lessions`
--
ALTER TABLE `lessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ostad`
--
ALTER TABLE `ostad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected_lessen`
--
ALTER TABLE `selected_lessen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lessions`
--
ALTER TABLE `lessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ostad`
--
ALTER TABLE `ostad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `selected_lessen`
--
ALTER TABLE `selected_lessen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
