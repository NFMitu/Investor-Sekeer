-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 12:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_investor_seeker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-table1`
--

CREATE TABLE `admin-table1` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-table1`
--

INSERT INTO `admin-table1` (`id`, `photo`, `name`, `role`, `username`, `password`) VALUES
(14, '64639dd3251c6.png', 'ss', 'adminsanto', 'ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `entcardinfo`
--

CREATE TABLE `entcardinfo` (
  `id` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `revenue` int(255) NOT NULL,
  `lastMSell` int(255) NOT NULL,
  `lastYSell` int(255) NOT NULL,
  `totalSell` int(255) NOT NULL,
  `amountofInvestmentRequired` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entcardinfo`
--

INSERT INTO `entcardinfo` (`id`, `companyName`, `email`, `location`, `revenue`, `lastMSell`, `lastYSell`, `totalSell`, `amountofInvestmentRequired`, `name`) VALUES
(1, 'asa', 'arafathh@gmail.com', 'ajsnjansa', 1151515, 1515, 51515, 15151, 12121, 'santo'),
(2, 'NNT', 'sak@gmail.com', 'Dhak', 5000, 500000, 5000000, 50000000, 50000, 'Sayem'),
(3, 'bat', 'arafath@gmail.com', 'Dhaka', 1151515, 1515, 51515, 50000000, 5515, 'arafath');

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneur-reg-table1`
--

CREATE TABLE `entrepreneur-reg-table1` (
  `id` int(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_sign` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'ent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrepreneur-reg-table1`
--

INSERT INTO `entrepreneur-reg-table1` (`id`, `profile_photo`, `name`, `username`, `nid`, `email`, `password`, `date_sign`, `role`) VALUES
(2, '645f520259b37.png', '', 'arafat', 0, 'ass', 'd41d8cd98f00b204e9800998ecf8427e', '', 'ent'),
(6, '645f7cc6f34e3.png', '', '12345', 0, '', '', '23:05:13', 'ent'),
(7, '645fe0baa88c9.png', '', 'sasa', 0, '', 'sasa', '23:05:13', 'ent');

-- --------------------------------------------------------

--
-- Table structure for table `entro_card_info_table1`
--

CREATE TABLE `entro_card_info_table1` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investor_reg_table1`
--

CREATE TABLE `investor_reg_table1` (
  `id` int(11) NOT NULL,
  `investor_profile` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_sign` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'inv'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investor_reg_table1`
--

INSERT INTO `investor_reg_table1` (`id`, `investor_profile`, `name`, `username`, `password`, `nid`, `email`, `date_sign`, `role`) VALUES
(2, '6460e6ee62108.png', '', 'santo1', '1456', 0, '', '23:05:14', 'inv'),
(3, '646149be39b6b.png', '', '', '', 0, '', '23:05:14', 'inv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-table1`
--
ALTER TABLE `admin-table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entcardinfo`
--
ALTER TABLE `entcardinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrepreneur-reg-table1`
--
ALTER TABLE `entrepreneur-reg-table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entro_card_info_table1`
--
ALTER TABLE `entro_card_info_table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_reg_table1`
--
ALTER TABLE `investor_reg_table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-table1`
--
ALTER TABLE `admin-table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `entcardinfo`
--
ALTER TABLE `entcardinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entrepreneur-reg-table1`
--
ALTER TABLE `entrepreneur-reg-table1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `entro_card_info_table1`
--
ALTER TABLE `entro_card_info_table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investor_reg_table1`
--
ALTER TABLE `investor_reg_table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
