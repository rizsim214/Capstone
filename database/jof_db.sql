-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 12:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

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
  `pass_Word` varchar(30) DEFAULT NULL,
  `user_City` varchar(30) DEFAULT NULL,
  `user_State` varchar(30) DEFAULT NULL,
  `user_Zip` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jof_users`
--

INSERT INTO `jof_users` (`user_id`, `user_type`, `company_name`, `company_add`, `firstName`, `lastName`, `mid_init`, `userName`, `email_add`, `home_Add`, `contact_Info`, `pass_Word`, `user_City`, `user_State`, `user_Zip`) VALUES
(1, 1, 'JOF Customs Brokerage', 'Lapu Lapu', 'admin1', 'admin1', 'L', 'admin123', 'admin123@admin.com', 'Nasipit Talamban', '09753803360', '12345 ', 'Cebu Ciity', 'Cebu', 6000),
(2, 3, 'JOF Customs Brokerage', 'Lapu Lapu', 'broker1', 'broker1', 'L', 'broker123', 'broker123@broker.com', 'Nasipit Talamban', '09753803360', '123456', 'Cebu Ciity', 'Cebu', 6000),
(3, 4, 'JOF Customs Brokerage', 'Lapu Lapu', 'cons1', 'cons1', 'L', 'cons123', 'cons123@cons.com', 'Nasipit Talamban', '09753803360', '1234', 'Cebu Ciity', 'Cebu', 6000),
(4, 2, 'JOF Customs Brokerage', 'Lapu Lapu', 'account1', 'account1', 'L', 'acct123', 'cons123@cons.com', 'Nasipit Talamban', '09753803360', '123', 'Cebu Ciity', 'Cebu', 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jof_users`
--
ALTER TABLE `jof_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jof_users`
--
ALTER TABLE `jof_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
