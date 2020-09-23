-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 07:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `usn` varchar(50) NOT NULL,
  `admission_date` varchar(50) DEFAULT NULL,
  `admission_through` varchar(50) DEFAULT NULL,
  `fee` float DEFAULT NULL,
  `paymentmethod` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`usn`, `admission_date`, `admission_through`, `fee`, `paymentmethod`) VALUES
('4nm16cs111', '1/1/2009', 'MANAGEMENT', 10000, 'DD'),
('4nm16cs169', '11/02/2009', 'COMETK', 75000, 'Cash'),
('4nm16cs177', '21/07/2017', 'COMETK', 17000, 'Cheque'),
('4nm16cs209', '01/09/1998', 'COMETK', 10000, 'DD');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_no` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_no`, `course_name`) VALUES
(1, 'Web development'),
(2, 'Android development'),
(3, 'Operating system'),
(4, 'Compliter design'),
(5, 'Data structures and algorithms'),
(6, 'Python'),
(7, 'Java'),
(8, '	Relational database management'),
(9, 'C programming'),
(10, 'Unix programming'),
(11, 'Mechanical vibrators'),
(12, 'Power plant engg'),
(13, 'Industrial robotics'),
(14, 'Mecatronics'),
(15, 'Controll engg'),
(16, 'Thermodynamics'),
(17, 'Automation'),
(18, 'Hydrolics'),
(19, 'Turbines'),
(20, 'Engines'),
(21, 'Electromagnetism'),
(22, 'Power engineering'),
(23, 'Electric vehicals'),
(24, 'Signal processing'),
(25, 'Power controll engg'),
(26, 'Instrumentation'),
(27, 'Transformers'),
(28, 'Semiconductor'),
(29, 'Amplifiers'),
(30, 'Generators'),
(31, 'Digital signals'),
(32, 'Semiconductor devices'),
(33, 'RF devices'),
(34, 'Diodes'),
(35, 'Analog engg'),
(36, 'Electromagnetic theory'),
(37, 'Control sysem'),
(38, 'Signal and system'),
(39, 'Network analysis'),
(40, 'CRO');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `usn` varchar(50) NOT NULL,
  `course_no` int(11) DEFAULT NULL,
  `course_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`usn`, `course_no`, `course_name`) VALUES
('4nm16cs209', 1, 'Web development'),
('4nm16cs111', 3, 'Operating system'),
('4nm16cs169', 7, 'Java'),
('4nm16cs177', 28, 'Semiconductor');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `usn` varchar(50) NOT NULL,
  `msc1` float DEFAULT '0',
  `msc2` float DEFAULT '0',
  `see` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`usn`, `msc1`, `msc2`, `see`) VALUES
('4nm16cs111', 12, 39, 334),
('4nm16cs169', 0, 0, 0),
('4nm16cs177', 100, 18, 99),
('4nm16cs209', 12, 20, 88);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login`, `password`) VALUES
(1001, 'nmamit1'),
(1002, 'nmamit2'),
(1003, 'nmamit3'),
(1234, 'nmamit');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `birthdate` varchar(50) DEFAULT NULL,
  `sem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `age`, `section`, `sex`, `department`, `birthdate`, `sem`) VALUES
('4nm16cs111', 'jjjjjj', 19, 'C', 'Female', 'Computer science engg', '5/9/1001', '5'),
('4nm16cs169', 'reka', 111, 'C', 'Male', 'Eelctronics and communication engg', '01/05/1998', '2'),
('4nm16cs177', 'Neha', 99, 'C', 'Female', 'Electrical engg', '11/04/1997', '6'),
('4nm16cs209', 'Saurabh barkur', 20, 'D', 'Male', 'Computer science engg', '21/09/1998', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_no`,`course_name`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `course_no` (`course_no`,`course_name`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login`,`password`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission`
--
ALTER TABLE `admission`
  ADD CONSTRAINT `admission_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`course_no`,`course_name`) REFERENCES `course` (`course_no`, `course_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
