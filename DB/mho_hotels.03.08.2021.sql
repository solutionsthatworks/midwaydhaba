-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 03:58 PM
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
-- Database: `mho_hotels`
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
(16, 'kiran', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/Hotel/', 1, '2021-02-03 16:28:29'),
(17, 'Anonymous', '#', 'Check availability', '/MHOCI/', 1, '2021-02-08 20:26:19'),
(18, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/MHOCI/', 1, '2021-02-08 20:27:01'),
(19, 'kiran', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/MHOCI/', 1, '2021-02-09 14:22:30'),
(20, 'kiran', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/MHOCI/', 1, '2021-02-09 14:34:56'),
(21, 'Anonymous', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-02-13 23:39:48'),
(22, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:15:57'),
(23, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:17:52'),
(24, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:18:30'),
(25, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:18:53'),
(26, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:20:19'),
(27, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:20:21'),
(28, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:21:19'),
(29, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:24:04'),
(30, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:28:40'),
(31, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 10:59:17'),
(32, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 11:00:26'),
(33, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 11:02:47'),
(34, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 11:08:08'),
(35, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:12:39'),
(36, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:12:41'),
(37, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:12:43'),
(38, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:12:45'),
(39, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:12:49'),
(40, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:16:18'),
(41, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:16:20'),
(42, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:16:55'),
(43, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:19:30'),
(44, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:19:32'),
(45, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:20:26'),
(46, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:20:29'),
(47, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:21:05'),
(48, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:21:27'),
(49, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:28:16'),
(50, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:29:32'),
(51, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:29:35'),
(52, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:29:37'),
(53, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:29:44'),
(54, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:35:35'),
(55, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:36:34'),
(56, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:49:38'),
(57, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:49:48'),
(58, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-02-15 12:51:20'),
(59, 'Anonymous', 'Coming Soon, Thanks!', 'Book now', '/MHOCI/bordentown', 1, '2021-02-16 06:40:04'),
(60, 'Anonymous', 'Book now', 'Book now', '/MHOCI/prince_hotel', 1, '2021-02-16 06:41:01'),
(61, 'Anonymous', 'Book now', 'Book now', '/MHOCI/prince_hotel', 1, '2021-02-16 06:41:29'),
(62, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/MHOCI/', 1, '2021-03-25 08:41:07'),
(63, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1', 'Check availability', '/MHOCI/', 1, '2021-03-25 08:41:34'),
(64, 'Anonymous', 'kiran', 'Check availability', '/MHOCI/', 1, '2021-03-25 08:41:58'),
(65, 'Anonymous', 'kiran', 'Check availability', '/MHOCI/', 1, '2021-03-25 08:53:09'),
(66, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=1', 'Check availability', '/MHOCI/', 1, '2021-03-25 08:56:28'),
(67, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 08:57:08'),
(68, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 09:55:57'),
(69, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 09:56:49'),
(70, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 09:56:52'),
(71, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 09:56:53'),
(72, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 12:56:29'),
(73, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 12:56:30'),
(74, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 12:56:31'),
(75, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 12:58:06'),
(76, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:05:51'),
(77, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:06:09'),
(78, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:06:44'),
(79, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:06:56'),
(80, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:10:13'),
(81, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:12:20'),
(82, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:13:38'),
(83, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:13:39'),
(84, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:13:40'),
(85, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:13:49'),
(86, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:14:00'),
(87, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:15:00'),
(88, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:15:08'),
(89, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:18:15'),
(90, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=&txtcheckoutdate=&txtadult=&txtChildren=&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:40:21'),
(91, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/30/2021&txtadult=1&txtChildren=&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:41:36'),
(92, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:42:12'),
(93, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:43:50'),
(94, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:43:55'),
(95, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:55:17'),
(96, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:55:23'),
(97, 'Anonymous', '1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:55:27'),
(98, 'Anonymous', '1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:55:40'),
(99, 'Anonymous', '1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:55:40'),
(100, 'Anonymous', '1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:55:42'),
(101, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:56:14'),
(102, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:56:19'),
(103, 'Anonymous', '1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:56:20'),
(104, 'Anonymous', '1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:56:21'),
(105, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:56:46'),
(106, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:56:50'),
(107, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:56:56'),
(108, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:57:12'),
(109, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:59:03'),
(110, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:59:08'),
(111, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:59:18'),
(112, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 13:59:30'),
(113, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:00:58'),
(114, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:01:01'),
(115, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:01:04'),
(116, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:04:29'),
(117, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:04:34'),
(118, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:04:37'),
(119, 'Anonymous', '2', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:04:39'),
(120, 'Anonymous', '3', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:04:41'),
(121, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=4962f4f19844405481416501a1ae9d42&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:04:48'),
(122, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:08:56'),
(123, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:00'),
(124, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:05'),
(125, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:36'),
(126, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:41'),
(127, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:43'),
(128, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:45'),
(129, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:46'),
(130, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:48'),
(131, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:09:49'),
(132, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:02'),
(133, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:06'),
(134, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:10'),
(135, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:12'),
(136, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:13'),
(137, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:47'),
(138, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:51'),
(139, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:10:53'),
(140, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:11:20'),
(141, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/26/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:11:33'),
(142, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:11:45'),
(143, 'Anonymous', '2', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:11:50'),
(144, 'Anonymous', '2', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:11:51'),
(145, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=4962f4f19844405481416501a1ae9d42&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:11:55'),
(146, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:26:57'),
(147, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:27:22'),
(148, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:27:28'),
(149, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/25/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-25 14:27:30'),
(150, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/28/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=1&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:26:40'),
(151, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:35:34'),
(152, 'Anonymous', '0', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:35:40'),
(153, 'Anonymous', '2', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:35:45'),
(154, 'Anonymous', '2', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:35:52'),
(155, 'Anonymous', '2', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:35:58'),
(156, 'Anonymous', '2', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:36:00'),
(157, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/27/2021&txtcheckoutdate=03/31/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:36:39'),
(158, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=03/27/2021&txtcheckoutdate=03/30/2021&txtadult=1&txtChildren=0&txtRoomId=1', 'Check availability', '/MHOCI/', 1, '2021-03-26 20:37:30'),
(159, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-05-03 13:14:48'),
(160, 'kiran patil', '1', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:15:03'),
(161, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/23/2021&txtcheckoutdate=06/24/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:15:09'),
(162, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/25/2021&txtadult=2&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:17:49'),
(163, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/22/2021&txtcheckoutdate=06/23/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:33:53'),
(164, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/25/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:39:15'),
(165, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/22/2021&txtcheckoutdate=06/23/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:40:45'),
(166, 'kiran patil', 'https://reservation.asiwebres.com/v2/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/22/2021&txtcheckoutdate=06/23/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY10', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:41:03'),
(167, 'kiran patil', '1', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:41:37'),
(168, 'kiran patil', 'https://reservation.asiwebres.com/v2/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/22/2021&txtcheckoutdate=06/24/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY10', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:41:41'),
(169, 'kiran patil', 'https://reservation.asiwebres.com/v2/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/23/2021&txtcheckoutdate=06/25/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY10', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:43:29'),
(170, 'kiran patil', 'https://reservation.asiwebres.com/v2/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/22/2021&txtcheckoutdate=06/25/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY10', 'Check availability', '/MHOCI/', 1, '2021-06-22 14:43:53'),
(171, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=e4a7f014288c4350a1a56589ea5b46d0&lang=en&Curr=1&Operation=date&txtcheckindate=06/23/2021&txtcheckoutdate=06/26/2021&txtadult=2&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY10', 'Check availability', '/MHOCI/', 1, '2021-06-22 15:27:01'),
(172, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/25/2021&txtcheckoutdate=06/30/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY10', 'Check availability', '/MHOCI/', 1, '2021-06-22 15:28:38'),
(173, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/23/2021&txtcheckoutdate=06/26/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY15', 'Check availability', '/MHOCI/', 1, '2021-06-22 15:29:29'),
(174, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/26/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-06-22 22:45:10'),
(175, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/28/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY15', 'Check availability', '/MHOCI/', 1, '2021-06-22 22:45:39'),
(176, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/26/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=EVERYDAY10', 'Check availability', '/MHOCI/', 1, '2021-06-22 22:46:36'),
(177, 'kiran patil', '1', 'Check availability', '/MHOCI/', 1, '2021-06-23 21:08:58'),
(178, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/25/2021&txtcheckoutdate=06/26/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBER', 'Check availability', '/MHOCI/', 1, '2021-06-23 21:09:01'),
(179, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/25/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBER', 'Check availability', '/MHOCI/', 1, '2021-06-23 21:11:02'),
(180, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 21:50:27'),
(181, 'kiran patil', '1', 'Check availability', '/MHOCI/', 1, '2021-06-23 21:51:04'),
(182, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/25/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBER', 'Check availability', '/MHOCI/', 1, '2021-06-23 21:51:06'),
(183, 'kiran patil', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 21:51:24'),
(184, 'kiran patil', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 21:52:33'),
(185, 'kiran patil', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:00:31'),
(186, 'kiran patil', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:00:42'),
(187, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:01:19'),
(188, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:02:29'),
(189, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:02:41'),
(190, 'Anonymous', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-06-23 22:04:12'),
(191, 'kiran patil', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:05:09'),
(192, 'kiran patil', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:07:22'),
(193, 'kiran patil', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:10:24'),
(194, 'kiran patil', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-06-23 22:11:56'),
(195, 'Anonymous', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-06-23 22:12:11'),
(196, 'Anonymous', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-06-23 22:12:22'),
(197, 'Anonymous', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-06-23 22:18:08'),
(198, 'Anonymous', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-06-23 22:18:33'),
(199, 'kiran patil', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-06-23 22:20:07'),
(200, 'kiran patil', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=06/24/2021&txtcheckoutdate=06/25/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=', 'Check availability', '/MHOCI/', 1, '2021-06-23 22:29:25'),
(201, 'Anonymous', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-07-26 16:25:41'),
(202, 'Anonymous', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=07/26/2021&txtcheckoutdate=07/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1', 'Check availability', '/MHOCI/', 1, '2021-07-26 16:31:36'),
(203, 'key2run p', '2', 'Check availability', '/MHOCI/', 1, '2021-07-26 16:34:14'),
(204, 'key2run p', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=07/26/2021&txtcheckoutdate=07/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBER', 'Check availability', '/MHOCI/', 1, '2021-07-26 16:34:24'),
(205, 'key2run p', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=07/26/2021&txtcheckoutdate=07/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBERMember', 'Check availability', '/MHOCI/', 1, '2021-07-26 16:39:30'),
(206, 'key2run p', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=07/26/2021&txtcheckoutdate=07/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBER&Member', 'Check availability', '/MHOCI/', 1, '2021-07-26 16:40:21'),
(207, 'key2run p', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=07/26/2021&txtcheckoutdate=07/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBER&Member', 'Check availability', '/MHOCI/', 1, '2021-07-26 16:42:32'),
(208, 'key2run p', 'https://reservation.asiwebres.com/v4/RoomAvailability.aspx?&id=bbbf6f53c7b24bbfa1a67b4d8002427e&lang=en&Curr=1&Operation=date&txtcheckindate=07/26/2021&txtcheckoutdate=07/27/2021&txtadult=1&txtChildren=0&txtRoomId=-1&txtPromocode=MHOMEMBER&tag=Member', 'Check availability', '/MHOCI/', 1, '2021-07-26 16:43:30'),
(209, 'key2run p', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-07-26 16:43:50'),
(210, 'key2run p', 'Book now', 'Book now', '/MHOCI/Hotel-Lists', 1, '2021-07-26 16:45:03'),
(211, 'key2run p', 'Book now', 'Book now', '/MHOCI/bordentown', 1, '2021-07-26 16:45:21');

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
(50, 'tet', 'gdsg', 'sdsd@dfgd.dsaf', '', 'a', '2021-02-06 06:43:28', 1),
(51, 'dfgd', 'dfgd', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'dfgdfgd dfgd', '2021-02-09 02:38:02', 1),
(52, 'Kiran', 'Patil', 'kiranpatil.namdeo@gmail.com', '982-011-2280', 'test', '2021-03-02 06:19:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `id_property` int(11) NOT NULL,
  `tbl_property_name` varchar(50) DEFAULT NULL,
  `tb_property_createtime` datetime DEFAULT NULL,
  `tbl_propertycol_active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(27, 'kiran patil', 'MHO618', 'kiranpatil.namdeo@gmail.com', '50c2472801ba5f5158b71047563521ef', '9820112280', '2021-03-09 09:07:07', '0000-00-00 00:00:00', 1, 'default_auth.png'),
(43, 'key2run p', 'MHO194', 'key2run@gmail.com', '12345', '09820112280', '2021-06-28 10:58:45', '0000-00-00 00:00:00', 1, 'default_auth.png');

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
(11, 369, 'Dee dsgdfg', 'pradeep.atweshsolutions@gmail.com', 'Plaza Motel Mays, Mays Landing, NJ', '2021-02-01 00:00:00', '2021-02-05 00:00:00', 'Slightly friendly', 'Extremely polite', 'Quite professional', 'Extremely quick', 'Slightly clean', 'Slightly well', 'Slightly well-equipped', 'Extremely helpful', 'Not at all comfortable', 'Moderately quickly', 'Extremely convenient', 'Extremely delicious', 'Moderately pleased', 'Moderately affordable', 'Extremely affordable', 'Somewhat satisfied', 'Extremely likely', '3.5', 'Moderately likely', 'dgdfgfdh', '2021-02-06 07:45:06', 1),
(12, 891, 'kk', 'kiranpatil.namdeo@gmail.com', 'La Mirage Motor Inn, South Brunswick, NJ', '2021-02-03 00:00:00', '2021-02-05 00:00:00', 'Extremely friendly', 'Extremely polite', 'Extremely professional', 'Extremely quick', 'Extremely clean', 'Extremely well', 'Extremely well-equipped', 'Extremely helpful', 'Extremely comfortable', 'Extremely quickly', 'Extremely convenient', 'Extremely delicious', 'Extremely pleased', 'Extremely affordable', 'Extremely affordable', 'Extremely satisfied', 'Extremely likely', '3', 'Extremely likely', 'ghfgh', '2021-02-06 12:20:30', 1),
(13, 581, 'Kiran Namdeo Patil', 'kiranpatil.namdeo@gmail.com', 'MHO Hotel, Bordentown, NJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Extremely friendly', 'Extremely polite', 'Extremely professional', 'Extremely quick', 'Extremely clean', 'Extremely well', 'Extremely well-equipped', 'Extremely helpful', 'Extremely comfortable', 'Extremely quickly', 'Extremely convenient', 'Extremely delicious', 'Extremely pleased', 'Extremely affordable', 'Extremely affordable', 'Extremely satisfied', 'Extremely likely', '4.5', 'Extremely likely', 'good', '2021-02-09 02:06:04', 1),
(14, 727, 'sdfs', 'kiranpatil.namdeo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fsdfs', '2021-03-02 11:14:29', 1);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_users_feedback`
--
ALTER TABLE `tbl_users_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
