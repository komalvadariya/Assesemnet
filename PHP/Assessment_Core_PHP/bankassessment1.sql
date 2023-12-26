-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 10:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankassessment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(16) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Gender` text NOT NULL,
  `role_id` int(10) NOT NULL DEFAULT 2,
  `adharno` varchar(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `accounttype` varchar(15) NOT NULL,
  `accountno` varchar(16) NOT NULL,
  `openingbalance` varchar(15) NOT NULL,
  `create at` int(11) NOT NULL DEFAULT current_timestamp(),
  `update at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `fullname`, `username`, `email`, `password`, `dob`, `phone`, `Gender`, `role_id`, `adharno`, `address`, `accounttype`, `accountno`, `openingbalance`, `create at`, `update at`) VALUES
(3, 'administrator', 'admin', 'ranjeets48@gmai', '123', '1989-01-23', '2147483647', 'Male', 1, '2147483647', 'pali', 'saving', '2147483647', '12000', 2147483647, 2147483647),
(4, 'Ranjeet singh', 'ranjeet', 'ranjeet01@gmail', '12345678', '1989-01-23', '2147483647', 'Male', 2, '2147483647', 'rajasthan', 'saving', '2147483647', '20000', 2147483647, 2147483647),
(5, 'Raviraj', 'ravi01', 'ravi01@gmail.co', '12345', '1995-04-23', '2147483647', 'Male', 2, '2147483647', 'mahesan', 'saving', '2147483647', '10000', 2147483647, 2147483647),
(6, 'dsadas dsad', '', 'dsadaas@122', '', '1987-09-23', '131231231', 'Male', 2, '2147483647', 'adi', 'saving', '2147483647', '12000', 2147483647, 2147483647),
(7, 'bhuvan', 'bhuav01', 'bb01@gmail.com', '123', '0000-00-00', '2147483647', 'Male', 2, '2147483647', 'RAJ', 'saving', '2147483647', '2000', 2147483647, 2147483647),
(8, 'Komal', 'Komal01', 'Komal01@gmail.c', '123', '0000-00-00', '2147483647', 'Male', 2, '2147483647', 'ahemdabad', 'saving', '2147483647', '2000', 2147483647, 2147483647),
(9, '', '', '', '', '0000-00-00', '0', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(10, '', '', '', '', '19/08/2023', '0', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(11, '', '', '', '', '19/08/2023', '0', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(12, 'test', '', 'test01@gmail.co', '', '10/08/2023', '2147483647', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(13, '', '', '', '', '01/01/1970', '0', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(14, '', '', '', '', '01/01/1970', '0', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(15, '', '', '', '', '01/01/1970', '0', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(16, '', '', '', '', '01/01/1970', '0', '', 2, '0', '', '', '0', '', 2147483647, 2147483647),
(17, 'Raj kumar', 'raj01', 'raj01@gmail.com', '1234567', '01/01/2003', '2147483647', 'Male', 2, '2147483647', 'ahemabad', 'saving', '2147483647', '10000', 2147483647, 2147483647),
(18, 'test', 'test01', 'test01@gmail.co', '123', '01/01/2004', '2147483647', 'Male', 2, '2147483647', 'dasdas', 'saving', '2147483647', '200000', 2147483647, 2147483647),
(19, 'Rajesh', 'rj01', 'rj01@gmail.com', '123445678', '01/01/2004', '3423432432', 'Male', 2, '768768687687', 'dsadadsad', 'saving', '270879798600', '15000', 2147483647, 2147483647),
(20, 'fsdf', 'fdsf', 'fdsf@123', '4423423', '02/02/2002', '3432434233', 'Male', 2, '768768687687', 'dgddfdfsg', 'saving', '270879798671', '20000', 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
