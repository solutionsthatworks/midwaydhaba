-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 08:51 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shresthi_hotel`
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

--
-- Dumping data for table `btn_history`
--

INSERT INTO `btn_history` (`id`, `user_name`, `btn_value`, `btn_name`, `url`, `countclick`, `created_at`) VALUES
(1, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/index.php', 1, '2021-02-03 12:23:28'),
(2, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/index.php', 1, '2021-02-03 12:24:04'),
(3, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/index.php', 1, '2021-02-03 12:24:13'),
(4, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/index.php', 1, '2021-02-03 12:27:38'),
(5, 'Anonymous', 'Book now', 'Book now', '/Hotel/bordentown', 1, '2021-02-03 12:57:14'),
(6, 'Anonymous', 'Book now', 'Book now', '/Hotel/Green_Acres_Motel', 1, '2021-02-03 13:20:44'),
(7, 'Anonymous', 'Book now', 'Book now', '/Hotel/prince_hotel', 1, '2021-02-03 13:21:59'),
(8, 'Anonymous', 'Book now', 'Book now', '/Hotel/mirage_motor', 1, '2021-02-03 13:38:03'),
(9, 'Anonymous', 'Book now', 'Book now', '/Hotel/bordentown', 1, '2021-02-03 13:38:43'),
(10, 'Anonymous', 'Book now', 'Book now', '/Hotel/mirage_motor', 1, '2021-02-03 13:38:48'),
(11, 'Anonymous', 'Book now', 'Book now', '/Hotel/plaza_motels', 1, '2021-02-03 13:38:57'),
(12, 'Anonymous', 'Book now', 'Book now', '/Hotel/Green_Acres_Motel', 1, '2021-02-03 13:39:03'),
(13, 'emp', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/', 1, '2021-02-03 13:43:14'),
(14, 'emp', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/', 1, '2021-02-03 13:43:14'),
(15, 'Andy Gomes', '#', 'Check availability', '/Hotel/', 1, '2021-02-03 15:31:00'),
(16, 'kiran', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/', 1, '2021-02-03 16:28:29');

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
(1, 'Dee', 'dsgdfg', 'pradeep.atweshsolutions@gmail.com', '7441175637', 'dgfhfh', '2021-02-03 06:04:51', 1),
(2, 'Dee', 'dsgdfg', 'pradeep.atweshsolutions@gmail.com', '7441175637', 'dgfhfh', '2021-02-03 06:05:00', 1),
(3, 'Prddd', 'fdg', 'tonyrust@outlook.com', '9874563210', 'sdgjkuikgvg', '2021-02-03 07:09:06', 0),
(4, 'grth', 'uy', 'pradeep.atweshsolutions@gmail.com', '7441175637', 'uyjuyk', '2021-02-03 06:08:31', 1),
(5, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:27:44', 1),
(6, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:27:51', 1),
(7, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:27:56', 1),
(8, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:00', 1),
(9, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:00', 1),
(10, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:00', 1),
(11, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:00', 1),
(12, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:00', 1),
(13, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:01', 1),
(14, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:02', 1),
(15, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:03', 1),
(16, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:05', 1),
(17, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:05', 1),
(18, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:05', 1),
(19, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:05', 1),
(20, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:07', 1),
(21, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:08', 1),
(22, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:08', 1),
(23, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:09', 1),
(24, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 06:28:09', 1),
(25, 'New', 'Tester', 'newtester@gmail.com', '9876543210', 'This is testing.', '2021-02-04 06:42:53', 1),
(26, 'New', 'Tester', 'newtester@gmail.com', '9876543210', 'This is testing.', '2021-02-04 06:42:55', 1),
(27, 'Newwww', 'Testerttt', 'newtester@gmail.com', '9876543210', 'This is testing. neww', '2021-02-04 06:49:03', 1),
(28, 'Newwww15', 'Testerttt15', 'newtester@gmail.comgd', '9876543210', 'This is testing. newwdgdrhtyjytj', '2021-02-04 06:49:50', 1),
(29, 'Dee', 'dsgdfg', 'pradeep.atweshsolutions@gmail.com', '7441175637', 'jfjykygukugik', '2021-02-04 06:50:18', 1),
(30, 'Deehhtjh', 'dsgdfghtyh', 'pradeeggp.atweshsolutions@gmail.com', '7441175637', 'jfjykygukugikdfhfh', '2021-02-04 06:50:51', 1),
(31, 'Rrrr', 'gggg', 'fsd@gsdg.sdgfsd', '9874563210', 'sdfsdgdhggh gdhfhfg h', '2021-02-04 06:53:19', 1),
(32, 'hhhhh', 'k.kl.', 'dsgsgd@ghj.hj', '96325287410', 'sdfdgfhfghfg fngh f', '2021-02-04 06:55:35', 1),
(33, 'uuu', 'uttutyu', 'e@dgsg.hf', '9852147630', 'dfgd hg f', '2021-02-04 07:00:01', 1),
(34, 'test', 'tessting', 'test@xyz.com', '9876543210', 'test', '2021-02-04 07:05:57', 1),
(35, 'test', 'tessting', 'test@xyz.com', '9876543210', 'tttt', '2021-02-04 07:06:15', 1),
(36, 'test', 'tessting', 'test@xyz.com', '9876543210', 'teeee', '2021-02-04 07:06:40', 1),
(37, 'fdsdsfsfds', 'sdfdsfsfd', 'dsdsfsd@gmail.com', '43543543435', 'fdsfdsfdsfds', '2021-02-04 07:08:00', 1),
(38, 'fdsdsfsfds', 'sdfdsfsfd', 'dsdsfsd@gmail.com', '43543543435', 'fdsfdsfdsfds', '2021-02-04 07:08:10', 1),
(39, '', '', '', '', '', '2021-02-04 07:08:24', 1),
(40, '', '', '', '', '', '2021-02-04 07:08:24', 1),
(41, '', '', '', '', '', '2021-02-04 07:08:24', 1),
(42, 'fdsdsfsfds', 'sdfdsfsfd', 'dsdsfsd@gmail.com', '43543543435', 'fdsfdsfdsfds', '2021-02-04 07:08:24', 1),
(43, '', '', '', '', '', '2021-02-04 07:08:26', 1),
(44, '', '', '', '', '', '2021-02-04 07:08:26', 1),
(45, 'fdsdsfsfds', 'sdfdsfsfd', 'dsdsfsd@gmail.com', '43543543435', 'fdsfdsfdsfds', '2021-02-04 07:08:59', 1),
(46, 'fdsdsfsfds', 'sdfdsfsfd', 'dsdsfsd@gmail.com', '43543543435', 'fdsfdsfdsfds', '2021-02-04 07:09:09', 1),
(47, '', '', '', '', '', '2021-02-04 07:09:10', 1),
(48, 'hdhh', 'tjtyjyuki', 'yukyuk@ghrhd.grtyhr', '987456321', 'sdgfdghrf', '2021-02-04 07:09:46', 1),
(49, '', '', '', '', '', '2021-02-06 06:41:59', 1),
(50, 'tet', 'gdsg', 'sdsd@dfgd.dsaf', '', 'a', '2021-02-06 06:43:28', 1);

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
(1, 'Test', '', 'tees@test.com', '0626b8983f44d02593b701b311471df0', '9876543210', '2021-02-02 09:17:59', '0000-00-00 00:00:00', 0, 'OIP.jpg'),
(2, 'Rupesh', '', 'rupesh@gmail.com', 'f1d0cca11767dfd4c7c936ce2e1ef4fe', '0123456789', '2021-02-02 09:17:56', '0000-00-00 00:00:00', 1, 'first_imoji.png'),
(3, 'pp', '', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '7567686', '2021-02-02 13:10:38', '0000-00-00 00:00:00', 0, 'nnnn'),
(4, 'Pradeep', '', 'one@11111.com', 'fd480df55d341f588bed4f1f5c38aba6', '1478523690', '2021-02-03 13:52:57', '0000-00-00 00:00:00', 0, 'nnnn'),
(5, 'SP', '', 'partnernew@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b', '9876543210', '2021-02-06 06:28:14', '0000-00-00 00:00:00', 1, 'Happy-Emoji-PNG-High-Quality-Image.png'),
(6, 'emp_fd', '', '', '6c44e5cd17f0019c64b042e4a745412a', '9876543210', '2021-02-03 12:30:51', '0000-00-00 00:00:00', 0, 'Screenshot_(2)1.png'),
(7, 'Tesss', '', 'pradeep.sfh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '7441175637', '2021-02-06 07:05:42', '0000-00-00 00:00:00', 0, 'third_imoji.png'),
(8, 'Tesss', '', 'pradeep.dfgd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '7441175637', '2021-02-06 07:05:33', '0000-00-00 00:00:00', 0, 'third_imoji1.png'),
(9, 'Andy Gomes', '', 'andygomes@yopmail.com', '25d55ad283aa400af464c76d713c07ad', '09876543210', '2021-02-03 15:27:48', '0000-00-00 00:00:00', 0, 'default_auth.png'),
(10, 'kiran', '', 'kiranpatil.namdeo@gmail.com', 'cfca875af8f6742c515863628cf0bd35', '9820112280', '2021-02-03 16:27:34', '0000-00-00 00:00:00', 0, 'eugene-golovesov-T7MYme97QRY-unsplash.jpg'),
(11, 'emp_new', '', 'partnernew@xyz.com', '81dc9bdb52d04dc20036dbd8313ed055', '9876543210', '2021-02-03 17:58:19', '0000-00-00 00:00:00', 0, 'OIP_(1).jpg'),
(12, 'rrr', '', 'pradeep.ppp@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', '9876543210', '2021-02-06 07:05:16', '0000-00-00 00:00:00', 0, 'second_imoji3.png'),
(13, 'gsdg', 'MHO521', 'pradeep.sad@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', '74111756888', '2021-02-06 07:05:22', '0000-00-00 00:00:00', 0, 'OIP_(1)3.jpg'),
(14, 'piyush12', 'MHO106', 'rupesh.gsdf@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '1234987659', '2021-02-06 07:05:29', '0000-00-00 00:00:00', 1, 'default_auth.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_feedback`
--

