-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 10:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(200) NOT NULL,
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
(10, 'Farhad Ahmed', '20-42539-1@student.aiub.edu', 'Ahmed', '$2y$12$qEGggs74ruej7UUMfuXS9OR', 'male', '2021-11-30', ''),
(100, 'Farhan', '20-42539-1@student.aiub.edu', 'Farhad', '$2y$12$WX9Ufxmr/BOTFpX8FbvQNuv', 'male', '2022-01-31', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
