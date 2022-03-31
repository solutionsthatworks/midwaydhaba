-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 08:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mho_howners`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `user_email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_email`, `password`, `status`) VALUES
(1, 'admin@admin.com', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `btn_history`
--

CREATE TABLE `btn_history` (
  `id` int(5) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `btn_value` text COLLATE utf8_unicode_ci NOT NULL,
  `btn_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `countclick` int(100) NOT NULL,
  `created_at` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `entery_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `entery_date`, `is_active`) VALUES
(1, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'sdfsd sdfs', '2021-03-02 14:45:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquire`
--

CREATE TABLE `tbl_enquire` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `cell` varchar(13) NOT NULL,
  `buy_exiting` varchar(50) NOT NULL,
  `own_exiting` varchar(50) NOT NULL,
  `new_Development` varchar(50) NOT NULL,
  `name_of_existing` varchar(50) NOT NULL,
  `legal_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `how_find` varchar(50) NOT NULL,
  `Comments` text NOT NULL,
  `entery_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enquire`
--

INSERT INTO `tbl_enquire` (`id`, `first_name`, `last_name`, `email`, `phone`, `cell`, `buy_exiting`, `own_exiting`, `new_Development`, `name_of_existing`, `legal_name`, `address`, `street_address`, `state`, `zip_code`, `country`, `how_find`, `Comments`, `entery_date`, `is_active`) VALUES
(2, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', '999-999-2222', 'Yes', 'Yes', 'Yes', 'Kira', 'Kira', 'Thane', 'Thane', 'Maharashtra', 400601, 'India', 'Net', 'ff fgg hh', '2021-03-02 19:11:30', 1),
(3, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', '999-999-2222', 'Yes', 'Yes', 'Yes', 'Kira', 'Kira', 'Thane', 'Thane', 'Maharashtra', 400601, 'India', 'Net', 'dgd fgdfgd', '2021-03-02 19:13:07', 1),
(4, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', '999-999-2222', 'Yes', 'Yes', 'Yes', 'Kira', 'Kira', 'Thane', 'Thane', 'Maharashtra', 400601, 'India', 'Net', 'dgd fgdfgd', '2021-03-02 19:15:17', 1),
(5, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', '999-999-2222', 'Yes', 'Yes', 'Yes', 'Kira', 'Kira', 'Thane', 'Thane', 'Maharashtra', 400601, 'India', 'Net', 'd dfgd dfgdfg', '2021-03-02 19:18:16', 1),
(6, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', '999-999-2222', 'Yes', 'Yes', 'Yes', 'Kira', 'Kira', 'Thane', 'Thane', 'Maharashtra', 400601, 'India', 'Net', 'sdfs sdfsdf sdfsdfs sdfsdf', '2021-03-02 19:20:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_join_sponsors_program`
--

CREATE TABLE `tbl_join_sponsors_program` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `fax` varchar(13) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `level_interested` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `entery_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_join_sponsors_program`
--

INSERT INTO `tbl_join_sponsors_program` (`id`, `first_name`, `last_name`, `company`, `comp_type`, `website`, `email`, `phone`, `fax`, `state`, `zip_code`, `city`, `level_interested`, `message`, `entery_date`, `is_active`) VALUES
(7, 'Kiran', 'Patil', 'SCSer', 'Pvtl', 'www.soltionsthatworks.in', 'kiranpatil.namdeo@gmail.com', '982-011-2280', '982-011-2280', 'California', 444444, 'Los Angeles', 'Platinum', 'dsfsd dfdfgsdsdf', '2021-03-03 19:32:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register_user`
--

CREATE TABLE `tbl_register_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `up_date` datetime NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register_user`
--

INSERT INTO `tbl_register_user` (`id`, `user_name`, `unique_id`, `user_email`, `password`, `phone`, `reg_date`, `up_date`, `is_active`, `user_image`) VALUES
(1, 'kiran patil', 'MHO918', 'kiranpatil.namdeo@gmail.com', '50c2472801ba5f5158b71047563521ef', '9820112280', '2021-03-08 12:38:13', '0000-00-00 00:00:00', 1, 'default_auth.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_feedback`
--

CREATE TABLE `tbl_users_feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_phone` varchar(13) DEFAULT NULL,
  `property_name` varchar(50) DEFAULT NULL,
  `property_address` varchar(100) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `entery_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_feedback`
--

INSERT INTO `tbl_users_feedback` (`id`, `user_id`, `user_name`, `user_email`, `user_phone`, `property_name`, `property_address`, `message`, `entery_date`, `is_active`) VALUES
(1, 224, 'Kiran Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'dsfs', 'sdfsdfs', 'dsfsdfds ', '2021-03-02 14:41:26', 1),
(2, 747, 'Kiran Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'dsfs', 'sdfsdfs', 'fd dfgdfg  sdfs', '2021-03-02 19:21:46', 1),
(3, 378, 'Kiran Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'dsfs', 'sdfsdfs', 'sdfs sdfsdf', '2021-03-02 19:24:27', 1),
(4, 817, 'Kiran Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'dsfs', 'sdfsdfs', 'sdfs ', '2021-03-02 19:25:36', 1),
(5, 354, 'dfgd sdfsd', 'kiranpatil.namdeo@gmail.com', '123-455-4444', 'dsfs', 'sdfsdfs', 'asasd', '2021-03-02 19:29:42', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btn_history`
--
ALTER TABLE `btn_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquire`
--
ALTER TABLE `tbl_enquire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_join_sponsors_program`
--
ALTER TABLE `tbl_join_sponsors_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_feedback`
--
ALTER TABLE `tbl_users_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `btn_history`
--
ALTER TABLE `btn_history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_enquire`
--
ALTER TABLE `tbl_enquire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_join_sponsors_program`
--
ALTER TABLE `tbl_join_sponsors_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users_feedback`
--
ALTER TABLE `tbl_users_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
