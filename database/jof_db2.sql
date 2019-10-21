-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 09:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jof_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jof_users`
--

CREATE TABLE `jof_users` (
  `id` int(11) NOT NULL,
  `user_type` int(3) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_add` varchar(50) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email_add` varchar(30) NOT NULL,
  `home_add` varchar(100) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(6) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `sms_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `date_issued` int(11) NOT NULL,
  `date_payed` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `due_date` int(11) NOT NULL,
  `mode_pay` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rate_id` int(11) NOT NULL,
  `rate_broker` int(11) NOT NULL,
  `rate_service` int(11) NOT NULL,
  `comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporting`
--

CREATE TABLE `reporting` (
  `report_id` int(11) NOT NULL,
  `date_issued` int(11) NOT NULL,
  `comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sms_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_sent` int(11) NOT NULL,
  `content` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `entry_no` int(11) NOT NULL,
  `commercial_invoice` int(11) NOT NULL,
  `entry_img` int(11) NOT NULL,
  `bill_of_lading` int(11) NOT NULL,
  `packing_list` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `trucker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trucker`
--

CREATE TABLE `trucker` (
  `trucker_id` int(11) NOT NULL,
  `firstname` int(11) NOT NULL,
  `lastname` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `plate_no` int(11) NOT NULL,
  `time_started` int(11) NOT NULL,
  `time_ended` int(11) NOT NULL,
  `time_duration` int(11) NOT NULL,
  `place_start` int(11) NOT NULL,
  `place_destination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jof_users`
--
ALTER TABLE `jof_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans_id` (`trans_id`,`sms_id`),
  ADD KEY `sms_id` (`sms_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `reporting`
--
ALTER TABLE `reporting`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `rate_id` (`rate_id`,`report_id`,`payment_id`,`trucker_id`),
  ADD KEY `trucker_id` (`trucker_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `trucker`
--
ALTER TABLE `trucker`
  ADD PRIMARY KEY (`trucker_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `jof_users` (`id`);

--
-- Constraints for table `jof_users`
--
ALTER TABLE `jof_users`
  ADD CONSTRAINT `jof_users_ibfk_1` FOREIGN KEY (`trans_id`) REFERENCES `transaction` (`trans_id`),
  ADD CONSTRAINT `jof_users_ibfk_2` FOREIGN KEY (`sms_id`) REFERENCES `sms` (`sms_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`trucker_id`) REFERENCES `trucker` (`trucker_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`report_id`) REFERENCES `reporting` (`report_id`),
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`rate_id`) REFERENCES `rating` (`rate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
