-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `role`) VALUES
(1, 'wael', '123', 0),
(3, 'ali', '123', 1),
(5, 'marwa', '123', 0),
(6, 'mohsen', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coursedr`
--

CREATE TABLE `coursedr` (
  `id` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursedr`
--

INSERT INTO `coursedr` (`id`, `doctorId`, `courseId`) VALUES
(7, 40, 12),
(8, 40, 7);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`) VALUES
(1, 'C#'),
(2, 'digital signal process'),
(4, 'softwatre engineering 2'),
(5, 'computer graphic '),
(6, 'microsystem '),
(7, 'assemply'),
(8, ' English Translation,,'),
(10, 'c++'),
(12, 'operating system  updated');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(250) NOT NULL,
  `doc_image` varchar(255) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doc_name`, `doc_image`, `doc_password`) VALUES
(38, 'marwa', '', '123'),
(39, 'wael', NULL, '123'),
(40, 'mohsen', 'W2ola.jpeg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `doc_msg`
--

CREATE TABLE `doc_msg` (
  `no` int(11) NOT NULL,
  `doct_id` int(11) NOT NULL,
  `doct_msg` text NOT NULL,
  `admin_reply` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_msg`
--

INSERT INTO `doc_msg` (`no`, `doct_id`, `doct_msg`, `admin_reply`) VALUES
(1, 39, 'hi admin', 'hi doc'),
(3, 39, 'hello', 'hello!!!00'),
(4, 39, 'kkkkkkkkkk', 'sssssssssssss'),
(5, 40, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `year` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `year`) VALUES
(1, 'level one'),
(2, 'level two'),
(3, 'level three'),
(4, 'level four');

-- --------------------------------------------------------

--
-- Table structure for table `registcourse`
--

CREATE TABLE `registcourse` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registcourse`
--

INSERT INTO `registcourse` (`id`, `studentId`, `courseId`) VALUES
(10, 18, 1),
(11, 18, 2),
(12, 18, 5),
(14, 22, 8),
(15, 22, 10),
(16, 22, 7),
(18, 27, 10),
(19, 29, 10),
(20, 30, 12),
(21, 30, 10),
(22, 17, 10),
(23, 17, 6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `std_name` varchar(250) NOT NULL,
  `stu_image` varchar(255) DEFAULT NULL,
  `std_password` varchar(250) NOT NULL,
  `levelId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `std_name`, `stu_image`, `std_password`, `levelId`) VALUES
(17, 'wael', '20200929_234318.jpg', '123', 4),
(18, 'aisha', '', '123', 2),
(20, 'ebrahiem ', '', '123', 4),
(22, 'khadeja', 'بني.jpg', '123', 1),
(23, 'ali', '20200929_234318.jpg', '123', 4),
(24, 'abdullah', NULL, '123', 4),
(25, 'mido', NULL, '123', 1),
(27, 'mohsen updated ', '20200929_234318.jpg', '123', 2),
(28, 'manny', 'WhatsApp Image 2021-08-19 at 6.34.44 PM.jpeg', '123', 2),
(29, 'khaterrr', 'grad_erd.png', '123', 4),
(30, 'fady', 'grad_erd.png', '123', 4);

-- --------------------------------------------------------

--
-- Table structure for table `stu_msg`
--

CREATE TABLE `stu_msg` (
  `no` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `stud_msg` text NOT NULL,
  `admin_reply` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_msg`
--

INSERT INTO `stu_msg` (`no`, `stud_id`, `stud_msg`, `admin_reply`) VALUES
(30, 22, 'hi \r\nhow are you?', 'fine'),
(31, 17, 'wala!!!', 'n3m??'),
(32, 18, 'hello', 'hi\r\n'),
(35, 27, 'hello admin', 'hi stu\r\n'),
(37, 29, 'lahjksdgffpiasdfg', 'kjasdghvfadsf'),
(38, 30, 'aw;lefha;ksjgf', 'awrk;jbga;skfbgj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursedr`
--
ALTER TABLE `coursedr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctorId` (`doctorId`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_msg`
--
ALTER TABLE `doc_msg`
  ADD PRIMARY KEY (`no`),
  ADD KEY `doct_id` (`doct_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registcourse`
--
ALTER TABLE `registcourse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentId` (`studentId`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levelId` (`levelId`);

--
-- Indexes for table `stu_msg`
--
ALTER TABLE `stu_msg`
  ADD PRIMARY KEY (`no`),
  ADD KEY `stud_id` (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coursedr`
--
ALTER TABLE `coursedr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `doc_msg`
--
ALTER TABLE `doc_msg`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registcourse`
--
ALTER TABLE `registcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stu_msg`
--
ALTER TABLE `stu_msg`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursedr`
--
ALTER TABLE `coursedr`
  ADD CONSTRAINT `coursedr_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coursedr_ibfk_2` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doc_msg`
--
ALTER TABLE `doc_msg`
  ADD CONSTRAINT `doc_msg_ibfk_1` FOREIGN KEY (`doct_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registcourse`
--
ALTER TABLE `registcourse`
  ADD CONSTRAINT `registcourse_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registcourse_ibfk_2` FOREIGN KEY (`studentId`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`levelId`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stu_msg`
--
ALTER TABLE `stu_msg`
  ADD CONSTRAINT `stu_msg_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
