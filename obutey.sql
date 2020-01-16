-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 05:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obutey`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_info_tb`
--

CREATE TABLE `acc_info_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `meter_no` varchar(30) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `auth_code` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info_tb`
--

CREATE TABLE `admin_info_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `privillage` varchar(30) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `auth_code` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info_tb`
--

INSERT INTO `admin_info_tb` (`id`, `username`, `privillage`, `pin_code`, `status`, `reg_date`, `last_login`, `auth_code`) VALUES
(1, 'obutey', 'full', '5d283bcf11ecf2b6a2a94ca59ed6d354', 'active', '2020-01-15 01:02:49', '2020-01-15 01:02:49', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `recharge_tb`
--

CREATE TABLE `recharge_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `meter_no` varchar(30) NOT NULL,
  `momo_no` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'success',
  `req_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recharge_tb`
--

INSERT INTO `recharge_tb` (`id`, `username`, `meter_no`, `momo_no`, `amount`, `status`, `req_date`) VALUES
(1, 'heyoo', 'p2343203', '0551838987', 200, 'success', '2020-01-16 03:47:07'),
(2, 'tryJustice', 'p0933203', '0244564567', 100, 'success', '2020-01-16 03:48:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_info_tb`
--
ALTER TABLE `acc_info_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meter_no` (`meter_no`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `admin_info_tb`
--
ALTER TABLE `admin_info_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `recharge_tb`
--
ALTER TABLE `recharge_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meter_no` (`meter_no`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_info_tb`
--
ALTER TABLE `acc_info_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_info_tb`
--
ALTER TABLE `admin_info_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recharge_tb`
--
ALTER TABLE `recharge_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
