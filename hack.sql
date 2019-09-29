-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 04:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `hackdetails`
--

CREATE TABLE `hackdetails` (
  `userid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `currentcity` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hackdetails`
--

INSERT INTO `hackdetails` (`userid`, `name`, `email`, `password`, `gender`, `dob`, `currentcity`, `hometown`) VALUES
(1, 'ridhi', 'ridhi@gmail.com', '12', 'female', '', 'kochi', 'newdelhi'),
(2, 'ridhi', 'ravi@gmail.com', '12', 'female', '2019-09-12', 'kochi', 'jamshedpur'),
(3, 'shishya', 'shishya@gmail.com', '12', 'female', '2000-06-06', 'kochi', 'newdelhi'),
(4, 'debjit', 'debjit@gmail.com', '12', 'male', '2019-09-03', 'kochi', 'patna'),
(5, 'ravi', 'ravi@5', '1', 'male', '2000-10-03', 'jamshedpur', 'kochi'),
(6, 'rahul', 'rahul@s', '12', 'male', '2019-09-11', 'jamshedpur', 'kochi'),
(7, '', '', '', 'other', '', '', ''),
(8, 'ritu', 'ris@gmail.com', '12', 'female', '2019-09-18', 'newdelhi', 'kochi'),
(9, 'riya', 're4t@gmail.com', '12', 'female', '2019-09-11', 'newdelhi', 'kochi');

-- --------------------------------------------------------

--
-- Table structure for table `hackimage`
--

CREATE TABLE `hackimage` (
  `email` varchar(100) NOT NULL,
  `pic` varchar(10000) NOT NULL,
  `caption` varchar(10000) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hackimage`
--

INSERT INTO `hackimage` (`email`, `pic`, `caption`, `city`) VALUES
('debjit@gmail.com', 'ag.jpg', 'i love my city', 'kochi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hackdetails`
--
ALTER TABLE `hackdetails`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hackdetails`
--
ALTER TABLE `hackdetails`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
