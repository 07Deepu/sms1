-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 05:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_id`) VALUES
(1, 5),
(2, 5),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Deepu Sahoo', 'dipusahoo98@gmail.com', 'regarding joining ', 'inform mee'),
(2, 'Deepu Sahoo', 'dipusahoo98@gmail.com', 'regarding joining ', 'hii'),
(3, 'subashsahoo', 'subash@gmail.com', 'school', 'yoo');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(255) NOT NULL,
  `u_card` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `remain` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `u_card`, `total`, `remain`) VALUES
(1, 'STD5APP0001 ', 1500, 10000),
(2, 'STD5APP0002', 1500, 1000),
(3, 'STD5APP0003', 1500, 1000),
(4, 'STD5APP0004', 1500, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `to_whom` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `post_date`, `to_whom`, `title`, `message`) VALUES
(4, '2021-08-04', 'To Class 8', 'math', 'math'),
(6, '2021-08-13', 'To All', 'school', 'school will remain close'),
(7, '2021-08-13', 'To All', 'ashu', 'good boy');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(255) NOT NULL,
  `u_card` varchar(255) NOT NULL,
  `u_f_name` text NOT NULL,
  `u_l_name` text NOT NULL,
  `u_father` text NOT NULL,
  `u_mother` text NOT NULL,
  `u_aadhar` varchar(255) NOT NULL,
  `u_birthday` text NOT NULL,
  `u_gender` varchar(255) NOT NULL,
  `u_email` text NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_state` varchar(255) NOT NULL,
  `u_dist` text NOT NULL,
  `u_pincode` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `uploaded` datetime NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `enroll_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `u_card`, `u_f_name`, `u_l_name`, `u_father`, `u_mother`, `u_aadhar`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_state`, `u_dist`, `u_pincode`, `image`, `uploaded`, `password`, `roll`, `enroll_id`, `class_id`) VALUES
(1, 'STD5APP0001', 'deepu', 'sahoo', 'dilip ku sahoo', 'puspanjali', '12345678980', '2021-07-11', 'Male', 'dipusahoo98@gmail.com', '7008294189', 'Odisha', 'Dhenkanal', '759001', 'PH.jpg', '2021-08-06 00:56:56', 'deepu', 1, 1, 5),
(2, 'STD5APP0002', 'subash', 'sahoo', 'dilip ku sahoo', 'puspanjali', '12345678980', '2021-08-02', 'Male', 'subash@gmail.com', '7008294189', 'Odisha', 'Dhenkanal', '759001', 'PH (2).jpg', '2021-08-06 11:42:38', 'subash', 2, 2, 5),
(3, 'STD5APP0003', 'Ashwini', 'Rath', 'Ashutosh Nanda', 'Sana Nanda', '123456787945', '2021-08-12', 'Male', 'ashusana@gmail.com', '785946254', 'Odisha', 'khorda', '759017', 'Iron+Man.jpg', '2021-08-18 12:44:08', 'ashwin', 3, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `att_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `roll`, `attend`, `att_time`) VALUES
(1, 1, 'absent', '2019-01-16'),
(2, 2, 'present', '2019-01-16'),
(43, 1, 'present', '2021-08-16'),
(44, 2, 'present', '2021-08-16'),
(45, 1, 'present', '2021-08-18'),
(46, 2, 'present', '2021-08-18'),
(38, 4, 'present', '2021-08-15'),
(39, 5, 'present', '2021-08-15'),
(40, 6, 'present', '2021-08-15'),
(41, 7, 'present', '2021-08-15'),
(42, 10, 'present', '2021-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(255) NOT NULL,
  `u_card` varchar(255) NOT NULL,
  `u_f_name` varchar(255) NOT NULL,
  `u_l_name` varchar(255) NOT NULL,
  `u_father` varchar(255) NOT NULL,
  `u_mother` varchar(255) NOT NULL,
  `u_aadhar` varchar(255) NOT NULL,
  `u_birthday` varchar(225) NOT NULL,
  `u_gender` varchar(225) NOT NULL,
  `u_email` varchar(225) NOT NULL,
  `u_phone` varchar(225) NOT NULL,
  `u_state` varchar(225) NOT NULL,
  `u_dist` varchar(225) NOT NULL,
  `u_pincode` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `uploaded` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `qualification` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `u_card`, `u_f_name`, `u_l_name`, `u_father`, `u_mother`, `u_aadhar`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_state`, `u_dist`, `u_pincode`, `image`, `uploaded`, `password`, `qualification`, `subject`) VALUES
(1, 'STD7TEAPP001', 'deepu', 'sahoo', 'dilip ku sahoo', 'puspanjali sahoo', '12345678980', '1996-01-02', 'Male', 'dipusahoo98@gmail.com', '7008294189', 'Odisha', 'Dhenkanal', '759001', 'Iron+Man.jpg', '2021-08-11 09:51:50', 'deepu', 'B.TECH', 'MATHS');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `start_time` double(11,2) NOT NULL,
  `end_time` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `day`, `class_id`, `subject`, `start_time`, `end_time`) VALUES
(1, 'monday', 5, 'maths', 7.00, 8.00),
(2, 'Monday', 5, 'science', 9.00, 12.00),
(3, 'Monday', 5, 'math', 5.00, 2.00),
(8, 'Monday', 5, 'math', 5.00, 2.00),
(9, 'Monday', 5, 'math', 5.00, 2.00),
(10, 'Monday', 5, 'math', 5.00, 2.00),
(11, 'Monday', 5, 'math', 4.00, 6.00),
(12, 'Monday', 5, 'math', 4.00, 6.00),
(13, 'Monday', 5, 'math', 7.00, 8.00),
(14, 'Tuesday', 5, 'hindi', 7.00, 11.00),
(15, 'Tuesday', 5, 'science', 8.00, 9.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
