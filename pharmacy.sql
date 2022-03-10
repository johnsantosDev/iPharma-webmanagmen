-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 09:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `image` varchar(45) NOT NULL,
  `type` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Id`, `name`, `details`, `image`, `type`, `company`, `price`) VALUES
(1, 'VASOPRIL', 'Enalapril maleate 5mg & 10mg/tablet', 'Vasopril5.jpg', 'Teblet', 'Square Pharmaceutical Ltd', 'Tk. 125 / pack'),
(3, 'MONOPRIL', 'Enalapril maleate 10mg/tablet	', 'MonoprilPlus.jpg', 'Teblet', 'Renata Ltd.	', 'Tk.152/ pack\r\n\r\n'),
(4, 'ACIDROX', 'Aluminium hydroxide gel BP & magnesium hydroxide BP', 'acidox.jpg', 'Suspension', 'Syntho laboratories ltd.	', 'Tk.32/bot\r\n\r\n'),
(5, 'MONOPRIL', 'Enalapril maleate 5mg & 10mg/tablet	', 'Vasopril5.jpg', 'Teblet', 'Renata Ltd.	', 'Tk.152/ pack\r\n\r\n'),
(6, 'MONOPRIL', 'Enalapril maleate 5mg & 10mg/tablet	', 'Vasopril5.jpg', 'Teblet', 'Renata Ltd.	', 'Tk.152/ pack\r\n\r\n'),
(7, 'MONOPRIL', 'Enalapril maleate 5mg & 10mg/tablet	', 'Vasopril5.jpg', 'Teblet', 'Renata Ltd.	', 'Tk.152/ pack\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
