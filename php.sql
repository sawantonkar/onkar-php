-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 10:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_result_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms_admin_data`
--

CREATE TABLE `sms_admin_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_admin_data`
--

INSERT INTO `sms_admin_data` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `sms_result`
--

CREATE TABLE `sms_result` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sub1marks` varchar(255) NOT NULL,
  `sub2marks` varchar(255) NOT NULL,
  `sub3marks` varchar(255) NOT NULL,
  `sub4marks` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_result`
--

INSERT INTO `sms_result` (`id`, `student_name`, `email`, `semester`, `sub1marks`, `sub2marks`, `sub3marks`, `sub4marks`, `total`, `percentage`, `created_date`, `updated_date`) VALUES
(5, 'student4', 'ricky@mail.com', '2', '78', '89', '78', '89', '334', '83.5', '', ''),
(6, 'student5', 'brett@mail.com', '2', '82', '56', '78', '79', '295', '73.75', '', ''),
(7, 'student2', 'bravo@gmail.com', '1', '77', '86', '79', '77', '319', '79.75', '', ''),
(10, 'student7', 'joe@mail.com', '3', '45', '70', '89', '80', '284', '91.61', '', ''),
(13, 'student9', 'malinga@mail.com', '4', '68', '89', '98', '85', '340', '85.00', '', ''),
(14, 'student8', 'james@mail.com', '3', '45', '67', '87', '76', '275', '88.71', '', ''),
(15, 'student10', 'kusal@mail.com', '4', '89', '98', '77', '78', '342', '85.50', '', ''),
(16, 'student3', 'michael@mail.com', '1', '89', '90', '95', '87', '361', '90.25', '', ''),
(17, 'student6', 'glenn@mail.com', '2', '26', '78', '78', '99', '281', '70.25', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_semester`
--

CREATE TABLE `sms_semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_semester`
--

INSERT INTO `sms_semester` (`id`, `semester`, `created_date`, `updated_date`) VALUES
(1, '1', '', ''),
(2, '2', '', ''),
(5, '3', '', ''),
(6, '4', '', ''),
(8, '5', '', ''),
(9, '6', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_student_data`
--

CREATE TABLE `sms_student_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `student_status_id` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_student_data`
--

INSERT INTO `sms_student_data` (`id`, `name`, `password`, `email`, `contact`, `profession`, `semester`, `student_status_id`, `profile_pic`, `created_date`, `updated_date`) VALUES
(2, 'student1', 'student123', 'kemar@gmail.com', '2345677', 'student', '1', 'Active', '20191217142630.jpg', '', ''),
(3, 'student2', 'student123', 'bravo@gmail.com', '09988779900', 'student', '1', 'Active', '20191217142109.jpg', '', ''),
(6, 'student3', 'student123', 'michael@mail.com', '099887', 'student', '1', 'Active', '20191217142151.jpg', '', ''),
(7, 'student4', 'student123', 'ricky@mail.com', '099887', 'student', '2', 'Active', '20191217142225.jpg', '', ''),
(8, 'student5', 'student123', 'brett@mail.com', '54647588', 'student', '2', 'Active', '20191217142249.jpg', '', ''),
(9, 'student6', 'student123', 'glenn@mail.com', '89765478', 'student', '2', 'Active', '20191217142356.jpg', '', ''),
(10, 'student7', 'student123', 'joe@mail.com', '7896543', 'student', '3', 'Active', '20191217142442.jpg', '', ''),
(11, 'student8', 'student123', 'james@mail.com', '7896546785', 'student', '3', 'Active', 'defaulimg.jpg', '', ''),
(12, 'student9', 'student123', 'lasith@mail.com', '87890654657', 'student', '4', 'Active', '20191217142550.jpg', '', ''),
(13, 'student10', 'student123', 'kusal@mail.com', '987654321', 'student', '4', 'Active', '20191218082857.webp', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_subjects`
--

CREATE TABLE `sms_subjects` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `marks1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `marks2` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `marks3` varchar(255) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `marks4` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_subjects`
--

INSERT INTO `sms_subjects` (`id`, `semester`, `subject1`, `marks1`, `subject2`, `marks2`, `subject3`, `marks3`, `subject4`, `marks4`, `created_date`, `updated_date`) VALUES
(1, '1', 'Internet and voice communication', '100', 'Wave theory and propogation', '100', 'Image processing', '100', 'Signals and systemss', '100', '', ''),
(7, '2', 'Digital networks', '100', 'Electrical circuits', '100', 'Advanced communication systems', '100', 'Telecom network management', '100', '', ''),
(8, '3', 'Wave theory and propogation', '50', 'Circuit and transmission line', '80', 'Power electronics', '100', 'Mobile communication', '80', '', ''),
(9, '4', 'Algebra', '100', 'Geometry', '100', 'Chemistry', '100', 'Physics', '100', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_teacher_data`
--

CREATE TABLE `sms_teacher_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `teacher_status_id` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_teacher_data`
--

INSERT INTO `sms_teacher_data` (`id`, `name`, `password`, `email`, `contact`, `profession`, `semester`, `teacher_status_id`, `profile_pic`, `created_date`, `updated_date`) VALUES
(2, 'teacher1', 'teacher123', 'vivian@gmail.com', '998876543', 'teacher', '1', 'Active', 'defaulimg.jpg', '', ''),
(6, 'teacher2', 'teacher123', 'don@mail.com', '099887jbkkkk', 'teacher', '2', 'Active', '20191214175646.jpg', '', ''),
(8, 'teacher3', 'teacher123', 'alistair@mail.com', '9876543210', 'teacher', '3', 'Deactive', '20191217091246.jpg', '', ''),
(12, 'teacher4', 'teacher123', 'sannath@mail.com', '98765432', 'teacher', '4', 'Active', '20191214183435.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms_admin_data`
--
ALTER TABLE `sms_admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_result`
--
ALTER TABLE `sms_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_semester`
--
ALTER TABLE `sms_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_student_data`
--
ALTER TABLE `sms_student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_subjects`
--
ALTER TABLE `sms_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_teacher_data`
--
ALTER TABLE `sms_teacher_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms_admin_data`
--
ALTER TABLE `sms_admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_result`
--
ALTER TABLE `sms_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sms_semester`
--
ALTER TABLE `sms_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sms_student_data`
--
ALTER TABLE `sms_student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sms_subjects`
--
ALTER TABLE `sms_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sms_teacher_data`
--
ALTER TABLE `sms_teacher_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
