-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 07:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `park_e`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `reg` varchar(20) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `times` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `reg` varchar(11) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `nic` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registation`
--

CREATE TABLE `registation` (
  `username` varchar(20) NOT NULL,
  `passwords` varchar(20) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `reg` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `hoursfee` float NOT NULL,
  `yards` int(11) NOT NULL,
  `yardchange` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registation`
--

INSERT INTO `registation` (`username`, `passwords`, `company`, `owner`, `reg`, `email`, `phone`, `address`, `hoursfee`, `yards`, `yardchange`) VALUES
('admin', '123456789', 'abc company', 'nimal', '13', 'weerashan53@gmail.com', '0712545789', 'G/29/4,badulla', 74, 45, 45),
('bnc', '123456789', 'bnc company', 'banu', '123A', 'bnc@gamil.com', '0712578741', 'bnc,badulla', 52, 58, 58),
('shan', '123456789', 'shan com', 'shan', '13A', 'shan@gmail.com', '0714585789', 'nivithigala, rathnapura', 55, 57, 56);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `reg` varchar(20) NOT NULL,
  `outtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`reg`);

--
-- Indexes for table `registation`
--
ALTER TABLE `registation`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
