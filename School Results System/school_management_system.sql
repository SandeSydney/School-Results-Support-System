-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 08:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `year_offered` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_registration`
--

INSERT INTO `course_registration` (`id`, `course_name`, `course_code`, `year_offered`) VALUES
(8, 'Bsc. Computer Science', '1254123', 4),
(2, 'it', '4512', 4),
(5, 'Computer Science', '458796', 5),
(7, 'Bsc. IT', '784596', 5),
(6, 'Bachellor of Commerce', '789654', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `registration_number` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year_of_study` varchar(5) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `residence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`id`, `first_name`, `middle_name`, `last_name`, `registration_number`, `course`, `year_of_study`, `date_of_birth`, `gender`, `residence`) VALUES
(3, 'malindi', 'ni', 'pwani', '34641101', 'Bsc. IT', '4', '07/09/2000', 'Male', 'Meru Farm'),
(1, 'sydney', 'sande', 'simiyu', '45213', 'Bsc. IT', '4', '7/9/97', 'male', 'mf'),
(2, 'Sydney', 'Wekesa', 'Wanyonyi', '654123', 'BA Anthropology', '4', '07/09/1997', 'Male', 'Mount Kenya');

-- --------------------------------------------------------

--
-- Table structure for table `units_registration`
--

CREATE TABLE `units_registration` (
  `id` int(11) NOT NULL,
  `unit_code` varchar(10) NOT NULL,
  `unit_name` varchar(50) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `year_offered` int(11) NOT NULL,
  `semester_offered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units_registration`
--

INSERT INTO `units_registration` (`id`, `unit_code`, `unit_name`, `course_code`, `year_offered`, `semester_offered`) VALUES
(1, 'cit313', 'Platform Technologies', '789654', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_level` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `userID`, `username`, `user_level`, `password`, `department`) VALUES
(4, '125463', 'sande', 'admin', '2200e3dd9dbab9630c3f95d71f2934fe', 'IT'),
(7, '3465214', 'sido', 'admin', '733d7be2196ff70efaf6913fc8bdcabf', 'BCom'),
(5, '458796', 'sande', 'admin', 'ca085ec4c437c597fe2d7917ea4e3562', 'IT'),
(9, '56325', 'june', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Comp Science'),
(1, '5698745', 'sande', 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, '654789', 'bildad', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'department'),
(3, '987654', 's@nde', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Information Technolo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `index` (`id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`registration_number`),
  ADD KEY `index` (`id`);

--
-- Indexes for table `units_registration`
--
ALTER TABLE `units_registration`
  ADD PRIMARY KEY (`unit_code`),
  ADD KEY `index` (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_registration`
--
ALTER TABLE `course_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units_registration`
--
ALTER TABLE `units_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
