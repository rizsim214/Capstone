-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 04:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jof_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) UNSIGNED NOT NULL,
  `date_issued` date DEFAULT NULL,
  `feed_comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jof_users`
--

CREATE TABLE `jof_users` (
  `user_id` int(11) NOT NULL,
  `user_type` int(3) DEFAULT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `company_add` varchar(30) DEFAULT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `mid_init` varchar(5) DEFAULT NULL,
  `userName` varchar(30) DEFAULT NULL,
  `email_add` varchar(30) DEFAULT NULL,
  `home_Add` varchar(30) DEFAULT NULL,
  `contact_Info` varchar(30) DEFAULT NULL,
  `pass_Word` varchar(100) DEFAULT NULL,
  `user_City` varchar(30) DEFAULT NULL,
  `user_State` varchar(30) DEFAULT NULL,
  `user_Zip` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jof_users`
--

INSERT INTO `jof_users` (`user_id`, `user_type`, `company_name`, `company_add`, `firstName`, `lastName`, `mid_init`, `userName`, `email_add`, `home_Add`, `contact_Info`, `pass_Word`, `user_City`, `user_State`, `user_Zip`) VALUES
(7, 1, 'JOF', 'Lapu Lapu', 'Riz', 'Sim', 'Loste', 'rizsim81', 'rizsim214@gmail.com', 'Nasipit Talamban', '09753803360', '696d29e0940a4957748fe3fc9efd22a3', 'Cebu City', 'Cebu', 6000),
(8, 2, 'JOF', 'Lapu Lapu', 'Riz', 'Sim', 'Loste', 'accounting', 'rizsim1234@gmail.com', 'Nasipit Talamban', '09753803360', '696d29e0940a4957748fe3fc9efd22a3', 'Cebu City', 'Cebu', 6000),
(9, 3, 'JOF', 'Lapu Lapu', 'Riz', 'Sim', 'Loste', 'broker', 'rizsim1234@gmail.com', 'Nasipit Talamban', '09753803360', '696d29e0940a4957748fe3fc9efd22a3', 'Cebu City', 'Cebu', 6000),
(10, 4, 'JOF', 'Lapu Lapu', 'Riz', 'Sim', 'Loste', 'consignee', 'rizsim1234@gmail.com', 'Nasipit Talamban', '09753803360', '696d29e0940a4957748fe3fc9efd22a3', 'Cebu City', 'Cebu', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rate_id` int(11) UNSIGNED NOT NULL,
  `rate_broker` varchar(255) DEFAULT NULL,
  `rate_service` int(1) DEFAULT NULL,
  `rate_comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transact_table`
--

CREATE TABLE `transact_table` (
  `trans_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `entry_no` int(11) NOT NULL,
  `com_invoice` varchar(255) NOT NULL,
  `bill_ofLading` varchar(255) NOT NULL,
  `packing_list` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `trucking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `jof_users`
--
ALTER TABLE `jof_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `transact_table`
--
ALTER TABLE `transact_table`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jof_users`
--
ALTER TABLE `jof_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transact_table`
--
ALTER TABLE `transact_table`
  ADD CONSTRAINT `transact_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `jof_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
