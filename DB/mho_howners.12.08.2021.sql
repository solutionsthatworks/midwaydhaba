-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 10:31 AM
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
  `status` int(51) NOT NULL,
  `created_by` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_email`, `password`, `status`, `created_by`, `created_time`, `updated_by`, `updated_time`) VALUES
(1, 'admin@mhohotels.com', '12345678', 1, NULL, '2021-03-24 11:07:52', NULL, '0000-00-00 00:00:00');

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
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(5) NOT NULL,
  `category` varchar(58) COLLATE utf8_unicode_ci NOT NULL,
  `hotel` int(25) NOT NULL,
  `docs` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `category`, `hotel`, `docs`, `created_by`, `created_at`, `status`) VALUES
(1, 'Property document', 1, 'Amnex.docx', 'admin', '2021-03-12 09:41:39', '1'),
(4, 'Property document', 0, 'Job_description1.docx', 'admin', '2021-03-18 21:59:03', '1');

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
(1, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'sdfsd sdfs', '2021-03-02 14:45:47', 1),
(2, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'ttt', '2021-03-15 18:27:27', 1);

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
-- Table structure for table `tbl_hotel_assign`
--

CREATE TABLE `tbl_hotel_assign` (
  `id` int(11) NOT NULL,
  `user_id` int(55) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotel_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hotel_assign`
--

INSERT INTO `tbl_hotel_assign` (`id`, `user_id`, `user_name`, `hotel_name`, `assign_date`, `is_active`) VALUES
(9, 2, 'Deepti Patil', 'MHO Hotel - Bordentown', '2021-03-23 13:31:22', 0),
(10, 1, 'kiran patil', 'MHO Hotel - Bordentown', '2021-03-24 12:25:51', 0),
(11, 2, 'Deepti Patil', 'MHO Hotel - Bordentown', '2021-03-23 13:31:22', 0),
(12, 2, 'Deepti Patil', 'MHO Hotel - Bordentown', '2021-03-24 12:25:53', 0),
(13, 9, 'Kiran Patil', 'MHO Hotel - Bordentown', '2021-03-24 12:26:01', 1);

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
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `send_by` int(55) NOT NULL,
  `received_by` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `message`, `send_date`, `send_by`, `received_by`, `user_name`, `is_active`) VALUES
(0, 'Test', '2021-03-12 08:21:41', 1, 1, 'kiran patil', 1),
(1, 'Test 1', '2021-03-12 08:31:06', 1, 1, 'kiran patil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `id_property` int(11) NOT NULL,
  `tbl_property_name` varchar(50) DEFAULT NULL,
  `tbl_address` varchar(100) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `status` varchar(15) DEFAULT 'Lead',
  `discount` int(2) DEFAULT NULL,
  `tbl_createdby` varchar(45) DEFAULT NULL,
  `tb_property_createtime` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `update_time` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`id_property`, `tbl_property_name`, `tbl_address`, `brand`, `status`, `discount`, `tbl_createdby`, `tb_property_createtime`, `updated_by`, `update_time`, `is_active`) VALUES
(14, 'MHO Hotel - Bordentown', 'Bordentown, NJ 08505', 'MHO Hotel', 'In the system', 10, 'admin@admin.com', '2021-03-26 17:50:52', 'kiranpatil.namdeo@gmail.com', '2021-03-27 01:13:01', 1),
(15, 'La Mirage Motor Inn - Powered by MHO Hotels', 'South Brunswick, NJ 08852', 'Powered by MHO Hotels', 'In the system', 10, 'admin@admin.com', '2021-03-26 00:26:52', NULL, '2021-03-26 17:47:09', 1),
(16, 'MHO Hotel - Tunkhannock, Prince Hotel', 'Tunkhannock, PA 18657', 'MHO Hotel', 'In the system', 10, 'admin@admin.com', '2021-03-26 00:27:01', NULL, '2021-03-26 17:47:09', 1),
(17, 'MHO Inn - Cali Inn', 'Carson, CA', 'MHO Inn', 'Lead', 10, 'admin@admin.com', '2021-03-26 00:27:06', NULL, '2021-03-26 17:47:09', 1),
(18, 'Test Hotel 1', 'Test Hotel 1 Address', 'MHO Hotel', 'In the system', NULL, 'admin@mhohotels.com', '2021-03-22 19:08:30', NULL, '2021-03-26 17:47:09', 0);

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
  `user_image` varchar(255) NOT NULL,
  `tbl_createdby` varchar(45) DEFAULT 'null',
  `tbl_updatedby` varchar(45) DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register_user`
--

INSERT INTO `tbl_register_user` (`id`, `user_name`, `unique_id`, `user_email`, `password`, `phone`, `reg_date`, `up_date`, `is_active`, `user_image`, `tbl_createdby`, `tbl_updatedby`) VALUES
(9, 'Kiran Patil', 'MHO375', 'kiranpatil.namdeo@gmail.com', 'kiran123', '982-011-2280', '2021-03-26 12:34:50', '0000-00-00 00:00:00', 1, 'default_auth.png', 'null', 'null'),
(10, 'kiran test', 'MHO850', 'deeptikiran.patil@gmail.com', 'kiran', '982-111-2222', '2021-03-26 12:46:23', '0000-00-00 00:00:00', 0, '', 'admin@mhohotels.com', 'null'),
(11, 'kiran patil', 'MHO156', 'key2run@gmail.com', '12345678', '999-999-9999', '2021-05-03 13:05:18', '0000-00-00 00:00:00', 0, 'default_auth.png', 'null', 'null');

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
-- Indexes for table `documents`
--
ALTER TABLE `documents`
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
-- Indexes for table `tbl_hotel_assign`
--
ALTER TABLE `tbl_hotel_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_join_sponsors_program`
--
ALTER TABLE `tbl_join_sponsors_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`id_property`);

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
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_enquire`
--
ALTER TABLE `tbl_enquire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_hotel_assign`
--
ALTER TABLE `tbl_hotel_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_join_sponsors_program`
--
ALTER TABLE `tbl_join_sponsors_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `id_property` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users_feedback`
--
ALTER TABLE `tbl_users_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