CREATE TABLE `tbl_users_feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `qus_first` varchar(200) DEFAULT 'Not Answered',
  `qus_two` varchar(200) DEFAULT 'Not Answered',
  `qus_three` varchar(200) DEFAULT 'Not Answered',
  `qus_four` varchar(200) DEFAULT 'Not Answered',
  `qus_five` varchar(200) DEFAULT 'Not Answered',
  `qus_six` varchar(200) DEFAULT 'Not Answered',
  `qus_seven` varchar(200) DEFAULT 'Not Answered',
  `qus_eight` varchar(200) DEFAULT 'Not Answered',
  `qus_nine` varchar(200) DEFAULT 'Not Answered',
  `qus_ten` varchar(200) DEFAULT 'Not Answered',
  `qus_eleven` varchar(200) DEFAULT 'Not Answered',
  `qus_twevel` varchar(200) DEFAULT 'Not Answered',
  `qus_thirteen` varchar(200) DEFAULT 'Not Answered',
  `qus_fourteen` varchar(200) DEFAULT 'Not Answered',
  `qus_fifteen` varchar(200) DEFAULT 'Not Answered',
  `qus_sixteen` varchar(200) DEFAULT 'Not Answered',
  `qus_seventeen` varchar(200) DEFAULT 'Not Answered',
  `qus_eighteen` varchar(200) DEFAULT 'Not Answered',
  `qus_ninteen` varchar(200) DEFAULT 'Not Answered',
  `qus_twentey` varchar(200) DEFAULT 'Not Answered',
  `entery_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_feedback`
--

INSERT INTO `tbl_users_feedback` (`id`, `user_id`, `user_name`, `user_email`, `hotel_name`, `check_in`, `check_out`, `qus_first`, `qus_two`, `qus_three`, `qus_four`, `qus_five`, `qus_six`, `qus_seven`, `qus_eight`, `qus_nine`, `qus_ten`, `qus_eleven`, `qus_twevel`, `qus_thirteen`, `qus_fourteen`, `qus_fifteen`, `qus_sixteen`, `qus_seventeen`, `qus_eighteen`, `qus_ninteen`, `qus_twentey`, `entery_date`, `is_active`) VALUES
(1, 1, 'test1', NULL, NULL, NULL, NULL, 'Extremely friendly', 'Quite polite', 'Moderately professional', 'Extremely quick', 'qus_five', 'qus_six', 'qus_seven', 'qus_eight', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '2021-02-04 05:58:59', 1),
(2, 587, 'Anon Users', NULL, NULL, NULL, NULL, 'Moderately polite', 'Not at all polite', 'Quite professional', 'Quite quick', 'Moderately clean', 'Not at all well', 'Not at all well-equipped', 'Moderately helpful', 'Moderately comfortable', 'Not at all quickly', 'Quite convenient', 'Not at all delicious', 'Extremely pleased', 'Slightly affordable', 'Extremely affordable', 'Quite dissatisfied', 'Quite likely', '4', 'Moderately likely', 'Testing', '2021-02-04 06:18:58', 1),
(3, 895, 'Anon Users', NULL, NULL, NULL, NULL, 'Extremely friendly', 'Moderately polite', 'Quite professional', 'Not at all quick', 'Moderately clean', 'Quite well', 'Extremely well-equipped', 'Not at all helpful', 'Moderately comfortable', 'Not at all quickly', 'Quite convenient', 'Slightly delicious', 'Quite pleased', 'Slightly affordable', 'Moderately affordable', 'Quite satisfied', 'Extremely likely', '3', 'Quite likely', 'jfgyjgyjfjyjk tjgtfjgfjk', '2021-02-04 07:04:38', 1),
(4, 417, 'Anon Users', NULL, NULL, NULL, NULL, NULL, 'Extremely polite', 'Not at all professional', 'Quite quick', 'Quite clean', 'Moderately well', 'Quite well-equipped', 'Moderately helpful', 'Very comfortable', 'Quite quickly', 'Moderately convenient', 'Moderately delicious', 'Quite pleased', 'Slightly affordable', 'Slightly affordable', 'Somewhat dissatisfied', 'Not at all likely', '5', 'Not at all likely', 'gergrthrth', '2021-02-05 17:11:17', 1),
(5, 224, 'Anon Users', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fkfyhk', '2021-02-05 17:12:01', 1),
(6, 606, 'Anon Users', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-02-06 05:41:58', 1),
(7, 871, 'Anon Users', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-02-06 05:42:14', 1),
(8, 232, 'Test', 'test@test.com', 'MHO Hotel, Bordentown, NJ', '2021-02-11 00:00:00', '2021-02-03 00:00:00', 'Extremely friendly', 'Slightly polite', 'Quite professional', 'Not at all quick', 'Moderately clean', 'Extremely well', 'Slightly well-equipped', 'Very helpful', 'Not at all comfortable', 'Moderately quickly', 'Extremely convenient', 'Slightly delicious', 'Quite pleased', 'Not at all affordable', 'Moderately affordable', 'Extremely satisfied', 'Slightly likely', '3', 'Not at all likely', 'gsergerghrtl;h dgdf gh;kfh', '2021-02-06 06:26:30', 1),
(9, 337, 'Dee dsgdfg', 'pradeep.atweshsolutions@gmail.com', 'MHO Hotel, Bordentown, NJ', '2021-02-13 00:00:00', '2021-02-16 00:00:00', 'Extremely friendly', 'Slightly polite', 'Quite professional', 'Not at all quick', 'Quite clean', 'Moderately well', 'Extremely well-equipped', 'Slightly helpful', 'Very comfortable', 'Moderately quickly', 'Extremely convenient', 'Slightly delicious', 'Quite pleased', 'Not at all affordable', 'Moderately affordable', 'Quite satisfied', 'Moderately likely', NULL, 'Quite likely', 'sgfsadfdrs gfgdsfg', '2021-02-06 07:12:52', 1),
(10, 639, 'hfdfh', 'test@test.com', 'Green Acres Motel, Atco, NJ', '2021-02-01 00:00:00', '2021-02-04 00:00:00', 'Moderately polite', 'Quite polite', 'Moderately professional', 'Moderately quick', 'Moderately clean', 'Quite well', 'Moderately well-equipped', 'Moderately helpful', 'Moderately comfortable', 'Not at all quickly', 'Slightly convenient', 'Not at all delicious', 'Extremely pleased', 'Slightly affordable', 'Very affordable', 'Somewhat satisfied', 'Quite likely', NULL, 'Moderately likely', 'dgtrhdtdtyj', '2021-02-06 07:41:03', 1),
(11, 369, 'Dee dsgdfg', 'pradeep.atweshsolutions@gmail.com', 'Plaza Motel Mays, Mays Landing, NJ', '2021-02-01 00:00:00', '2021-02-05 00:00:00', 'Slightly friendly', 'Extremely polite', 'Quite professional', 'Extremely quick', 'Slightly clean', 'Slightly well', 'Slightly well-equipped', 'Extremely helpful', 'Not at all comfortable', 'Moderately quickly', 'Extremely convenient', 'Extremely delicious', 'Moderately pleased', 'Moderately affordable', 'Extremely affordable', 'Somewhat satisfied', 'Extremely likely', '3.5', 'Moderately likely', 'dgdfgfdh', '2021-02-06 07:45:06', 1);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_users_feedback`
--
ALTER TABLE `tbl_users_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
