-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 08:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgym_db_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_course`
--

CREATE TABLE `apply_course` (
  `apply_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `course_id` int(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `reg_date` varchar(20) NOT NULL,
  `reg_exp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(4) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_desc` varchar(1500) DEFAULT NULL,
  `course_price` int(20) NOT NULL,
  `course_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_price`, `course_pic`) VALUES
(13, 'เพาะกล้าม1', 'คอร์ส3เพาะกล้าม', 2002, 'คอร์ส3เพาะกล้าม.jpg'),
(14, 'เพาะกล้าม2', 'คอร์ส3เพาะกล้าม', 2002, 'คอร์ส3เพาะกล้าม.jpg'),
(15, 'เพาะกล้าม3', 'คอร์ส3เพาะกล้าม', 2002, 'คอร์ส3เพาะกล้าม.jpg'),
(16, 'มวยไทย', 'คอร์ส1มวยไทย.description', 2002, 'คอร์ส1มวยไทย.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(10) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_age` int(3) NOT NULL,
  `member_gender` varchar(10) NOT NULL,
  `member_date` varchar(20) NOT NULL,
  `member_weight` int(10) NOT NULL,
  `member_height` int(10) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_age`, `member_gender`, `member_date`, `member_weight`, `member_height`, `member_email`, `member_password`) VALUES
(9, 'Surat Lhaodee', 80, 'Male', '20/10/2021', 70, 175, 'suratlhaodee@gmail.com', '147258369'),
(12, 'Surat Lhaodee', 74, 'Male', '14/10/2021', 70, 175, 'suratlhaodee@gmail.comd', 'd'),
(19, 'Surat Lhaodee', 21, 'Male', '04/10/2021', 70, 175, 'suratlhaodee555@gmail.com', '147258');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_course`
--
ALTER TABLE `apply_course`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `foreign key member_id` (`member_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_email` (`member_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_course`
--
ALTER TABLE `apply_course`
  MODIFY `apply_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_course`
--
ALTER TABLE `apply_course`
  ADD CONSTRAINT `foreign key member_id` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
