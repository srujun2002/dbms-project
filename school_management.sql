-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 05:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `student_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `day` text NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_performence`
--

CREATE TABLE `exam_performence` (
  `stud_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `test1` int(11) NOT NULL,
  `test2` int(11) NOT NULL,
  `test3` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE `std_info` (
  `stud_name` varchar(15) NOT NULL,
  `stud_id` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `std_address` varchar(25) NOT NULL,
  `par_name` varchar(15) NOT NULL,
  `par_phno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `std_info`
--
DELIMITER $$
CREATE TRIGGER `tris` AFTER DELETE ON `std_info` FOR EACH ROW UPDATE total set totalnum=totalnum-1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_name` varchar(11) NOT NULL,
  `min_marks` int(11) NOT NULL,
  `max_marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_teacher`
--

CREATE TABLE `sub_teacher` (
  `sub_id` varchar(8) NOT NULL,
  `teacher_id` varchar(8) NOT NULL,
  `class` int(1) NOT NULL,
  `teacher_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_teacher`
--

INSERT INTO `sub_teacher` (`sub_id`, `teacher_id`, `class`, `teacher_name`) VALUES
('1', '2', 5, 'murildar bk'),
('1', '3', 6, 'hfftyy');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_detailes`
--

CREATE TABLE `teacher_detailes` (
  `teacher_id` varchar(8) NOT NULL,
  `teacher_name` varchar(15) NOT NULL,
  `department` varchar(15) NOT NULL,
  `teacher_phno` int(11) NOT NULL,
  `teacher_address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_detailes`
--

INSERT INTO `teacher_detailes` (`teacher_id`, `teacher_name`, `department`, `teacher_phno`, `teacher_address`) VALUES
('4', 'sdd', 'as', 625, 'hjdjhcvh'),
('5', 'cv', 'njcv', 36, 'dbhjc');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `day` varchar(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `sub_id` int(11) NOT NULL,
  `acad_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`day`, `start_time`, `end_time`, `sub_id`, `acad_year`) VALUES
('4/4/32023', '18:30:00', '19:30:00', 34, 33);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `totalnum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`totalnum`) VALUES
(1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `sub_id` (`sub_id`);

--
-- Indexes for table `exam_performence`
--
ALTER TABLE `exam_performence`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `sub_id` (`sub_id`);

--
-- Indexes for table `std_info`
--
ALTER TABLE `std_info`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `sub_teacher`
--
ALTER TABLE `sub_teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_detailes`
--
ALTER TABLE `teacher_detailes`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
