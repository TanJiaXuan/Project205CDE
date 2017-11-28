-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:40 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookID` int(11) NOT NULL,
  `Busername` varchar(256) NOT NULL,
  `Bhpno` varchar(15) NOT NULL,
  `BDate` date NOT NULL,
  `BTime` time NOT NULL,
  `BPerson` int(10) NOT NULL,
  `booktime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookID`, `Busername`, `Bhpno`, `BDate`, `BTime`, `BPerson`, `booktime`) VALUES
(11, 'XUAN', '0164907801', '2017-12-22', '10:00:00', 5, '2017-11-26 12:11:03'),
(12, 'Wilson', '0111118889', '2018-01-02', '22:00:00', 6, '2017-11-26 12:12:13'),
(13, 'Chooi', '0124133267', '2017-09-09', '12:00:00', 2, '2017-11-27 12:07:47'),
(14, 'Tony', '0164140797', '2017-12-30', '17:00:00', 6, '2017-11-28 04:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(13) NOT NULL,
  `username` varchar(256) NOT NULL,
  `pwd` varchar(16) NOT NULL,
  `email` varchar(256) NOT NULL,
  `hpno` varchar(15) NOT NULL,
  `role` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `pwd`, `email`, `hpno`, `role`) VALUES
(1, 'coco', '123123', 'cocoo@gmail.com', '0161234567', 'admin'),
(2, 'jooxuan', '456456', 'tan_joo97@hotmail.com', '0164907801', ''),
(23, 'Chooi', '123456', 'chooi@gmail.com', '0124576354', ''),
(24, 'Tony', '020491', 'tony@hotmail.com', '0164140797', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
