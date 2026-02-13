-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2026 at 09:12 AM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.4.17

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(9, NULL, ' ', NULL, NULL, '2025-10-19 06:54:29'),
(10, NULL, ' ', NULL, NULL, '2025-11-04 12:38:46'),
(11, NULL, ' ', NULL, NULL, '2025-11-04 12:55:45'),
(12, 'NEERAJ KAUSHIK', '+91 9910701511', 'neeren26@gmail.com', 'India', '2025-11-06 14:42:47'),
(13, NULL, ' ', NULL, NULL, '2025-11-09 17:03:24'),
(14, NULL, ' ', NULL, NULL, '2025-11-18 05:49:00'),
(15, 'Deepthi Gangireddy', '+91 987654321234', 'gdeepthi001@gmail.com', 'India', '2025-11-22 16:47:43'),
(16, 'Saurabh Bhatnagar', '+91 9910013436', 'SAURABH_TCMCK@YAHOO.CO.IN', 'India', '2025-11-29 17:04:29'),
(17, 'Srinivasa Rao', '+91 9705841670', 'srinivasarao.erukulla@heterohealthcare.com', 'India', '2025-12-01 10:19:46'),
(18, NULL, ' ', NULL, NULL, '2025-12-10 15:26:34'),
(19, 'Amit Yadav', '+91 9719293078', 'amyaxl@gmail.com', 'India', '2025-12-10 18:08:12'),
(20, 'Saurabh Agrawal', '+91 9713430800', 'steelsaurabh@gmail.com', 'India', '2025-12-11 20:13:35'),
(21, 'Saurabh Agrawal', '+91 9713430800', 'steelsaurabh@gmail.com', 'India', '2025-12-11 20:14:00'),
(22, NULL, ' ', NULL, NULL, '2025-12-17 04:26:56'),
(23, 'Sanjay Dey', '+91 9748925798', 'sdey081@gmail.com', 'India', '2025-12-20 20:02:59'),
(24, NULL, ' ', NULL, NULL, '2025-12-27 04:00:32'),
(25, 'Chiranjeevi', '+91 9849281442', 'chrnjvreddy@gmail.com', 'India', '2025-12-27 15:32:44'),
(26, 'Abhijeet Yashwant Rajapure', '+91 9822132539', 'abhi.rajapure@gmail.com', 'India', '2025-12-28 14:20:32'),
(27, NULL, ' ', NULL, NULL, '2025-12-30 18:40:40'),
(28, 'Abhijeet Yashwant Rajapure', '+91 9822132539', 'abhi.rajapure@gmail.com', 'India', '2025-12-31 20:27:33'),
(29, 'Aditya', '+91 9596863642', 'Adisen412@yahoo.com', 'India', '2026-01-03 20:52:58'),
(30, 'Aditya', '+91 9596863642', 'Adisen412@yahoo.com', 'India', '2026-01-03 20:53:25'),
(31, 'Abhay Tandon', '+91 9123456789', 'abhay@inttladvocare.com', 'India', '2026-01-05 18:02:35'),
(32, 'Vimal Joshi', '+91 9323145262', 'Vvjjoshi@gmail.com', 'India', '2026-01-08 08:37:09'),
(33, 'rajesh', '+91 987654321234', 'creativebooks.rajeshp@gmail.com', 'India', '2026-01-10 15:18:03'),
(34, 'Rajesh Sadasivaiah Palamangalam', '+91 9324238437', 'creativebooks.rajeshp@gmail.com', 'India', '2026-01-10 15:22:52'),
(35, 'Krishnan subramanian iter', '+91 7710008303', 'krishpar04@gmail.com', 'India', '2026-01-10 16:55:26'),
(36, NULL, ' ', NULL, NULL, '2026-01-14 02:46:49'),
(37, 'Rahul Rai ', '+91 7024127024', 'hepatology.rai@gmail.com', 'India', '2026-01-21 21:18:10'),
(38, 'Atin Tyagi', '+91 7065555574', 'atin_tyagi1980@yahoo.co.in', 'India', '2026-01-30 18:55:15'),
(39, 'Murali Krishna Kora', '+91 8971248222', 'krishnakora@gmail.com', 'India', '2026-02-05 18:43:49'),
(40, 'Sarbin Laskar', '+91 6003771584', 'sarbinlaskar1988@gmail.com', 'India', '2026-02-10 10:49:24'),
(41, NULL, ' ', NULL, NULL, '2026-02-10 19:03:30'),
(42, NULL, ' ', NULL, NULL, '2026-02-11 00:28:59'),
(43, 'sanjana', '+91 9912985415', 'sanjana.thakur@heterohealthcare.com', 'India', '2026-02-13 11:50:00');

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
  `enquiry_comments` text DEFAULT NULL,
  `enquiry_subject` varchar(100) DEFAULT NULL,
  `enquiry_status` enum('1001','1002') NOT NULL DEFAULT '1001',
  `enquiry_delete_status` enum('1001','1002') DEFAULT '1001',
  `enquiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(7, '4519729683', 'Rajesh Sadasivaiah Palamangalam', 'creativebooks.rajeshp@gmail.com', '+91 9324238437', NULL, 'testing contact form', 'testing', '1001', '1001', '2025-09-19 14:53:48'),
(8, '5568471169', 'govind raj', 'dr.govind35@gmail.com', '+91 9994516235', NULL, 'Need tab remash 800 mg', 'Need tablets', '1001', '1001', '2025-11-08 13:15:11'),
(9, '6291275439', 'Mayank Chourasia', 'mchourasia66@gmail.com', '+91 9163063701', NULL, 'Want to Order ReMASH 80', 'Want to Order ReMASH 80', '1001', '1001', '2025-11-19 18:49:50'),
(10, '3461239815', 'Dr amar', 'amaryadav86@gmail.com', '+91 7764852701', NULL, 'Plz provide this product', 'Remash 80mg tablet', '1001', '1001', '2025-11-20 13:17:49'),
(11, '3874249351', 'lokesh gowda', 'lgowda899@gmail.com', '+91 9845111849', NULL, 'Require Remash 80 mg tablets', 'Remash 80 mg tablets', '1001', '1001', '2025-11-25 11:20:52'),
(12, '5725492178', 'Sualeh Keen', 'sualehkeen@gmail.com', '+91 9552562064', NULL, 'Need Rezdiffra Resmetirom 60mg tablets (2xboxes) for patient in India with proper prescription. Kindly respond.', 'ReMASH 60mg 2 boxes requires', '1001', '1001', '2025-11-27 14:59:06'),
(13, '6561942971', 'Meghashyam Bijjam', 'shyammeg@yahoo.co.in', '+91 8147931700', NULL, 'Require remash 80 mg for my mother ailing with liver fibrosis condition. Kindly guide us the procedure to get it..', 'Remash for liver fibrosis', '1001', '1001', '2025-11-27 20:17:47'),
(14, '1647427535', 'Lokesh', 'Lgowda899@gmail.com', '+91 9845111849', NULL, 'Need remade 80 mg tablets', 'Re mash tablets', '1001', '1001', '2025-11-30 18:54:42'),
(15, '1759531824', 'Mehdi safdar', 'syedmehdi70103@gmail.com', '+91 7006945426', NULL, 'It\'s very urgent', 'I want this medication', '1001', '1001', '2025-12-01 11:23:04'),
(16, '4591725627', 'Mehdi safdar', 'syedmehdi70103@gmail.com', '+91 7006945426', NULL, 'I want this medication pescribed by doctor', 'I want this medication', '1001', '1001', '2025-12-01 11:25:51'),
(17, '1235947487', 'Radhey medicos', 'Guptaanand1@gmail.com', '+91 9971012697', NULL, 'I am wholesale pharma dealer. Getting inquiry of Remash 80\r\n\r\nSo want to know from where i can procure the same', 'Availability of Remash 80', '1001', '1001', '2025-12-04 22:20:37'),
(18, '5337648415', 'Vineet thard', 'Vthard@gmail.com', '+91 9435030729', NULL, 'Needed', 'Need remash 100', '1001', '1001', '2025-12-05 05:41:16'),
(19, '6811472694', 'Aqib Lone', 'Aaqiblone782@gmail.com', '+91 7006099894', NULL, 'I need this medicine for the patient please sir provide the details for availability', 'Need for the medicine to the patient', '1001', '1001', '2025-12-10 11:24:27'),
(20, '4811759763', 'Ashish kumar nahak', 'ashishnahak786@gmail.com', '+91 7999775005', NULL, 'I have liver fibrosis 1', 'Need ReNASH 80mg for two months', '1001', '1001', '2025-12-10 21:30:44'),
(21, '5426167198', 'Bheemanagouda', 'gururajgouda999@gmail.com', '+91 6361121524', NULL, 'What\'s the cost of the Tab Remash 80mg \r\nAnd how do I get it', 'Regards enquiry about the Tab remash', '1001', '1001', '2025-12-11 10:52:18'),
(22, '7145756348', 'SAI KUMAR', 'saikumar0123@gmail.com', '+91 8985466191', NULL, 'i need 80mg', 'want to purchase', '1001', '1001', '2025-12-11 12:44:14'),
(23, '5879117968', 'Diwas Singh', 'diwassingh5302@gmail.com', '+91 8840240827', NULL, 'Doctor has prescribed me Remash 80 mg ,so i need it ,can you provide me', 'I have to purchase it', '1001', '1001', '2025-12-11 12:56:16'),
(24, '5594146877', 'Sandeep', 'sndip.mishra@gmail.com', '+91 9163106886', NULL, 'ReMASH 80 mg', 'medicine required', '1001', '1001', '2025-12-12 13:22:42'),
(25, '8464779559', 'Ashiya', 'Romaisas95@gmail.com', '+91 6005795186', NULL, 'Want to order a medicine remash 80 prescribed by doctor', 'Medicine', '1001', '1001', '2025-12-15 11:06:16'),
(26, '3894328211', 'Suhail Ahmad', 'thesuhieffect007@gmail.com', '+91 7780840734', NULL, 'I need Remash 60 medicine for my grandmother', 'I need Remash 60', '1001', '1001', '2025-12-16 18:39:33'),
(27, '9619864731', 'Dr. Shadab Arshad', 'shadab.softelevation@gmail.com', '+91 9541622148', NULL, 'wanted to order the medicine', 'Medicine Booking', '1001', '1001', '2025-12-19 19:52:59'),
(28, '3915494668', 'Vishal taleda', 'vishaltaleda3@gmail.com', '+91 7795610046', NULL, '60 tablet required', 'Remash 80mg', '1001', '1001', '2026-01-01 11:15:59'),
(29, '8275342859', 'Mudasir amin', 'Mudasiramin244@gmail.com', '+91 8899935721', NULL, 'Need medical help', 'Liver problem', '1001', '1001', '2026-01-02 13:40:56'),
(30, '9123815836', 'Pratik Baid', 'Pratikbaid10@gmail.com', '+91 9874050504', NULL, 'Prescribed by a doctor', 'Purchase ReMASH 80 mg Tablets', '1001', '1001', '2026-01-02 15:59:39'),
(31, '3168913474', 'Abhijit Gaonkar', 'csgeek33@gmail.com', '+91 9741590852', NULL, 'Need remash 80 mg 90 tablets', 'Need remash 80 mg 90 tablets', '1001', '1001', '2026-01-03 10:51:04'),
(32, '9211854738', 'Sk Taj Uddin', 'sk.taj.uddin87@gmail.com', '+91 9051244538', NULL, 'Want remash 100 tablet', 'REMASH 100', '1001', '1001', '2026-01-08 01:01:26'),
(33, '8115345879', 'Vimal Joshi', 'Vvjjoshi@gmail.com', '+91 9323145262', NULL, 'I need this medicine , i am located in Mumbai India .', 'Remash 80 mg', '1001', '1001', '2026-01-08 08:41:51'),
(34, '2678279349', 'Saurabh Gahane', 'saurabhgahane07@gmail.com', '+91 9552375191', NULL, 'Need to order medicine', 'Need to order medicine', '1001', '1001', '2026-01-09 14:54:45'),
(35, '4782949587', 'test mail', 'deepthi.gangireddy@heterohealthcare.com', '+91 9876543210', NULL, 'testing', 'test email', '1001', '1001', '2026-01-10 15:10:34'),
(36, '6653824319', 'Deepthi Gangireddy', 'rajesh.palamangalam@heterohealthcare.com', '+91 9876543210', NULL, 'testing', 'test email', '1001', '1001', '2026-01-10 15:13:56'),
(37, '4159773526', 'rajesh', 'creativebooks.rajeshp@gmail.com', '+91 9876543210', NULL, 'testing mail', 'test email', '1001', '1001', '2026-01-10 15:16:05'),
(38, '5392761351', 'Rajesh Sadasivaiah Palamangalam', 'creativebooks.rajeshp@gmail.com', '+91 9324238437', NULL, 'testing contact form', 'testing subject', '1001', '1001', '2026-01-10 15:23:57'),
(39, '7529692763', 'Nikhil Tibrewal', 'ayushchoudhary575@gmail.com', '+91 7004439040', NULL, 'Enquiry for the price and also need the medecine', 'Medecine price', '1001', '1001', '2026-01-15 14:16:55'),
(40, '5167123549', 'Syed Mujtaba Muzzamil', 'sayedmuzzamil86@gmail.com', '+91 7006968757', NULL, 'Hello\r\nI have recently been diagnosed with fatty liver and this medicine is not available in India. I want to know the procedure of procuring it and shipping to india', 'Buy Remash 80', '1001', '1001', '2026-01-25 13:31:05'),
(41, '9717183462', 'Mohammad Subhan Katoo', 'faisalhilal32@gmail.com', '+91 9622206662', NULL, 'I need Remash 80 as it has been prescribed by the doctor.', 'Medicine Purchase', '1001', '1001', '2026-02-02 11:21:39'),
(42, '2937648285', 'MOHAMAD JUNAID', 'qadirjunaid10@gmail.com', '+91 6005587283', NULL, 'Require the Remash 80 mg, medicine for my mother as she is suffering from MASLD/CLD from past 6 years', 'Remash 80 mg', '1001', '1001', '2026-02-03 10:00:51'),
(43, '3266791887', 'Rafiq ahmad bhat', 'Rafeeqbhat740@gmail.com', '+91 9797808828', NULL, 'Im a patient need ramash 80mg for personal use kondly message me for this', 'Need medicine for self im patient', '1001', '1001', '2026-02-07 17:18:27'),
(44, '9668134941', 'Junaid khan', 'khanjuny786@gmail.com', '+91 9906777645', NULL, 'I need Remash 80 medicine for my father', 'Remash 80', '1001', '1001', '2026-02-12 15:24:56'),
(45, '6342763551', 'sanjana', 'sanjana.thakur@heterohealthcare.com', '+91 9912985415', NULL, 'Testing the form', 'testing 567890', '1001', '1001', '2026-02-13 11:50:48');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `remash_enquiry_from`
--
ALTER TABLE `remash_enquiry_from`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
