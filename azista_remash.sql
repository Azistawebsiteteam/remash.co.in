-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2025 at 11:39 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azista_remash`
--

-- --------------------------------------------------------

--
-- Table structure for table `prescribing_info_leads`
--

CREATE TABLE `prescribing_info_leads` (
  `id` int(11) NOT NULL,
  `lead_name` varchar(100) DEFAULT NULL,
  `lead_contact` varchar(20) DEFAULT NULL,
  `lead_mail` varchar(150) DEFAULT NULL,
  `lead_country` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescribing_info_leads`
--

INSERT INTO `prescribing_info_leads` (`id`, `lead_name`, `lead_contact`, `lead_mail`, `lead_country`, `created_at`) VALUES
(1, 'Srinivasa Rao Erukulla', '+91 9705841670', 'srinivasarao.erukulla@heterohealthcare.com', 'India', '2025-09-10 14:54:09'),
(2, 'Deepthi Gangireddy', '+91 987654321234', 'gdeepthi001@gmail.com', 'Hong Kong', '2025-09-10 15:24:35'),
(3, 'Rajesh Sadasivaiah Palamangalam', '+91 9324238437', 'creativebooks.rajeshp@gmail.com', 'India', '2025-09-10 15:31:05'),
(4, 'Rajesh Sadasivaiah Palamangalam', '+91 9324238437', 'creativebooks.rajeshp@gmail.com', 'India', '2025-09-10 15:31:29'),
(5, NULL, ' ', NULL, NULL, '2025-09-10 17:48:55'),
(6, 'Rajesh Sadasivaiah Palamangalam', '+91 9324238437', 'creativebooks.rajeshp@gmail.com', 'India', '2025-09-11 15:31:08'),
(7, 'Esther Rani', '+91 9849267665', 'estherrani.kathi@heterohealthcare.com', 'India', '2025-09-22 15:38:56'),
(8, NULL, ' ', NULL, NULL, '2025-10-02 08:26:17'),
(9, NULL, ' ', NULL, NULL, '2025-10-19 06:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `remash_enquiry_from`
--

CREATE TABLE `remash_enquiry_from` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_code` varchar(50) DEFAULT NULL,
  `enquiry_name` varchar(50) DEFAULT NULL,
  `enquiry_mail` varchar(50) DEFAULT NULL,
  `enquiry_contact` varchar(20) DEFAULT NULL,
  `enquiry_location` varchar(100) DEFAULT NULL,
  `enquiry_comments` text,
  `enquiry_subject` varchar(100) DEFAULT NULL,
  `enquiry_status` enum('1001','1002') NOT NULL DEFAULT '1001',
  `enquiry_delete_status` enum('1001','1002') DEFAULT '1001',
  `enquiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remash_enquiry_from`
--

INSERT INTO `remash_enquiry_from` (`enquiry_id`, `enquiry_code`, `enquiry_name`, `enquiry_mail`, `enquiry_contact`, `enquiry_location`, `enquiry_comments`, `enquiry_subject`, `enquiry_status`, `enquiry_delete_status`, `enquiry_date`) VALUES
(1, '2148939731', 'Deepthi Gangireddy', 'deepthi.gangireddy@heterohealthcare.com', '+91 9876543210', NULL, 'testing form', NULL, '1001', '1001', '2025-08-23 00:00:00'),
(2, '9558167942', 'testing', 'testing@gmail.com', '+91 847473645235', NULL, 'fwefqefrqw', NULL, '1001', '1001', '2025-08-23 00:00:00'),
(3, '2268945579', 'Testing', 'Testing@gmsil.com', '+91 64567467767', NULL, 'Testing', NULL, '1001', '1001', '2025-08-23 00:00:00'),
(4, '5118276437', 'Rajesh Sadasivaiah Palamangalam', 'creativebooks.rajeshp@gmail.com', '+91 9324238437', NULL, 'testing contact form', 'testing', '1001', '1001', '2025-09-10 15:29:55'),
(5, '6889134557', 'Deepthi Gangireddy', 'deepthi.gangireddy@heterohealthcare.com', '+91 9876543210', NULL, 'testing form', 'test email', '1001', '1001', '2025-09-10 15:30:18'),
(6, '7965156734', 'Rajesh Sadasivaiah Palamangalam', 'creativebooks.rajeshp@gmail.com', '+91 9324238437', NULL, 'testing contact form', 'testing', '1001', '1001', '2025-09-10 15:32:08'),
(7, '4519729683', 'Rajesh Sadasivaiah Palamangalam', 'creativebooks.rajeshp@gmail.com', '+91 9324238437', NULL, 'testing contact form', 'testing', '1001', '1001', '2025-09-19 14:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescribing_info_leads`
--
ALTER TABLE `prescribing_info_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remash_enquiry_from`
--
ALTER TABLE `remash_enquiry_from`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prescribing_info_leads`
--
ALTER TABLE `prescribing_info_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `remash_enquiry_from`
--
ALTER TABLE `remash_enquiry_from`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
