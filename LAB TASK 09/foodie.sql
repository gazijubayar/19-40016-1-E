-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 11:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `SL` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `buying_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`SL`, `Name`, `buying_price`, `selling_price`) VALUES
(1, 'BARGUE', 2500, 3000),
(10, 'PIZZA', 230, 270),
(12, 'Cake', 250, 270);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(12) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `e-mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(18) NOT NULL,
  `profile` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `name`, `e-mail`, `username`, `password`, `gender`, `dob`, `profile`) VALUES
(1, 'mushfiqur ra', 'mushfiqur@gmail.com', 'ss123', '#8$08067', 'male', '12-2-2002', ''),
(2, 'aa ra', 'aa123@gmail.com', 'mm444', '$2y$12$IwlgHI/dBbVTjm8gLXdzpuZ', 'male', '1996-06-04', ''),
(5, 'nur mohammad', 'nur@gmail.com', 'nur11', '$2y$12$OTWNNzrsiyOROgzImXb87O4', 'male', '1995-11-30', ''),
(6, 'Mushfiqur Rahman', 'asif111@gmail.com', 'asif11', '$2y$12$jZDuHUaAdWZRlapO50jJQuF', 'male', '1999-11-30', ''),
(7, 'Mushfiqur rahman', 'mushfiqur.soikot@gmail.com', 'm11', '$2y$12$XgLu0aNhsgeo2R.Alf73E.a', 'male', '1999-11-30', ''),
(8, 'Abc AA', 'abc@gmail.com', 'A111', '$2y$12$SW6N1CGnLlHFwSCF6uZrcuZ', 'male', '1998-11-30', ''),
(9, 'Mushfiqur mm', 'abc@gmail.com', 'm11', '$2y$12$rjCC8qC2mxTWKiyTCggd2uu', 'male', '1999-11-30', ''),
(10, 'shuvo ss', 'abc@gmail.com', 'shuvo11', '$2y$12$J45qHl8QD3jh5sLSPobB0OC', 'male', '1995-11-30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
