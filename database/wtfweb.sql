-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2025 at 11:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtfweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` char(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_name`, `credit`) VALUES
('01100101', 'A1', 4),
('CS100101', 'Introduction to Computer Science', 3),
('CS100102', 'Programming Fundamentals', 3),
('EN100301', 'English for Communication', 3),
('MA100201', 'Calculus I', 4),
('PH100401', 'Physics I', 4);

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int(11) NOT NULL,
  `course_code` char(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_code` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `point` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`id`, `course_code`, `student_code`, `point`) VALUES
(1, 'CS100101', 'STU0000001', 85.5),
(2, 'CS100101', 'STU0000002', 78),
(3, 'MA100201', 'STU0000003', 91),
(4, 'PH100401', 'STU0000004', 66.5),
(5, 'EN100301', 'STU0000005', 88),
(6, '0212154', '6740206195', 100),
(7, '0212154', '6740206194', 100);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_code` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_code`, `student_name`, `gender`) VALUES
('6740206191', 'test5', 'F'),
('6740206192', 'test4', 'F'),
('6740206193', 'test3', 'F'),
('6740206194', 'test2', 'M'),
('6740206195', 'test1', 'M'),
('STU0000001', 'Somchai Prasert', 'M'),
('STU0000002', 'Suda Wongchai', 'F'),
('STU0000003', 'Anan Kittisak', 'M'),
('STU0000004', 'Malee Saelim', 'F'),
('STU0000005', 'Narin Chaiya', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
